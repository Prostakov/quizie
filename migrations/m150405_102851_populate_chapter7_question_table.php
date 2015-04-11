<?php

use yii\db\Schema;
use yii\db\Migration;

class m150405_102851_populate_chapter7_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '237',
            'name' => "Вести тварин по дорозі з асфальтобетонним покриттям, якщо поруч є ґрунтова дорога:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '238',
            'name' => "Під час виїзду на дорогу у місці з обмеженою оглядовістю Правила порушуються в ситуації, зображеній на:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '239',
            'name' => "У якому віці дозволяється керувати гужовим возом або переганяти тварин по дорозі?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '240',
            'name' => "Переганяти стадо тварин по дорозі в світлу пору доби:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '241',
            'name' => "Правила перегону тварин у показаній ситуації:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '242',
            'name' => "Залишати в межах смуги відводу дороги тварин без нагляду:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '243',
            'name' => "Переганяти тварин по дорозі у темну пору доби та в умовах недостатньої видимості:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '244',
            'name' => "Правила порушує:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '245',
            'name' => "Обладнані світлоповертачами:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '246',
            'name' => "У яких випадках під час руху по дорозі в темну пору доби та в умовах недостатньої видимості на гужовому возі (санях) потрібно вмикати ліхтарі?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '247',
            'name' => "У темну пору доби та в умовах недостатньої видимості рух по дорозі на гужовому возі, не обладнаному світлоповер-тачами:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '7',
        ]);
        $this->insert('question', [
            'id' => '248',
            'name' => "Правила перегону тварин у показаній ситуації:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '7',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '7']);
    }
}
