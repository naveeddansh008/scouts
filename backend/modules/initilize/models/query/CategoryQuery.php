<?php

namespace backend\modules\initilize\models\query;

/**
 * This is the ActiveQuery class for [[\backend\modules\initilize\models\query\Category]].
 *
 * @see \backend\modules\initilize\models\query\Category
 */
class CategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\modules\initilize\models\query\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\modules\initilize\models\query\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}