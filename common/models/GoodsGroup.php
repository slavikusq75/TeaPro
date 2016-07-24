<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 21:30
 */

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "goods_group".
 *
 * @property integer $id
 * @property string $name
 * @property integer $measures_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 *
 * @property Measures $measures
 * @property User $user
 * @property SortsOfGoods[] $sortsOfGoods
 */
class GoodsGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods_group';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),

            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'user_id',
                'updatedByAttribute' => 'user_id',

            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[/*'id', */'name', 'measures_id'/*, 'created_at', 'updated_at', 'user_id'*/], 'required'],
            [['id', 'measures_id', 'created_at', 'updated_at', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['measures_id'], 'exist', 'skipOnError' => true, 'targetClass' => Measures::className(), 'targetAttribute' => ['measures_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'measures_id' => 'Measures ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMeasures()
    {
        return $this->hasOne(Measures::className(), ['id' => 'measures_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSortsOfGoods()
    {
        return $this->hasMany(SortsOfGoods::className(), ['goods_group_id' => 'id']);
    }
}
