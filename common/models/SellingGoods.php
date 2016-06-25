<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 23:03
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "selling_goods".
 *
 * @property integer $id
 * @property integer $measure
 * @property integer $value
 * @property integer $our_price
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $sorts_of_goods_id
 * @property integer $user_id
 * @property integer $departament_id
 *
 * @property BusinessDay[] $businessDays
 * @property Departament $departament
 * @property SortsOfGoods $sortsOfGoods
 * @property User $user
 */
class SellingGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'selling_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'measure', 'value', 'our_price', 'created_at', 'updated_at', 'sorts_of_goods_id', 'user_id', 'departament_id'], 'required'],
            [['id', 'measure', 'value', 'our_price', 'created_at', 'updated_at', 'sorts_of_goods_id', 'user_id', 'departament_id'], 'integer'],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
            [['sorts_of_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => SortsOfGoods::className(), 'targetAttribute' => ['sorts_of_goods_id' => 'id']],
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
            'value' => 'Value',
            'our_price' => 'Our Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'sorts_of_goods_id' => 'Sorts Of Goods ID',
            'user_id' => 'User ID',
            'departament_id' => 'Departament ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessDays()
    {
        return $this->hasMany(BusinessDay::className(), ['selling_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartament()
    {
        return $this->hasOne(Departament::className(), ['id' => 'departament_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSortsOfGoods()
    {
        return $this->hasOne(SortsOfGoods::className(), ['id' => 'sorts_of_goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
