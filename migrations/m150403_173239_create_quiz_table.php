<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173239_create_quiz_table extends Migration
{
    public function up()
    {
        $this->createTable('quiz', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'slug' => Schema::TYPE_STRING,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], ' CHARSET=utf8');
    }

    public function down()
    {
        $this->dropTable('quiz');
    }
}
