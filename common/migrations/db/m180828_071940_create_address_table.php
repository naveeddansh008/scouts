<?php

use yii\db\Migration;

/**
 * Handles the creation for table `address_table`.
 */
class m180828_071940_create_address_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('address', [
            'id' => $this->primaryKey(),
            'permenent_address' => $this->string(),
            'partial_address' => $this->string(),
            'status' => $this->integer(),
            'business_id' => $this->integer(),
            'association_id' => $this->integer(),
            'postal_code' => $this->integer(),
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
        $this->dropTable('address');
    }
}
