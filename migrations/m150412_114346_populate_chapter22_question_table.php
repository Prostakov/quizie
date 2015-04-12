<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114346_populate_chapter22_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1171',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1172',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1173',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1174',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1175',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1176',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1177',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1178',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1179',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1180',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1181',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1182',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1183',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1184',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1185',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1186',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1187',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1188',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1189',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '22',
        ]);
        $this->insert('question', [
            'id' => '1190',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '22',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '22']);
    }
}
