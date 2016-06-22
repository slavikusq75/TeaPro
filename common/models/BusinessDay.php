<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 22:35
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "business_day".
 *
 * @property integer $id
 * @property string $begining_balance
 * @property string $end_ balance
 * @property string $debit
 * @property string $credit
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $selling_goods_id
 * @property integer $cash_transaction_id
 * @property integer $user_id
 * @property integer $departament_id
 *
 * @property CashTransaction $cashTransaction
 * @property Departament $departament
 * @property SellingGoods $sellingGoods
 * @property User $user
 */
class BusinessDay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'business_day';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'begining_balance', 'end_ balance', 'debit', 'credit', 'created_at', 'updated_at', 'selling_goods_id', 'cash_transaction_id', 'user_id', 'departament_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'selling_goods_id', 'cash_transaction_id', 'user_id', 'departament_id'], 'integer'],
            [['begining_balance', 'end_ balance', 'debit', 'credit'], 'number'],
            [['cash_transaction_id'], 'exist', 'skipOnError' => true, 'targetClass' => CashTransaction::className(), 'targetAttribute' => ['cash_transaction_id' => 'id']],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
            [['selling_goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => SellingGoods::className(), 'targetAttribute' => ['selling_goods_id' => 'id']],
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
            'begining_balance' => 'Begining Balance',
            'end_ balance' => 'End  Balance',
            'debit' => 'Debit',
            'credit' => 'Credit',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'selling_goods_id' => 'Selling Goods ID',
            'cash_transaction_id' => 'Cash Transaction ID',
            'user_id' => 'User ID',
            'departament_id' => 'Departament ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransaction()
    {
        return $this->hasOne(CashTransaction::className(), ['id' => 'cash_transaction_id']);
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
    public function getSellingGoods()
    {
        return $this->hasOne(SellingGoods::className(), ['id' => 'selling_goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
