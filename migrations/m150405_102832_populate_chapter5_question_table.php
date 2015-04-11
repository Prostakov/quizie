<?php

use yii\db\Schema;
use yii\db\Migration;

class m150405_102832_populate_chapter5_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '213',
            'name' => "Пасажирам вантажного автомобіля під час руху сидіти в не обладнаному для сидіння місці:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '5',
        ]);
        $this->insert('question', [
            'id' => '214',
            'name' => "У якому з перелічених випадку пасажирові транспортногс засобу дозволено стояти під час руху?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '5',
        ]);
        $this->insert('question', [
            'id' => '215',
            'name' => "Правильно здійснюють посадку (висадку):",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '5',
        ]);
        $this->insert('question', [
            'id' => '216',
            'name' => "Що з переліченого заборонено пасажирам транспортного засобу?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '5',
        ]);
        $this->insert('question', [
            'id' => '217',
            'name' => "Пасажир якого транспортного засобу порушує Правила?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '5',
        ]);
        $this->insert('question', [
            'id' => '218',
            'name' => "Що з переліченого повинен виконати пасажир, причетний до дорожньо-транспортної пригоди?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '5',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '5']);
    }
}
