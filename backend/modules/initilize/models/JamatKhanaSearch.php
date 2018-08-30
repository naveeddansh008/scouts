<?php

namespace backend\modules\initilize\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\initilize\models\JamatKhana;

/**
 * backend\modules\initilize\models\JamatKhanaSearch represents the model behind the search form about `backend\modules\initilize\models\JamatKhana`.
 */
 class JamatKhanaSearch extends JamatKhana
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'town_id', 'region_id', 'jk_no', 'org_id', 'business_id', 'association_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['name', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = JamatKhana::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'town_id' => $this->town_id,
            'region_id' => $this->region_id,
            'jk_no' => $this->jk_no,
            'org_id' => $this->org_id,
            'business_id' => $this->business_id,
            'association_id' => $this->association_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
