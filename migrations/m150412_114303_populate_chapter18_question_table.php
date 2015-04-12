<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114303_populate_chapter18_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1091',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1092',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1093',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1094',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1095',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1096',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1097',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1098',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1099',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1100',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1101',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1102',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1103',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1104',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1105',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1106',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1107',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1108',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1109',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1110',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1111',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '21',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1112',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '22',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1113',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '23',
            'chapter_id' => '18',
        ]);
        $this->insert('question', [
            'id' => '1114',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '24',
            'chapter_id' => '18',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '18']);
    }
}
