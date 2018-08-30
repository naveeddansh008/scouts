<?php

use yii\db\Migration;

/**
 * Handles the creation for table `photo_table`.
 */
class m180828_071251_create_photo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'type' => $this->string(),
            'name' => $this->string(),
            'status' => $this->integer(),
            'business_id' => $this->integer(),
            'association_id' => $this->integer(),
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
        $this->dropTable('photo');
    }
}
