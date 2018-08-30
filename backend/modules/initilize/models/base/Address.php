<?php

namespace backend\modules\initilize\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "address".
 *
 * @property integer $id
 * @property string $permenent_address
 * @property string $partial_address
 * @property integer $status
 * @property integer $business_id
 * @property integer $association_id
 * @property integer $postal_code
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Address extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'permenent_address' => 'Permenent Address',
            'partial_address' => 'Partial Address',
            'status' => 'Status',
            'business_id' => 'Business ID',
            'association_id' => 'Association ID',
            'postal_code' => 'Postal Code',
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
     * @return \backend\modules\initilize\models\query\AddressQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\initilize\models\query\AddressQuery(get_called_class());
    }
}
