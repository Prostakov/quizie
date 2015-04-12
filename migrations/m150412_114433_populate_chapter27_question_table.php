<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114433_populate_chapter27_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1249',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1250',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1251',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1252',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1253',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1254',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1255',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1256',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1257',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1258',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1259',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1260',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1261',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1262',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1263',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1264',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '27',
        ]);
        $this->insert('question', [
            'id' => '1265',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '27',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '27']);
    }
}
