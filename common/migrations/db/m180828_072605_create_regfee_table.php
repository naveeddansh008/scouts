<?php

use yii\db\Migration;

/**
 * Handles the creation for table `regfee_table`.
 */
class m180828_072605_create_regfee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('regfee', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'amount' => $this->integer(),
            'amount_recived' => $this->string(),
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
        $this->dropTable('regfee');
    }
}
