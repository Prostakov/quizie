<?php

use yii\db\Schema;
use yii\db\Migration;

class m150412_114521_populate_chapter32_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1389',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1390',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1391',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1392',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1393',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1394',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1395',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1396',
            'name' => "",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1397',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '32',
        ]);
        $this->insert('question', [
            'id' => '1398',
            'name' => "",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '32',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '32']);
    }
}
