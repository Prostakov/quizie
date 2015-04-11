<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150405_102826_populate_chapter4_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '670',
            'name' => "Тільки пішохід 1.",
            'num' => '1',
            'question_id' => '193',
        ]);
        $this->insert('option', [
            'id' => '671',
            'name' => "Тільки пішохід 2.",
            'num' => '2',
            'question_id' => '193',
        ]);
        $this->insert('option', [
            'id' => '672',
            'name' => "Обидва пішоходи.",
            'num' => '3',
            'question_id' => '193',
        ]);
        $this->insert('option', [
            'id' => '673',
            'name' => "Тільки, якщо немає тротуарів або пересуватися по них неможливо.",
            'num' => '1',
            'question_id' => '194',
        ]);
        $this->insert('option', [
            'id' => '674',
            'name' => "Якщо немає тротуарів, пішохідних доріжок і немає узбіччь або пересуватися по них неможливо.",
            'num' => '2',
            'question_id' => '194',
        ]);
        $this->insert('option', [
            'id' => '675',
            'name' => "Тільки в темну пору доби або в умовах недостатньої видимості, якщо немає узбіччь.",
            'num' => '3',
            'question_id' => '194',
        ]);
        $this->insert('option', [
            'id' => '676',
            'name' => "У всіх згаданих випадках.",
            'num' => '4',
            'question_id' => '194',
        ]);
        $this->insert('option', [
            'id' => '677',
            'name' => "Не має.",
            'num' => '1',
            'question_id' => '195',
        ]);
        $this->insert('option', [
            'id' => '678',
            'name' => "Має.",
            'num' => '2',
            'question_id' => '195',
        ]);
        $this->insert('option', [
            'id' => '679',
            'name' => "Має тільки на позначених відповідними дорожніми знаками.",
            'num' => '3',
            'question_id' => '195',
        ]);
        $this->insert('option', [
            'id' => '680',
            'name' => "Має тільки на позначених дорожньою розміткою.",
            'num' => '4',
            'question_id' => '195',
        ]);
        $this->insert('option', [
            'id' => '681',
            'name' => "Тільки під час руху по узбіччю.",
            'num' => '1',
            'question_id' => '196',
        ]);
        $this->insert('option', [
            'id' => '682',
            'name' => "Тільки під час руху по краю проїзної частини.",
            'num' => '2',
            'question_id' => '196',
        ]);
        $this->insert('option', [
            'id' => '683',
            'name' => "В обох перелічених вище випадках.",
            'num' => '3',
            'question_id' => '196',
        ]);
        $this->insert('option', [
            'id' => '684',
            'name' => "Тільки, якщо вони переносять громіздкі предмети або ведуть велосипед.",
            'num' => '4',
            'question_id' => '196',
        ]);
        $this->insert('option', [
            'id' => '685',
            'name' => "Заборонено в усіх випадках.",
            'num' => '1',
            'question_id' => '197',
        ]);
        $this->insert('option', [
            'id' => '686',
            'name' => "Дозволено на дорогах, які мають не більше ніж чотири смуги руху для обох її напрямків.",
            'num' => '2',
            'question_id' => '197',
        ]);
        $this->insert('option', [
            'id' => '687',
            'name' => "Дозволено на дорогах, які мають не більше ніж три смуги руху для обох її напрямків.",
            'num' => '3',
            'question_id' => '197',
        ]);
        $this->insert('option', [
            'id' => '688',
            'name' => "Дозволено, якщо це не перешкоджає руху автобусів.",
            'num' => '1',
            'question_id' => '198',
        ]);
        $this->insert('option', [
            'id' => '689',
            'name' => "Дозволено, щоб не створювати перешкод для руху пішоходів.",
            'num' => '2',
            'question_id' => '198',
        ]);
        $this->insert('option', [
            'id' => '690',
            'name' => "Заборонено.",
            'num' => '3',
            'question_id' => '198',
        ]);
        $this->insert('option', [
            'id' => '691',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '199',
        ]);
        $this->insert('option', [
            'id' => '692',
            'name' => "Дозволено тільки у світлу пору доби.",
            'num' => '2',
            'question_id' => '199',
        ]);
        $this->insert('option', [
            'id' => '693',
            'name' => "Заборонено.",
            'num' => '3',
            'question_id' => '199',
        ]);
        $this->insert('option', [
            'id' => '694',
            'name' => "У напрямку руху транспортних засобів колоною, не більше ніж по чотири особи в ряд за умови, що колона не займає більше половини ширини проїзної частини одного напрямку руху.",
            'num' => '1',
            'question_id' => '200',
        ]);
        $this->insert('option', [
            'id' => '695',
            'name' => "Назустріч руху транспортних засобів колоною, не більше ніж по чотири особи в ряд за умови, що-колона не займає більше половини ширини смуги проїзної частини.",
            'num' => '2',
            'question_id' => '200',
        ]);
        $this->insert('option', [
            'id' => '696',
            'name' => "Заборонено.",
            'num' => '1',
            'question_id' => '201',
        ]);
        $this->insert('option', [
            'id' => '697',
            'name' => "Дозволено, переконавшись у відсутності транспортних засобів, що наближаються.",
            'num' => '2',
            'question_id' => '201',
        ]);
        $this->insert('option', [
            'id' => '698',
            'name' => "Дозволено тільки із-за легкових автомобілів або мотоциклів, що стоять.",
            'num' => '3',
            'question_id' => '201',
        ]);
        $this->insert('option', [
            'id' => '699',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '202',
        ]);
        $this->insert('option', [
            'id' => '700',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '202',
        ]);
        $this->insert('option', [
            'id' => '701',
            'name' => "Дозволено тільки, якщо немає нерейкових транспортних засобів.",
            'num' => '3',
            'question_id' => '202',
        ]);
        $this->insert('option', [
            'id' => '702',
            'name' => "Якщо він був очевидцем пригоди.",
            'num' => '1',
            'question_id' => '203',
        ]);
        $this->insert('option', [
            'id' => '703',
            'name' => "Якщо він повідомив в орган чи підрозділ міліції про пригоду.",
            'num' => '2',
            'question_id' => '203',
        ]);
        $this->insert('option', [
            'id' => '704',
            'name' => "У разі причетності до пригоди.",
            'num' => '3',
            'question_id' => '203',
        ]);
        $this->insert('option', [
            'id' => '705',
            'name' => "У будь-якому переліченому вище випадку.",
            'num' => '4',
            'question_id' => '203',
        ]);
        $this->insert('option', [
            'id' => '706',
            'name' => "Тільки пішоходи 1 і 3.",
            'num' => '1',
            'question_id' => '204',
        ]);
        $this->insert('option', [
            'id' => '707',
            'name' => "Тільки пішоходи 2 і 3.",
            'num' => '2',
            'question_id' => '204',
        ]);
        $this->insert('option', [
            'id' => '708',
            'name' => "Тільки пішоходи 3 і 4.",
            'num' => '3',
            'question_id' => '204',
        ]);
        $this->insert('option', [
            'id' => '709',
            'name' => "Тільки пішоходи 2 і 4.",
            'num' => '4',
            'question_id' => '204',
        ]);
        $this->insert('option', [
            'id' => '710',
            'name' => "На лівому малюнку.",
            'num' => '1',
            'question_id' => '205',
        ]);
        $this->insert('option', [
            'id' => '711',
            'name' => "На правому малюнку.",
            'num' => '2',
            'question_id' => '205',
        ]);
        $this->insert('option', [
            'id' => '712',
            'name' => "На обох малюнках.",
            'num' => '3',
            'question_id' => '205',
        ]);
        $this->insert('option', [
            'id' => '713',
            'name' => "Тільки по проїзній частині.",
            'num' => '1',
            'question_id' => '206',
        ]);
        $this->insert('option', [
            'id' => '714',
            'name' => "Тільки по узбіччю.",
            'num' => '2',
            'question_id' => '206',
        ]);
        $this->insert('option', [
            'id' => '715',
            'name' => "По дорозі в будь-якому випадку.",
            'num' => '3',
            'question_id' => '206',
        ]);
        $this->insert('option', [
            'id' => '716',
            'name' => "Тільки пішохід, що везе візок.",
            'num' => '1',
            'question_id' => '207',
        ]);
        $this->insert('option', [
            'id' => '717',
            'name' => "Тільки пішохід, який веде велосипед.",
            'num' => '2',
            'question_id' => '207',
        ]);
        $this->insert('option', [
            'id' => '718',
            'name' => "Обидва порушують.",
            'num' => '3',
            'question_id' => '207',
        ]);
        $this->insert('option', [
            'id' => '719',
            'name' => "Обидва не порушують.",
            'num' => '4',
            'question_id' => '207',
        ]);
        $this->insert('option', [
            'id' => '720',
            'name' => "На острівці безпеки або лінії, що розділяє транспортні потоки протилежних напрямків.",
            'num' => '1',
            'question_id' => '208',
        ]);
        $this->insert('option', [
            'id' => '721',
            'name' => "На середині проїзної частини.",
            'num' => '2',
            'question_id' => '208',
        ]);
        $this->insert('option', [
            'id' => '722',
            'name' => "В одному з перелічених вище місць.",
            'num' => '3',
            'question_id' => '208',
        ]);
        $this->insert('option', [
            'id' => '723',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '209',
        ]);
        $this->insert('option', [
            'id' => '724',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '209',
        ]);
        $this->insert('option', [
            'id' => '725',
            'name' => "Дозволено тільки у світлу пору доби.",
            'num' => '3',
            'question_id' => '209',
        ]);
        $this->insert('option', [
            'id' => '726',
            'name' => "На тротуарі.",
            'num' => '1',
            'question_id' => '210',
        ]);
        $this->insert('option', [
            'id' => '727',
            'name' => "На посадковому майданчику.",
            'num' => '2',
            'question_id' => '210',
        ]);
        $this->insert('option', [
            'id' => '728',
            'name' => "На узбіччі.",
            'num' => '3',
            'question_id' => '210',
        ]);
        $this->insert('option', [
            'id' => '729',
            'name' => "У будь-якому з перелічених вище місці.",
            'num' => '4',
            'question_id' => '210',
        ]);
        $this->insert('option', [
            'id' => '730',
            'name' => "Дозволено у світлу пору доби тільки назустріч руху транспортних засобів, а в темну пору доби — тільки у напрямку руху транспортних засобів.",
            'num' => '1',
            'question_id' => '211',
        ]);
        $this->insert('option', [
            'id' => '731',
            'name' => "Дозволено тільки у світлу пору доби в напрямку руху транспортних засобів.",
            'num' => '2',
            'question_id' => '211',
        ]);
        $this->insert('option', [
            'id' => '732',
            'name' => "Заборонено.",
            'num' => '3',
            'question_id' => '211',
        ]);
        $this->insert('option', [
            'id' => '733',
            'name' => "Залишити проїзну частину, не затримуючись.",
            'num' => '1',
            'question_id' => '212',
        ]);
        $this->insert('option', [
            'id' => '734',
            'name' => "Повернутися на середину проїзної частини.",
            'num' => '2',
            'question_id' => '212',
        ]);
        $this->insert('option', [
            'id' => '735',
            'name' => "Повернутися назад на тротуар.",
            'num' => '3',
            'question_id' => '212',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 4])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
