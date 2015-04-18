<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_153223_populate_chapter10_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '1875',
            'name' => "Только по «А».",
            'num' => '1',
            'question_id' => '539',
        ]);
        $this->insert('option', [
            'id' => '1876',
            'name' => "Только по «Б».",
            'num' => '2',
            'question_id' => '539',
        ]);
        $this->insert('option', [
            'id' => '1877',
            'name' => "Только по «В».",
            'num' => '3',
            'question_id' => '539',
        ]);
        $this->insert('option', [
            'id' => '1878',
            'name' => "По «А» или «В».",
            'num' => '4',
            'question_id' => '539',
        ]);
        $this->insert('option', [
            'id' => '1879',
            'name' => "По любой.",
            'num' => '5',
            'question_id' => '539',
        ]);
        $this->insert('option', [
            'id' => '1880',
            'name' => "Только, что это будет безопасным.",
            'num' => '1',
            'question_id' => '540',
        ]);
        $this->insert('option', [
            'id' => '1881',
            'name' => "Только, что это не создаст препятствий или опасности другим участникам дорожного движения.",
            'num' => '2',
            'question_id' => '540',
        ]);
        $this->insert('option', [
            'id' => '1882',
            'name' => "Во всем перечисленном в ответах 1 и 2.",
            'num' => '3',
            'question_id' => '540',
        ]);
        $this->insert('option', [
            'id' => '1883',
            'name' => "Только по «А».",
            'num' => '1',
            'question_id' => '541',
        ]);
        $this->insert('option', [
            'id' => '1884',
            'name' => "Только по «Б».",
            'num' => '2',
            'question_id' => '541',
        ]);
        $this->insert('option', [
            'id' => '1885',
            'name' => "Только по «В».",
            'num' => '3',
            'question_id' => '541',
        ]);
        $this->insert('option', [
            'id' => '1886',
            'name' => "По «А» или «В».",
            'num' => '4',
            'question_id' => '541',
        ]);
        $this->insert('option', [
            'id' => '1887',
            'name' => "По любой.",
            'num' => '5',
            'question_id' => '541',
        ]);
        $this->insert('option', [
            'id' => '1888',
            'name' => "Только мотоцикла.",
            'num' => '1',
            'question_id' => '542',
        ]);
        $this->insert('option', [
            'id' => '1889',
            'name' => "Только грузового автомобиля.",
            'num' => '2',
            'question_id' => '542',
        ]);
        $this->insert('option', [
            'id' => '1890',
            'name' => "Обоих транспортных средств правильно.",
            'num' => '3',
            'question_id' => '542',
        ]);
        $this->insert('option', [
            'id' => '1891',
            'name' => "Обоих транспортных средств неправильно.",
            'num' => '4',
            'question_id' => '542',
        ]);
        $this->insert('option', [
            'id' => '1892',
            'name' => "Имеете преимущество в движении перед водителем красного легкового автомобиля.",
            'num' => '1',
            'question_id' => '543',
        ]);
        $this->insert('option', [
            'id' => '1893',
            'name' => "Должны уступить дорогу транспортным средствам, движущимся по этой дороге.",
            'num' => '2',
            'question_id' => '543',
        ]);
        $this->insert('option', [
            'id' => '1894',
            'name' => "Остановить автомобиль у края проезжей части, уступая дорогу только мотоциклисту.",
            'num' => '1',
            'question_id' => '544',
        ]);
        $this->insert('option', [
            'id' => '1895',
            'name' => "Остановить автомобиль перед тротуаром, уступая дорогу пешеходу и мотоциклисту.",
            'num' => '2',
            'question_id' => '544',
        ]);
        $this->insert('option', [
            'id' => '1896',
            'name' => "Только по «А».",
            'num' => '1',
            'question_id' => '545',
        ]);
        $this->insert('option', [
            'id' => '1897',
            'name' => "Только по «Б».",
            'num' => '2',
            'question_id' => '545',
        ]);
        $this->insert('option', [
            'id' => '1898',
            'name' => "Только по «В».",
            'num' => '3',
            'question_id' => '545',
        ]);
        $this->insert('option', [
            'id' => '1899',
            'name' => "Только по «А» и «Б».",
            'num' => '4',
            'question_id' => '545',
        ]);
        $this->insert('option', [
            'id' => '1900',
            'name' => "По всех.",
            'num' => '5',
            'question_id' => '545',
        ]);
        $this->insert('option', [
            'id' => '1901',
            'name' => "Синего автомобиля.",
            'num' => '1',
            'question_id' => '546',
        ]);
        $this->insert('option', [
            'id' => '1902',
            'name' => "Желтого автомобиля.",
            'num' => '2',
            'question_id' => '546',
        ]);
        $this->insert('option', [
            'id' => '1903',
            'name' => "Только по «В».",
            'num' => '1',
            'question_id' => '547',
        ]);
        $this->insert('option', [
            'id' => '1904',
            'name' => "По «А» и «В».",
            'num' => '2',
            'question_id' => '547',
        ]);
        $this->insert('option', [
            'id' => '1905',
            'name' => "Только по «А».",
            'num' => '3',
            'question_id' => '547',
        ]);
        $this->insert('option', [
            'id' => '1906',
            'name' => "По любой.",
            'num' => '4',
            'question_id' => '547',
        ]);
        $this->insert('option', [
            'id' => '1907',
            'name' => "Не менее чем за 100 м.",
            'num' => '1',
            'question_id' => '548',
        ]);
        $this->insert('option', [
            'id' => '1908',
            'name' => "Не менее чем за 50 м.",
            'num' => '2',
            'question_id' => '548',
        ]);
        $this->insert('option', [
            'id' => '1909',
            'name' => "Заблаговременно.",
            'num' => '3',
            'question_id' => '548',
        ]);
        $this->insert('option', [
            'id' => '1910',
            'name' => "Только встречного направления.",
            'num' => '1',
            'question_id' => '549',
        ]);
        $this->insert('option', [
            'id' => '1911',
            'name' => "Только попутного направления.",
            'num' => '2',
            'question_id' => '549',
        ]);
        $this->insert('option', [
            'id' => '1912',
            'name' => "Движущемуся как во встречном, так и в попутном направлениях.",
            'num' => '3',
            'question_id' => '549',
        ]);
        $this->insert('option', [
            'id' => '1913',
            'name' => "Водитель грузового автомобиля.",
            'num' => '1',
            'question_id' => '550',
        ]);
        $this->insert('option', [
            'id' => '1914',
            'name' => "Водитель автомобиля пожарной службы.",
            'num' => '2',
            'question_id' => '550',
        ]);
        $this->insert('option', [
            'id' => '1915',
            'name' => "Только по “А\".",
            'num' => '1',
            'question_id' => '551',
        ]);
        $this->insert('option', [
            'id' => '1916',
            'name' => "Только по “Б”.",
            'num' => '2',
            'question_id' => '551',
        ]);
        $this->insert('option', [
            'id' => '1917',
            'name' => "По любой.",
            'num' => '3',
            'question_id' => '551',
        ]);
        $this->insert('option', [
            'id' => '1918',
            'name' => "Только по “А\".",
            'num' => '1',
            'question_id' => '552',
        ]);
        $this->insert('option', [
            'id' => '1919',
            'name' => "Только по “Б”.",
            'num' => '2',
            'question_id' => '552',
        ]);
        $this->insert('option', [
            'id' => '1920',
            'name' => "По любой.",
            'num' => '3',
            'question_id' => '552',
        ]);
        $this->insert('option', [
            'id' => '1921',
            'name' => "Разрешается при соблюдении условий безопасности дорожного движения.",
            'num' => '1',
            'question_id' => '553',
        ]);
        $this->insert('option', [
            'id' => '1922',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '553',
        ]);
        $this->insert('option', [
            'id' => '1923',
            'name' => "Разрешается при видимости дороги более 300 м.",
            'num' => '3',
            'question_id' => '553',
        ]);
        $this->insert('option', [
            'id' => '1924',
            'name' => "Только по “А”.",
            'num' => '1',
            'question_id' => '554',
        ]);
        $this->insert('option', [
            'id' => '1925',
            'name' => "Только по “Б”.",
            'num' => '2',
            'question_id' => '554',
        ]);
        $this->insert('option', [
            'id' => '1926',
            'name' => "Только по “В”.",
            'num' => '3',
            'question_id' => '554',
        ]);
        $this->insert('option', [
            'id' => '1927',
            'name' => "По “А” или “В”.",
            'num' => '4',
            'question_id' => '554',
        ]);
        $this->insert('option', [
            'id' => '1928',
            'name' => "По любой.",
            'num' => '5',
            'question_id' => '554',
        ]);
        $this->insert('option', [
            'id' => '1929',
            'name' => "Должен.",
            'num' => '1',
            'question_id' => '555',
        ]);
        $this->insert('option', [
            'id' => '1930',
            'name' => "Не должен.",
            'num' => '2',
            'question_id' => '555',
        ]);
        $this->insert('option', [
            'id' => '1931',
            'name' => "Только по “Б\".",
            'num' => '1',
            'question_id' => '556',
        ]);
        $this->insert('option', [
            'id' => '1932',
            'name' => "По “А\" и “Б”.",
            'num' => '2',
            'question_id' => '556',
        ]);
        $this->insert('option', [
            'id' => '1933',
            'name' => "Только по “А\".",
            'num' => '3',
            'question_id' => '556',
        ]);
        $this->insert('option', [
            'id' => '1934',
            'name' => "На изображенном перекрестке разворот запрещен.",
            'num' => '4',
            'question_id' => '556',
        ]);
        $this->insert('option', [
            'id' => '1935',
            'name' => "Убедиться, что это будет безопасным и не создаст препятствий или опасности другим участникам дорожного движения.",
            'num' => '1',
            'question_id' => '557',
        ]);
        $this->insert('option', [
            'id' => '1936',
            'name' => "Только подать сигнал световыми указателями поворота.",
            'num' => '2',
            'question_id' => '557',
        ]);
        $this->insert('option', [
            'id' => '1937',
            'name' => "Только подать звуковой сигнал.",
            'num' => '3',
            'question_id' => '557',
        ]);
        $this->insert('option', [
            'id' => '1938',
            'name' => "Подать любой, перечисленный в ответах 2 и 3, сигнал.",
            'num' => '4',
            'question_id' => '557',
        ]);
        $this->insert('option', [
            'id' => '1939',
            'name' => "Синего автомобиля.",
            'num' => '1',
            'question_id' => '558',
        ]);
        $this->insert('option', [
            'id' => '1940',
            'name' => "Зеленого автомобиля.",
            'num' => '2',
            'question_id' => '558',
        ]);
        $this->insert('option', [
            'id' => '1941',
            'name' => "Только легковому автомобилю.",
            'num' => '1',
            'question_id' => '559',
        ]);
        $this->insert('option', [
            'id' => '1942',
            'name' => "Только автомобилю скорой медицинской помощи.",
            'num' => '2',
            'question_id' => '559',
        ]);
        $this->insert('option', [
            'id' => '1943',
            'name' => "Обоим автомобилям.",
            'num' => '3',
            'question_id' => '559',
        ]);
        $this->insert('option', [
            'id' => '1944',
            'name' => "Только по “А\".",
            'num' => '1',
            'question_id' => '560',
        ]);
        $this->insert('option', [
            'id' => '1945',
            'name' => "Только по “Б”.",
            'num' => '2',
            'question_id' => '560',
        ]);
        $this->insert('option', [
            'id' => '1946',
            'name' => "По любой из показанных.",
            'num' => '3',
            'question_id' => '560',
        ]);
        $this->insert('option', [
            'id' => '1947',
            'name' => "Должен.",
            'num' => '1',
            'question_id' => '561',
        ]);
        $this->insert('option', [
            'id' => '1948',
            'name' => "Не должен.",
            'num' => '2',
            'question_id' => '561',
        ]);
        $this->insert('option', [
            'id' => '1949',
            'name' => "Не ближе одного метра до правого края проезжей части.",
            'num' => '1',
            'question_id' => '562',
        ]);
        $this->insert('option', [
            'id' => '1950',
            'name' => "Ближе к правому краю проезжей части.",
            'num' => '2',
            'question_id' => '562',
        ]);
        $this->insert('option', [
            'id' => '1951',
            'name' => "По любой полосе, не создавая препятствий другим участникам дорожного движения.",
            'num' => '3',
            'question_id' => '562',
        ]);
        $this->insert('option', [
            'id' => '1952',
            'name' => "Должен.",
            'num' => '1',
            'question_id' => '563',
        ]);
        $this->insert('option', [
            'id' => '1953',
            'name' => "Не должен.",
            'num' => '2',
            'question_id' => '563',
        ]);
        $this->insert('option', [
            'id' => '1954',
            'name' => "Водитель автомобиля А.",
            'num' => '1',
            'question_id' => '564',
        ]);
        $this->insert('option', [
            'id' => '1955',
            'name' => "Водитель автомобиля Б.",
            'num' => '2',
            'question_id' => '564',
        ]);
        $this->insert('option', [
            'id' => '1956',
            'name' => "Периодически подавать звуковой сигнал.",
            'num' => '1',
            'question_id' => '565',
        ]);
        $this->insert('option', [
            'id' => '1957',
            'name' => "Прибегнуть к помощи других лиц.",
            'num' => '2',
            'question_id' => '565',
        ]);
        $this->insert('option', [
            'id' => '1958',
            'name' => "Только прекратить движение.",
            'num' => '3',
            'question_id' => '565',
        ]);
        $this->insert('option', [
            'id' => '1959',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '566',
        ]);
        $this->insert('option', [
            'id' => '1960',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '566',
        ]);
        $this->insert('option', [
            'id' => '1961',
            'name' => "Должен уступить дорогу трамваю встречного направления.",
            'num' => '1',
            'question_id' => '567',
        ]);
        $this->insert('option', [
            'id' => '1962',
            'name' => "Должен уступить дорогу трамваю попутного направления.",
            'num' => '2',
            'question_id' => '567',
        ]);
        $this->insert('option', [
            'id' => '1963',
            'name' => "Должен уступить дорогу обоим трамваям.",
            'num' => '3',
            'question_id' => '567',
        ]);
        $this->insert('option', [
            'id' => '1964',
            'name' => "Имеет преимущество в движении.",
            'num' => '4',
            'question_id' => '567',
        ]);
        $this->insert('option', [
            'id' => '1965',
            'name' => "Только в случае, если ширина моста менее 9 м.",
            'num' => '1',
            'question_id' => '568',
        ]);
        $this->insert('option', [
            'id' => '1966',
            'name' => "Только в случае, если смежные проезжие части разделены трамвайной линией.",
            'num' => '2',
            'question_id' => '568',
        ]);
        $this->insert('option', [
            'id' => '1967',
            'name' => "Только, если посредине проезжей части нанесена сплошная линия дорожной разметки",
            'num' => '3',
            'question_id' => '568',
        ]);
        $this->insert('option', [
            'id' => '1968',
            'name' => "В любых, в том числе во всех перечисленных случаях.",
            'num' => '4',
            'question_id' => '568',
        ]);
        $this->insert('option', [
            'id' => '1969',
            'name' => "Только по “А\".",
            'num' => '1',
            'question_id' => '569',
        ]);
        $this->insert('option', [
            'id' => '1970',
            'name' => "Только по \"Б\".",
            'num' => '2',
            'question_id' => '569',
        ]);
        $this->insert('option', [
            'id' => '1971',
            'name' => "Только по “В\".",
            'num' => '3',
            'question_id' => '569',
        ]);
        $this->insert('option', [
            'id' => '1972',
            'name' => "Только по “А\" или “Б\".",
            'num' => '4',
            'question_id' => '569',
        ]);
        $this->insert('option', [
            'id' => '1973',
            'name' => "По любой.",
            'num' => '5',
            'question_id' => '569',
        ]);
        $this->insert('option', [
            'id' => '1974',
            'name' => "Не далее, чем за 100 м до начала полосы.",
            'num' => '1',
            'question_id' => '570',
        ]);
        $this->insert('option', [
            'id' => '1975',
            'name' => "Не далее, чем за 50 м до начала полосы.",
            'num' => '2',
            'question_id' => '570',
        ]);
        $this->insert('option', [
            'id' => '1976',
            'name' => "Только на этой полосе.",
            'num' => '3',
            'question_id' => '570',
        ]);
        $this->insert('option', [
            'id' => '1977',
            'name' => "Только легкового автомобиля.",
            'num' => '1',
            'question_id' => '571',
        ]);
        $this->insert('option', [
            'id' => '1978',
            'name' => "Только автобуса.",
            'num' => '2',
            'question_id' => '571',
        ]);
        $this->insert('option', [
            'id' => '1979',
            'name' => "Обоих транспортных средств неправильно.",
            'num' => '3',
            'question_id' => '571',
        ]);
        $this->insert('option', [
            'id' => '1980',
            'name' => "Обоих транспортных средств правильно.",
            'num' => '4',
            'question_id' => '571',
        ]);
        $this->insert('option', [
            'id' => '1981',
            'name' => "Имеете преимущество перед велосипедистом.",
            'num' => '1',
            'question_id' => '572',
        ]);
        $this->insert('option', [
            'id' => '1982',
            'name' => "Должны уступить дорогу велосипедисту.",
            'num' => '2',
            'question_id' => '572',
        ]);
        $this->insert('option', [
            'id' => '1983',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '573',
        ]);
        $this->insert('option', [
            'id' => '1984',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '573',
        ]);
        $this->insert('option', [
            'id' => '1985',
            'name' => "Если транспортное средство движется в попутном направлении по той полосе, на которую он намерен перестроиться.",
            'num' => '1',
            'question_id' => '574',
        ]);
        $this->insert('option', [
            'id' => '1986',
            'name' => "Только в случае, если транспортное средство движется в попутном направлении справа.",
            'num' => '2',
            'question_id' => '574',
        ]);
        $this->insert('option', [
            'id' => '1987',
            'name' => "Только в случае, если транспортное средство движется в попутном направлении слева.",
            'num' => '3',
            'question_id' => '574',
        ]);
        $this->insert('option', [
            'id' => '1988',
            'name' => "Легкового автомобиля.",
            'num' => '1',
            'question_id' => '575',
        ]);
        $this->insert('option', [
            'id' => '1989',
            'name' => "Мотоцикла.",
            'num' => '2',
            'question_id' => '575',
        ]);
        $this->insert('option', [
            'id' => '1990',
            'name' => "Обоих транспортных средств правильно.",
            'num' => '3',
            'question_id' => '575',
        ]);
        $this->insert('option', [
            'id' => '1991',
            'name' => "Обоих транспортных средств неправильно.",
            'num' => '4',
            'question_id' => '575',
        ]);
        $this->insert('option', [
            'id' => '1992',
            'name' => "Только водителю легкового автомобиля.",
            'num' => '1',
            'question_id' => '576',
        ]);
        $this->insert('option', [
            'id' => '1993',
            'name' => "Только водителю грузового автомобиля.",
            'num' => '2',
            'question_id' => '576',
        ]);
        $this->insert('option', [
            'id' => '1994',
            'name' => "Водителям обоих автомобилей.",
            'num' => '3',
            'question_id' => '576',
        ]);
        $this->insert('option', [
            'id' => '1995',
            'name' => "Крайней левой полосе движения.",
            'num' => '1',
            'question_id' => '577',
        ]);
        $this->insert('option', [
            'id' => '1996',
            'name' => "Полосе встречного движения.",
            'num' => '2',
            'question_id' => '577',
        ]);
        $this->insert('option', [
            'id' => '1997',
            'name' => "Обочине, полосе торможения или разгона.",
            'num' => '3',
            'question_id' => '577',
        ]);
        $this->insert('option', [
            'id' => '1998',
            'name' => "В местах, указанных в ответах 1 и 2.",
            'num' => '4',
            'question_id' => '577',
        ]);
        $this->insert('option', [
            'id' => '1999',
            'name' => "Только от места установки знака “Тоннель” до въезда в тоннель.",
            'num' => '1',
            'question_id' => '578',
        ]);
        $this->insert('option', [
            'id' => '2000',
            'name' => "Только за 50 м от въезда в тоннель.",
            'num' => '2',
            'question_id' => '578',
        ]);
        $this->insert('option', [
            'id' => '2001',
            'name' => "Только в тоннеле.",
            'num' => '3',
            'question_id' => '578',
        ]);
        $this->insert('option', [
            'id' => '2002',
            'name' => "Только мотоцикла.",
            'num' => '1',
            'question_id' => '579',
        ]);
        $this->insert('option', [
            'id' => '2003',
            'name' => "Только грузового автомобиля.",
            'num' => '2',
            'question_id' => '579',
        ]);
        $this->insert('option', [
            'id' => '2004',
            'name' => "Обоих нарушают.",
            'num' => '3',
            'question_id' => '579',
        ]);
        $this->insert('option', [
            'id' => '2005',
            'name' => "Обоих не нарушают.",
            'num' => '4',
            'question_id' => '579',
        ]);
        $this->insert('option', [
            'id' => '2006',
            'name' => "Только водителю легкового автомобиля.",
            'num' => '1',
            'question_id' => '580',
        ]);
        $this->insert('option', [
            'id' => '2007',
            'name' => "Только водителю грузового автомобиля.",
            'num' => '2',
            'question_id' => '580',
        ]);
        $this->insert('option', [
            'id' => '2008',
            'name' => "Водителям обоих автомобилей.",
            'num' => '3',
            'question_id' => '580',
        ]);
        $this->insert('option', [
            'id' => '2009',
            'name' => "Только при видимости дороги менее 100 м в каждом направлении.",
            'num' => '1',
            'question_id' => '581',
        ]);
        $this->insert('option', [
            'id' => '2010',
            'name' => "Только при видимости дороги менее 100 м хотя бы в одном направлении.",
            'num' => '2',
            'question_id' => '581',
        ]);
        $this->insert('option', [
            'id' => '2011',
            'name' => "Только при видимости дороги менее 100 м в направлении по ходу движения.",
            'num' => '3',
            'question_id' => '581',
        ]);
        $this->insert('option', [
            'id' => '2012',
            'name' => "Только транспортным средствам, выезжающим на дорогу.",
            'num' => '1',
            'question_id' => '582',
        ]);
        $this->insert('option', [
            'id' => '2013',
            'name' => "Пешеходам и велосипедистам, направление движения которых он пересекает.",
            'num' => '2',
            'question_id' => '582',
        ]);
        $this->insert('option', [
            'id' => '2014',
            'name' => "Всем перечисленным выше категориям участников дорожного движения.",
            'num' => '3',
            'question_id' => '582',
        ]);
        $this->insert('option', [
            'id' => '2015',
            'name' => "Легкового автомобиля.",
            'num' => '1',
            'question_id' => '583',
        ]);
        $this->insert('option', [
            'id' => '2016',
            'name' => "Мотоцикла.",
            'num' => '2',
            'question_id' => '583',
        ]);
        $this->insert('option', [
            'id' => '2017',
            'name' => "Только водителю автобуса.",
            'num' => '1',
            'question_id' => '584',
        ]);
        $this->insert('option', [
            'id' => '2018',
            'name' => "Только водителю легкового автомобиля.",
            'num' => '2',
            'question_id' => '584',
        ]);
        $this->insert('option', [
            'id' => '2019',
            'name' => "Водителям обоих автомобилей.",
            'num' => '3',
            'question_id' => '584',
        ]);
        $this->insert('option', [
            'id' => '2020',
            'name' => "Если габариты транспортного средства не позволяют выполнить разворот из крайнего левого положения.",
            'num' => '1',
            'question_id' => '585',
        ]);
        $this->insert('option', [
            'id' => '2021',
            'name' => "В любом случае на регулируемом перекрестке.",
            'num' => '2',
            'question_id' => '585',
        ]);
        $this->insert('option', [
            'id' => '2022',
            'name' => "В любом случае на нерегулируемом перекрестке, если транспортное средство находится на главной дороге.",
            'num' => '3',
            'question_id' => '585',
        ]);
        $this->insert('option', [
            'id' => '2023',
            'name' => "Если это запрещено из крайнего левого положения.",
            'num' => '4',
            'question_id' => '585',
        ]);
        $this->insert('option', [
            'id' => '2024',
            'name' => "Пользоваться зеркалами заднего вида.",
            'num' => '1',
            'question_id' => '586',
        ]);
        $this->insert('option', [
            'id' => '2025',
            'name' => "Создавать препятствия или опасность другим участникам движения.",
            'num' => '2',
            'question_id' => '586',
        ]);
        $this->insert('option', [
            'id' => '2026',
            'name' => "Пользоваться помощью посторонних лиц.",
            'num' => '3',
            'question_id' => '586',
        ]);
        $this->insert('option', [
            'id' => '2027',
            'name' => "Подавать звуковой сигнал.",
            'num' => '4',
            'question_id' => '586',
        ]);
        $this->insert('option', [
            'id' => '2028',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '587',
        ]);
        $this->insert('option', [
            'id' => '2029',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '587',
        ]);
        $this->insert('option', [
            'id' => '2030',
            'name' => "Грузового автомобиля.",
            'num' => '1',
            'question_id' => '588',
        ]);
        $this->insert('option', [
            'id' => '2031',
            'name' => "Кареты скорой медицинской помощи.",
            'num' => '2',
            'question_id' => '588',
        ]);
        $this->insert('option', [
            'id' => '2032',
            'name' => "На перекрестках.",
            'num' => '1',
            'question_id' => '589',
        ]);
        $this->insert('option', [
            'id' => '2033',
            'name' => "На мостах.",
            'num' => '2',
            'question_id' => '589',
        ]);
        $this->insert('option', [
            'id' => '2034',
            'name' => "На путепроводах.",
            'num' => '3',
            'question_id' => '589',
        ]);
        $this->insert('option', [
            'id' => '2035',
            'name' => "На автомагистралях.",
            'num' => '4',
            'question_id' => '589',
        ]);
        $this->insert('option', [
            'id' => '2036',
            'name' => "В жилой зоне.",
            'num' => '5',
            'question_id' => '589',
        ]);
        $this->insert('option', [
            'id' => '2037',
            'name' => "Только со шлагбаумом.",
            'num' => '1',
            'question_id' => '590',
        ]);
        $this->insert('option', [
            'id' => '2038',
            'name' => "Только без шлагбаума.",
            'num' => '2',
            'question_id' => '590',
        ]);
        $this->insert('option', [
            'id' => '2039',
            'name' => "Только на многопутном.",
            'num' => '3',
            'question_id' => '590',
        ]);
        $this->insert('option', [
            'id' => '2040',
            'name' => "Только на однопутном.",
            'num' => '4',
            'question_id' => '590',
        ]);
        $this->insert('option', [
            'id' => '2041',
            'name' => "На любом из перечисленных.",
            'num' => '5',
            'question_id' => '590',
        ]);
        $this->insert('option', [
            'id' => '2042',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '591',
        ]);
        $this->insert('option', [
            'id' => '2043',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '591',
        ]);
        $this->insert('option', [
            'id' => '2044',
            'name' => "Мотоцикла.",
            'num' => '1',
            'question_id' => '592',
        ]);
        $this->insert('option', [
            'id' => '2045',
            'name' => "Легкового автомобиля.",
            'num' => '2',
            'question_id' => '592',
        ]);
        $this->insert('option', [
            'id' => '2046',
            'name' => "Только по “А\".",
            'num' => '1',
            'question_id' => '593',
        ]);
        $this->insert('option', [
            'id' => '2047',
            'name' => "Только по \"А” и “Б”.",
            'num' => '2',
            'question_id' => '593',
        ]);
        $this->insert('option', [
            'id' => '2048',
            'name' => "Только по “В”.",
            'num' => '3',
            'question_id' => '593',
        ]);
        $this->insert('option', [
            'id' => '2049',
            'name' => "Только по “А\" и “В”.",
            'num' => '4',
            'question_id' => '593',
        ]);
        $this->insert('option', [
            'id' => '2050',
            'name' => "По любой.",
            'num' => '5',
            'question_id' => '593',
        ]);
        $this->insert('option', [
            'id' => '2051',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '594',
        ]);
        $this->insert('option', [
            'id' => '2052',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '594',
        ]);
        $this->insert('option', [
            'id' => '2053',
            'name' => "Только по “А”.",
            'num' => '1',
            'question_id' => '595',
        ]);
        $this->insert('option', [
            'id' => '2054',
            'name' => "Только по “Б\".",
            'num' => '2',
            'question_id' => '595',
        ]);
        $this->insert('option', [
            'id' => '2055',
            'name' => "По любой из показанных.",
            'num' => '3',
            'question_id' => '595',
        ]);
        $this->insert('option', [
            'id' => '2056',
            'name' => "Только по “А\".",
            'num' => '1',
            'question_id' => '596',
        ]);
        $this->insert('option', [
            'id' => '2057',
            'name' => "По “А\" и “Б\".",
            'num' => '2',
            'question_id' => '596',
        ]);
        $this->insert('option', [
            'id' => '2058',
            'name' => "Только по “Б”.",
            'num' => '3',
            'question_id' => '596',
        ]);
        $this->insert('option', [
            'id' => '2059',
            'name' => "С преимуществом перед водителями транспортных средств, движущихся по этой дороге.",
            'num' => '1',
            'question_id' => '597',
        ]);
        $this->insert('option', [
            'id' => '2060',
            'name' => "Уступая дорогу транспортным средствам, движущимся по этой дороге.",
            'num' => '2',
            'question_id' => '597',
        ]);
        $this->insert('option', [
            'id' => '2061',
            'name' => "Только во встречном направлении.",
            'num' => '1',
            'question_id' => '598',
        ]);
        $this->insert('option', [
            'id' => '2062',
            'name' => "Только во встречном направлении и выполняющим обгон.",
            'num' => '2',
            'question_id' => '598',
        ]);
        $this->insert('option', [
            'id' => '2063',
            'name' => "Во встречном и попутном направлениях.",
            'num' => '3',
            'question_id' => '598',
        ]);
        $this->insert('option', [
            'id' => '2064',
            'name' => "Правильно.",
            'num' => '1',
            'question_id' => '599',
        ]);
        $this->insert('option', [
            'id' => '2065',
            'name' => "Неправильно.",
            'num' => '2',
            'question_id' => '599',
        ]);
        $this->insert('option', [
            'id' => '2066',
            'name' => "Ближе 10 м от перекрестков.",
            'num' => '1',
            'question_id' => '600',
        ]);
        $this->insert('option', [
            'id' => '2067',
            'name' => "На нерегулируемых перекрестках, если на пересекаемой дороге организовано одностороннее движение.",
            'num' => '2',
            'question_id' => '600',
        ]);
        $this->insert('option', [
            'id' => '2068',
            'name' => "На пешеходных переходах и ближе 10 м от них.",
            'num' => '3',
            'question_id' => '600',
        ]);
        $this->insert('option', [
            'id' => '2069',
            'name' => "Во всех перечисленных выше местах.",
            'num' => '4',
            'question_id' => '600',
        ]);
        $this->insert('option', [
            'id' => '2070',
            'name' => "Только легкового автомобиля.",
            'num' => '1',
            'question_id' => '601',
        ]);
        $this->insert('option', [
            'id' => '2071',
            'name' => "Только автобуса.",
            'num' => '2',
            'question_id' => '601',
        ]);
        $this->insert('option', [
            'id' => '2072',
            'name' => "Обоих транспортных средств.",
            'num' => '3',
            'question_id' => '601',
        ]);
        $this->insert('option', [
            'id' => '2073',
            'name' => "С левой стороны.",
            'num' => '1',
            'question_id' => '602',
        ]);
        $this->insert('option', [
            'id' => '2074',
            'name' => "С правой стороны.",
            'num' => '2',
            'question_id' => '602',
        ]);
        $this->insert('option', [
            'id' => '2075',
            'name' => "Да, должны.",
            'num' => '1',
            'question_id' => '603',
        ]);
        $this->insert('option', [
            'id' => '2076',
            'name' => "Нет, не должны.",
            'num' => '2',
            'question_id' => '603',
        ]);
        $this->insert('option', [
            'id' => '2077',
            'name' => "Водителю синего автомобиля.",
            'num' => '1',
            'question_id' => '604',
        ]);
        $this->insert('option', [
            'id' => '2078',
            'name' => "Водителю красного автомобиля.",
            'num' => '2',
            'question_id' => '604',
        ]);
        $this->insert('option', [
            'id' => '2079',
            'name' => "",
            'num' => '1',
            'question_id' => '605',
        ]);
        $this->insert('option', [
            'id' => '2080',
            'name' => "",
            'num' => '2',
            'question_id' => '605',
        ]);
        $this->insert('option', [
            'id' => '2081',
            'name' => "",
            'num' => '1',
            'question_id' => '606',
        ]);
        $this->insert('option', [
            'id' => '2082',
            'name' => "",
            'num' => '2',
            'question_id' => '606',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 10])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
