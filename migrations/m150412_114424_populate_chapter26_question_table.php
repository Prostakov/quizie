<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114424_populate_chapter26_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1239',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1240',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1241',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1242',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1243',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1244',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1245',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1246',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1247',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '26',
        ]);
        $this->insert('question', [
            'id' => '1248',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '26',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '26']);
    }
}
