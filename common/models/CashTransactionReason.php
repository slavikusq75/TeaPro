<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 22.06.16
 * Time: 22:53
 */

namespace common\models;

use Yii;

/**
 * This is the model class for table "cash_transaction_reason".
 *
 * @property integer $id
 * @property string $transaction_reason
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 *
 * @property CashTransaction[] $cashTransactions
 * @property User $user
 */
class CashTransactionReason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cash_transaction_reason';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'transaction_reason', 'created_at', 'updated_at', 'user_id'], 'required'],
            [['id', 'created_at', 'updated_at', 'user_id'], 'integer'],
            [['transaction_reason'], 'string', 'max' => 255],
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
            'transaction_reason' => 'Transaction Reason',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCashTransactions()
    {
        return $this->hasMany(CashTransaction::className(), ['cash_transaction_reason_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
