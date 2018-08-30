<?php

use yii\db\Migration;

/**
 * Handles the creation for table `remove_colums_registrations_table`.
 */
class m180829_072102_create_remove_colums_registrations_table extends Migration
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
       // $this->addColumn('registration','address_id',$this->integer());
       //$this->addColumn('registration','fee_id',$this->integer());
     //$this->addColumn('registration','contact_id',$this->integer());
    }
}
