<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Town as BaseTown;

/**
 * This is the model class for table "towns".
 */
class Town extends BaseTown
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id', 'org_id', 'business_id', 'association_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }



    public function getRegionName()
    {
        return $this->hasOne(Region::className(),['id' => 'region_id']);
    }
	
}
