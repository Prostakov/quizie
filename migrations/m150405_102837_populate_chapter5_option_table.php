<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150405_102837_populate_chapter5_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '736',
            'name' => "Дозволено під час перевезення чи супроводу вантажу.",
            'num' => '1',
            'question_id' => '213',
        ]);
        $this->insert('option', [
            'id' => '737',
            'name' => "Дозволено, якщо вантаж знаходиться нижче рівня бортів кузова.",
            'num' => '2',
            'question_id' => '213',
        ]);
        $this->insert('option', [
            'id' => '738',
            'name' => "Заборонено.",
            'num' => '3',
            'question_id' => '213',
        ]);
        $this->insert('option', [
            'id' => '739',
            'name' => "Під час супроводу вантажу в кузові вантажного автомобіля, навіть якщо він не обладнаний для перевезення пасажирів.",
            'num' => '1',
            'question_id' => '214',
        ]);
        $this->insert('option', [
            'id' => '740',
            'name' => "Якщо кількість пасажирів перевищує кількість місць для сидіння в мікроавтобусі.",
            'num' => '2',
            'question_id' => '214',
        ]);
        $this->insert('option', [
            'id' => '741',
            'name' => "Якщо це передбачено конструкцією транспортного засобу.",
            'num' => '3',
            'question_id' => '214',
        ]);
        $this->insert('option', [
            'id' => '742',
            'name' => "У будь-якому переліченому вище випадку.",
            'num' => '4',
            'question_id' => '214',
        ]);
        $this->insert('option', [
            'id' => '743',
            'name' => "Тільки пасажир позаду автомобіля.",
            'num' => '1',
            'question_id' => '215',
        ]);
        $this->insert('option', [
            'id' => '744',
            'name' => "Тільки пасажир з боку тротуару.",
            'num' => '2',
            'question_id' => '215',
        ]);
        $this->insert('option', [
            'id' => '745',
            'name' => "Пасажир з боку тротуару і позаду автомобіля.",
            'num' => '3',
            'question_id' => '215',
        ]);
        $this->insert('option', [
            'id' => '746',
            'name' => "Правильно всі пасажири.",
            'num' => '4',
            'question_id' => '215',
        ]);
        $this->insert('option', [
            'id' => '747',
            'name' => "Відволікати увагу водія від керування транспортним засобом, перешкоджати закриттю дверей та використовувати для їзди підніжки.",
            'num' => '1',
            'question_id' => '216',
        ]);
        $this->insert('option', [
            'id' => '748',
            'name' => "Перебувати під час руху в автомобілі-таксі у населеному пункті з непристебнутими ременями безпеки.",
            'num' => '2',
            'question_id' => '216',
        ]);
        $this->insert('option', [
            'id' => '749',
            'name' => "Перелічене в обох відповідях.",
            'num' => '3',
            'question_id' => '216',
        ]);
        $this->insert('option', [
            'id' => '750',
            'name' => "Тільки мотоцикла.",
            'num' => '1',
            'question_id' => '217',
        ]);
        $this->insert('option', [
            'id' => '751',
            'name' => "Тільки автомобіля.",
            'num' => '2',
            'question_id' => '217',
        ]);
        $this->insert('option', [
            'id' => '752',
            'name' => "Обох.",
            'num' => '3',
            'question_id' => '217',
        ]);
        $this->insert('option', [
            'id' => '753',
            'name' => "Тільки надати можливу допомогу потерпілим у ДТП.",
            'num' => '1',
            'question_id' => '218',
        ]);
        $this->insert('option', [
            'id' => '754',
            'name' => "Тільки повідомити про пригоду в орган чи підрозділ міліції.",
            'num' => '2',
            'question_id' => '218',
        ]);
        $this->insert('option', [
            'id' => '755',
            'name' => "Тільки перебувати на місці пригоди і чекати прибуття міліції.",
            'num' => '3',
            'question_id' => '218',
        ]);
        $this->insert('option', [
            'id' => '756',
            'name' => "Виконати всі перелічені дії.",
            'num' => '4',
            'question_id' => '218',
        ]);
        $this->insert('option', [
            'id' => '757',
            'name' => "Тільки виконати дії, перелічені у відповідях 1 і 2.",
            'num' => '5',
            'question_id' => '218',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 5])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
