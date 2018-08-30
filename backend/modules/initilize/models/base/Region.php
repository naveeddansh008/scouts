<?php

namespace backend\modules\initilize\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "regions".
 *
 * @property integer $id
 * @property string $name
 * @property integer $org_id
 * @property integer $business_id
 * @property integer $association_id
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Region extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'org_id' => 'Org ID',
            'business_id' => 'Business ID',
            'association_id' => 'Association ID',
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
     * @return \backend\modules\initilize\models\query\RegionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\initilize\models\query\RegionQuery(get_called_class());
    }

}
