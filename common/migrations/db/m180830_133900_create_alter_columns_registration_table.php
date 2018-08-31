<?php

use yii\db\Migration;

/**
 * Handles the creation for table `alter_columns_registration_table`.
 */
class m180830_133900_create_alter_columns_registration_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
      
      $this->alterColumn('registration','formb',$this->bigInteger());
       $this->alterColumn('registration','nic',$this->bigInteger());
        $this->alterColumn('registration','father_nic',$this->bigInteger());

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
         $this->alterColumn('registration','formb',$this->Integer());
       $this->alterColumn('registration','nic',$this->Integer());
        $this->alterColumn('registration','father_nic',$this->Integer());
    }
}
