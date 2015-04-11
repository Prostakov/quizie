<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150405_102846_populate_chapter6_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '758',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '219',
        ]);
        $this->insert('option', [
            'id' => '759',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '219',
        ]);
        $this->insert('option', [
            'id' => '760',
            'name' => "Заборонено, за винятком дітей до 7 років на додатковому сидінні, обладнаному надійно закріпленими підніжками.",
            'num' => '3',
            'question_id' => '219',
        ]);
        $this->insert('option', [
            'id' => '761',
            'name' => "Заборонено, за винятком дітей у віці до 7 років.",
            'num' => '4',
            'question_id' => '219',
        ]);
        $this->insert('option', [
            'id' => '762',
            'name' => "Тільки велосипедист, що рухається ліворуч.",
            'num' => '1',
            'question_id' => '220',
        ]);
        $this->insert('option', [
            'id' => '763',
            'name' => "Обидва велосипедисти.",
            'num' => '2',
            'question_id' => '220',
        ]);
        $this->insert('option', [
            'id' => '764',
            'name' => "Ніхто не порушує.",
            'num' => '3',
            'question_id' => '220',
        ]);
        $this->insert('option', [
            'id' => '765',
            'name' => "Немає фари.",
            'num' => '1',
            'question_id' => '221',
        ]);
        $this->insert('option', [
            'id' => '766',
            'name' => "Немає світлоповертачів.",
            'num' => '2',
            'question_id' => '221',
        ]);
        $this->insert('option', [
            'id' => '767',
            'name' => "Немає всіх перелічених вище пристроїв.",
            'num' => '3',
            'question_id' => '221',
        ]);
        $this->insert('option', [
            'id' => '768',
            'name' => "З несправним гальмом.",
            'num' => '1',
            'question_id' => '222',
        ]);
        $this->insert('option', [
            'id' => '769',
            'name' => "З несправним звуковим сигналом.",
            'num' => '2',
            'question_id' => '222',
        ]);
        $this->insert('option', [
            'id' => '770',
            'name' => "Без світлоповертачів.",
            'num' => '3',
            'question_id' => '222',
        ]);
        $this->insert('option', [
            'id' => '771',
            'name' => "Несправні або відсутні всі перелічені вище пристрої.",
            'num' => '4',
            'question_id' => '222',
        ]);
        $this->insert('option', [
            'id' => '772',
            'name' => "Водій мотоцикла.",
            'num' => '1',
            'question_id' => '223',
        ]);
        $this->insert('option', [
            'id' => '773',
            'name' => "Велосипедист.",
            'num' => '2',
            'question_id' => '223',
        ]);
        $this->insert('option', [
            'id' => '774',
            'name' => "По автомагістралях.",
            'num' => '1',
            'question_id' => '224',
        ]);
        $this->insert('option', [
            'id' => '775',
            'name' => "По дорогах для автомобілів.",
            'num' => '2',
            'question_id' => '224',
        ]);
        $this->insert('option', [
            'id' => '776',
            'name' => "По звичайним дорогах.",
            'num' => '3',
            'question_id' => '224',
        ]);
        $this->insert('option', [
            'id' => '777',
            'name' => "По дорогах, перелічених у відповідях 1 і 2.",
            'num' => '4',
            'question_id' => '224',
        ]);
        $this->insert('option', [
            'id' => '778',
            'name' => "По всіх перелічених дорогах.",
            'num' => '5',
            'question_id' => '224',
        ]);
        $this->insert('option', [
            'id' => '779',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '225',
        ]);
        $this->insert('option', [
            'id' => '780',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '225',
        ]);
        $this->insert('option', [
            'id' => '781',
            'name' => "Заборонено, крім причепів, передбачених для експлуатації з велосипедом.",
            'num' => '3',
            'question_id' => '225',
        ]);
        $this->insert('option', [
            'id' => '782',
            'name' => "Не тримаючись за руль.",
            'num' => '1',
            'question_id' => '226',
        ]);
        $this->insert('option', [
            'id' => '783',
            'name' => "Знявши ноги з педалей (підніжок).",
            'num' => '2',
            'question_id' => '226',
        ]);
        $this->insert('option', [
            'id' => '784',
            'name' => "В обох перелічених вище випадках.",
            'num' => '3',
            'question_id' => '226',
        ]);
        $this->insert('option', [
            'id' => '785',
            'name' => "Не порушує.",
            'num' => '1',
            'question_id' => '227',
        ]);
        $this->insert('option', [
            'id' => '786',
            'name' => "Порушує.",
            'num' => '2',
            'question_id' => '227',
        ]);
        $this->insert('option', [
            'id' => '787',
            'name' => "Тільки на лівій.",
            'num' => '1',
            'question_id' => '228',
        ]);
        $this->insert('option', [
            'id' => '788',
            'name' => "Тільки на правій.",
            'num' => '2',
            'question_id' => '228',
        ]);
        $this->insert('option', [
            'id' => '789',
            'name' => "На обох не порушуються.",
            'num' => '3',
            'question_id' => '228',
        ]);
        $this->insert('option', [
            'id' => '790',
            'name' => "На обох порушуються.",
            'num' => '4',
            'question_id' => '228',
        ]);
        $this->insert('option', [
            'id' => '791',
            'name' => "Порушує.",
            'num' => '1',
            'question_id' => '229',
        ]);
        $this->insert('option', [
            'id' => '792',
            'name' => "Не порушує, якщо виконує випередження переднього велосипедиста.",
            'num' => '2',
            'question_id' => '229',
        ]);
        $this->insert('option', [
            'id' => '793',
            'name' => "12-річного.",
            'num' => '1',
            'question_id' => '230',
        ]);
        $this->insert('option', [
            'id' => '794',
            'name' => "13-річного.",
            'num' => '2',
            'question_id' => '230',
        ]);
        $this->insert('option', [
            'id' => '795',
            'name' => "14-річного.",
            'num' => '3',
            'question_id' => '230',
        ]);
        $this->insert('option', [
            'id' => '796',
            'name' => "15-річного.",
            'num' => '4',
            'question_id' => '230',
        ]);
        $this->insert('option', [
            'id' => '797',
            'name' => "16-річного.",
            'num' => '5',
            'question_id' => '230',
        ]);
        $this->insert('option', [
            'id' => '798',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '231',
        ]);
        $this->insert('option', [
            'id' => '799',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '231',
        ]);
        $this->insert('option', [
            'id' => '800',
            'name' => "Дозволено тільки під наглядом дорослих.",
            'num' => '3',
            'question_id' => '231',
        ]);
        $this->insert('option', [
            'id' => '801',
            'name' => "Велосипедист.",
            'num' => '1',
            'question_id' => '232',
        ]);
        $this->insert('option', [
            'id' => '802',
            'name' => "Ви.",
            'num' => '2',
            'question_id' => '232',
        ]);
        $this->insert('option', [
            'id' => '803',
            'name' => "Білий — спереду, оранжевий — з боків, червоний — ззаду.",
            'num' => '1',
            'question_id' => '233',
        ]);
        $this->insert('option', [
            'id' => '804',
            'name' => "Червоний — спереду і ззаду, оранжевий — з боків.",
            'num' => '2',
            'question_id' => '233',
        ]);
        $this->insert('option', [
            'id' => '805',
            'name' => "Оранжевий — спереду, червоний — ззаду.",
            'num' => '3',
            'question_id' => '233',
        ]);
        $this->insert('option', [
            'id' => '806',
            'name' => "Тільки такі, що не заважають керувати велосипедом.",
            'num' => '1',
            'question_id' => '234',
        ]);
        $this->insert('option', [
            'id' => '807',
            'name' => "Тільки такі, що не створюють перешкод іншим учасникам дорожнього руху.",
            'num' => '2',
            'question_id' => '234',
        ]);
        $this->insert('option', [
            'id' => '808',
            'name' => "Тільки такі, що не порушують стійкості велосипеда.",
            'num' => '3',
            'question_id' => '234',
        ]);
        $this->insert('option', [
            'id' => '809',
            'name' => "Все перелічені вище вантажі.",
            'num' => '4',
            'question_id' => '234',
        ]);
        $this->insert('option', [
            'id' => '810',
            'name' => "Тільки вантажі, перелічені у відповідях 1 і 2.",
            'num' => '5',
            'question_id' => '234',
        ]);
        $this->insert('option', [
            'id' => '811',
            'name' => "20-40 м.",
            'num' => '1',
            'question_id' => '235',
        ]);
        $this->insert('option', [
            'id' => '812',
            'name' => "40-60 м.",
            'num' => '2',
            'question_id' => '235',
        ]);
        $this->insert('option', [
            'id' => '813',
            'name' => "60-80 м.",
            'num' => '3',
            'question_id' => '235',
        ]);
        $this->insert('option', [
            'id' => '814',
            'name' => "80-100 м.",
            'num' => '4',
            'question_id' => '235',
        ]);
        $this->insert('option', [
            'id' => '815',
            'name' => "100-120 м.",
            'num' => '5',
            'question_id' => '235',
        ]);
        $this->insert('option', [
            'id' => '816',
            'name' => "Той, що перевозить дорослого на багажнику.",
            'num' => '1',
            'question_id' => '236',
        ]);
        $this->insert('option', [
            'id' => '817',
            'name' => "Той, що перевозить дитину.",
            'num' => '2',
            'question_id' => '236',
        ]);
        $this->insert('option', [
            'id' => '818',
            'name' => "Обидва порушують.",
            'num' => '3',
            'question_id' => '236',
        ]);
        $this->insert('option', [
            'id' => '819',
            'name' => "Обидва не порушують.",
            'num' => '4',
            'question_id' => '236',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 6])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
