<?php

namespace backend\modules\initilize\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\initilize\models\Registartion;

/**
 * backend\modules\initilize\models\RegistrationSearch represents the model behind the search form about `backend\modules\initilize\models\Registartion`.
 */
 class RegistrationSearch extends Registartion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'formb', 'nic', 'father_nic', 'category_id', 'jk_id', 'region_id', 'town_id', 'business_id', 'assiciation_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['name', 'father_name', 'dob', 'gender', 'qualificaton', 'designation', 'created_at', 'updated_at'], 'safe'],
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
        $query = Registartion::find();

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
            'formb' => $this->formb,
            'nic' => $this->nic,
            'father_nic' => $this->father_nic,
            'dob' => $this->dob,
            'category_id' => $this->category_id,
            'jk_id' => $this->jk_id,
            'region_id' => $this->region_id,
            'town_id' => $this->town_id,
            'business_id' => $this->business_id,
            'assiciation_id' => $this->assiciation_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'qualificaton', $this->qualificaton])
            ->andFilterWhere(['like', 'designation', $this->designation]);

        return $dataProvider;
    }
}
