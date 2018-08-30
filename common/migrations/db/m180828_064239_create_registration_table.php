<?php

use yii\db\Migration;

/**
 * Handles the creation for table `registration_table`.
 */
class m180828_064239_create_registration_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('registration', [
            'id' => $this->primaryKey(),
            'photo_id' => $this->integer(),
            'name' => $this->string(),
            'father_name' => $this->string(),
            'formb' => $this->integer(),
            'nic' => $this->integer(),
            'father_nic' => $this->integer(),
            'dob' => $this->date(),
            'gender' => $this->string(),
            'address_id' => $this->integer(),
            'category_id' => $this->integer(),
            'fee_id' => $this->integer(),
            'qualificaton' => $this->string(),
            'designation' => $this->string(),
            'contact_id' => $this->integer(),
            'jk_id' => $this->integer(),
            'region_id' => $this->integer(),
            'town_id' => $this->integer(),
            'business_id' => $this->integer(),
            'assiciation_id' => $this->integer(),
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
        $this->dropTable('registration');
    }
}
