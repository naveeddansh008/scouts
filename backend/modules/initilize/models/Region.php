<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Region as BaseRegion;

/**
 * This is the model class for table "regions".
 */
class Region extends BaseRegion
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'business_id', 'association_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }



	
}
