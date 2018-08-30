<?php

use yii\db\Migration;

/**
 * Handles the creation for table `add_colum_photos_table`.
 */
class m180828_121304_create_add_colum_photos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
       $this->addColumn('photo', 'source_id', $this->integer());
       $this->addColumn('photo', 'scout_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
      

     $this->dropColumn('photo','source_id');
     $this->dropColumn('photo','scout_id');

    }

}
