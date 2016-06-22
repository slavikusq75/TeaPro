<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 22:02
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "sorts_of_goods".
 *
 * @property integer $id
 * @property string $name
 * @property integer $goods_group_id
 * @property integer $provider_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 *
 * @property PriceOfGoods[] $priceOfGoods
 * @property ReceivingGoods[] $receivingGoods
 * @property SellingGoods[] $sellingGoods
 * @property GoodsGroup $goodsGroup
 * @property Provider $provider
 * @property User $user
 */
class SortsOfGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sorts_of_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'goods_group_id', 'provider_id', 'created_at', 'updated_at', 'user_id'], 'required'],
            [['id', 'goods_group_id', 'provider_id', 'created_at', 'updated_at', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['goods_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsGroup::className(), 'targetAttribute' => ['goods_group_id' => 'id']],
            [['provider_id'], 'exist', 'skipOnError' => true, 'targetClass' => Provider::className(), 'targetAttribute' => ['provider_id' => 'id']],
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
            'goods_group_id' => 'Goods Group ID',
            'provider_id' => 'Provider ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOfGoods()
    {
        return $this->hasMany(PriceOfGoods::className(), ['sorts_of_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingGoods()
    {
        return $this->hasMany(ReceivingGoods::className(), ['sorts_of_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingGoods()
    {
        return $this->hasMany(SellingGoods::className(), ['sorts_of_goods_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsGroup()
    {
        return $this->hasOne(GoodsGroup::className(), ['id' => 'goods_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvider()
    {
        return $this->hasOne(Provider::className(), ['id' => 'provider_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
