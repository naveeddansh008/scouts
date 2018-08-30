<?php

namespace backend\modules\initilize\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "registration".
 *
 * @property integer $id
 * @property integer $photo_id
 * @property string $name
 * @property string $father_name
 * @property integer $formb
 * @property integer $nic
 * @property integer $father_nic
 * @property string $dob
 * @property string $gender
 * @property integer $address_id
 * @property integer $category_id
 * @property integer $fee_id
 * @property string $qualificaton
 * @property string $designation
 * @property integer $contact_id
 * @property integer $jk_id
 * @property integer $region_id
 * @property integer $town_id
 * @property integer $business_id
 * @property integer $assiciation_id
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Registartion extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'father_name' => 'Father Name',
            'formb' => 'Formb',
            'nic' => 'Nic',
            'father_nic' => 'Father Nic',
            'dob' => 'Date Of Birth',
            'gender' => 'Gender',
            'category_id' => 'Category Names',
            'qualificaton' => 'Qualificaton',
            'designation' => 'Designation',
            'jk_id' => 'Jk',
            'region_id' => 'Region ',
            'town_id' => 'Town ',
           // 'business_id' => 'Business ID',
            //'assiciation_id' => 'Assiciation ID',
            'status' => 'Status',
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
     * @return \backend\modules\initilize\models\query\RegistartionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\initilize\models\query\RegistartionQuery(get_called_class());
    }
}
