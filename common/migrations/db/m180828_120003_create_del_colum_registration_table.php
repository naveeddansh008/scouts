<?php

use yii\db\Migration;

/**
 * Handles the creation for table `del_colum_registration_table`.
 */
class m180828_120003_create_del_colum_registration_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
       $this->dropColumn('registration','photo_id');
    
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('registration', 'photo_id', $this->integer());
    }
}
