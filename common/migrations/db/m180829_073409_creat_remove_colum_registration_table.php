<?php

use yii\db\Migration;

class m180829_073409_creat_remove_colum_registration_table extends Migration
{
     public function up()
    {
      
       $this->addColumn('registration','formb',$this->biginteger());
       $this->addColumn('registration','nic',$this->biginteger());
        $this->addColumn('registration','father_nic',$this->biginteger());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
          
            $this->dropColumn('registration','formb');
       $this->dropColumn('registration','nic');
        $this->dropColumn('registration','father_nic');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
