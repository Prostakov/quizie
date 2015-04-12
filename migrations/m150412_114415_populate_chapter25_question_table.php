<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114415_populate_chapter25_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1229',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1230',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1231',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1232',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1233',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1234',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1235',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1236',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1237',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '25',
        ]);
        $this->insert('question', [
            'id' => '1238',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '25',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '25']);
    }
}
