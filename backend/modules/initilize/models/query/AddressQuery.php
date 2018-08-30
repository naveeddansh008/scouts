<?php

namespace backend\modules\initilize\models\query;

/**
 * This is the ActiveQuery class for [[\backend\modules\initilize\models\query\Address]].
 *
 * @see \backend\modules\initilize\models\query\Address
 */
class AddressQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\modules\initilize\models\query\Address[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\modules\initilize\models\query\Address|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}