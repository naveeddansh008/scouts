<?php

namespace backend\modules\initilize\models;

use Yii;
use \backend\modules\initilize\models\base\Contact as BaseContact;

/**
 * This is the model class for table "contact".
 */
class Contact extends BaseContact
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile_no', 'phone_no', 'status', 'office_no', 'association_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }
	
}
