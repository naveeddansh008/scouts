<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Category as BaseCategory;

/**
 * This is the model class for table "category".
 */
class Category extends BaseCategory
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'business_id', 'association_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255]
        ];
    }
	
}
