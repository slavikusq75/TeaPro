<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 22:39
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "cash_transaction".
 *
 * @property integer $id
 * @property string $cash_in
 * @property string $cash_out
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $cash_transaction_reason_id
 * @property integer $user_id
 * @property integer $departament_id
 *
 * @property BusinessDay[] $businessDays
 * @property CashTransactionReason $cashTransactionReason
 * @property Departament $departament
 * @property User $user
 */
class CashTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cash_transaction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cash_in', 'cash_out', 'created_at', 'updated_at', 'cash_transaction_reason_id', 'user_id', 'departament_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'cash_transaction_reason_id', 'user_id', 'departament_id'], 'integer'],
            [['cash_in', 'cash_out'], 'number'],
            [['cash_transaction_reason_id'], 'exist', 'skipOnError' => true, 'targetClass' => CashTransactionReason::className(), 'targetAttribute' => ['cash_transaction_reason_id' => 'id']],
            [['departament_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departament::className(), 'targetAttribute' => ['departament_id' => 'id']],
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
            'cash_in' => 'Cash In',
            'cash_out' => 'Cash Out',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'cash_transaction_reason_id' => 'Cash Transaction Reason ID',
            'user_id' => 'User ID',
            'departament_id' => 'Departament ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessDays()
    {
        return $this->hasMany(BusinessDay::className(), ['cash_transaction_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransactionReason()
    {
        return $this->hasOne(CashTransactionReason::className(), ['id' => 'cash_transaction_reason_id']);
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
