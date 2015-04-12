<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114326_populate_chapter20_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1131',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1132',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1133',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1134',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1135',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1136',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1137',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1138',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1139',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1140',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1141',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1142',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1143',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1144',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1145',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1146',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1147',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1148',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1149',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1150',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1151',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '21',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1152',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '22',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1153',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '23',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1154',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '24',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1155',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '25',
            'chapter_id' => '20',
        ]);
        $this->insert('question', [
            'id' => '1156',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '26',
            'chapter_id' => '20',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '20']);
    }
}
