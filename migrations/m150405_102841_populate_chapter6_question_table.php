<?php

use yii\db\Schema;
use yii\db\Migration;

class m150405_102841_populate_chapter6_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '219',
            'name' => "Велосипедистам перевозити пасажирів:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '220',
            'name' => "Чи порушують велосипедисти Правила?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '221',
            'name' => "Рухаючись в темну пору доби, велосипедист порушуватиме Правила, оскільки на велосипеді:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '222',
            'name' => "За яких умов з перелічених у відповідях дозволено велосипедисту рух у світлу пору доби?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '223',
            'name' => "Хто має перевагу під час проїзду перехрещення з велосипедною доріжкою?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '224',
            'name' => "Якими дорогами заборонено рухатися велосипедистам, якщо поряд немає спеціально облаштованої велосипедної доріжки?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '225',
            'name' => "Велосипедистам буксирувати причіп:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '226',
            'name' => "Велосипедистам заборонено їздити:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '227',
            'name' => "Чи порушує Правила велосипедист, рухаючись узбіччям дороги в цьому випадку без увімкненої фари або без світлоповертачів?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '228',
            'name' => "Чи порушуються Правила в зображених ситуаціях?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '229',
            'name' => "Чи порушує Правила велосипедист, рухаючись поза велосипедною доріжкою?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '230',
            'name' => "При досягненні якого мінімального віку дозволяється рухатися по дорозі на велосипеді?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '231',
            'name' => "Рух на велосипедах по тротуарах і пішохідних доріжках:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '232',
            'name' => "Хто має перевагу під час проїзду перехрещення з велосипедною доріжкою?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '233',
            'name' => "Якого кольору має бути встановлено світлоповертачі на велосипеді?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '234',
            'name' => "Які вантажі дозволено перевозити велосипедисту?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '235',
            'name' => "Яка дистанція повинна бути між групами велосипедистів, що рухаються в колоні?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '6',
        ]);
        $this->insert('question', [
            'id' => '236',
            'name' => "Хто з велосипедистів порушує Правила під час перевезення пасажирів?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '6',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '6']);
    }
}
