<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114453_populate_chapter29_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1276',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '29',
        ]);
        $this->insert('question', [
            'id' => '1277',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '29',
        ]);
        $this->insert('question', [
            'id' => '1278',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '29',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '29']);
    }
}
