<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_table`.
 */
class m180828_071831_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'mobile_no' => $this->integer(),
            'phone_no' => $this->integer(),
            'status' => $this->integer(),
            'office_no' => $this->integer(),
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
        $this->dropTable('contact');
    }
}
