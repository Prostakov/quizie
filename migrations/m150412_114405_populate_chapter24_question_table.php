<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114405_populate_chapter24_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1219',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1220',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1221',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1222',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1223',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1224',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1225',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1226',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1227',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '24',
        ]);
        $this->insert('question', [
            'id' => '1228',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '24',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '24']);
    }
}
