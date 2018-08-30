<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\JamatKhana as BaseJamatKhana;

/**
 * This is the model class for table "jamat_khanas".
 */
class JamatKhana extends BaseJamatKhana
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['town_id', 'region_id', 'jk_no', 'org_id', 'business_id', 'association_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }
	


     public function getRegionName()
    {
        return $this->hasOne(Region::className(),['id' => 'region_id']);
    }

     public function getTownName()
    {
         return $this->hasOne(Town::className(),['id' => 'town_id']);
    }
}

