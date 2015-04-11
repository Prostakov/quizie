<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173337_create_chapter_table extends Migration
{
    public function up()
    {
        if ($this->db->driverName === 'mysql') $charset = ' CHARSET=utf8'; else $charset = '';
        $this->createTable('chapter', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'num' => Schema::TYPE_INTEGER . ' NOT NULL',
            'quiz_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $charset);
    }

    public function down()
    {
        $this->dropTable('chapter');
    }
}
