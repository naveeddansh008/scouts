<?php

use yii\db\Migration;

/**
 * Handles the creation for table `regions_table`.
 */
class m180827_071818_create_regions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('regions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'org_id' => $this->integer(),
            'business_id' => $this->integer(),
            'association_id' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->TIMESTAMP(),
            'created_by' => $this->integer(),
            'updated_at' => $this->TIMESTAMP(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('regions');
    }
}
