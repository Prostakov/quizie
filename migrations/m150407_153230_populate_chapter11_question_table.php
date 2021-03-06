<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_153230_populate_chapter11_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '607',
            'name' => "Разрешается ли водителю легкового автомобиля вести его так, как показано на рисунке?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '608',
            'name' => "Разрешается ли водителю трактора выехать на левую полосу при скорости движения мопеда 20 км/ч?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '609',
            'name' => "При выполнении поворота с трамвайной линии не должно создаваться препятствий:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '610',
            'name' => "Разрешается ли велосипедисту выполнить поворот налево на этом перекрестке?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '611',
            'name' => "В каких случаях водителям транспортных средств разрешается выезд на полосу встречного движения на дороге, которая имеет по одной полосе для движения в каждом направлении и не разделена сплошной линией дорожной разметки?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '612',
            'name' => "Разрешается ли водителю легкового автомобиля выполнить объезд стоящего на остановке трамвая с выездом на трамвайный путь попутного направления?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '613',
            'name' => "В каких случаях при движении в населенных пунктах водителю грузового автомобиля с разрешенной максимальной массой свыше 3,5 т разрешается выезжать на крайнюю левую полосу дороги с односторонним движением, имеющей по меньшей мере три полосы для движения?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '614',
            'name' => "В каком из перечисленных в ответах случае водитель автобуса после выполнения опережения обязан занять правую полосу?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '615',
            'name' => "Нарушает ли водитель синего легкового автомобиля Правила, опережая красный автомобиль по трамвайному пути?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '616',
            'name' => "В каких случаях разрешается движение по обочине на велосипедах, мопедах и гужевых повозках?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '617',
            'name' => "Разрешается ли выезд нерельсовых транспортных средств на трамвайные пути, отделенные от проезжей части сплошной линией дорожной разметки?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '618',
            'name' => "Велосипедисту объехать стоящий легковой автомобиль:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '619',
            'name' => "В каких случаях допускается движение транспортных средств по тротуарам?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '620',
            'name' => "Разрешается ли Вам выехать на трамвайный путь попутного направления для опережения грузового автомобиля, если Вы управляете легковым автомобилем?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '621',
            'name' => "Разрешается ли водителю грузового автомобиля выполнить маневр в указанном стрелкой направлении?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '622',
            'name' => "На дорогах с двусторонним движением, имеющих по меньше мере две полосы для движения в одном направлении, выезд на крайнюю левую полосу для движения в этом же направлении разрешается:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '623',
            'name' => "В каких случаях разрешается менять полосу на проезжей части при интенсивном движении транспортных средств?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '624',
            'name' => "Водитель какого транспортного средства правильно занял полосу для движения на проезжей части, если все они двигаются со скоростью 50 км/ч?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '625',
            'name' => "В каких случаях водителям нерельсовых транспортных средств разрешается выезжать на трамвайный путь попутного направления при проезде перекрестков?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '626',
            'name' => "Согласно Правилам при одновременном движении по обочине пешехода и мопеда преимущество имеет:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '627',
            'name' => "В каком из перечисленных в ответах случае разрешается выезд на полосу встречного движения на изображенном участке дороги?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '21',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '628',
            'name' => "Водитель, поворачивающий на дорогу, которая имеет полосу для реверсивного движения, может перестраиваться на эту полосу:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '22',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '629',
            'name' => "Разрешается ли водителю легкового автомобиля выехать на трамвайный путь в указанном стрелкой направлении?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '23',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '630',
            'name' => "Согласно Правилам дорожного движения на дорогах, имеющих две и более полос для движения в одном направлении водитель нерельсового транспортного средства должен вести его:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '24',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '631',
            'name' => "Разрешается ли водителю велосипеда выполнить поворот налево на этом перекрестке?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '25',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '632',
            'name' => "Для выполнения поворота налево Вы должны:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '26',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '633',
            'name' => "Согласно Правилам на дорогах с тремя полосами для движения в одном направлении грузовым автомобилям с разрешенной максимальной массой более 3,5 т на крайнюю левую полосу разрешается выезжать:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '27',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '634',
            'name' => "Разрешается ли водителю грузового автомобиля с разрешенной максимальной массой более 3,5 т выехать на левую полосу этой дороги для разгрузки груза?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '28',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '635',
            'name' => "При отсутствии разметки или дорожных знаков, определяющих количество полос на проезжей части, водитель транспортного средства обязан самостоятельно определить это с учетом:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '29',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '636',
            'name' => "Разрешается ли водителю скорой медицинской помощи выехать на трамвайный путь в этом случае?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '30',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '637',
            'name' => "При выполнении разрешенного маневра с выездом на полосу встречного движения на дороге, имеющей по одной полосе в каждом направлении, преимущество имеет водитель транспортного средства:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '31',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '638',
            'name' => "Разрешается ли велосипедисту выполнить объезд стоящего грузового автомобиля на этом участке дороги?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '32',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '639',
            'name' => "Разрешается ли водителям транспортных средств выезжать на полосу встречного движения на дорогах с двухсторонним движением, имеющим не менее двух полос для движения в одном направлении?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '33',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '640',
            'name' => "Разрешается ли Вам выехать на трамвайный путь попутного направления для опережения легкового автомобиля?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '34',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '641',
            'name' => "Каким транспортным средствам разрешается движение по тротуарам?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '35',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '642',
            'name' => "Разрешается ли водителю грузового автомобиля движение полевой полосе проезжей части?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '36',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '643',
            'name' => "В каких случаях водителям транспортных средств разрешается выезд на крайнюю левую полосу на дорогах с односторонним движением в населенных пунктах, имеющих по меньшей мере две полосы для движения?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '37',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '644',
            'name' => "Водитель какого транспортного средства неправильно занял положение на проезжей части?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '38',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '645',
            'name' => "В каких случаях водителям нерельсовых транспортных средств разрешается движение вне перекрестков по трамвайному пути попутного направления, расположеному на одном уровне с проезжей частью для нерельсовых транспортных средств?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '39',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '646',
            'name' => "Какой из изображенных стрелками маневр не противоречит Правилам дорожного движения?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '40',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '647',
            'name' => "В каком направлении разрешается велосипедисту выполнить маневр в этом случае?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '41',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '648',
            'name' => "Разрешается ли вам повернуть налево так, как показано стрелкой?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '42',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '649',
            'name' => "Водитель какого транспортного средства неправильно занял полосу для движения?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '43',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '650',
            'name' => "Выезд на обочину встречного направления движения:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '44',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '651',
            'name' => "Разрешается ли Вам выехать на разделительную полосу для опережения грузового автомобиля ?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '45',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '652',
            'name' => "Разрешается ли Вам опередить автобус, выехав на трамвайный путь попутного направления?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '46',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '653',
            'name' => "В,каких случаях водителям транспортных средств, которые по техническим причинам не могут развивать скорость движения более 40 км/ч, разрешается выезжать на вторую полосу дороги, имеющей две полосы для движения в одном направлении?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '47',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '654',
            'name' => "Разрешается ли Вам опередить легковой автомобиль по направлению, указанному стрелкой?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '48',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '655',
            'name' => "Разрешается ли водителю «Скорой помощи» выехать на трамвайный путь в этом случае?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '49',
            'chapter_id' => '11',
        ]);
        $this->insert('question', [
            'id' => '656',
            'name' => "Разрешается ли водителю легкового автомобиля опередить грузовой автомобиль с выездом на трамвайный путь попутного направления?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '50',
            'chapter_id' => '11',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '11']);
    }
}
