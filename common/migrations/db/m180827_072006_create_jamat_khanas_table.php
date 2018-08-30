<?php

use yii\db\Migration;

/**
 * Handles the creation for table `jamat_khanas_table`.
 */
class m180827_072006_create_jamat_khanas_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('jamat_khanas', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'town_id' => $this->integer(),
            'region_id' => $this->integer(),
            'jk_no' => $this->integer(),
            'org_id' => $this->integer(),
            'business_id' => $this->integer(),
            'association_id' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_at' => $this->timestamp(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('jamat_khanas');
    }
}
