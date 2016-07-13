<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 21:54
 */

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "measures".
 *
 * @property integer $id
 * @property string $measure
 * @property integer $user_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property GoodsGroup[] $goodsGroups
 * @property User $user
 */
class Measures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'measures';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'measure', 'user_id', 'created_at', 'updated_at'], 'required'],
            [['id', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['measure'], 'string', 'max' => 45],
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
            'measure' => 'Measure',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsGroups()
    {
        return $this->hasMany(GoodsGroup::className(), ['measures_id' => 'id']);
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
        return $this->hasMany(SortsOfGoods::className(), ['measures_id' => 'id']);
    }
}
