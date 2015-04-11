<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150403_174228_populate_chapter1_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '1',
            'name' => "Не більше ніж чотирнадцять.",
            'num' => '1',
            'question_id' => '1',
        ]);
        $this->insert('option', [
            'id' => '2',
            'name' => "Не більше ніж сімнадцять.",
            'num' => '2',
            'question_id' => '1',
        ]);
        $this->insert('option', [
            'id' => '3',
            'name' => "Не більше ніж двадцять.",
            'num' => '3',
            'question_id' => '1',
        ]);
        $this->insert('option', [
            'id' => '4',
            'name' => ". Негайно вжити всіх можливих заходів для їх усунення.",
            'num' => '1',
            'question_id' => '2',
        ]);
        $this->insert('option', [
            'id' => '5',
            'name' => "Вжити всіх можливих заходів щодо забезпечення збереження ситуації, що сталася, до прибуття працівника міліції або власника дороги.",
            'num' => '2',
            'question_id' => '2',
        ]);
        $this->insert('option', [
            'id' => '6',
            'name' => "Прибути до найближчого поста Державтоінспекції або в орган міліції для інформування про це й оформлення відповідних матеріалів.",
            'num' => '3',
            'question_id' => '2',
        ]);
        $this->insert('option', [
            'id' => '7',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '3',
        ]);
        $this->insert('option', [
            'id' => '8',
            'name' => "Тільки на правому.",
            'num' => '2',
            'question_id' => '3',
        ]);
        $this->insert('option', [
            'id' => '9',
            'name' => "На обох.",
            'num' => '3',
            'question_id' => '3',
        ]);
        $this->insert('option', [
            'id' => '10',
            'name' => "Прирівнює її за значенням до перехрещуваної.",
            'num' => '1',
            'question_id' => '4',
        ]);
        $this->insert('option', [
            'id' => '11',
            'name' => "Не прирівнює її за значенням до перехрещуваної.",
            'num' => '2',
            'question_id' => '4',
        ]);
        $this->insert('option', [
            'id' => '12',
            'name' => "Тільки у населеному пункті.",
            'num' => '1',
            'question_id' => '5',
        ]);
        $this->insert('option', [
            'id' => '13',
            'name' => "Тільки поза населеним пунктом.",
            'num' => '2',
            'question_id' => '5',
        ]);
        $this->insert('option', [
            'id' => '14',
            'name' => "Тільки в умовах недостатньої видимості.",
            'num' => '3',
            'question_id' => '5',
        ]);
        $this->insert('option', [
            'id' => '15',
            'name' => "Постійно.",
            'num' => '4',
            'question_id' => '5',
        ]);
        $this->insert('option', [
            'id' => '16',
            'name' => "Тільки механічного транспортного засобу, в тому числі з причепом.",
            'num' => '1',
            'question_id' => '6',
        ]);
        $this->insert('option', [
            'id' => '17',
            'name' => "Тільки механічного транспортного засобу та мопеда.",
            'num' => '2',
            'question_id' => '6',
        ]);
        $this->insert('option', [
            'id' => '18',
            'name' => "Тільки механічного транспортного засобу, мопеда та велосипеда.",
            'num' => '3',
            'question_id' => '6',
        ]);
        $this->insert('option', [
            'id' => '19',
            'name' => "Будь-якого транспортного засобу.",
            'num' => '4',
            'question_id' => '6',
        ]);
        $this->insert('option', [
            'id' => '20',
            'name' => "До ЗО куб.см.",
            'num' => '1',
            'question_id' => '7',
        ]);
        $this->insert('option', [
            'id' => '21',
            'name' => "Від ЗО до 50 куб.см.",
            'num' => '2',
            'question_id' => '7',
        ]);
        $this->insert('option', [
            'id' => '22',
            'name' => " 50 куб.см. і більше.",
            'num' => '3',
            'question_id' => '7',
        ]);
        $this->insert('option', [
            'id' => '23',
            'name' => "Не порушує.",
            'num' => '1',
            'question_id' => '8',
        ]);
        $this->insert('option', [
            'id' => '24',
            'name' => "Не порушує лише за відсутності зустрічних транспортних засобів.",
            'num' => '2',
            'question_id' => '8',
        ]);
        $this->insert('option', [
            'id' => '25',
            'name' => "Порушує.",
            'num' => '3',
            'question_id' => '8',
        ]);
        $this->insert('option', [
            'id' => '26',
            'name' => "Не більше ніж п'ять.",
            'num' => '1',
            'question_id' => '9',
        ]);
        $this->insert('option', [
            'id' => '27',
            'name' => "Не більше ніж дев'ять.",
            'num' => '2',
            'question_id' => '9',
        ]);
        $this->insert('option', [
            'id' => '28',
            'name' => "Тільки дев’ять і більше.",
            'num' => '3',
            'question_id' => '9',
        ]);
        $this->insert('option', [
            'id' => '29',
            'name' => "Тільки більше ніж дев’ять.",
            'num' => '4',
            'question_id' => '9',
        ]);
        $this->insert('option', [
            'id' => '30',
            'name' => "Здійснити обгін.",
            'num' => '1',
            'question_id' => '10',
        ]);
        $this->insert('option', [
            'id' => '31',
            'name' => "Зменшити швидкість руху транспортного засобу.",
            'num' => '2',
            'question_id' => '10',
        ]);
        $this->insert('option', [
            'id' => '32',
            'name' => "Зупинити транспортний засіб.",
            'num' => '3',
            'question_id' => '10',
        ]);
        $this->insert('option', [
            'id' => '33',
            'name' => "Виконати будь-яку перелічену вище дію.",
            'num' => '4',
            'question_id' => '10',
        ]);
        $this->insert('option', [
            'id' => '34',
            'name' => "Негайно зменшити швидкість або зупинити транспортний засіб.",
            'num' => '5',
            'question_id' => '10',
        ]);
        $this->insert('option', [
            'id' => '35',
            'name' => "Тільки дорожні знаки і світлофори.",
            'num' => '1',
            'question_id' => '11',
        ]);
        $this->insert('option', [
            'id' => '36',
            'name' => "Тільки межі елементів дороги.",
            'num' => '2',
            'question_id' => '11',
        ]);
        $this->insert('option', [
            'id' => '37',
            'name' => "Межі елементів дороги та розміщення учасників руху.",
            'num' => '3',
            'question_id' => '11',
        ]);
        $this->insert('option', [
            'id' => '38',
            'name' => "Мотоцикла.",
            'num' => '1',
            'question_id' => '12',
        ]);
        $this->insert('option', [
            'id' => '39',
            'name' => "Легкового автомобіля.",
            'num' => '2',
            'question_id' => '12',
        ]);
        $this->insert('option', [
            'id' => '40',
            'name' => "Тільки згідно з чинним законодавством.",
            'num' => '1',
            'question_id' => '13',
        ]);
        $this->insert('option', [
            'id' => '41',
            'name' => "Тільки згідно з наказами власників доріг.",
            'num' => '2',
            'question_id' => '13',
        ]);
        $this->insert('option', [
            'id' => '42',
            'name' => "Тільки згідно з наказами Державтоінспекції.",
            'num' => '3',
            'question_id' => '13',
        ]);
        $this->insert('option', [
            'id' => '43',
            'name' => "Згідно зі всіма переліченими вище нормативами і наказами.",
            'num' => '4',
            'question_id' => '13',
        ]);
        $this->insert('option', [
            'id' => '44',
            'name' => "Тільки водіїв транспортних засобів на перехрестях.",
            'num' => '1',
            'question_id' => '14',
        ]);
        $this->insert('option', [
            'id' => '45',
            'name' => "Тільки пішоходів.",
            'num' => '2',
            'question_id' => '14',
        ]);
        $this->insert('option', [
            'id' => '46',
            'name' => "Будь-яких учасників дорожнього руху.",
            'num' => '3',
            'question_id' => '14',
        ]);
        $this->insert('option', [
            'id' => '47',
            'name' => "1.",
            'num' => '1',
            'question_id' => '15',
        ]);
        $this->insert('option', [
            'id' => '48',
            'name' => "2.",
            'num' => '2',
            'question_id' => '15',
        ]);
        $this->insert('option', [
            'id' => '49',
            'name' => "3.",
            'num' => '3',
            'question_id' => '15',
        ]);
        $this->insert('option', [
            'id' => '50',
            'name' => "Чергового працівника ДАІ або найближчий орган міліції.",
            'num' => '1',
            'question_id' => '16',
        ]);
        $this->insert('option', [
            'id' => '51',
            'name' => "Власника дороги.",
            'num' => '2',
            'question_id' => '16',
        ]);
        $this->insert('option', [
            'id' => '52',
            'name' => "Учасників дорожнього руху.",
            'num' => '3',
            'question_id' => '16',
        ]);
        $this->insert('option', [
            'id' => '53',
            'name' => "Всіх перелічених вище.",
            'num' => '4',
            'question_id' => '16',
        ]);
        $this->insert('option', [
            'id' => '54',
            'name' => "Тільки для механічних транспортних засобів.",
            'num' => '1',
            'question_id' => '17',
        ]);
        $this->insert('option', [
            'id' => '55',
            'name' => "Тільки для механічних транспортних засобів, мопедів та велосипедів.",
            'num' => '2',
            'question_id' => '17',
        ]);
        $this->insert('option', [
            'id' => '56',
            'name' => "Для транспортних засобів і пішоходів.",
            'num' => '3',
            'question_id' => '17',
        ]);
        $this->insert('option', [
            'id' => '57',
            'name' => "Наскрізного проїзду через двори.",
            'num' => '1',
            'question_id' => '18',
        ]);
        $this->insert('option', [
            'id' => '58',
            'name' => "Розвороту транспортних засобів.",
            'num' => '2',
            'question_id' => '18',
        ]);
        $this->insert('option', [
            'id' => '59',
            'name' => "В'їзду в двори, на стоянки, автозаправні станції, будівельні майданчики або виїзду з них.",
            'num' => '3',
            'question_id' => '18',
        ]);
        $this->insert('option', [
            'id' => '60',
            'name' => "Тільки пішоходів.",
            'num' => '1',
            'question_id' => '19',
        ]);
        $this->insert('option', [
            'id' => '61',
            'name' => "Пішоходів і велосипедистів.",
            'num' => '2',
            'question_id' => '19',
        ]);
        $this->insert('option', [
            'id' => '62',
            'name' => "Пішоходів, а також для зупинки або стоянки легкових автомобілів і мотоциклів.",
            'num' => '3',
            'question_id' => '19',
        ]);
        $this->insert('option', [
            'id' => '63',
            'name' => "Рейками.",
            'num' => '1',
            'question_id' => '20',
        ]);
        $this->insert('option', [
            'id' => '64',
            'name' => "Спеціально виділеним вимощенням трамвайної колії або дорожньою розміткою.",
            'num' => '2',
            'question_id' => '20',
        ]);
        $this->insert('option', [
            'id' => '65',
            'name' => "Тільки дорожньою розміткою.",
            'num' => '3',
            'question_id' => '20',
        ]);
        $this->insert('option', [
            'id' => '66',
            'name' => "1.",
            'num' => '1',
            'question_id' => '21',
        ]);
        $this->insert('option', [
            'id' => '67',
            'name' => "2.",
            'num' => '2',
            'question_id' => '21',
        ]);
        $this->insert('option', [
            'id' => '68',
            'name' => "Початок і кінець якої тільки позначено дорожніми знаками 5.1 та 5.2.",
            'num' => '1',
            'question_id' => '22',
        ]);
        $this->insert('option', [
            'id' => '69',
            'name' => "Яка не має перехрещень на одному рівні тільки з іншими дорогами, пішохідними або велосипедними доріжками.",
            'num' => '2',
            'question_id' => '22',
        ]);
        $this->insert('option', [
            'id' => '70',
            'name' => "Тільки така, що має окремі проїзні частини для кожного напрямку руху, розділені розділювальною смугою.",
            'num' => '3',
            'question_id' => '22',
        ]);
        $this->insert('option', [
            'id' => '71',
            'name' => "Яка не має перехрещень на одному рівні тільки з залізничними і трамвайними коліями.",
            'num' => '4',
            'question_id' => '22',
        ]);
        $this->insert('option', [
            'id' => '72',
            'name' => "З усіма переліченими вище особливостями.",
            'num' => '5',
            'question_id' => '22',
        ]);
        $this->insert('option', [
            'id' => '73',
            'name' => "Автотранспортних організацій, погодженим з власником дороги.",
            'num' => '1',
            'question_id' => '23',
        ]);
        $this->insert('option', [
            'id' => '74',
            'name' => "Державтоінспекції, погодженим з власником дороги.",
            'num' => '2',
            'question_id' => '23',
        ]);
        $this->insert('option', [
            'id' => '75',
            'name' => "Власника дороги або уповноваженого ним органу, погодженим з Державтоінспекцією.",
            'num' => '3',
            'question_id' => '23',
        ]);
        $this->insert('option', [
            'id' => '76',
            'name' => "Трамвай, автомобіль і мотоцикл.",
            'num' => '1',
            'question_id' => '24',
        ]);
        $this->insert('option', [
            'id' => '77',
            'name' => "Трамвай і автомобіль.",
            'num' => '2',
            'question_id' => '24',
        ]);
        $this->insert('option', [
            'id' => '78',
            'name' => "Велосипед, автомобіль і мотоцикл.",
            'num' => '3',
            'question_id' => '24',
        ]);
        $this->insert('option', [
            'id' => '79',
            'name' => "Велосипед, трамвай, автомобіль і мотоцикл.",
            'num' => '4',
            'question_id' => '24',
        ]);
        $this->insert('option', [
            'id' => '80',
            'name' => "Усі зображені.",
            'num' => '5',
            'question_id' => '24',
        ]);
        $this->insert('option', [
            'id' => '81',
            'name' => "Будь-які транспортні засоби, що здійснюють перевезення пасажирів більше ніж 8 осіб.",
            'num' => '1',
            'question_id' => '25',
        ]);
        $this->insert('option', [
            'id' => '82',
            'name' => "Будь-які автобуси, тролейбуси і трамваї.",
            'num' => '2',
            'question_id' => '25',
        ]);
        $this->insert('option', [
            'id' => '83',
            'name' => "Автобуси, мікроавтобуси, тролейбуси, трамваї і таксі, що рухаються за встановленими маршрутами і мають визначені місця на дорозі для посадки (висадки) пасажирів.",
            'num' => '3',
            'question_id' => '25',
        ]);
        $this->insert('option', [
            'id' => '84',
            'name' => "Тільки вагових параметрів транспортного засобу.",
            'num' => '1',
            'question_id' => '26',
        ]);
        $this->insert('option', [
            'id' => '85',
            'name' => "Тільки габаритних параметрів транспортного засобу.",
            'num' => '2',
            'question_id' => '26',
        ]);
        $this->insert('option', [
            'id' => '86',
            'name' => "Габаритних і вагових параметрів транспортного засобу.",
            'num' => '3',
            'question_id' => '26',
        ]);
        $this->insert('option', [
            'id' => '87',
            'name' => "Габаритних і вагових параметрів транспортного засобу, причепа й вантажу.",
            'num' => '4',
            'question_id' => '26',
        ]);
        $this->insert('option', [
            'id' => '88',
            'name' => "Тільки стан поверхні проїзної частини, її ширину, наявність узбіч або тротуарі.",
            'num' => '1',
            'question_id' => '27',
        ]);
        $this->insert('option', [
            'id' => '89',
            'name' => "Лише наявність дорожніх знаків, дорожньої розмітки, світлофорів та огороджень.",
            'num' => '2',
            'question_id' => '27',
        ]);
        $this->insert('option', [
            'id' => '90',
            'name' => "Лише наявність перешкод на певній ділянці дороги.",
            'num' => '3',
            'question_id' => '27',
        ]);
        $this->insert('option', [
            'id' => '91',
            'name' => "Будь-що перелічене вище.",
            'num' => '4',
            'question_id' => '27',
        ]);
        $this->insert('option', [
            'id' => '92',
            'name' => "Тільки перелічене у відповідях 1 і 2.",
            'num' => '5',
            'question_id' => '27',
        ]);
        $this->insert('option', [
            'id' => '93',
            'name' => "Тільки його технічну несправність.",
            'num' => '1',
            'question_id' => '28',
        ]);
        $this->insert('option', [
            'id' => '94',
            'name' => "Тільки небезпеку, яка створюється вантажем, що перевозиться, або перешкодою на дорозі.",
            'num' => '2',
            'question_id' => '28',
        ]);
        $this->insert('option', [
            'id' => '95',
            'name' => "Тільки небезпеку, яка створюється станом учасника дорожнього руху.",
            'num' => '3',
            'question_id' => '28',
        ]);
        $this->insert('option', [
            'id' => '96',
            'name' => "Будь-що перелічене вище.",
            'num' => '4',
            'question_id' => '28',
        ]);
        $this->insert('option', [
            'id' => '97',
            'name' => "Тільки легковий автомобіль.",
            'num' => '1',
            'question_id' => '29',
        ]);
        $this->insert('option', [
            'id' => '98',
            'name' => "Тільки мікроавтобус, що стоїть.",
            'num' => '2',
            'question_id' => '29',
        ]);
        $this->insert('option', [
            'id' => '99',
            'name' => "Обидва транспортні засоби.",
            'num' => '3',
            'question_id' => '29',
        ]);
        $this->insert('option', [
            'id' => '100',
            'name' => "Транспортний засіб, що рухається по трамвайній колії.",
            'num' => '1',
            'question_id' => '30',
        ]);
        $this->insert('option', [
            'id' => '101',
            'name' => "Тільки трамваї.",
            'num' => '2',
            'question_id' => '30',
        ]);
        $this->insert('option', [
            'id' => '102',
            'name' => "Трамваї та платформи зі спеціальним обладнанням, що рухаються по трамвайних коліях.",
            'num' => '3',
            'question_id' => '30',
        ]);
        $this->insert('option', [
            'id' => '103',
            'name' => "Тільки з покриттям відносно ґрунтової чипозначена відповідними знаками.",
            'num' => '1',
            'question_id' => '31',
        ]);
        $this->insert('option', [
            'id' => '104',
            'name' => "Тільки чотирисмугова відносно двосмугової і двосмугова відносно односмугової.",
            'num' => '2',
            'question_id' => '31',
        ]);
        $this->insert('option', [
            'id' => '105',
            'name' => "Тільки з більшою інтенсивністю руху відносно дороги з меншою інтенсивністю.",
            'num' => '3',
            'question_id' => '31',
        ]);
        $this->insert('option', [
            'id' => '106',
            'name' => "Будь-яка з перелічених вище.",
            'num' => '4',
            'question_id' => '31',
        ]);
        $this->insert('option', [
            'id' => '107',
            'name' => "300 кг.",
            'num' => '1',
            'question_id' => '32',
        ]);
        $this->insert('option', [
            'id' => '108',
            'name' => "400 кг.",
            'num' => '2',
            'question_id' => '32',
        ]);
        $this->insert('option', [
            'id' => '109',
            'name' => "500 кг.",
            'num' => '3',
            'question_id' => '32',
        ]);
        $this->insert('option', [
            'id' => '110',
            'name' => "Тільки транспортних засобів.",
            'num' => '1',
            'question_id' => '33',
        ]);
        $this->insert('option', [
            'id' => '111',
            'name' => "Транспортних засобів та (або) пішоходів.",
            'num' => '2',
            'question_id' => '33',
        ]);
        $this->insert('option', [
            'id' => '112',
            'name' => "Між бічними частинами транспортних засобів, що рухаються тільки в зустрічному напрямку.",
            'num' => '1',
            'question_id' => '34',
        ]);
        $this->insert('option', [
            'id' => '113',
            'name' => "Між бічними частинами транспортних засобів, що рухаються тільки в попутному напрямку.",
            'num' => '2',
            'question_id' => '34',
        ]);
        $this->insert('option', [
            'id' => '114',
            'name' => "Тільки між рухомим транспортним засобом та іншим об'єктом.",
            'num' => '3',
            'question_id' => '34',
        ]);
        $this->insert('option', [
            'id' => '115',
            'name' => "У всіх перелічених вище випадках.",
            'num' => '4',
            'question_id' => '34',
        ]);
        $this->insert('option', [
            'id' => '116',
            'name' => "Тільки місце перехрещення доріг на одному рівні.",
            'num' => '1',
            'question_id' => '35',
        ]);
        $this->insert('option', [
            'id' => '117',
            'name' => "Тільки місце прилягання або розгалуження доріг на одному рівні.",
            'num' => '2',
            'question_id' => '35',
        ]);
        $this->insert('option', [
            'id' => '118',
            'name' => "Тільки місце прилягання до дороги виїзду з прилеглої території.",
            'num' => '3',
            'question_id' => '35',
        ]);
        $this->insert('option', [
            'id' => '119',
            'name' => "Усі перелічені вище місця.",
            'num' => '4',
            'question_id' => '35',
        ]);
        $this->insert('option', [
            'id' => '120',
            'name' => "Тільки місця, перелічені у відповідях 1 і 2.",
            'num' => '5',
            'question_id' => '35',
        ]);
        $this->insert('option', [
            'id' => '121',
            'name' => "Тільки 1.",
            'num' => '1',
            'question_id' => '36',
        ]);
        $this->insert('option', [
            'id' => '122',
            'name' => "Тільки 1 і 2.",
            'num' => '2',
            'question_id' => '36',
        ]);
        $this->insert('option', [
            'id' => '123',
            'name' => "Тільки 1,2 І 3.",
            'num' => '3',
            'question_id' => '36',
        ]);
        $this->insert('option', [
            'id' => '124',
            'name' => "Тільки 1,2 і 4.",
            'num' => '4',
            'question_id' => '36',
        ]);
        $this->insert('option', [
            'id' => '125',
            'name' => "Усі зображені.",
            'num' => '5',
            'question_id' => '36',
        ]);
        $this->insert('option', [
            'id' => '126',
            'name' => "Вантажу.",
            'num' => '1',
            'question_id' => '37',
        ]);
        $this->insert('option', [
            'id' => '127',
            'name' => "Пасажирів та їхнього багажу.",
            'num' => '2',
            'question_id' => '37',
        ]);
        $this->insert('option', [
            'id' => '128',
            'name' => "Вантажу або пасажирів та їхнього багажу.",
            'num' => '3',
            'question_id' => '37',
        ]);
        $this->insert('option', [
            'id' => '129',
            'name' => "Якщо це необхідно тільки для посадки (висадки) пасажирів або навантаження (розвантаження) вантажу.",
            'num' => '1',
            'question_id' => '38',
        ]);
        $this->insert('option', [
            'id' => '130',
            'name' => "Якщо це необхідно тільки для надання переваги в русі.",
            'num' => '2',
            'question_id' => '38',
        ]);
        $this->insert('option', [
            'id' => '131',
            'name' => "У будь-якому з перелічених випадків.",
            'num' => '3',
            'question_id' => '38',
        ]);
        $this->insert('option', [
            'id' => '132',
            'name' => "Тільки водієві мотоцикла.",
            'num' => '1',
            'question_id' => '39',
        ]);
        $this->insert('option', [
            'id' => '133',
            'name' => "Тільки водієві легкового автомобіля.",
            'num' => '2',
            'question_id' => '39',
        ]);
        $this->insert('option', [
            'id' => '134',
            'name' => "Водіям мотоцикла і легкового автомобіля.",
            'num' => '3',
            'question_id' => '39',
        ]);
        $this->insert('option', [
            'id' => '135',
            'name' => "Заборонено водіям мотоцикла і мікроавтобуса.",
            'num' => '4',
            'question_id' => '39',
        ]);
        $this->insert('option', [
            'id' => '136',
            'name' => "Тільки діями учасників дорожнього руху.",
            'num' => '1',
            'question_id' => '40',
        ]);
        $this->insert('option', [
            'id' => '137',
            'name' => "Тільки бездіяльністю учасників дорожнього руху.",
            'num' => '2',
            'question_id' => '40',
        ]);
        $this->insert('option', [
            'id' => '138',
            'name' => "Діями або бездіяльністю учасників дорожнього руху чи інших осіб.",
            'num' => '3',
            'question_id' => '40',
        ]);
        $this->insert('option', [
            'id' => '139',
            'name' => "Тільки в сутінках, в умовах туману, дощу, снігопаду тощо.",
            'num' => '1',
            'question_id' => '41',
        ]);
        $this->insert('option', [
            'id' => '140',
            'name' => "Тільки на ділянках крутих підйомів, закругленнях дороги.",
            'num' => '2',
            'question_id' => '41',
        ]);
        $this->insert('option', [
            'id' => '141',
            'name' => "Тільки обмежена насадженнями або транспортними засобами.",
            'num' => '3',
            'question_id' => '41',
        ]);
        $this->insert('option', [
            'id' => '142',
            'name' => "У всіх перелічених вище випадках.",
            'num' => '4',
            'question_id' => '41',
        ]);
        $this->insert('option', [
            'id' => '143',
            'name' => "1.",
            'num' => '1',
            'question_id' => '42',
        ]);
        $this->insert('option', [
            'id' => '144',
            'name' => "2.",
            'num' => '2',
            'question_id' => '42',
        ]);
        $this->insert('option', [
            'id' => '145',
            'name' => "3.",
            'num' => '3',
            'question_id' => '42',
        ]);
        $this->insert('option', [
            'id' => '146',
            'name' => "4.",
            'num' => '4',
            'question_id' => '42',
        ]);
        $this->insert('option', [
            'id' => '147',
            'name' => "5.",
            'num' => '5',
            'question_id' => '42',
        ]);
        $this->insert('option', [
            'id' => '148',
            'name' => "Тільки людей.",
            'num' => '1',
            'question_id' => '43',
        ]);
        $this->insert('option', [
            'id' => '149',
            'name' => "Тільки вантажу.",
            'num' => '2',
            'question_id' => '43',
        ]);
        $this->insert('option', [
            'id' => '150',
            'name' => "Тільки вантажу без встановленого на ньому спеціального обладнання.",
            'num' => '3',
            'question_id' => '43',
        ]);
        $this->insert('option', [
            'id' => '151',
            'name' => "Людей і (або) вантажу, а також встановленого на ньому спеціального обладнання чи механізмів.",
            'num' => '4',
            'question_id' => '43',
        ]);
        $this->insert('option', [
            'id' => '152',
            'name' => "Попереду по тій самій смузі, що й автомобіль, яким ви керуєте.",
            'num' => '1',
            'question_id' => '44',
        ]);
        $this->insert('option', [
            'id' => '153',
            'name' => "Попереду по будь-якій смузі в попутному напрямку з автомобілем, яким ви керуєте.",
            'num' => '2',
            'question_id' => '44',
        ]);
        $this->insert('option', [
            'id' => '154',
            'name' => "У зустрічному напрямку за відсутності розділювальної смуги.",
            'num' => '3',
            'question_id' => '44',
        ]);
        $this->insert('option', [
            'id' => '155',
            'name' => "У будь-якому напрямку або у будь-якій смузі.",
            'num' => '4',
            'question_id' => '44',
        ]);
        $this->insert('option', [
            'id' => '156',
            'name' => "Над іншою дорогою.",
            'num' => '1',
            'question_id' => '45',
        ]);
        $this->insert('option', [
            'id' => '157',
            'name' => "Тільки через річку або яр.",
            'num' => '2',
            'question_id' => '45',
        ]);
        $this->insert('option', [
            'id' => '158',
            'name' => "Через річку, яр та інші перешкоди.",
            'num' => '3',
            'question_id' => '45',
        ]);
        $this->insert('option', [
            'id' => '159',
            'name' => "Тільки загинули люди.",
            'num' => '1',
            'question_id' => '46',
        ]);
        $this->insert('option', [
            'id' => '160',
            'name' => "Тільки загинули або поранені люди.",
            'num' => '2',
            'question_id' => '46',
        ]);
        $this->insert('option', [
            'id' => '161',
            'name' => "Тільки завдано матеріальних збитків.",
            'num' => '3',
            'question_id' => '46',
        ]);
        $this->insert('option', [
            'id' => '162',
            'name' => "Загинули або поранені люди чи завдано матеріальних збитків.",
            'num' => '4',
            'question_id' => '46',
        ]);
        $this->insert('option', [
            'id' => '163',
            'name' => "Тільки «Початок населеного пункту» і «Кінець населеного пункту» на синьому фоні.",
            'num' => '1',
            'question_id' => '47',
        ]);
        $this->insert('option', [
            'id' => '164',
            'name' => "Тільки «Початок населеного пункту» і «Кінець населеного пункту» на білому фоні.",
            'num' => '2',
            'question_id' => '47',
        ]);
        $this->insert('option', [
            'id' => '165',
            'name' => "«Початок населеного пункту» і «Кінець населеного пункту» на білому або синьому фоні.",
            'num' => '3',
            'question_id' => '47',
        ]);
        $this->insert('option', [
            'id' => '166',
            'name' => "Особа, яка навчає водінню.",
            'num' => '1',
            'question_id' => '48',
        ]);
        $this->insert('option', [
            'id' => '167',
            'name' => "Особа, яка керує транспортним засобом і не має посвідчення водія.",
            'num' => '2',
            'question_id' => '48',
        ]);
        $this->insert('option', [
            'id' => '168',
            'name' => "Обідві перелічені особи.",
            'num' => '3',
            'question_id' => '48',
        ]);
        $this->insert('option', [
            'id' => '169',
            'name' => "Проїзній частині в одному напрямку.",
            'num' => '1',
            'question_id' => '49',
        ]);
        $this->insert('option', [
            'id' => '170',
            'name' => "Узбіччі назустріч руху транспортних засобів не більше ніж по три людини в ряд.",
            'num' => '2',
            'question_id' => '49',
        ]);
        $this->insert('option', [
            'id' => '171',
            'name' => "Тротуарах і пішохідних доріжках не більше ніж по три людини в ряд.",
            'num' => '3',
            'question_id' => '49',
        ]);
        $this->insert('option', [
            'id' => '172',
            'name' => "Тільки дорожніми умовами.",
            'num' => '1',
            'question_id' => '50',
        ]);
        $this->insert('option', [
            'id' => '173',
            'name' => "Тільки наявністю перешкод на певній ділянці дороги.",
            'num' => '2',
            'question_id' => '50',
        ]);
        $this->insert('option', [
            'id' => '174',
            'name' => "Тільки інтенсивністю і рівнем організації дорожнього руху.",
            'num' => '3',
            'question_id' => '50',
        ]);
        $this->insert('option', [
            'id' => '175',
            'name' => "Усіма переліченими вище чинниками.",
            'num' => '4',
            'question_id' => '50',
        ]);
        $this->insert('option', [
            'id' => '176',
            'name' => "Тільки чинниками, переліченими у відповідях 2 і 3.",
            'num' => '5',
            'question_id' => '50',
        ]);
        $this->insert('option', [
            'id' => '177',
            'name' => "Чоловік.",
            'num' => '1',
            'question_id' => '51',
        ]);
        $this->insert('option', [
            'id' => '178',
            'name' => "Жінка.",
            'num' => '2',
            'question_id' => '51',
        ]);
        $this->insert('option', [
            'id' => '179',
            'name' => "Обидва пішоходи.",
            'num' => '3',
            'question_id' => '51',
        ]);
        $this->insert('option', [
            'id' => '180',
            'name' => "Тільки водій або пішохід.",
            'num' => '1',
            'question_id' => '52',
        ]);
        $this->insert('option', [
            'id' => '181',
            'name' => "Тільки водій, пішохід чи пасажир.",
            'num' => '2',
            'question_id' => '52',
        ]);
        $this->insert('option', [
            'id' => '182',
            'name' => "Водій, пішохід, пасажир, погонич тварин.",
            'num' => '3',
            'question_id' => '52',
        ]);
        $this->insert('option', [
            'id' => '183',
            'name' => "Тільки над автомагістраллю.",
            'num' => '1',
            'question_id' => '53',
        ]);
        $this->insert('option', [
            'id' => '184',
            'name' => "Тільки над автомагістраллю або дорогою для автомобілів.",
            'num' => '2',
            'question_id' => '53',
        ]);
        $this->insert('option', [
            'id' => '185',
            'name' => "Тільки над залізницею.",
            'num' => '3',
            'question_id' => '53',
        ]);
        $this->insert('option', [
            'id' => '186',
            'name' => "Над будь-якою дорогою (вулицею), у тому числі залізницею.",
            'num' => '4',
            'question_id' => '53',
        ]);
        $this->insert('option', [
            'id' => '187',
            'name' => "Тільки видимістю в напрямку руху і станом поверхні проїзної частини.",
            'num' => '1',
            'question_id' => '54',
        ]);
        $this->insert('option', [
            'id' => '188',
            'name' => "Тільки шириною проїзної частини, величиною її ухилів на спусках і підйомах, віражами і заокругленнями.",
            'num' => '2',
            'question_id' => '54',
        ]);
        $this->insert('option', [
            'id' => '189',
            'name' => "Тільки наявністю тротуарів або узбіч, штучного освітлення.",
            'num' => '3',
            'question_id' => '54',
        ]);
        $this->insert('option', [
            'id' => '190',
            'name' => "Тільки наявністю засобів організації дорожнього руху та їх станом.",
            'num' => '4',
            'question_id' => '54',
        ]);
        $this->insert('option', [
            'id' => '191',
            'name' => "Усіх перелічених вище чинників.",
            'num' => '5',
            'question_id' => '54',
        ]);
        $this->insert('option', [
            'id' => '192',
            'name' => "На лівому.",
            'num' => '1',
            'question_id' => '55',
        ]);
        $this->insert('option', [
            'id' => '193',
            'name' => "На правому.",
            'num' => '2',
            'question_id' => '55',
        ]);
        $this->insert('option', [
            'id' => '194',
            'name' => "Чотири",
            'num' => '1',
            'question_id' => '56',
        ]);
        $this->insert('option', [
            'id' => '195',
            'name' => "Шість.",
            'num' => '2',
            'question_id' => '56',
        ]);
        $this->insert('option', [
            'id' => '196',
            'name' => "Вісім.",
            'num' => '3',
            'question_id' => '56',
        ]);
        $this->insert('option', [
            'id' => '197',
            'name' => "Дев'ять.",
            'num' => '4',
            'question_id' => '56',
        ]);
        $this->insert('option', [
            'id' => '198',
            'name' => "Десять.",
            'num' => '5',
            'question_id' => '56',
        ]);
        $this->insert('option', [
            'id' => '199',
            'name' => "Пов’язане з виїздом на смугу зустрічного руху.",
            'num' => '1',
            'question_id' => '57',
        ]);
        $this->insert('option', [
            'id' => '200',
            'name' => "Пов’язане з виїздом із займаної смуги і рухом зі швидкістю, що перевищує встановлену для цих дорожніх умов.",
            'num' => '2',
            'question_id' => '57',
        ]);
        $this->insert('option', [
            'id' => '201',
            'name' => "Зі швидкістю, яка перевищує швидкість попутного транспортного засобу, що рухається по суміжній смузі.",
            'num' => '3',
            'question_id' => '57',
        ]);
        $this->insert('option', [
            'id' => '202',
            'name' => "Яке виконують у будь-яких перелічених вище випадках.",
            'num' => '4',
            'question_id' => '57',
        ]);
        $this->insert('option', [
            'id' => '203',
            'name' => "За якої водій має змогу безпечно керувати транспортним засобом та контролювати його рух у конкретних дорожніх умовах.",
            'num' => '1',
            'question_id' => '58',
        ]);
        $this->insert('option', [
            'id' => '204',
            'name' => "Яка визначена тільки технічною характеристикою цього транспортного засобу.",
            'num' => '2',
            'question_id' => '58',
        ]);
        $this->insert('option', [
            'id' => '205',
            'name' => "Яка визначена як гранична для руху в населених пунктах.",
            'num' => '3',
            'question_id' => '58',
        ]);
        $this->insert('option', [
            'id' => '206',
            'name' => "Зазначена у відповідях 2 і 3.",
            'num' => '4',
            'question_id' => '58',
        ]);
        $this->insert('option', [
            'id' => '207',
            'name' => "Дозволено тільки за відсутності лінії, яка позначає край проїзної частини.",
            'num' => '1',
            'question_id' => '59',
        ]);
        $this->insert('option', [
            'id' => '208',
            'name' => "Дозволено незалежно від наявності лінії, яка позначає край проїзної частини.",
            'num' => '2',
            'question_id' => '59',
        ]);
        $this->insert('option', [
            'id' => '209',
            'name' => "Заборонено.",
            'num' => '3',
            'question_id' => '59',
        ]);
        $this->insert('option', [
            'id' => '210',
            'name' => "Тільки пасажирських транспортних засобів.",
            'num' => '1',
            'question_id' => '60',
        ]);
        $this->insert('option', [
            'id' => '211',
            'name' => "Тільки вантажних автомобілів.",
            'num' => '2',
            'question_id' => '60',
        ]);
        $this->insert('option', [
            'id' => '212',
            'name' => "Тільки мотоциклів.",
            'num' => '3',
            'question_id' => '60',
        ]);
        $this->insert('option', [
            'id' => '213',
            'name' => "Будь-якого транспортного засобу.",
            'num' => '4',
            'question_id' => '60',
        ]);
        $this->insert('option', [
            'id' => '214',
            'name' => "Тільки працівника міліції.",
            'num' => '1',
            'question_id' => '61',
        ]);
        $this->insert('option', [
            'id' => '215',
            'name' => "Тільки працівника військової інспекції безпеки дорожнього руху.",
            'num' => '2',
            'question_id' => '61',
        ]);
        $this->insert('option', [
            'id' => '216',
            'name' => "Тільки чергового на залізничному переїзді або поромній переправі.",
            'num' => '3',
            'question_id' => '61',
        ]);
        $this->insert('option', [
            'id' => '217',
            'name' => "Будь-кого згаданого вище.",
            'num' => '4',
            'question_id' => '61',
        ]);
        $this->insert('option', [
            'id' => '218',
            'name' => "Тільки «Перехрещення з другорядною дорогою».",
            'num' => '1',
            'question_id' => '62',
        ]);
        $this->insert('option', [
            'id' => '219',
            'name' => "Тільки «Прилягання другорядної дороги».",
            'num' => '2',
            'question_id' => '62',
        ]);
        $this->insert('option', [
            'id' => '220',
            'name' => "Тільки «Головна дорога».",
            'num' => '3',
            'question_id' => '62',
        ]);
        $this->insert('option', [
            'id' => '221',
            'name' => "Тільки «Перевага перед зустрічним рухом».",
            'num' => '4',
            'question_id' => '62',
        ]);
        $this->insert('option', [
            'id' => '222',
            'name' => "Будь-якими переліченими у відповідях 1 — 3.",
            'num' => '5',
            'question_id' => '62',
        ]);
        $this->insert('option', [
            'id' => '223',
            'name' => "Тільки по крайній правій смузі.",
            'num' => '1',
            'question_id' => '63',
        ]);
        $this->insert('option', [
            'id' => '224',
            'name' => "Тільки по крайній лівій смузі.",
            'num' => '2',
            'question_id' => '63',
        ]);
        $this->insert('option', [
            'id' => '225',
            'name' => "Поруч по суміжній смузі.",
            'num' => '3',
            'question_id' => '63',
        ]);
        $this->insert('option', [
            'id' => '226',
            'name' => "Незадовільної дорожньої обстановки, яка перешкоджає дорожньому руху.",
            'num' => '1',
            'question_id' => '64',
        ]);
        $this->insert('option', [
            'id' => '227',
            'name' => "Зміни дорожньої обстановки або технічного стану транспортного засобу, яка змушує водія до зміни напрямку руху.",
            'num' => '2',
            'question_id' => '64',
        ]);
        $this->insert('option', [
            'id' => '228',
            'name' => "Зміни дорожньої обстановки або технічного стану транспортного засобу, яка загрожує безпеці дорожнього руху і змушує водія негайно зменшити швидкість або зупинити транспортний засіб.",
            'num' => '3',
            'question_id' => '64',
        ]);
        $this->insert('option', [
            'id' => '229',
            'name' => "Тільки за межами дороги.",
            'num' => '1',
            'question_id' => '65',
        ]);
        $this->insert('option', [
            'id' => '230',
            'name' => "Тільки в межах дороги і позначено дорожнім знаком 4.13.",
            'num' => '2',
            'question_id' => '65',
        ]);
        $this->insert('option', [
            'id' => '231',
            'name' => "У межах дороги чи поза нею і позначено дорожнім знаком 4.13",
            'num' => '3',
            'question_id' => '65',
        ]);
        $this->insert('option', [
            'id' => '232',
            'name' => "Порушує.",
            'num' => '1',
            'question_id' => '66',
        ]);
        $this->insert('option', [
            'id' => '233',
            'name' => "Не порушує.",
            'num' => '2',
            'question_id' => '66',
        ]);
        $this->insert('option', [
            'id' => '234',
            'name' => "Транспортування тягачем причепа згідно з інструкцією з його використання.",
            'num' => '1',
            'question_id' => '67',
        ]);
        $this->insert('option', [
            'id' => '235',
            'name' => "Переміщення вантажним автомобілем легкового автомобіля на жорсткому або гнучкому зчепленні.",
            'num' => '2',
            'question_id' => '67',
        ]);
        $this->insert('option', [
            'id' => '236',
            'name' => "Будь-яка перелічена вище дія.",
            'num' => '3',
            'question_id' => '67',
        ]);
        $this->insert('option', [
            'id' => '237',
            'name' => "Тільки фізична особа.",
            'num' => '1',
            'question_id' => '68',
        ]);
        $this->insert('option', [
            'id' => '238',
            'name' => "Тільки юридична особа.",
            'num' => '2',
            'question_id' => '68',
        ]);
        $this->insert('option', [
            'id' => '239',
            'name' => "Фізична чи юридична особа.",
            'num' => '3',
            'question_id' => '68',
        ]);
        $this->insert('option', [
            'id' => '240',
            'name' => "Організована група з трьох і більше транспортних засобів, які спільно рухаються в одному напрямку безпосередньо один за одним з постійно увімкненим ближнім світлом фар.",
            'num' => '1',
            'question_id' => '69',
        ]);
        $this->insert('option', [
            'id' => '241',
            'name' => "Група автомобілів, яка складається з оперативного транспортного засобу з увімкненим проблисковим маячком синього кольору і супроводжуваного автомобіля.",
            'num' => '2',
            'question_id' => '69',
        ]);
        $this->insert('option', [
            'id' => '242',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '70',
        ]);
        $this->insert('option', [
            'id' => '243',
            'name' => "Тільки на правому",
            'num' => '2',
            'question_id' => '70',
        ]);
        $this->insert('option', [
            'id' => '244',
            'name' => "На обох.",
            'num' => '3',
            'question_id' => '70',
        ]);
        $this->insert('option', [
            'id' => '245',
            'name' => "Тільки на жорсткому зчепленні.",
            'num' => '1',
            'question_id' => '71',
        ]);
        $this->insert('option', [
            'id' => '246',
            'name' => "Тільки на гнучкому зчепленні.",
            'num' => '2',
            'question_id' => '71',
        ]);
        $this->insert('option', [
            'id' => '247',
            'name' => "Тільки способом часткового навантаження на платформу.",
            'num' => '3',
            'question_id' => '71',
        ]);
        $this->insert('option', [
            'id' => '248',
            'name' => "Тільки способом часткового навантаження на спеціальне опорне пристосування.",
            'num' => '4',
            'question_id' => '71',
        ]);
        $this->insert('option', [
            'id' => '249',
            'name' => "Будь-яким з перелічених вище способів.",
            'num' => '5',
            'question_id' => '71',
        ]);
        $this->insert('option', [
            'id' => '250',
            'name' => "Тільки в маршрутному мікроавтобусі, але не причетна до керування ним.",
            'num' => '1',
            'question_id' => '72',
        ]);
        $this->insert('option', [
            'id' => '251',
            'name' => "Тільки в тролейбусі й трамваї.",
            'num' => '2',
            'question_id' => '72',
        ]);
        $this->insert('option', [
            'id' => '252',
            'name' => "У будь-якому транспортному засобі, але не причетна до керування ним.",
            'num' => '3',
            'question_id' => '72',
        ]);
        $this->insert('option', [
            'id' => '253',
            'name' => "Мотоцикла і трактора.",
            'num' => '1',
            'question_id' => '73',
        ]);
        $this->insert('option', [
            'id' => '254',
            'name' => "Легкового автомобіля і мотоцикла.",
            'num' => '2',
            'question_id' => '73',
        ]);
        $this->insert('option', [
            'id' => '255',
            'name' => "Мікроавтобуса, вантажного та легкового автомобілів.",
            'num' => '3',
            'question_id' => '73',
        ]);
        $this->insert('option', [
            'id' => '256',
            'name' => "Що приводиться в рух мускульною силою людини або за допомогою двигуна об’ємом до 50 куб.см.",
            'num' => '1',
            'question_id' => '74',
        ]);
        $this->insert('option', [
            'id' => '257',
            'name' => "Двоколісний і має двигун з робочим об’ємом до 50 куб.см.",
            'num' => '2',
            'question_id' => '74',
        ]);
        $this->insert('option', [
            'id' => '258',
            'name' => "Який приводиться в рух мускульною силою людини, що перебуває на ньому, крім інвалідних колясок.",
            'num' => '3',
            'question_id' => '74',
        ]);
        $this->insert('option', [
            'id' => '259',
            'name' => "Тільки туманом, дощем, снігопадом.",
            'num' => '1',
            'question_id' => '75',
        ]);
        $this->insert('option', [
            'id' => '260',
            'name' => "Тільки геометричними параметрами дороги, придорожніми інженерними спорудами, насадженнями та іншими об'єктами.",
            'num' => '2',
            'question_id' => '75',
        ]);
        $this->insert('option', [
            'id' => '261',
            'name' => "Тільки транспортними засобами.",
            'num' => '3',
            'question_id' => '75',
        ]);
        $this->insert('option', [
            'id' => '262',
            'name' => "Будь-чим з переліченого вище.",
            'num' => '4',
            'question_id' => '75',
        ]);
        $this->insert('option', [
            'id' => '263',
            'name' => "Тільки переліченим у відповідях 2 і 3.",
            'num' => '5',
            'question_id' => '75',
        ]);
        $this->insert('option', [
            'id' => '264',
            'name' => "Поза транспортним засобом, у тому числі виконує на дорозі роботу.",
            'num' => '1',
            'question_id' => '76',
        ]);
        $this->insert('option', [
            'id' => '265',
            'name' => "Тільки поза механічним транспортним засобом, у тому числі виконує на дорозі роботу.",
            'num' => '2',
            'question_id' => '76',
        ]);
        $this->insert('option', [
            'id' => '266',
            'name' => "Поза транспортним засобом і не виконує на дорозі будь-якої роботи.",
            'num' => '3',
            'question_id' => '76',
        ]);
        $this->insert('option', [
            'id' => '267',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '77',
        ]);
        $this->insert('option', [
            'id' => '268',
            'name' => "Тільки на правому.",
            'num' => '2',
            'question_id' => '77',
        ]);
        $this->insert('option', [
            'id' => '269',
            'name' => "На обох.",
            'num' => '3',
            'question_id' => '77',
        ]);
        $this->insert('option', [
            'id' => '270',
            'name' => "Початку вечірніх сутінків до початку видимості дороги на відстані більше ніж 300 м.",
            'num' => '1',
            'question_id' => '78',
        ]);
        $this->insert('option', [
            'id' => '271',
            'name' => "Заходу сонця до сходу сонця.",
            'num' => '2',
            'question_id' => '78',
        ]);
        $this->insert('option', [
            'id' => '272',
            'name' => "Початку вечірніх до закінчення ранкових сутінків.",
            'num' => '3',
            'question_id' => '78',
        ]);
        $this->insert('option', [
            'id' => '273',
            'name' => "Перешкодою для руху.",
            'num' => '1',
            'question_id' => '79',
        ]);
        $this->insert('option', [
            'id' => '274',
            'name' => "Небезпекою для руху.",
            'num' => '2',
            'question_id' => '79',
        ]);
        $this->insert('option', [
            'id' => '275',
            'name' => "Якщо її ширина не менше ніж 2,5 м і позначена дорожньою розміткою.",
            'num' => '1',
            'question_id' => '80',
        ]);
        $this->insert('option', [
            'id' => '276',
            'name' => "Якщо вона позначена дорожньою розміткою і має ширину, достатню для руху будь-яких транспортних засобів.",
            'num' => '2',
            'question_id' => '80',
        ]);
        $this->insert('option', [
            'id' => '277',
            'name' => "Якщо її ширина не менше ніж 2,75 м і позначена або не позначена дорожньою розміткою.",
            'num' => '3',
            'question_id' => '80',
        ]);
        $this->insert('option', [
            'id' => '278',
            'name' => "Так.",
            'num' => '1',
            'question_id' => '81',
        ]);
        $this->insert('option', [
            'id' => '279',
            'name' => "Ні.",
            'num' => '2',
            'question_id' => '81',
        ]);
        $this->insert('option', [
            'id' => '280',
            'name' => "Тільки на велосипедах.",
            'num' => '1',
            'question_id' => '82',
        ]);
        $this->insert('option', [
            'id' => '281',
            'name' => "Тільки на мопедах.",
            'num' => '2',
            'question_id' => '82',
        ]);
        $this->insert('option', [
            'id' => '282',
            'name' => "На мопедах і велосипедах.",
            'num' => '3',
            'question_id' => '82',
        ]);
        $this->insert('option', [
            'id' => '283',
            'name' => "З бічним причепом або без нього, що мають двигун з робочим об’ємом більше ніж 50 куб.см або електродвигун потужністю більше ніж 4 кВт.",
            'num' => '1',
            'question_id' => '83',
        ]);
        $this->insert('option', [
            'id' => '284',
            'name' => "Що мають двигун з робочим об’ємом до 50 куб.см або електродвигун потужністю до 4 кВт.",
            'num' => '2',
            'question_id' => '83',
        ]);
        $this->insert('option', [
            'id' => '285',
            'name' => "Тільки без бічного причепа, що мають двигун з робочим об’ємом 50 куб.см або електродвигун потужністю 4 кВт.",
            'num' => '3',
            'question_id' => '83',
        ]);
        $this->insert('option', [
            'id' => '286',
            'name' => "Вантажного автомобіля.",
            'num' => '1',
            'question_id' => '84',
        ]);
        $this->insert('option', [
            'id' => '287',
            'name' => "Мотоцикла.",
            'num' => '2',
            'question_id' => '84',
        ]);
        $this->insert('option', [
            'id' => '288',
            'name' => "Тільки безпечної швидкості та здійснення безпечного маневру.",
            'num' => '1',
            'question_id' => '85',
        ]);
        $this->insert('option', [
            'id' => '289',
            'name' => "Тільки місця стоянки поза населеними пунктами.",
            'num' => '2',
            'question_id' => '85',
        ]);
        $this->insert('option', [
            'id' => '290',
            'name' => "Тільки місця розвороту чи обгону.",
            'num' => '3',
            'question_id' => '85',
        ]);
        $this->insert('option', [
            'id' => '291',
            'name' => "Усього переліченого вище.",
            'num' => '4',
            'question_id' => '85',
        ]);
        $this->insert('option', [
            'id' => '292',
            'name' => "Тільки місць, перелічених у відповідях 2 і 3.",
            'num' => '5',
            'question_id' => '85',
        ]);
        $this->insert('option', [
            'id' => '293',
            'name' => "Розвороту транспортних засобів.",
            'num' => '1',
            'question_id' => '86',
        ]);
        $this->insert('option', [
            'id' => '294',
            'name' => "Стоянки транспортних засобів.",
            'num' => '2',
            'question_id' => '86',
        ]);
        $this->insert('option', [
            'id' => '295',
            'name' => "Розділення суміжних проїзних частин.",
            'num' => '3',
            'question_id' => '86',
        ]);
        $this->insert('option', [
            'id' => '296',
            'name' => "Будь-чого переліченого у відповідях.",
            'num' => '4',
            'question_id' => '86',
        ]);
        $this->insert('option', [
            'id' => '297',
            'name' => "Причепи до легкових та вантажних автомобілів.",
            'num' => '1',
            'question_id' => '87',
        ]);
        $this->insert('option', [
            'id' => '298',
            'name' => "Причепи до легкових та вантажних, а також напівпричіп.",
            'num' => '2',
            'question_id' => '87',
        ]);
        $this->insert('option', [
            'id' => '299',
            'name' => "Усі зображені.",
            'num' => '3',
            'question_id' => '87',
        ]);
        $this->insert('option', [
            'id' => '300',
            'name' => "Усі зображені, за винятком бічного причепа до мотоцикла.",
            'num' => '4',
            'question_id' => '87',
        ]);
        $this->insert('option', [
            'id' => '301',
            'name' => "Якщо він проїхав без зупинки перед перехрестям.",
            'num' => '1',
            'question_id' => '88',
        ]);
        $this->insert('option', [
            'id' => '302',
            'name' => "Якщо він здійснив виїзд на автомагістраль без зупинки.",
            'num' => '2',
            'question_id' => '88',
        ]);
        $this->insert('option', [
            'id' => '303',
            'name' => "Якщо він примусив інших учасників руху, які мають перевагу, змінити напрямок або швидкість руху.",
            'num' => '3',
            'question_id' => '88',
        ]);
        $this->insert('option', [
            'id' => '304',
            'name' => "У будь-якому з перелічених вище випадків.",
            'num' => '4',
            'question_id' => '88',
        ]);
        $this->insert('option', [
            'id' => '305',
            'name' => "Дворова територія, призначена для руху лише пішоходів.",
            'num' => '1',
            'question_id' => '89',
        ]);
        $this->insert('option', [
            'id' => '306',
            'name' => "Частина населеного пункту, призначена для руху лише пішоходів і велосипедистів.",
            'num' => '2',
            'question_id' => '89',
        ]);
        $this->insert('option', [
            'id' => '307',
            'name' => "Дворова територія, а також частина населеного пункту, позначена дорожнім знаком «Житлова зона».",
            'num' => '3',
            'question_id' => '89',
        ]);
        $this->insert('option', [
            'id' => '308',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '90',
        ]);
        $this->insert('option', [
            'id' => '309',
            'name' => "Тільки на правому.",
            'num' => '2',
            'question_id' => '90',
        ]);
        $this->insert('option', [
            'id' => '310',
            'name' => "Моменту реакції водія на небезпеку для руху до місця зупинки транспортного засобу.",
            'num' => '1',
            'question_id' => '91',
        ]);
        $this->insert('option', [
            'id' => '311',
            'name' => "Початку впливу на орган керування гальмової системи до місця зупинки транспортного засобу.",
            'num' => '2',
            'question_id' => '91',
        ]);
        $this->insert('option', [
            'id' => '312',
            'name' => "Місця яскраво виражених слідів гальмування до місця зупинки транспортного засобу.",
            'num' => '3',
            'question_id' => '91',
        ]);
        $this->insert('option', [
            'id' => '313',
            'name' => "Автомобілі, автобуси і мотоцикли.",
            'num' => '1',
            'question_id' => '92',
        ]);
        $this->insert('option', [
            'id' => '314',
            'name' => "Трактори і самохідні машини.",
            'num' => '2',
            'question_id' => '92',
        ]);
        $this->insert('option', [
            'id' => '315',
            'name' => "Легкові, вантажні автомобілі, мотоцикли і мопеди.",
            'num' => '3',
            'question_id' => '92',
        ]);
        $this->insert('option', [
            'id' => '316',
            'name' => "Тільки перелічені у відповідях 1 і 2 транспортні засоби.",
            'num' => '4',
            'question_id' => '92',
        ]);
        $this->insert('option', [
            'id' => '317',
            'name' => "Усі перелічені вище транспортні засоби.",
            'num' => '5',
            'question_id' => '92',
        ]);
        $this->insert('option', [
            'id' => '318',
            'name' => "Тільки зменшувати швидкість руху транспортного засобу або виконати об'їзд.",
            'num' => '1',
            'question_id' => '93',
        ]);
        $this->insert('option', [
            'id' => '319',
            'name' => "Тільки зменшувати швидкість руху або зупинити транспортний засіб.",
            'num' => '2',
            'question_id' => '93',
        ]);
        $this->insert('option', [
            'id' => '320',
            'name' => "Маневрувати або зменшувати швидкість руху аж до зупинки транспортного засобу.",
            'num' => '3',
            'question_id' => '93',
        ]);
        $this->insert('option', [
            'id' => '321',
            'name' => "Тільки в місцях її прилягання до узбіччя, тротуару або газону.",
            'num' => '1',
            'question_id' => '94',
        ]);
        $this->insert('option', [
            'id' => '322',
            'name' => "Тільки в місцях її прилягання до розділювальної смуги або смуги для руху трамваїв.",
            'num' => '2',
            'question_id' => '94',
        ]);
        $this->insert('option', [
            'id' => '323',
            'name' => "Тільки в місцях її прилягання до велосипедної або пішохідної доріжки.",
            'num' => '3',
            'question_id' => '94',
        ]);
        $this->insert('option', [
            'id' => '324',
            'name' => "У будь-якому переліченому вище місці.",
            'num' => '4',
            'question_id' => '94',
        ]);
        $this->insert('option', [
            'id' => '325',
            'name' => "Тільки механічних транспортних засобів.",
            'num' => '1',
            'question_id' => '95',
        ]);
        $this->insert('option', [
            'id' => '326',
            'name' => "Нерейковйх транспортних засобів.",
            'num' => '2',
            'question_id' => '95',
        ]);
        $this->insert('option', [
            'id' => '327',
            'name' => "Механічних транспортних засобів і пішоходів.",
            'num' => '3',
            'question_id' => '95',
        ]);
        $this->insert('option', [
            'id' => '328',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '96',
        ]);
        $this->insert('option', [
            'id' => '329',
            'name' => "Тільки на правому.",
            'num' => '2',
            'question_id' => '96',
        ]);
        $this->insert('option', [
            'id' => '330',
            'name' => "На обох.",
            'num' => '3',
            'question_id' => '96',
        ]);
        $this->insert('option', [
            'id' => '331',
            'name' => "Відстанню між дорожніми знаками, що позначають перехід.",
            'num' => '1',
            'question_id' => '97',
        ]);
        $this->insert('option', [
            'id' => '332',
            'name' => "Відстанню між пішохідними світлофорами.",
            'num' => '2',
            'question_id' => '97',
        ]);
        $this->insert('option', [
            'id' => '333',
            'name' => "У разі відсутності пішохідних світлофорів, дорожніх знаків та розмітки -— шириною тротуарів чи узбіч.",
            'num' => '3',
            'question_id' => '97',
        ]);
        $this->insert('option', [
            'id' => '334',
            'name' => "Одним зі згаданого вище.",
            'num' => '4',
            'question_id' => '97',
        ]);
        $this->insert('option', [
            'id' => '335',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '98',
        ]);
        $this->insert('option', [
            'id' => '336',
            'name' => "Тільки на правому.",
            'num' => '2',
            'question_id' => '98',
        ]);
        $this->insert('option', [
            'id' => '337',
            'name' => "На обох.",
            'num' => '3',
            'question_id' => '98',
        ]);
        $this->insert('option', [
            'id' => '338',
            'name' => "Одну.",
            'num' => '1',
            'question_id' => '99',
        ]);
        $this->insert('option', [
            'id' => '339',
            'name' => "Дві.",
            'num' => '2',
            'question_id' => '99',
        ]);
        $this->insert('option', [
            'id' => '340',
            'name' => "Чотири.",
            'num' => '3',
            'question_id' => '99',
        ]);
        $this->insert('option', [
            'id' => '341',
            'name' => "Дві.",
            'num' => '1',
            'question_id' => '100',
        ]);
        $this->insert('option', [
            'id' => '342',
            'name' => "Три.",
            'num' => '2',
            'question_id' => '100',
        ]);
        $this->insert('option', [
            'id' => '343',
            'name' => "Чотири.",
            'num' => '3',
            'question_id' => '100',
        ]);
        $this->insert('option', [
            'id' => '344',
            'name' => "П'ять.",
            'num' => '4',
            'question_id' => '100',
        ]);
        $this->insert('option', [
            'id' => '345',
            'name' => "Шість.",
            'num' => '5',
            'question_id' => '100',
        ]);
        $this->insert('option', [
            'id' => '346',
            'name' => "Одне.",
            'num' => '1',
            'question_id' => '101',
        ]);
        $this->insert('option', [
            'id' => '347',
            'name' => "Два.",
            'num' => '2',
            'question_id' => '101',
        ]);
        $this->insert('option', [
            'id' => '348',
            'name' => "Чотири.",
            'num' => '3',
            'question_id' => '101',
        ]);
        $this->insert('option', [
            'id' => '349',
            'name' => "Зупинка на проїзній частині через технічну несправність транспортного засобу.",
            'num' => '1',
            'question_id' => '102',
        ]);
        $this->insert('option', [
            'id' => '350',
            'name' => "Зупинка на проїзній частині, щоб дати дорогу пішоходу.",
            'num' => '2',
            'question_id' => '102',
        ]);
        $this->insert('option', [
            'id' => '351',
            'name' => "Зупинка на вимогу регулювальника.",
            'num' => '3',
            'question_id' => '102',
        ]);
        $this->insert('option', [
            'id' => '352',
            'name' => "У всіх перелічених випадках.",
            'num' => '4',
            'question_id' => '102',
        ]);
        $this->insert('option', [
            'id' => '353',
            'name' => "Одну смугу для руху.",
            'num' => '1',
            'question_id' => '103',
        ]);
        $this->insert('option', [
            'id' => '354',
            'name' => "Дві смуги для руху.",
            'num' => '2',
            'question_id' => '103',
        ]);
        $this->insert('option', [
            'id' => '355',
            'name' => "Три смуги для руху.",
            'num' => '3',
            'question_id' => '103',
        ]);
        $this->insert('option', [
            'id' => '356',
            'name' => "На головну дорогу.",
            'num' => '1',
            'question_id' => '104',
        ]);
        $this->insert('option', [
            'id' => '357',
            'name' => "На рівну за значенням дорогу.",
            'num' => '2',
            'question_id' => '104',
        ]);
        $this->insert('option', [
            'id' => '358',
            'name' => "Тільки «А».",
            'num' => '1',
            'question_id' => '105',
        ]);
        $this->insert('option', [
            'id' => '359',
            'name' => "Тільки «Б».",
            'num' => '2',
            'question_id' => '105',
        ]);
        $this->insert('option', [
            'id' => '360',
            'name' => "Тільки «В».",
            'num' => '3',
            'question_id' => '105',
        ]);
        $this->insert('option', [
            'id' => '361',
            'name' => "Всі зображені.",
            'num' => '4',
            'question_id' => '105',
        ]);
        $this->insert('option', [
            'id' => '362',
            'name' => "Тільки на лівому.",
            'num' => '1',
            'question_id' => '106',
        ]);
        $this->insert('option', [
            'id' => '363',
            'name' => "Тільки на правому.",
            'num' => '2',
            'question_id' => '106',
        ]);
        $this->insert('option', [
            'id' => '364',
            'name' => "На обох.",
            'num' => '3',
            'question_id' => '106',
        ]);
        $this->insert('option', [
            'id' => '365',
            'name' => "1.",
            'num' => '1',
            'question_id' => '107',
        ]);
        $this->insert('option', [
            'id' => '366',
            'name' => "2.",
            'num' => '2',
            'question_id' => '107',
        ]);
        $this->insert('option', [
            'id' => '367',
            'name' => "3.",
            'num' => '3',
            'question_id' => '107',
        ]);
        $this->insert('option', [
            'id' => '368',
            'name' => "Тільки повороти ліворуч, праворуч і перестроювання із смуги в смугу.",
            'num' => '1',
            'question_id' => '108',
        ]);
        $this->insert('option', [
            'id' => '369',
            'name' => "Тільки перестроювання із смуги в смугу.",
            'num' => '2',
            'question_id' => '108',
        ]);
        $this->insert('option', [
            'id' => '370',
            'name' => "Тільки початок руху і рух заднім ходом.",
            'num' => '3',
            'question_id' => '108',
        ]);
        $this->insert('option', [
            'id' => '371',
            'name' => "Тільки повороти праворуч і ліворуч, розворот і з’їзд з проїзноїчастини.",
            'num' => '4',
            'question_id' => '108',
        ]);
        $this->insert('option', [
            'id' => '372',
            'name' => "Все перелічене.",
            'num' => '5',
            'question_id' => '108',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 1])->all();
        $questionIDs = [];
        foreach($query as $key=>$val) $questionIDs[] = $val['id'];
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
