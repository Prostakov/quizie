<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_153234_populate_chapter11_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '2083',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '607',
        ]);
        $this->insert('option', [
            'id' => '2084',
            'name' => "Не разрешается.",
            'num' => '2',
            'question_id' => '607',
        ]);
        $this->insert('option', [
            'id' => '2085',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '608',
        ]);
        $this->insert('option', [
            'id' => '2086',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '608',
        ]);
        $this->insert('option', [
            'id' => '2087',
            'name' => "Трамваю попутного направления.",
            'num' => '1',
            'question_id' => '609',
        ]);
        $this->insert('option', [
            'id' => '2088',
            'name' => "Трамваю встречного направления.",
            'num' => '2',
            'question_id' => '609',
        ]);
        $this->insert('option', [
            'id' => '2089',
            'name' => "Трамваям как попутного, так и встречного направления.",
            'num' => '3',
            'question_id' => '609',
        ]);
        $this->insert('option', [
            'id' => '2090',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '610',
        ]);
        $this->insert('option', [
            'id' => '2091',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '610',
        ]);
        $this->insert('option', [
            'id' => '2092',
            'name' => "Только во время обгона.",
            'num' => '1',
            'question_id' => '611',
        ]);
        $this->insert('option', [
            'id' => '2093',
            'name' => "Только для остановки или стоянки на левой стороне дороги в разрешенных случаях.",
            'num' => '2',
            'question_id' => '611',
        ]);
        $this->insert('option', [
            'id' => '2094',
            'name' => "Только при объезде транспортного средства или другого препятствия.",
            'num' => '3',
            'question_id' => '611',
        ]);
        $this->insert('option', [
            'id' => '2095',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '4',
            'question_id' => '611',
        ]);
        $this->insert('option', [
            'id' => '2096',
            'name' => "Разрешается, если посадка и высадка осуществляются с проезжей части.",
            'num' => '1',
            'question_id' => '612',
        ]);
        $this->insert('option', [
            'id' => '2097',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '612',
        ]);
        $this->insert('option', [
            'id' => '2098',
            'name' => "Разрешается, при отсутствии трамвая попутного направления.",
            'num' => '3',
            'question_id' => '612',
        ]);
        $this->insert('option', [
            'id' => '2099',
            'name' => "Только для остановки у левого края дороги в разрешенных случаях с целью погрузки или разгрузки груза.",
            'num' => '1',
            'question_id' => '613',
        ]);
        $this->insert('option', [
            'id' => '2100',
            'name' => "Только для поворота налево.",
            'num' => '2',
            'question_id' => '613',
        ]);
        $this->insert('option', [
            'id' => '2101',
            'name' => "Только для опережения.",
            'num' => '3',
            'question_id' => '613',
        ]);
        $this->insert('option', [
            'id' => '2102',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '4',
            'question_id' => '613',
        ]);
        $this->insert('option', [
            'id' => '2103',
            'name' => "В случаях, перечисленных в ответах 1 и 2.",
            'num' => '5',
            'question_id' => '613',
        ]);
        $this->insert('option', [
            'id' => '2104',
            'name' => "Только при движении вне населенного пункта.",
            'num' => '1',
            'question_id' => '614',
        ]);
        $this->insert('option', [
            'id' => '2105',
            'name' => "Только при движении в населенном пункте.",
            'num' => '2',
            'question_id' => '614',
        ]);
        $this->insert('option', [
            'id' => '2106',
            'name' => "Во всех случаях, если правая полоса свободна от транспорта на безопасной дистанции.",
            'num' => '3',
            'question_id' => '614',
        ]);
        $this->insert('option', [
            'id' => '2107',
            'name' => "Нарушает.",
            'num' => '1',
            'question_id' => '615',
        ]);
        $this->insert('option', [
            'id' => '2108',
            'name' => "Не нарушает.",
            'num' => '2',
            'question_id' => '615',
        ]);
        $this->insert('option', [
            'id' => '2109',
            'name' => "Если это не создает препятствий пешеходам.",
            'num' => '1',
            'question_id' => '616',
        ]);
        $this->insert('option', [
            'id' => '2110',
            'name' => "Только в светлое время суток.",
            'num' => '2',
            'question_id' => '616',
        ]);
        $this->insert('option', [
            'id' => '2111',
            'name' => "Только при интенсивном движении механических транспортных средств.",
            'num' => '3',
            'question_id' => '616',
        ]);
        $this->insert('option', [
            'id' => '2112',
            'name' => "Разрешается, если полосы проезжей части заняты другими транспортными средствами.",
            'num' => '1',
            'question_id' => '617',
        ]);
        $this->insert('option', [
            'id' => '2113',
            'name' => "Разрешается во время опережения транспортного средства, движущегося со скоростью менее 40 км/ч, а также для поворота налево или разворота.",
            'num' => '2',
            'question_id' => '617',
        ]);
        $this->insert('option', [
            'id' => '2114',
            'name' => "Разрешается в обоих перечисленных случаях.",
            'num' => '3',
            'question_id' => '617',
        ]);
        $this->insert('option', [
            'id' => '2115',
            'name' => "Запрещается.",
            'num' => '4',
            'question_id' => '617',
        ]);
        $this->insert('option', [
            'id' => '2116',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '618',
        ]);
        $this->insert('option', [
            'id' => '2117',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '618',
        ]);
        $this->insert('option', [
            'id' => '2118',
            'name' => "Когда это не затрудняет движение пешеходов.",
            'num' => '1',
            'question_id' => '619',
        ]);
        $this->insert('option', [
            'id' => '2119',
            'name' => "Когда остается свободным для движения пешеходов не менее 2 метров тротуара.",
            'num' => '2',
            'question_id' => '619',
        ]);
        $this->insert('option', [
            'id' => '2120',
            'name' => "Когда они обслуживают торговые и иные предприятия, расположенные непосредственно возле этих тротуаров, при отсутствии других подъездов.",
            'num' => '3',
            'question_id' => '619',
        ]);
        $this->insert('option', [
            'id' => '2121',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '4',
            'question_id' => '619',
        ]);
        $this->insert('option', [
            'id' => '2122',
            'name' => "Запрещается.",
            'num' => '1',
            'question_id' => '620',
        ]);
        $this->insert('option', [
            'id' => '2123',
            'name' => "Разрешается только в случае, если скорость движения грузового автомобиля не более 30 км/ч.",
            'num' => '2',
            'question_id' => '620',
        ]);
        $this->insert('option', [
            'id' => '2124',
            'name' => "Разрешается.",
            'num' => '3',
            'question_id' => '620',
        ]);
        $this->insert('option', [
            'id' => '2125',
            'name' => "Разрешается, если посадка и высадка осуществляются с проезжей части.",
            'num' => '1',
            'question_id' => '621',
        ]);
        $this->insert('option', [
            'id' => '2126',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '621',
        ]);
        $this->insert('option', [
            'id' => '2127',
            'name' => "Разрешается, при отсутствии трамвая попутного направления.",
            'num' => '3',
            'question_id' => '621',
        ]);
        $this->insert('option', [
            'id' => '2128',
            'name' => "Только когда другие полосы заняты.",
            'num' => '1',
            'question_id' => '622',
        ]);
        $this->insert('option', [
            'id' => '2129',
            'name' => "Только для поворота налево или разворота.",
            'num' => '2',
            'question_id' => '622',
        ]);
        $this->insert('option', [
            'id' => '2130',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '3',
            'question_id' => '622',
        ]);
        $this->insert('option', [
            'id' => '2131',
            'name' => "Для объезда препятствия, поворота, разворота или остановки.",
            'num' => '1',
            'question_id' => '623',
        ]);
        $this->insert('option', [
            'id' => '2132',
            'name' => "Только для объезда препятствия.",
            'num' => '2',
            'question_id' => '623',
        ]);
        $this->insert('option', [
            'id' => '2133',
            'name' => "Только для поворота или разворота.",
            'num' => '3',
            'question_id' => '623',
        ]);
        $this->insert('option', [
            'id' => '2134',
            'name' => "Грузового автомобиля и мотоцикла без бокового прицепа.",
            'num' => '1',
            'question_id' => '624',
        ]);
        $this->insert('option', [
            'id' => '2135',
            'name' => "Мотоцикла с боковым прицепом.",
            'num' => '2',
            'question_id' => '624',
        ]);
        $this->insert('option', [
            'id' => '2136',
            'name' => "Обоих мотоциклов.",
            'num' => '3',
            'question_id' => '624',
        ]);
        $this->insert('option', [
            'id' => '2137',
            'name' => "Мотоцикла без бокового прицепа.",
            'num' => '4',
            'question_id' => '624',
        ]);
        $this->insert('option', [
            'id' => '2138',
            'name' => "Если количество полос и направления движения по ним не определены соответствующими информационноуказательными знаками.",
            'num' => '1',
            'question_id' => '625',
        ]);
        $this->insert('option', [
            'id' => '2139',
            'name' => "Если количество полос и направления движения по ним определены соответствующими информационноуказательными знаками.",
            'num' => '2',
            'question_id' => '625',
        ]);
        $this->insert('option', [
            'id' => '2140',
            'name' => "В обоих перечисленных случаях.",
            'num' => '3',
            'question_id' => '625',
        ]);
        $this->insert('option', [
            'id' => '2141',
            'name' => "Водитель мопеда.",
            'num' => '1',
            'question_id' => '626',
        ]);
        $this->insert('option', [
            'id' => '2142',
            'name' => "Пешеход.",
            'num' => '2',
            'question_id' => '626',
        ]);
        $this->insert('option', [
            'id' => '2143',
            'name' => "Только для обгона и объезда препятствия.",
            'num' => '1',
            'question_id' => '627',
        ]);
        $this->insert('option', [
            'id' => '2144',
            'name' => "Только для остановки или стоянки у левого края проезжей части.",
            'num' => '2',
            'question_id' => '627',
        ]);
        $this->insert('option', [
            'id' => '2145',
            'name' => "В обоих случаях.",
            'num' => '3',
            'question_id' => '627',
        ]);
        $this->insert('option', [
            'id' => '2146',
            'name' => "Только после проезда реверсивного светофора с сигналом, разрешающим движение по этой полосе.",
            'num' => '1',
            'question_id' => '628',
        ]);
        $this->insert('option', [
            'id' => '2147',
            'name' => "Только после проезда перекрестка.",
            'num' => '2',
            'question_id' => '628',
        ]);
        $this->insert('option', [
            'id' => '2148',
            'name' => "Только в случае, если на ней отсутствуют транспортные средства, движущиеся навстречу.",
            'num' => '3',
            'question_id' => '628',
        ]);
        $this->insert('option', [
            'id' => '2149',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '4',
            'question_id' => '628',
        ]);
        $this->insert('option', [
            'id' => '2150',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '629',
        ]);
        $this->insert('option', [
            'id' => '2151',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '629',
        ]);
        $this->insert('option', [
            'id' => '2152',
            'name' => "Разрешается, если трамвайный путь свободен на достаточном расстоянии.",
            'num' => '3',
            'question_id' => '629',
        ]);
        $this->insert('option', [
            'id' => '2153',
            'name' => "Как можно ближе к правому краю проезжей части.",
            'num' => '1',
            'question_id' => '630',
        ]);
        $this->insert('option', [
            'id' => '2154',
            'name' => "По любой полосе, если их количество определено дорожной разметкой.",
            'num' => '2',
            'question_id' => '630',
        ]);
        $this->insert('option', [
            'id' => '2155',
            'name' => "Только с учетом безопасного интервала до транспортных средств, движущихся по полосе встречного движения.",
            'num' => '3',
            'question_id' => '630',
        ]);
        $this->insert('option', [
            'id' => '2156',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '631',
        ]);
        $this->insert('option', [
            'id' => '2157',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '631',
        ]);
        $this->insert('option', [
            'id' => '2158',
            'name' => "Занять крайнее положение слева на проезжей части.",
            'num' => '1',
            'question_id' => '632',
        ]);
        $this->insert('option', [
            'id' => '2159',
            'name' => "Занять крайнее положение справа на проезжей части.",
            'num' => '2',
            'question_id' => '632',
        ]);
        $this->insert('option', [
            'id' => '2160',
            'name' => "Предварительно выехать на трамвайный путь попутного направления.",
            'num' => '3',
            'question_id' => '632',
        ]);
        $this->insert('option', [
            'id' => '2161',
            'name' => "Для поворота налево или разворота.",
            'num' => '1',
            'question_id' => '633',
        ]);
        $this->insert('option', [
            'id' => '2162',
            'name' => "Для опережения.",
            'num' => '2',
            'question_id' => '633',
        ]);
        $this->insert('option', [
            'id' => '2163',
            'name' => "В обоих перечисленных выше случаях.	",
            'num' => '3',
            'question_id' => '633',
        ]);
        $this->insert('option', [
            'id' => '2164',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '634',
        ]);
        $this->insert('option', [
            'id' => '2165',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '634',
        ]);
        $this->insert('option', [
            'id' => '2166',
            'name' => "Только габаритов транспортного средства.",
            'num' => '1',
            'question_id' => '635',
        ]);
        $this->insert('option', [
            'id' => '2167',
            'name' => "Только безопасных интервалов между транспортными средствами.",
            'num' => '2',
            'question_id' => '635',
        ]);
        $this->insert('option', [
            'id' => '2168',
            'name' => "Только ширины проезжей части соответствующего направления движения.",
            'num' => '3',
            'question_id' => '635',
        ]);
        $this->insert('option', [
            'id' => '2169',
            'name' => "Всех вышеперечисленных факторов.",
            'num' => '4',
            'question_id' => '635',
        ]);
        $this->insert('option', [
            'id' => '2170',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '636',
        ]);
        $this->insert('option', [
            'id' => '2171',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '636',
        ]);
        $this->insert('option', [
            'id' => '2172',
            'name' => "Выполняющего маневр во всех случаях.",
            'num' => '1',
            'question_id' => '637',
        ]);
        $this->insert('option', [
            'id' => '2173',
            'name' => "Выполняющего маневр только при его завершении.",
            'num' => '2',
            'question_id' => '637',
        ]);
        $this->insert('option', [
            'id' => '2174',
            'name' => "Движущегося во встречном направлении.",
            'num' => '3',
            'question_id' => '637',
        ]);
        $this->insert('option', [
            'id' => '2175',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '638',
        ]);
        $this->insert('option', [
            'id' => '2176',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '638',
        ]);
        $this->insert('option', [
            'id' => '2177',
            'name' => "Разрешается для обгона при отсутствии сплошной линии разметки.",
            'num' => '1',
            'question_id' => '639',
        ]);
        $this->insert('option', [
            'id' => '2178',
            'name' => "Разрешается для остановки или стоянки при отсутствии сплошной линии разметки.",
            'num' => '2',
            'question_id' => '639',
        ]);
        $this->insert('option', [
            'id' => '2179',
            'name' => "Разрешается во всех перечисленных выше случаях.",
            'num' => '3',
            'question_id' => '639',
        ]);
        $this->insert('option', [
            'id' => '2180',
            'name' => "Запрещается.",
            'num' => '4',
            'question_id' => '639',
        ]);
        $this->insert('option', [
            'id' => '2181',
            'name' => "Разрешается, если трамвайный путь возвышен не более чем на 20 см над уровнем проезжей части.",
            'num' => '1',
            'question_id' => '640',
        ]);
        $this->insert('option', [
            'id' => '2182',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '640',
        ]);
        $this->insert('option', [
            'id' => '2183',
            'name' => "Разрешается, при отсутствии попутного трамвая.",
            'num' => '3',
            'question_id' => '640',
        ]);
        $this->insert('option', [
            'id' => '2184',
            'name' => "Только легковым автомобилям.",
            'num' => '1',
            'question_id' => '641',
        ]);
        $this->insert('option', [
            'id' => '2185',
            'name' => "Только транспортным средствам с разрешенной максимальной массой до 3,5 т.",
            'num' => '2',
            'question_id' => '641',
        ]);
        $this->insert('option', [
            'id' => '2186',
            'name' => "Только на велосипедах.",
            'num' => '3',
            'question_id' => '641',
        ]);
        $this->insert('option', [
            'id' => '2187',
            'name' => "Транспортным средствам, обслуживающим предприятия, расположенные возле тротуаров, если нет других подъездов.",
            'num' => '4',
            'question_id' => '641',
        ]);
        $this->insert('option', [
            'id' => '2188',
            'name' => "Всем перечисленным выше транспортным средствам.",
            'num' => '5',
            'question_id' => '641',
        ]);
        $this->insert('option', [
            'id' => '2189',
            'name' => "Разрешается во время обгона или перестроения перед объездом, поворотом или разворотом.",
            'num' => '1',
            'question_id' => '642',
        ]);
        $this->insert('option', [
            'id' => '2190',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '642',
        ]);
        $this->insert('option', [
            'id' => '2191',
            'name' => "Только для остановки или стоянки на левой стороне дороги в разрешенных случаях.",
            'num' => '1',
            'question_id' => '643',
        ]);
        $this->insert('option', [
            'id' => '2192',
            'name' => "Только для поворота налево.",
            'num' => '2',
            'question_id' => '643',
        ]);
        $this->insert('option', [
            'id' => '2193',
            'name' => "Только когда другие полосы заняты.",
            'num' => '3',
            'question_id' => '643',
        ]);
        $this->insert('option', [
            'id' => '2194',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '4',
            'question_id' => '643',
        ]);
        $this->insert('option', [
            'id' => '2195',
            'name' => "Только в случаях, перечисленных в ответах 2 и 3.",
            'num' => '5',
            'question_id' => '643',
        ]);
        $this->insert('option', [
            'id' => '2196',
            'name' => "Только грузового автомобиля.",
            'num' => '1',
            'question_id' => '644',
        ]);
        $this->insert('option', [
            'id' => '2197',
            'name' => "Только автобуса.",
            'num' => '2',
            'question_id' => '644',
        ]);
        $this->insert('option', [
            'id' => '2198',
            'name' => "Грузового автомобиля и автобуса.",
            'num' => '3',
            'question_id' => '644',
        ]);
        $this->insert('option', [
            'id' => '2199',
            'name' => "Только во время объезда, когда ширина проезжей части недостаточна для выполнения этого маневра без выезда на трамвайный путь.",
            'num' => '1',
            'question_id' => '645',
        ]);
        $this->insert('option', [
            'id' => '2200',
            'name' => "Только, когда это не запрещено дорожными знаками или дорожной разметкой.",
            'num' => '2',
            'question_id' => '645',
        ]);
        $this->insert('option', [
            'id' => '2201',
            'name' => "В обоих перечисленных случаях.",
            'num' => '3',
            'question_id' => '645',
        ]);
        $this->insert('option', [
            'id' => '2202',
            'name' => "Только “А\".",
            'num' => '1',
            'question_id' => '646',
        ]);
        $this->insert('option', [
            'id' => '2203',
            'name' => "Только “А\" и “Б\".",
            'num' => '2',
            'question_id' => '646',
        ]);
        $this->insert('option', [
            'id' => '2204',
            'name' => "Только “В\".",
            'num' => '3',
            'question_id' => '646',
        ]);
        $this->insert('option', [
            'id' => '2205',
            'name' => "Все не противоречат.",
            'num' => '4',
            'question_id' => '646',
        ]);
        $this->insert('option', [
            'id' => '2206',
            'name' => "Только “А\".",
            'num' => '1',
            'question_id' => '647',
        ]);
        $this->insert('option', [
            'id' => '2207',
            'name' => "Только “Б\".",
            'num' => '2',
            'question_id' => '647',
        ]);
        $this->insert('option', [
            'id' => '2208',
            'name' => "Только “В”.",
            'num' => '3',
            'question_id' => '647',
        ]);
        $this->insert('option', [
            'id' => '2209',
            'name' => "“А” или “В\".",
            'num' => '4',
            'question_id' => '647',
        ]);
        $this->insert('option', [
            'id' => '2210',
            'name' => "“Б” или “В\".",
            'num' => '5',
            'question_id' => '647',
        ]);
        $this->insert('option', [
            'id' => '2211',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '648',
        ]);
        $this->insert('option', [
            'id' => '2212',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '648',
        ]);
        $this->insert('option', [
            'id' => '2213',
            'name' => "Только легкового автомобиля.",
            'num' => '1',
            'question_id' => '649',
        ]);
        $this->insert('option', [
            'id' => '2214',
            'name' => "Только грузового автомобиля.",
            'num' => '2',
            'question_id' => '649',
        ]);
        $this->insert('option', [
            'id' => '2215',
            'name' => "Легкового автомобиля и велосипеда.",
            'num' => '3',
            'question_id' => '649',
        ]);
        $this->insert('option', [
            'id' => '2216',
            'name' => "Разрешается только для остановки или стоянки на левой стороне дороги.",
            'num' => '1',
            'question_id' => '650',
        ]);
        $this->insert('option', [
            'id' => '2217',
            'name' => "Только для аварийной остановки.",
            'num' => '2',
            'question_id' => '650',
        ]);
        $this->insert('option', [
            'id' => '2218',
            'name' => "Запрещается.",
            'num' => '3',
            'question_id' => '650',
        ]);
        $this->insert('option', [
            'id' => '2219',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '651',
        ]);
        $this->insert('option', [
            'id' => '2220',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '651',
        ]);
        $this->insert('option', [
            'id' => '2221',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '652',
        ]);
        $this->insert('option', [
            'id' => '2222',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '652',
        ]);
        $this->insert('option', [
            'id' => '2223',
            'name' => "Только для выполнения объезда.",
            'num' => '1',
            'question_id' => '653',
        ]);
        $this->insert('option', [
            'id' => '2224',
            'name' => "Только при перестроении перед поворотом налево или разворотом.",
            'num' => '2',
            'question_id' => '653',
        ]);
        $this->insert('option', [
            'id' => '2225',
            'name' => "Когда выполняется объезд или перестроение перед поворотом налево или разворотом.",
            'num' => '3',
            'question_id' => '653',
        ]);
        $this->insert('option', [
            'id' => '2226',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '654',
        ]);
        $this->insert('option', [
            'id' => '2227',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '654',
        ]);
        $this->insert('option', [
            'id' => '2228',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '655',
        ]);
        $this->insert('option', [
            'id' => '2229',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '655',
        ]);
        $this->insert('option', [
            'id' => '2230',
            'name' => "Разрешается",
            'num' => '1',
            'question_id' => '656',
        ]);
        $this->insert('option', [
            'id' => '2231',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '656',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 11])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
