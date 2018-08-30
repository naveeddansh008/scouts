<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Photo as BasePhoto;
use yii\web\UploadedFile;
/**
 * This is the model class for table "photo".
 */
class Photo extends BasePhoto
{
    
    /**
     * @inheritdoc
     */

 
 public $image;
 const STD_REG = 1;




    public function rules()
    {
        return [
            [['status', 'business_id', 'association_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
             [['image'], 'safe'],
            [['type', 'name'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions'=>'jpg, gif, png']
        ];
    }
	


 public function savePhoto($photo,$id,$type,$url,$var)
    {
        $p = UploadedFile::getInstance($photo,$var);

        if($p == null || empty($p)){
                return true;
            }


        $photo_name = yii::$app->security->generateRandomString(32).'.'.$p->extension;   
        $path = yii::getAlias('@storage');

        $path.= "/web/uploads";
        $path.= $url;

        $fullpath = $path.$photo_name;
        $p->saveAs($fullpath);
        $photo->name = $photo_name;
        $photo->type = $type;
        $photo->source_id = $id;
        $photo->scout_id = $id;
        $photo->status = 1;
        $photo->save(false);
        return true;
    }

}
