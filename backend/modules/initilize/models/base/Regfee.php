<?php

namespace backend\modules\initilize\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "regfee".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $amount
 * @property string $amount_recived
 * @property integer $status
 * @property integer $business_id
 * @property integer $association_id
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Regfee extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regfee';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'amount' => 'Amount',
            'amount_recived' => 'Amount Recived',
            'status' => 'Status',
            'business_id' => 'Business ID',
            'association_id' => 'Association ID',
        ];
    }

/**
     * @inheritdoc
     * @return type mixed
     */ 
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\modules\initilize\models\query\RegfeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\initilize\models\query\RegfeeQuery(get_called_class());
    }
}
