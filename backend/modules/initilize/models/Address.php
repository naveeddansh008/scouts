<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Address as BaseAddress;

/**
 * This is the model class for table "address".
 */
class Address extends BaseAddress
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'business_id', 'association_id', 'postal_code', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['permenent_address', 'partial_address'], 'string', 'max' => 255]
        ];
    }
	
}
