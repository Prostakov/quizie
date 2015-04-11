<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173420_create_question_table extends Migration
{
    public function up()
    {
        if ($this->db->driverName === 'mysql') $charset = ''; else $charset = ' CHARSET=utf8';
        $this->createTable('question', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT . ' NOT NULL',
            'correct_option' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'num' => Schema::TYPE_INTEGER . ' NOT NULL',
            'rule_reference' => Schema::TYPE_STRING,
            'chapter_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $charset);
    }

    public function down()
    {
        $this->dropTable('question');
    }
}
