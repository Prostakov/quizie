<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173516_create_option_table extends Migration
{
    public function up()
    {
        if ($this->db->driverName === 'mysql') $charset = ' CHARSET=utf8'; else $charset = '';
        $this->createTable('option', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT . ' NOT NULL',
            'num' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'question_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $charset);
    }

    public function down()
    {
        $this->dropTable('option');
    }

}
