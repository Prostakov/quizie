<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_153217_populate_chapter10_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '539',
            'name' => "По какой траектории Вам разрешается развернуться?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '540',
            'name' => "В чем должен убедиться водитель перед перестроением во время движения по дороге?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '541',
            'name' => "По какой из изображенных на рисунке траекторий разрешается водителю выполнить разворот?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '542',
            'name' => "Водитель какого транспортного средства правильно занял положение на проезжей части перед перекрестком для разворота?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '543',
            'name' => "Выезжая на дорогу, в этом случае Вы:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '544',
            'name' => "Выезжая со двора, водитель легкового автомобиля должен:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '545',
            'name' => "По какой из показанных траекторий Правила разрешают выполнить поворот?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '546',
            'name' => "При одновременном перестроении преимущество в движении имеет водитель:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '547',
            'name' => "По какой траектории водителю легкового автомобиля разрешается выполнить разворот?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '548',
            'name' => "Согласно Правилам перед поворотом направо, налево или разворотом водитель должен занять соответствующее крайнее положение на проезжей части, предназначенной для движения в этом направлении:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '549',
            'name' => "При наличии трамвайной колеи посредине проезжей части водитель, выполняющий поворот налево или разворот вне перекрестка, должен уступить дорогу трамваю:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '550',
            'name' => "Водитель какого транспортного средства имеет преимущество в движении на перекрестке?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '551',
            'name' => "По какой траектории Вам следует выполнять поворот налево?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '552',
            'name' => "По какой из изображенных на рисунке траекторий разрешается водителю этого автомобиля разворот?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '553',
            'name' => "Разрешается ли водителю транспортного средства выполнить разворот в технологическом разрыве разделительной полосы автомагистрали?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '554',
            'name' => "По какой траектории мотоциклисту разрешается выполнить разворот?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '555',
            'name' => "Должен ли водитель синего автомобиля при развороте уступить вам дорогу если Вы выполняете обгон?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '556',
            'name' => "По какой траектории водителю грузового автомобиля разрешается выполнить разворот?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '557',
            'name' => "Водитель транспортного средства перед началом движения должен:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '558',
            'name' => "При одновременном перестроении этих транспортных средств преимущество в движении имеет водитель:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '559',
            'name' => "При выполнении разворота водитель грузового автомобиля должен уступить дорогу:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '21',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '560',
            'name' => "По какой из показанных траекторий Вам следует выезжать на дорогу?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '22',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '561',
            'name' => "Должен ли водитель грузового автомобиля уступать дорогу легковому автомобилю?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '23',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '562',
            'name' => "При повороте направо транспортное средство должно двигаться:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '24',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '563',
            'name' => "Должен ли водитель грузового автомобиля при перестроении уступить дорогу легковому автомобилю?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '25',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '564',
            'name' => "Преимущество в движении имеет:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '26',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '565',
            'name' => "Как необходимо поступить водителю в случае, если нет возможности самостоятельно обеспечить безопасность дорожного движения при движении автомобиля задним ходом?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '27',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '566',
            'name' => "Разрешается ли водителю легкового автомобиля развернуться в этом месте?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '28',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '567',
            'name' => "При выполнении поворота налево или разворота вне перекрестка водитель автомобиля:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '29',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '568',
            'name' => "В каких случаях водителю транспортного средства запрещается Правилами выполнить разворот на мосту?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '30',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '569',
            'name' => "По какой из изображенных на рисунке траектории водителю кареты скорой медицинской помощи разрешается развернуться на этом участке дороги?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '31',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '570',
            'name' => "Если в месте съезда с дороги имеется полоса торможения, то водитель, который намеревается повернуть на другую дорогу, должен снижать скорость:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '32',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '571',
            'name' => "Водитель какого транспортного средства правильно проезжает перекресток с круговым движением?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '33',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '572',
            'name' => "Поворачивая направо на примыкающую территорию Вы:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '34',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '573',
            'name' => "Разрешается ли водителю автопоезда в этой ситуации повернуть направо?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '35',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '574',
            'name' => "В каком случае водитель транспортного средства должен уступить дорогу другому транспортному средству при перестроении?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '36',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '575',
            'name' => "Водитель какого транспортного средства правильно выполняет поворот направо?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '37',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '576',
            'name' => "На этих участках дорог движение задним ходом запрещается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '38',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '577',
            'name' => "Согласно требований Правил поворот налево необходимо выполнять так, чтобы при выезде с пересечения проезжих частей транспортное средство не оказалось на:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '39',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '578',
            'name' => "В каких из перечисленных в ответах случаях водителю транспортного средства запрещается Правилами выполнить разворот?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '40',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '579',
            'name' => "Водитель какого транспортного средства нарушает Правила, поворачивая налево?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '41',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '580',
            'name' => "На этом участке дороги движение задним ходом запрещается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '42',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '581',
            'name' => "В каких случаях водителю транспортного средства запрещается Правилами выполнить разворот?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '43',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '582',
            'name' => "Во время съезда с дороги во двор, на стоянку, автозаправочную станцию и другие примыкающие территории водитель транспортного средства должен уступить дорогу:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '44',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '583',
            'name' => "При движении с одинаковой скоростью преимущество на этом участке дороги имеет водитель:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '45',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '584',
            'name' => "На этих участках дорог разворот запрещается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '46',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '585',
            'name' => "В каком из перечисленных в ответах случае водитель транспортного средства может выполнить разворот от правого края проезжей части или с правой обочины?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '47',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '586',
            'name' => "Во время движения задним ходом водитель не должен:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '48',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '587',
            'name' => "Разрешается ли мотоциклисту развернуться на перекрестке этой дороги?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '49',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '588',
            'name' => "Водитель какого транспортного средства имеет преимущество при выполнении поворота направо в этом случае?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '50',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '589',
            'name' => "В каких из перечисленных в ответах местах разрешается движение транспортного средства задним ходом?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '51',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '590',
            'name' => "На каком из перечисленных в ответах железнодорожном переезде водителю запрещается выполнить разворот?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '52',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '591',
            'name' => "Разрешается ли Вам выполнить разворот в обозначенном стрелкой месте?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '53',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '592',
            'name' => "Водитель какого транспортного средства должен уступить дорогу?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '54',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '593',
            'name' => "По какой траектории разрешается водителю мотоцикла осуществить разворот?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '55',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '594',
            'name' => "При видимости дороги 70 м по ходу движения разворот в направлении стрелки водителю трактора:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '56',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '595',
            'name' => "По какой из показанных траекторий следует съезжать с дороги?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '57',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '596',
            'name' => "По какой траектории разрешается выполнить поворот направо?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '58',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '597',
            'name' => "Если в месте въезда на дорогу имеется полоса разгона, то водитель, осуществляя движение по ней, должен вливаться в транспортный поток:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '59',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '598',
            'name' => "Водитель, выполняющий поворот налево или разворот из крайнего правого положения вне перекрестка, должен уступить дорогу транспортным средствам движущимся:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '60',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '599',
            'name' => "Правильно ли водитель автопоезда занял положение на проезжей части для разворота?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '61',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '600',
            'name' => "В каких из перечисленных в ответах местах водителю запрещается выполнять разворот?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '62',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '601',
            'name' => "Водитель какого транспортного средства правильно занял положение на проезжей части перед перекрестком для движения налево?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '63',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '602',
            'name' => "Если траектории движения транспортных средств пересекаются, а очередность проезда не обусловлена Правилами дорожного движения, то уступить дорогу должен водитель, к которому транспортное средство приближается:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '64',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '603',
            'name' => "Намереваясь повернуть налево должны ли Вы дать возможность движущемуся впереди автомобилю выполнить разворот?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '65',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '604',
            'name' => "Двигаясь в указанных стрелками направлениях преимущество в движении при проезде перекрестка принадлежит:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '66',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '605',
            'name' => "",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '67',
            'chapter_id' => '10',
        ]);
        $this->insert('question', [
            'id' => '606',
            'name' => "",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '68',
            'chapter_id' => '10',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '10']);
    }
}
