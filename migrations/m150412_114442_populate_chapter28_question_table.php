<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114442_populate_chapter28_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1266',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1267',
            'name' => "",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1268',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1269',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1270',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1271',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1272',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1273',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1274',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '28',
        ]);
        $this->insert('question', [
            'id' => '1275',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '28',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '28']);
    }
}
