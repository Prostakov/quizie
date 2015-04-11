<?php

use yii\db\Schema;
use yii\db\Migration;

class m150405_102821_populate_chapter4_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '193',
            'name' => "Правила порушує:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '194',
            'name' => "Пішоходам дозволено йти по краю проїзної частини дороги назустріч руху транспортних засобів:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '195',
            'name' => "Чи має пішохід перевагу під час переходу проїзної частини по позначених нерегульованих пішохідних переходах?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '196',
            'name' => "Пішоходам дозволено йти по дорозі назустріч руху транспортиих засобів за межами населених пунктів:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '197',
            'name' => "Якщо в зоні видимості немає пішохідного переходу або перехрестя, пішоходам переходити проїзну частину поза ними:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '198',
            'name' => "Чи дозволено пішоходам очікувати автобус у заїзному «кармані»?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '199',
            'name' => "Пішоходам, які переносять громіздкі предмети, рухатися по краю проїзної частини, якщо їх рух по тротуарах, пішохідних доріжках або узбіччях створить перешкоди для інших учасників руху:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '200',
            'name' => "Рух організованої групи людей по проїзній частині дороги дозволено тільки:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '201',
            'name' => "Пішоходам виходити на проїзну частину із-за нерухомого транспортного засобу та об’єктів, що обмежують огля-довість:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '202',
            'name' => "Чи дозволяється пішоходу виходити на проїзну частину до зупинки трамвая на позначеній цим знаком ділянці дороги?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '203',
            'name' => "У яких із перелічених у відповідях випадках пішохід зобов’язаний перебувати на місці скоєння дорожньо-транспортноїпригоди до прибуття працівників міліції?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '204',
            'name' => "Хто з пішоходів порушує Правила, переходячи дорогу?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '205',
            'name' => "Перехід дороги здійснюється з порушенням Правил:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '206',
            'name' => "У темну пору доби та в умовах недостатньої видимості пішоходи повинні виділяти себе для своєчасного їх виявлення іншими учасниками дорожнього руху, рухаючись:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '207',
            'name' => "Хто з учасників дорожнього руху порушує Правила, рухаючись поза населеним пунктом?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '208',
            'name' => "Пішоходи, які не встигли закінчити перехід проїзної частини дороги одного напрямку руху, повинні перебувати:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '209',
            'name' => "За межами населених пунктів вести мотоцикл, мопед або велосипед по краю проїзної частини назустріч руху транспортних засобів:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '210',
            'name' => "Очікувати транспортний засіб пішоходи повинні:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '211',
            'name' => "Водити організовані групи дітей по узбіччю дороги, якщо немає тротуарів і пішохідних доріжок:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '4',
        ]);
        $this->insert('question', [
            'id' => '212',
            'name' => "Пішоходові треба:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '4',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '4']);
    }
}
