<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114335_populate_chapter21_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1157',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1158',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1159',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1160',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1161',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1162',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1163',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1164',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1165',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1166',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1167',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1168',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1169',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '21',
        ]);
        $this->insert('question', [
            'id' => '1170',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '21',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '21']);
    }
}
