<?php

namespace backend\modules\initilize\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "contact".
 *
 * @property integer $id
 * @property integer $mobile_no
 * @property integer $phone_no
 * @property integer $status
 * @property integer $office_no
 * @property integer $association_id
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Contact extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mobile_no' => 'Mobile No',
            'phone_no' => 'Phone No',
            'status' => 'Status',
            'office_no' => 'Office No',
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
     * @return \backend\modules\initilize\models\query\ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\initilize\models\query\ContactQuery(get_called_class());
    }
}
