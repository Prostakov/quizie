<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114248_populate_chapter17_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1077',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1078',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1079',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1080',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1081',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1082',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1083',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1084',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1085',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1086',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1087',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1088',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1089',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '17',
        ]);
        $this->insert('question', [
            'id' => '1090',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '17',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '17']);
    }
}
