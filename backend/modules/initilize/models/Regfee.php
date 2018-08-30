<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Regfee as BaseRegfee;

/**
 * This is the model class for table "regfee".
 */
class Regfee extends BaseRegfee
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'amount', 'status', 'business_id', 'association_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['amount_recived'], 'string', 'max' => 255]
        ];
    }
	
}
