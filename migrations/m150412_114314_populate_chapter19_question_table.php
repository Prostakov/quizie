<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114314_populate_chapter19_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1115',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1116',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1117',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1118',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1119',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1120',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1121',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1122',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1123',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1124',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1125',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1126',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1127',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1128',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1129',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '19',
        ]);
        $this->insert('question', [
            'id' => '1130',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '19',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '19']);
    }
}
