<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173239_create_quiz_table extends Migration
{
    public function up()
    {
        if ($this->db->driverName === 'mysql') $charset = ' CHARSET=utf8'; else $charset = '';
        $this->createTable('quiz', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'slug' => Schema::TYPE_STRING,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $charset);
    }

    public function down()
    {
        $this->dropTable('quiz');
    }
}
