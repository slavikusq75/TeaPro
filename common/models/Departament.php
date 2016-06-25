<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 22:27
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "departament".
 *
 * @property integer $id
 * @property string $dep_name
 * @property string $dep_city
 * @property string $dep_street
 * @property integer $dep_building
 * @property integer $dep_office
 *
 * @property BusinessDay[] $businessDays
 * @property CashTransaction[] $cashTransactions
 * @property PriceOfGoods[] $priceOfGoods
 * @property ReceivingGoods[] $receivingGoods
 * @property SellingGoods[] $sellingGoods
 */
class Departament extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departament';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_city', 'dep_street', 'dep_building'], 'required'],
            [['id', 'dep_building', 'dep_office'], 'integer'],
            [['dep_name'], 'string', 'max' => 45],
            [['dep_city', 'dep_street'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep_name' => 'Dep Name',
            'dep_city' => 'Dep City',
            'dep_street' => 'Dep Street',
            'dep_building' => 'Dep Building',
            'dep_office' => 'Dep Office',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessDays()
    {
        return $this->hasMany(BusinessDay::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransactions()
    {
        return $this->hasMany(CashTransaction::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceOfGoods()
    {
        return $this->hasMany(PriceOfGoods::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingGoods()
    {
        return $this->hasMany(ReceivingGoods::className(), ['departament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellingGoods()
    {
        return $this->hasMany(SellingGoods::className(), ['departament_id' => 'id']);
    }
}
