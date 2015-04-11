<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_153250_populate_chapter13_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '733',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '734',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '735',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '736',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '737',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '738',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '739',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '740',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '741',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '13',
        ]);
        $this->insert('question', [
            'id' => '742',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '13',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '13']);
    }
}
