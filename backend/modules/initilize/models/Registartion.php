<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Registartion as BaseRegistartion;
use yii\helpers\Url;

/**
 * This is the model class for table "registration".
 */
class Registartion extends BaseRegistartion
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['formb', 'nic', 'father_nic','category_id','jk_id', 'region_id', 'town_id', 'business_id', 'assiciation_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['name', 'father_name', 'gender', 'qualificaton', 'designation'], 'string', 'max' => 255]
        ];
    }
    

    public function getImage()
    {

        return $this->hasOne(Photo::className(),['scout_id' => 'id']);
    }
    public function getImageUrl($id = null)
    {
        $url = Yii::getAlias('@storage/web/uploads/std_reg/');
        $photo_name = Yii::$app->db->createCommand("select p.name from photo p where status=1 and scout_id = $id")->queryOne();
        $photo_name = $photo_name['name'];
        $url = $url.$photo_name;
        // $url = Url::to('@storage/uploads/std_reg/'.$photo_name, true);
        return $url;
    }
	
}
