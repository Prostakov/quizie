<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_135549_populate_chapter8_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '249',
            'name' => "Знаки сервиса информируют участников дорожного движения о:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '250',
            'name' => "Обязаны ли вы нарушить требования дорожной разметки по требованию работника Госавтоинспекции?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '251',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '252',
            'name' => "При этих сигналах светофора преимущество в движении имеет:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '253',
            'name' => "Движение через перекресток разрешается водителям:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '254',
            'name' => "На каком из этих рисунков дорожное движение регулируется?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '255',
            'name' => "В этом случае движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '256',
            'name' => "При включении желтого сигнала светофора водителю грузового автомобиля:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '257',
            'name' => "Действие какого из изображенных светофоров распространяется только на пешеходов?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '258',
            'name' => "В этом случае вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '259',
            'name' => "Цифровое табло под светофором информирует о:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '260',
            'name' => "В этом случае движение разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '261',
            'name' => "Сочетание красного сигнала светофора со звуковым сигналом на железнодорожном переезде движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '262',
            'name' => "Движение прямо разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '263',
            'name' => "Два мигающих желтых сигнала светофора движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '264',
            'name' => "Движение разрешается:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '265',
            'name' => "В этом случае вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '266',
            'name' => "Движение разрешается:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '267',
            'name' => "Объехать препятствие разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '268',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '269',
            'name' => "По какому из направлений, показаных стрелками, разрешается движение легковому автомобилю?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '21',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '270',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '22',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '271',
            'name' => "В этом случае движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '23',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '272',
            'name' => "Стрелка на красном сигнале светлофора, расположеного над правой полосой, информирует водителя легкового автомобиля о том, что:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '24',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '273',
            'name' => "При подаче регулировщиком сигнала, запрещающего движение транспортных средств и пешеходов на перекрестке с нанесенной разметкой \"зебра\", водитель должен остановить транспортное средство только:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '25',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '274',
            'name' => "Движение налево разрещается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '26',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '275',
            'name' => "Движение транспортных средств регулируется светлофорами:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '27',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '276',
            'name' => "В этой ситуации движение разрещается:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '28',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '277',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '29',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '278',
            'name' => "Водители каких транспортных средств нарушают Правила, двигаясь через перекресток прямо?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '30',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '279',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '31',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '280',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '32',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '281',
            'name' => "Красный сигнал светофора движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '33',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '282',
            'name' => "При появлении впереди вас патрульного автомобиля с включенным специальным табло Вы обязаны:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '34',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '283',
            'name' => "В этой ситуации водителю легкового автомобиля проехать перекресток разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '35',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '284',
            'name' => "Осуществить движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '36',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '285',
            'name' => "В этой ситуации водителю легкового автомобиля движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '37',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '286',
            'name' => "Мигающий сигнал бело-лунного цвета показывает, что:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '38',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '287',
            'name' => "Движение разрешается:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '39',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '288',
            'name' => "Какая последовательность размещения сигналов светофоров при горизонтальном их расположении?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '40',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '289',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '41',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '290',
            'name' => "Осуществить движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '42',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '291',
            'name' => "Сигнал в виде зеленой стрелки в дополнительной секции информирует водителей о том, что движение налево:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '43',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '292',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '44',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '293',
            'name' => "Пешеходные ограждения информируют о расположении:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '45',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '294',
            'name' => "Желтый сигнал этого светофора:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '46',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '295',
            'name' => "Сигналами регулировщика являются:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '47',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '296',
            'name' => "Желтый сигнал светофора в этом случае движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '48',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '297',
            'name' => "Движение через перекресток разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '49',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '298',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '50',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '299',
            'name' => "При работе светофора в режиме мигания желтого сигнала двигаться следует согласно правилам проезда:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '51',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '300',
            'name' => "Звуковой сигнал с мигающими красными сигналами изображенного светофора информируют участников дорожного движения о том, что:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '52',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '301',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '53',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '302',
            'name' => "Сочетание красного и желтого сигналов светофора движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '54',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '303',
            'name' => "Водителю автобуса движение через перекресток:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '55',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '304',
            'name' => "Светофор с двумя красными сигналами или одним бело-лунным и двумя красными применяется для регулирования движения:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '56',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '305',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '57',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '306',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '58',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '307',
            'name' => "Преимущественное право на движение имеет водитель:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '59',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '308',
            'name' => "Контурная стрелка на основном зеленом сигнале светофора информирует о:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '60',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '309',
            'name' => "Регулирование дорожного движения осуществляется:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '61',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '310',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '62',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '311',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '63',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '312',
            'name' => "Сигналами какого светофора должны руководствоваться водители трамваев?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '64',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '313',
            'name' => "Желтый мигающий сигнал светофора движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '65',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '314',
            'name' => "В этом случае Вы должны:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '66',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '315',
            'name' => "Черные контурные стрелки на сигналах желтого и красного цвета светофора информируют о разрешенных направлениях движения при:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '67',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '316',
            'name' => "Въезд на полосу, обозначенную с обеих сторон двойной прерывистой дорожной разметкой, при выключенных сигналах реверсивного светофора, расположенного над этой полосой:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '68',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '317',
            'name' => "В этой ситуации движение Вам:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '69',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '318',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '70',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '319',
            'name' => "Движение через переезд при мигающих только красных сигналах светофора:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '71',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '320',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '72',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '321',
            'name' => "Движение налево разрешается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '73',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '322',
            'name' => "Каким из изображенных светофоров обозначается опасный пешеходный переход?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '74',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '323',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '75',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '324',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '76',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '325',
            'name' => "Если при включении желтого сигнала светофора Вы не имеете возможности остановить автомобиль перед разметкой \"Стоп-линия\" без экстренного торможения, то:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '77',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '326',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '78',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '327',
            'name' => "Сигналом какого светофора в этой ситуации должен руководствоваться водитель?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '79',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '328',
            'name' => "Перед требованиями каких дорожных знаков сигналы регулировщика имеют преимущество?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '80',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '329',
            'name' => "Движение разрешается Вам и:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '81',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '330',
            'name' => "Водителю какого транспортного средства в этом случае разрешается выполнить разворот?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '82',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '331',
            'name' => "Движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '83',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '332',
            'name' => "При подаче светофором сигнала, запрещающего движение, водитель, подъезжая к перекрестку, где отсутствует разметка “Стоп-линия” или знак “Место остановки”, должен остановить транспортное средство только:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '84',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '333',
            'name' => "В этой ситуации движение разрешается:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '85',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '334',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '86',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '335',
            'name' => "Преимущество в движении имеет водитель:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '87',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '336',
            'name' => "Предупреждающие знаки применяются для информирования водителей о:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '88',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '337',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '89',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '338',
            'name' => "Имеют ли временные дорожные знаки, закрепленные на щите с желтым фоном, преимущество перед постоянными дорожными знаками и дорожной разметкой?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '90',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '339',
            'name' => "Водителю какого транспортного средства разрешается движение через перекресток?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '91',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '340',
            'name' => "Подъезжая к перекрестку, Вы;",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '92',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '341',
            'name' => "Каким из изображенных светофоров регулируется движение на железнодорожном переезде?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '93',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '342',
            'name' => "Водителю легкового автомобиля в этом случае выполнить поворот направо:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '94',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '343',
            'name' => "Светофор работает в режиме мигания желтого сигнала. В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '95',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '344',
            'name' => "В этом случае Вам движение;",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '96',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '345',
            'name' => "Преимущество в движении имеет водитель:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '97',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '346',
            'name' => "Для поворота направо в этом случае Вы:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '98',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '347',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '99',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '348',
            'name' => "При этом жесте регулировщика движение разрешается только:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '100',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '349',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '101',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '350',
            'name' => "Услышав команду остановиться, поданную при помощи громкоговорящего устройства работником милиции, водитель обязан остановиться двигаясь:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '102',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '351',
            'name' => "В этой ситуации вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '103',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '352',
            'name' => "В этой ситуации движение разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '104',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '353',
            'name' => "Информационно-указательные знаки:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '105',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '354',
            'name' => "Осуществить движение Вам:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '106',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '355',
            'name' => "Красные мигающие сигналы светофора движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '107',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '356',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '108',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '357',
            'name' => "Преимущество в движении имеет водитель:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '109',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '358',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '110',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '359',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '111',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '360',
            'name' => "Дополнительный сигнал реверсивного светофора в виде желтой стрелки движение транспортных средств по полосе, обозначенной с обеих сторон двойной прерывистой дорожной разметкой:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '112',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '361',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '113',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '362',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '114',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '363',
            'name' => "Вам и водителю встречного автомобиля движение разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '115',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '364',
            'name' => "В этом случае движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '116',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '365',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '117',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '366',
            'name' => "Водителю трамвая в этом случае движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '118',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '367',
            'name' => "Каким транспортным средствам разрешается движение?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '119',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '368',
            'name' => "Знаки приоритета устанавливают очередность проезда:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '120',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '369',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '121',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '370',
            'name' => "В этой ситуации водителю легкового автомобиля движение разрешается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '122',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '371',
            'name' => "Сигнал светофора в виде зеленой стрелки на черном фоне:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '123',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '372',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '124',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '373',
            'name' => "Каким транспортным средствам разрешается движение?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '125',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '374',
            'name' => "В этом случае движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '126',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '375',
            'name' => "Звуковой сигнал на пешеходном переходе движение пешеходов:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '127',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '376',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '128',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '377',
            'name' => "При этом сигнале регулировщика движение Вам:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '129',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '378',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '130',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '379',
            'name' => "Дополнительный желтый сигнал реверсивного светофора в виде стрелки информирует о:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '131',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '380',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '132',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '381',
            'name' => "Для проезда направо Вы должны:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '133',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '382',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '134',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '383',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '135',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '384',
            'name' => "При включении зеленых сигналов изображенного светофора разворот:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '136',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '385',
            'name' => "При этом жесте регулировщика движение разрешается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '137',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '386',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '138',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '387',
            'name' => "Запрещающие знаки:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '139',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '388',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '140',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '389',
            'name' => "Водителям каких транспортных средств разрешается движение направо?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '141',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '390',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '142',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '391',
            'name' => "Каким транспортным средствам в этом случае разрешается движение?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '143',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '392',
            'name' => "Если регулировщик рукой или жезлом указывает на транспортное средство, то водитель:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '144',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '393',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '145',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '394',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '146',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '395',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '147',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '396',
            'name' => "Сигнал в виде зеленой стрелки в дополнительной секции светофора, включенный вместе с зеленым сигналом основного светофора, информирует, что:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '148',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '397',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '149',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '398',
            'name' => "В этом случае выполнить разворот Вам:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '150',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '399',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '151',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '400',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '152',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '401',
            'name' => "При этих сигналах светофоров движение разрешается:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '153',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '402',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '154',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '403',
            'name' => "При этом жесте регулировщика Вам:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '155',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '404',
            'name' => "Предписывающие дорожные знаки:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '156',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '405',
            'name' => "Водитель какого автомобиля нарушает Правила, двигаясь в направлении изображенных на рисунке стрелок при выключенных сигналах реверсивного светофора?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '157',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '406',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '158',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '407',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '159',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '408',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '160',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '409',
            'name' => "При регулировании движения светофором с сигналами бело-лунного цвета, расположенными в виде буквы «Т», движение трамваю разрешается только при включении одновременно:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '161',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '410',
            'name' => "Движение пешеходов регулирует:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '162',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '411',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '163',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '412',
            'name' => "В этой ситуации Вам движение разрешается:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '164',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '413',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '165',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '414',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '166',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '415',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '167',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '416',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '168',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '417',
            'name' => "В этом случае движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '169',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '418',
            'name' => "Если регулировщик поднял руку вверх, то движение запрещено во всех направлениях:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '170',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '419',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '171',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '420',
            'name' => "Движение через перекресток:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '172',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '421',
            'name' => "Сигнал в виде зеленой стрелки в дополнительной секции, включенный вместе с желтым или красным сигналом светофора, информирует водителей о том, что:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '173',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '422',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '174',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '423',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '175',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '424',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '176',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '425',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '177',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '426',
            'name' => "Если сигнал светофора имеет вид силуэта пешехода, то его действие распространяется:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '178',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '427',
            'name' => "При включении красного сигнала изображенного светофора движение запрещается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '179',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '428',
            'name' => "В этой ситуации движение разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '180',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '429',
            'name' => "При выключении или неисправности трамвайных светофоров водители трамваев должны руководствоваться:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '181',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '430',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '182',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '431',
            'name' => "Сигналами какого светофора должны руководствоваться велосипедисты?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '183',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '432',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '184',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '433',
            'name' => "К дорожному оборудованию, устанавливаемому на опасных участках дорог, относятся:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '185',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '434',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '186',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '435',
            'name' => "В данной ситуации движение разрешено:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '187',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '436',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '188',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '437',
            'name' => "Сигнал светофора в виде зеленой стрелки, указывающей налево:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '189',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '438',
            'name' => "В этом случае вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '190',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '439',
            'name' => "При включенных красных сигналах изображенного светофора движение транспортных средств через переезд:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '191',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '440',
            'name' => "В этом случае движение разрешается:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '192',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '441',
            'name' => "Мигающий зеленый сигнал светофора движение транспортных средств:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '193',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '442',
            'name' => "В этой ситуации движение разрешено:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '194',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '443',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '195',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '444',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '196',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '445',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '197',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '446',
            'name' => "Таблички к дорожным знакам уточняют или ограничивают действие дорожных знаков:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '198',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '447',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '199',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '448',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '200',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '449',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '201',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '450',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '202',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '451',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '203',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '452',
            'name' => "В этой ситуации движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '204',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '453',
            'name' => "Как располагаются основные световые сигналы светофоров?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '205',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '454',
            'name' => "Выпуклое зеркало как дополнительное средство регулирования применяется для расширения обзорности:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '206',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '455',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '207',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '456',
            'name' => "Дорожная разметка используется с дорожными знаками:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '208',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '457',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '209',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '458',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '210',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '459',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '211',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '460',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '212',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '461',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '213',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '462',
            'name' => "Мигающий белолунный сигнал светофора на железнодорожном переезде:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '214',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '463',
            'name' => "В этом случае вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '215',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '464',
            'name' => "Осуществить движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '216',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '465',
            'name' => "Вертикальная разметка наносится на дорожных сооружениях и элементах оборудования дорог в виде полос:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '217',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '466',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '218',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '467',
            'name' => "Зеленый сигнал этого светофора в виде направленной вниз стрелки:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '219',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '468',
            'name' => "В этой ситуации движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '220',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '469',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '221',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '470',
            'name' => "Черные контурные стрелки на красном и желтом сигналах светофора:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '222',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '471',
            'name' => "При этом жесте регулировщика движение в направлениях, показанных на рисунке стрелками, разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '223',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '472',
            'name' => "В этой ситуации движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '224',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '473',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '225',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '474',
            'name' => "В этой ситуации движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '226',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '475',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '227',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '476',
            'name' => "Какие из перечисленных средств относятся к дорожному оборудованию?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '228',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '477',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '229',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '478',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '230',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '479',
            'name' => "Водители каких транспортных средств нарушают Правила, двигаясь с учетом включенных указателей поворотов?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '231',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '480',
            'name' => "При выключенных световых сигналах изображенного светофора, расположенного над полосой для реверсивного движения, въезд на нее:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '232',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '481',
            'name' => "В этом случае движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '233',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '482',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '234',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '483',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '235',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '484',
            'name' => "Движение троллейбусов регулируется сигналами светофора:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '236',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '485',
            'name' => "В какой последовательности располагаются сигналы в светофорах с вертикальным их расположением?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '237',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '486',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '238',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '487',
            'name' => "В этой ситуации движение разрешено:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '239',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '488',
            'name' => "В этой ситуации Вам движение:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '240',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '489',
            'name' => "В этой ситуации движение разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '241',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '490',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '242',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '491',
            'name' => "Горизонтальная дорожная разметка, нанесенная на проезжей части или по верху бордюра:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '243',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '492',
            'name' => "Какой из направляющих столбиков обозначает внешний край правой обочины?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '244',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '493',
            'name' => "В этой ситуации движение разрешается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '245',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '494',
            'name' => "Световые сигналы какого из изображенных светофоров разрешают движение трамвая?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '246',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '495',
            'name' => "В этом случае Вам движение:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '247',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '496',
            'name' => "Какой сигнал реверсивного светофора разрешает движение по той полосе, над которой он установлен?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '248',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '497',
            'name' => "В этом случае Вам движение направо:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '249',
            'chapter_id' => '8',
        ]);
        $this->insert('question', [
            'id' => '498',
            'name' => "Для поворота направо Вы:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '250',
            'chapter_id' => '8',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '8']);
    }
}
