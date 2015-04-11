<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150405_102813_populate_chapter3_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '568',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '157',
        ]);
        $this->insert('option', [
            'id' => '569',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '157',
        ]);
        $this->insert('option', [
            'id' => '570',
            'name' => "Дозволено відступати тільки від вимог дорожніх знаків і сигналів світлофора.",
            'num' => '3',
            'question_id' => '157',
        ]);
        $this->insert('option', [
            'id' => '571',
            'name' => "Дати дорогу тільки легковому автомобілю.",
            'num' => '1',
            'question_id' => '158',
        ]);
        $this->insert('option', [
            'id' => '572',
            'name' => "Дати дорогу тільки вам.",
            'num' => '2',
            'question_id' => '158',
        ]);
        $this->insert('option', [
            'id' => '573',
            'name' => "Дати дорогу обом транспортним засобам.",
            'num' => '3',
            'question_id' => '158',
        ]);
        $this->insert('option', [
            'id' => '574',
            'name' => "Дочекатися увімкнення сигналу світлофора, що дозволяє рух, і почати рух.",
            'num' => '4',
            'question_id' => '158',
        ]);
        $this->insert('option', [
            'id' => '575',
            'name' => "Маєте ви.",
            'num' => '1',
            'question_id' => '159',
        ]);
        $this->insert('option', [
            'id' => '576',
            'name' => "Має водій автомобіля пожежної служби.",
            'num' => '2',
            'question_id' => '159',
        ]);
        $this->insert('option', [
            'id' => '577',
            'name' => "Усіх, незалежно від напрямку їх руху.",
            'num' => '1',
            'question_id' => '160',
        ]);
        $this->insert('option', [
            'id' => '578',
            'name' => "Тільки вантажного автомобіля.",
            'num' => '2',
            'question_id' => '160',
        ]);
        $this->insert('option', [
            'id' => '579',
            'name' => "Тільки трамвая.",
            'num' => '3',
            'question_id' => '160',
        ]);
        $this->insert('option', [
            'id' => '580',
            'name' => "Тільки автобуса.",
            'num' => '4',
            'question_id' => '160',
        ]);
        $this->insert('option', [
            'id' => '581',
            'name' => "Дозволено, оскільки дорога має три смуги для руху в одному напрямку.",
            'num' => '1',
            'question_id' => '161',
        ]);
        $this->insert('option', [
            'id' => '582',
            'name' => "Дозволено, тільки якщо швидкість руху колони менше ніж 40 км/год.",
            'num' => '2',
            'question_id' => '161',
        ]);
        $this->insert('option', [
            'id' => '583',
            'name' => "Заборонено.",
            'num' => '3',
            'question_id' => '161',
        ]);
        $this->insert('option', [
            'id' => '584',
            'name' => "Маєте ви.",
            'num' => '1',
            'question_id' => '162',
        ]);
        $this->insert('option', [
            'id' => '585',
            'name' => "Має водій спеціального автомобіля.",
            'num' => '2',
            'question_id' => '162',
        ]);
        $this->insert('option', [
            'id' => '586',
            'name' => "Має продовжити рух у напрямку стрілки додаткової секції світлофора, давши дорогу іншим автомобілям.",
            'num' => '1',
            'question_id' => '163',
        ]);
        $this->insert('option', [
            'id' => '587',
            'name' => "Має перевагу в русі й може повернути ліворуч.",
            'num' => '2',
            'question_id' => '163',
        ]);
        $this->insert('option', [
            'id' => '588',
            'name' => "Повинен очікувати сигнал світлофора, що дозволяє рух, для повороту ліворуч.",
            'num' => '3',
            'question_id' => '163',
        ]);
        $this->insert('option', [
            'id' => '589',
            'name' => "Дає перевагу в русі.",
            'num' => '1',
            'question_id' => '164',
        ]);
        $this->insert('option', [
            'id' => '590',
            'name' => "Не дає переваги в русі.",
            'num' => '2',
            'question_id' => '164',
        ]);
        $this->insert('option', [
            'id' => '591',
            'name' => "«Міліція», «Швидка допомога».",
            'num' => '1',
            'question_id' => '165',
        ]);
        $this->insert('option', [
            'id' => '592',
            'name' => "«Швидка допомога», «Міліція».",
            'num' => '2',
            'question_id' => '165',
        ]);
        $this->insert('option', [
            'id' => '593',
            'name' => "Зупинити транспортний засіб біля правого краю проїзної частини.",
            'num' => '1',
            'question_id' => '166',
        ]);
        $this->insert('option', [
            'id' => '594',
            'name' => "Дати йому дорогу і забезпечити безперешкодний проїзд супроводжувального і супроводжуваних транспортних засобів.",
            'num' => '2',
            'question_id' => '166',
        ]);
        $this->insert('option', [
            'id' => '595',
            'name' => "Продовжити рух, забезпечивши безпечний інтервал.",
            'num' => '1',
            'question_id' => '167',
        ]);
        $this->insert('option', [
            'id' => '596',
            'name' => "Знизити швидкість руху аж до зупинки.",
            'num' => '2',
            'question_id' => '167',
        ]);
        $this->insert('option', [
            'id' => '597',
            'name' => "Зупинити автомобіль біля правого краю проїзної частини.",
            'num' => '3',
            'question_id' => '167',
        ]);
        $this->insert('option', [
            'id' => '598',
            'name' => "Тільки автобуса.",
            'num' => '1',
            'question_id' => '168',
        ]);
        $this->insert('option', [
            'id' => '599',
            'name' => "Тільки легкового автомобіля.",
            'num' => '2',
            'question_id' => '168',
        ]);
        $this->insert('option', [
            'id' => '600',
            'name' => "Обох транспортних засобів.",
            'num' => '3',
            'question_id' => '168',
        ]);
        $this->insert('option', [
            'id' => '601',
            'name' => "Має водій спеціального автомобіля.",
            'num' => '1',
            'question_id' => '169',
        ]);
        $this->insert('option', [
            'id' => '602',
            'name' => "Маєте ви.",
            'num' => '2',
            'question_id' => '169',
        ]);
        $this->insert('option', [
            'id' => '603',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '170',
        ]);
        $this->insert('option', [
            'id' => '604',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '170',
        ]);
        $this->insert('option', [
            'id' => '605',
            'name' => "Дозволено, якщо швидкість руху колони не перевищує 40 км/год.",
            'num' => '3',
            'question_id' => '170',
        ]);
        $this->insert('option', [
            'id' => '606',
            'name' => "Дозволено здійснювати тільки випередження.",
            'num' => '4',
            'question_id' => '170',
        ]);
        $this->insert('option', [
            'id' => '607',
            'name' => "Водій автомобіля швидкої допомоги.",
            'num' => '1',
            'question_id' => '171',
        ]);
        $this->insert('option', [
            'id' => '608',
            'name' => "Водій автомобіля міліції, що супроводжує колону.",
            'num' => '2',
            'question_id' => '171',
        ]);
        $this->insert('option', [
            'id' => '609',
            'name' => "Маєте ви.",
            'num' => '1',
            'question_id' => '172',
        ]);
        $this->insert('option', [
            'id' => '610',
            'name' => "Має водій автомобіля швидкої медичної допомоги.",
            'num' => '2',
            'question_id' => '172',
        ]);
        $this->insert('option', [
            'id' => '611',
            'name' => "Тільки 1.",
            'num' => '1',
            'question_id' => '173',
        ]);
        $this->insert('option', [
            'id' => '612',
            'name' => "Автомобіля 2 або 3.",
            'num' => '2',
            'question_id' => '173',
        ]);
        $this->insert('option', [
            'id' => '613',
            'name' => "Тільки 2.",
            'num' => '3',
            'question_id' => '173',
        ]);
        $this->insert('option', [
            'id' => '614',
            'name' => "Тільки 3.",
            'num' => '4',
            'question_id' => '173',
        ]);
        $this->insert('option', [
            'id' => '615',
            'name' => "Будь-якого з показаних.",
            'num' => '5',
            'question_id' => '173',
        ]);
        $this->insert('option', [
            'id' => '616',
            'name' => "Зобов’язаний.",
            'num' => '1',
            'question_id' => '174',
        ]);
        $this->insert('option', [
            'id' => '617',
            'name' => "Не зобов’язаний.",
            'num' => '2',
            'question_id' => '174',
        ]);
        $this->insert('option', [
            'id' => '618',
            'name' => "Маєте перевагу.",
            'num' => '1',
            'question_id' => '175',
        ]);
        $this->insert('option', [
            'id' => '619',
            'name' => "Зобов’язані дати дорогу автомобілю оперативної служби.",
            'num' => '2',
            'question_id' => '175',
        ]);
        $this->insert('option', [
            'id' => '620',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '176',
        ]);
        $this->insert('option', [
            'id' => '621',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '176',
        ]);
        $this->insert('option', [
            'id' => '622',
            'name' => "Дозволено, тільки якщо швидкість колони не перевищує 40 км/год.",
            'num' => '3',
            'question_id' => '176',
        ]);
        $this->insert('option', [
            'id' => '623',
            'name' => "Дозволено, якщо колона рухається по крайній правій смузі.",
            'num' => '4',
            'question_id' => '176',
        ]);
        $this->insert('option', [
            'id' => '624',
            'name' => "Тільки для привертання уваги учасників дорожнього руху.",
            'num' => '1',
            'question_id' => '177',
        ]);
        $this->insert('option', [
            'id' => '625',
            'name' => "Тільки для попередження учасників дорожнього руху про небезпеки.",
            'num' => '2',
            'question_id' => '177',
        ]);
        $this->insert('option', [
            'id' => '626',
            'name' => "Для привертання уваги та попередження про небезпеку.",
            'num' => '3',
            'question_id' => '177',
        ]);
        $this->insert('option', [
            'id' => '627',
            'name' => "Порушує.",
            'num' => '1',
            'question_id' => '178',
        ]);
        $this->insert('option', [
            'id' => '628',
            'name' => "Не порушує.",
            'num' => '2',
            'question_id' => '178',
        ]);
        $this->insert('option', [
            'id' => '629',
            'name' => "Заборонено.",
            'num' => '1',
            'question_id' => '179',
        ]);
        $this->insert('option', [
            'id' => '630',
            'name' => "Дозволено.",
            'num' => '2',
            'question_id' => '179',
        ]);
        $this->insert('option', [
            'id' => '631',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '180',
        ]);
        $this->insert('option', [
            'id' => '632',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '180',
        ]);
        $this->insert('option', [
            'id' => '633',
            'name' => "Дозволено тільки у випадку, якщо їх швидкість не перевищує ЗО км/год.",
            'num' => '3',
            'question_id' => '180',
        ]);
        $this->insert('option', [
            'id' => '634',
            'name' => "Тільки праворуч.",
            'num' => '1',
            'question_id' => '181',
        ]);
        $this->insert('option', [
            'id' => '635',
            'name' => "Тільки прямо або праворуч.",
            'num' => '2',
            'question_id' => '181',
        ]);
        $this->insert('option', [
            'id' => '636',
            'name' => "Тільки праворуч або наліво.",
            'num' => '3',
            'question_id' => '181',
        ]);
        $this->insert('option', [
            'id' => '637',
            'name' => "В усіх напрямках.",
            'num' => '4',
            'question_id' => '181',
        ]);
        $this->insert('option', [
            'id' => '638',
            'name' => "Припинити випередження мотоцикла і дати дорогу.",
            'num' => '1',
            'question_id' => '182',
        ]);
        $this->insert('option', [
            'id' => '639',
            'name' => "Зупинити автомобіль біля правого краю проїзної частини або на узбіччі.",
            'num' => '2',
            'question_id' => '182',
        ]);
        $this->insert('option', [
            'id' => '640',
            'name' => "Негайно зменшити швидкість руху аж до зупинки.",
            'num' => '3',
            'question_id' => '182',
        ]);
        $this->insert('option', [
            'id' => '641',
            'name' => "Тільки прямо або праворуч.",
            'num' => '1',
            'question_id' => '183',
        ]);
        $this->insert('option', [
            'id' => '642',
            'name' => "Тільки ліворуч або на розворот.",
            'num' => '2',
            'question_id' => '183',
        ]);
        $this->insert('option', [
            'id' => '643',
            'name' => "В усіх напрямках.",
            'num' => '3',
            'question_id' => '183',
        ]);
        $this->insert('option', [
            'id' => '644',
            'name' => "Можете повернути праворуч одночасно з проїздом автомобіля з увімкненим маячком.",
            'num' => '1',
            'question_id' => '184',
        ]);
        $this->insert('option', [
            'id' => '645',
            'name' => "Зобов’язані зупинити автомобіль біля правого краю проїзної частини.",
            'num' => '2',
            'question_id' => '184',
        ]);
        $this->insert('option', [
            'id' => '646',
            'name' => "Зобов’язані дати дорогу перед виїздом на перехрестя.",
            'num' => '3',
            'question_id' => '184',
        ]);
        $this->insert('option', [
            'id' => '647',
            'name' => "Знизити швидкість навіть до зупинки.",
            'num' => '1',
            'question_id' => '185',
        ]);
        $this->insert('option', [
            'id' => '648',
            'name' => "Знизити швидкість до 40 км/год і у випадку подачі регулювальником відповідного сигналу — зупинитися.",
            'num' => '2',
            'question_id' => '185',
        ]);
        $this->insert('option', [
            'id' => '649',
            'name' => "Вести транспортний засіб якомога ближче до правого краю проїзної частини.",
            'num' => '3',
            'question_id' => '185',
        ]);
        $this->insert('option', [
            'id' => '650',
            'name' => "Негайно зупинити транспортний засіб.",
            'num' => '1',
            'question_id' => '186',
        ]);
        $this->insert('option', [
            'id' => '651',
            'name' => "Зупинити транспортний засіб біля правого краю проїзної частини (на правому узбіччі).",
            'num' => '2',
            'question_id' => '186',
        ]);
        $this->insert('option', [
            'id' => '652',
            'name' => "Вести транспортний засіб якомога ближче до правого краю проїзної частини.",
            'num' => '3',
            'question_id' => '186',
        ]);
        $this->insert('option', [
            'id' => '653',
            'name' => "Має перевагу в русі.",
            'num' => '1',
            'question_id' => '187',
        ]);
        $this->insert('option', [
            'id' => '654',
            'name' => "Повинен дати дорогу трамваю.",
            'num' => '2',
            'question_id' => '187',
        ]);
        $this->insert('option', [
            'id' => '655',
            'name' => "Вести автомобіль якомога ближче до правого краю проїзної частини.",
            'num' => '1',
            'question_id' => '188',
        ]);
        $this->insert('option', [
            'id' => '656',
            'name' => "Негайно зменшити швидкість руху аж до зупинки.",
            'num' => '2',
            'question_id' => '188',
        ]);
        $this->insert('option', [
            'id' => '657',
            'name' => "Зупинити автомобіль біля правого краю проїзної частини або на узбіччі.",
            'num' => '3',
            'question_id' => '188',
        ]);
        $this->insert('option', [
            'id' => '658',
            'name' => "Дозволено тільки водієві автомобіля швидкої допомоги.",
            'num' => '1',
            'question_id' => '189',
        ]);
        $this->insert('option', [
            'id' => '659',
            'name' => "Дозволено тільки водієві автомобіля дорожньої служби.",
            'num' => '2',
            'question_id' => '189',
        ]);
        $this->insert('option', [
            'id' => '660',
            'name' => "Водіям обох транспортних засобів дозволено.",
            'num' => '3',
            'question_id' => '189',
        ]);
        $this->insert('option', [
            'id' => '661',
            'name' => "Водіям обох транспортних засобів заборонено.",
            'num' => '4',
            'question_id' => '189',
        ]);
        $this->insert('option', [
            'id' => '662',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '190',
        ]);
        $this->insert('option', [
            'id' => '663',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '190',
        ]);
        $this->insert('option', [
            'id' => '664',
            'name' => "Знизити швидкість руху до 40 км/год і проїхати з обережністю цю ділянку дороги.",
            'num' => '1',
            'question_id' => '191',
        ]);
        $this->insert('option', [
            'id' => '665',
            'name' => "Тільки зупинитися.",
            'num' => '2',
            'question_id' => '191',
        ]);
        $this->insert('option', [
            'id' => '666',
            'name' => "Виконати одну з перелічених вище дію.",
            'num' => '3',
            'question_id' => '191',
        ]);
        $this->insert('option', [
            'id' => '667',
            'name' => "Знизити швидкість руху до 40 км/год.",
            'num' => '1',
            'question_id' => '192',
        ]);
        $this->insert('option', [
            'id' => '668',
            'name' => "Тільки зупинитися.",
            'num' => '2',
            'question_id' => '192',
        ]);
        $this->insert('option', [
            'id' => '669',
            'name' => "Виконати одну з перелічених вище дію.",
            'num' => '3',
            'question_id' => '192',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 3])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
