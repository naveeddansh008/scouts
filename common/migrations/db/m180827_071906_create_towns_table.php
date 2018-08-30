<?php

use yii\db\Migration;

/**
 * Handles the creation for table `towns_table`.
 */
class m180827_071906_create_towns_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('towns', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'region_id' => $this->integer(),
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
        $this->dropTable('towns');
    }
}
