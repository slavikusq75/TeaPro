<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 22:57
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "price_of_goods".
 *
 * @property integer $id
 * @property integer $our_price
 * @property integer $sorts_of_goods_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $departament_id
 *
 * @property Departament $departament
 * @property SortsOfGoods $sortsOfGoods
 * @property User $user
 */
class PriceOfGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price_of_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'our_price', 'sorts_of_goods_id', 'created_at', 'updated_at', 'user_id', 'departament_id'], 'required'],
            [['id', 'our_price', 'sorts_of_goods_id', 'created_at', 'updated_at', 'user_id', 'departament_id'], 'integer'],
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
            'our_price' => 'Our Price',
            'sorts_of_goods_id' => 'Sorts Of Goods ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'departament_id' => 'Departament ID',
        ];
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
