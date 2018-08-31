<?php

use yii\db\Migration;

/**
 * Handles the creation for table `drop_column_registration_table`.
 */
class m180831_060701_create_drop_column_registration_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('registration','address_id');
       $this->dropColumn('registration','fee_id');
        $this->dropColumn('registration','contact_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('registration','address_id',$this->Integer());
       $this->addColumn('registration','fee_id',$this->Integer());
        $this->addColumn('registration','contact_id',$this->Integer());
    }
}
