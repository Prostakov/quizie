<?php

use yii\db\Schema;
use yii\db\Migration;

class m150407_153211_populate_chapter9_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '1738',
            'name' => "Только грузового автомобиля.",
            'num' => '1',
            'question_id' => '499',
        ]);
        $this->insert('option', [
            'id' => '1739',
            'name' => "Только легкового автомобиля.",
            'num' => '2',
            'question_id' => '499',
        ]);
        $this->insert('option', [
            'id' => '1740',
            'name' => "Обоих автомобилей.",
            'num' => '3',
            'question_id' => '499',
        ]);
        $this->insert('option', [
            'id' => '1741',
            'name' => "Только подаваемые световыми указателями поворота или рукой.",
            'num' => '1',
            'question_id' => '500',
        ]);
        $this->insert('option', [
            'id' => '1742',
            'name' => "Только звуковые сигналы и переключение света фар.",
            'num' => '2',
            'question_id' => '500',
        ]);
        $this->insert('option', [
            'id' => '1743',
            'name' => "3.	Только включение опознавательного знака автопоезда и проблескового маячка оранжевого цвета.",
            'num' => '3',
            'question_id' => '500',
        ]);
        $this->insert('option', [
            'id' => '1744',
            'name' => "Любой вышеперечисленный сигнал.",
            'num' => '4',
            'question_id' => '500',
        ]);
        $this->insert('option', [
            'id' => '1745',
            'name' => "Только перечисленные в ответах 1 и 2 сигналы.",
            'num' => '5',
            'question_id' => '500',
        ]);
        $this->insert('option', [
            'id' => '1746',
            'name' => "1.Только 1.",
            'num' => '1',
            'question_id' => '501',
        ]);
        $this->insert('option', [
            'id' => '1747',
            'name' => "2. Только 1 и 2.",
            'num' => '2',
            'question_id' => '501',
        ]);
        $this->insert('option', [
            'id' => '1748',
            'name' => "3. Все подают.",
            'num' => '3',
            'question_id' => '501',
        ]);
        $this->insert('option', [
            'id' => '1749',
            'name' => "1. Только переключение света фар.",
            'num' => '1',
            'question_id' => '502',
        ]);
        $this->insert('option', [
            'id' => '1750',
            'name' => "2. Только звуковой сигнал.",
            'num' => '2',
            'question_id' => '502',
        ]);
        $this->insert('option', [
            'id' => '1751',
            'name' => "Переключение света фар и звуковой сигнал.",
            'num' => '3',
            'question_id' => '502',
        ]);
        $this->insert('option', [
            'id' => '1752',
            'name' => "Только в случае причастности к дорожно-транспортному происшествию.",
            'num' => '1',
            'question_id' => '503',
        ]);
        $this->insert('option', [
            'id' => '1753',
            'name' => "Только в случае ослепления водителя светом фар.",
            'num' => '2',
            'question_id' => '503',
        ]);
        $this->insert('option', [
            'id' => '1754',
            'name' => "Только в случае вынужденной остановки на дороге.",
            'num' => '3',
            'question_id' => '503',
        ]);
        $this->insert('option', [
            'id' => '1755',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '4',
            'question_id' => '503',
        ]);
        $this->insert('option', [
            'id' => '1756',
            'name' => "50-100м.",
            'num' => '1',
            'question_id' => '504',
        ]);
        $this->insert('option', [
            'id' => '1757',
            'name' => "100-150 м.",
            'num' => '2',
            'question_id' => '504',
        ]);
        $this->insert('option', [
            'id' => '1758',
            'name' => "150-200 м.",
            'num' => '3',
            'question_id' => '504',
        ]);
        $this->insert('option', [
            'id' => '1759',
            'name' => "200-250 м.",
            'num' => '4',
            'question_id' => '504',
        ]);
        $this->insert('option', [
            'id' => '1760',
            'name' => "Только знак аварийной остановки.",
            'num' => '1',
            'question_id' => '505',
        ]);
        $this->insert('option', [
            'id' => '1761',
            'name' => "Только мигающий красный фонарь.",
            'num' => '2',
            'question_id' => '505',
        ]);
        $this->insert('option', [
            'id' => '1762',
            'name' => "Знак аварийной остановки или мигающий красный фонарь.",
            'num' => '3',
            'question_id' => '505',
        ]);
        $this->insert('option', [
            'id' => '1763',
            'name' => "Перед остановкой у края проезжей части.",
            'num' => '1',
            'question_id' => '506',
        ]);
        $this->insert('option', [
            'id' => '1764',
            'name' => "Перед въездом на закругление дороги, обозначенным дорожным знаком \"Поворот направо\" или \"Поворот налево\".",
            'num' => '2',
            'question_id' => '506',
        ]);
        $this->insert('option', [
            'id' => '1765',
            'name' => "Перед поворотом при съезде на площадку для отдыха.",
            'num' => '3',
            'question_id' => '506',
        ]);
        $this->insert('option', [
            'id' => '1766',
            'name' => "Перед изменением направления движения.",
            'num' => '4',
            'question_id' => '506',
        ]);
        $this->insert('option', [
            'id' => '1767',
            'name' => "Во всех вышеперечисленных случаях.",
            'num' => '5',
            'question_id' => '506',
        ]);
        $this->insert('option', [
            'id' => '1768',
            'name' => "1. Только на маршрутном автобусе.",
            'num' => '1',
            'question_id' => '507',
        ]);
        $this->insert('option', [
            'id' => '1769',
            'name' => "2. Только на грузовом автомобиле, перевозящем опасный груз.",
            'num' => '2',
            'question_id' => '507',
        ]);
        $this->insert('option', [
            'id' => '1770',
            'name' => "3. На маршрутном автобусе * и грузовом автомобиле.",
            'num' => '3',
            'question_id' => '507',
        ]);
        $this->insert('option', [
            'id' => '1771',
            'name' => "4. Только на легковом автомобиле.",
            'num' => '4',
            'question_id' => '507',
        ]);
        $this->insert('option', [
            'id' => '1772',
            'name' => "Левой или правой рукой, поднятой вверх.",
            'num' => '1',
            'question_id' => '508',
        ]);
        $this->insert('option', [
            'id' => '1773',
            'name' => "Правой рукой, вытянутой в сторону и согнутой в локте вверх.",
            'num' => '2',
            'question_id' => '508',
        ]);
        $this->insert('option', [
            'id' => '1774',
            'name' => "Левой рукой, вытянутой в сторону и согнутой в локте вверх.",
            'num' => '3',
            'question_id' => '508',
        ]);
        $this->insert('option', [
            'id' => '1775',
            'name' => "20 м.",
            'num' => '1',
            'question_id' => '509',
        ]);
        $this->insert('option', [
            'id' => '1776',
            'name' => "30 м.",
            'num' => '2',
            'question_id' => '509',
        ]);
        $this->insert('option', [
            'id' => '1777',
            'name' => "40 м.",
            'num' => '3',
            'question_id' => '509',
        ]);
        $this->insert('option', [
            'id' => '1778',
            'name' => "50 м.",
            'num' => '4',
            'question_id' => '509',
        ]);
        $this->insert('option', [
            'id' => '1779',
            'name' => "Только левой рукой, вытянутой в сторону.",
            'num' => '1',
            'question_id' => '510',
        ]);
        $this->insert('option', [
            'id' => '1780',
            'name' => "Только правой рукой, вытянутой в сторону и согнутой в локте под прямым углом вверх.",
            'num' => '2',
            'question_id' => '510',
        ]);
        $this->insert('option', [
            'id' => '1781',
            'name' => "Одним из перечисленных выше действий.",
            'num' => '3',
            'question_id' => '510',
        ]);
        $this->insert('option', [
            'id' => '1782',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '511',
        ]);
        $this->insert('option', [
            'id' => '1783',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '511',
        ]);
        $this->insert('option', [
            'id' => '1784',
            'name' => "Только включить аварийную световую сигнализацию.",
            'num' => '1',
            'question_id' => '512',
        ]);
        $this->insert('option', [
            'id' => '1785',
            'name' => "Только установить знак аварийной остановки либо мигающий красный фонарь.",
            'num' => '2',
            'question_id' => '512',
        ]);
        $this->insert('option', [
            'id' => '1786',
            'name' => "Выполнить оба действия.",
            'num' => '3',
            'question_id' => '512',
        ]);
        $this->insert('option', [
            'id' => '1787',
            'name' => "Только в случае, если за ним движется другое транспортное средство.",
            'num' => '1',
            'question_id' => '513',
        ]);
        $this->insert('option', [
            'id' => '1788',
            'name' => "Только в населенных пунктах.",
            'num' => '2',
            'question_id' => '513',
        ]);
        $this->insert('option', [
            'id' => '1789',
            'name' => "Только в темное время суток и в условиях недостаточной видимости.",
            'num' => '3',
            'question_id' => '513',
        ]);
        $this->insert('option', [
            'id' => '1790',
            'name' => "В любом случае, кроме тех, если он может быть непонятным для других участников дорожного движения.",
            'num' => '4',
            'question_id' => '513',
        ]);
        $this->insert('option', [
            'id' => '1791',
            'name' => "Ближний свет фар.",
            'num' => '1',
            'question_id' => '514',
        ]);
        $this->insert('option', [
            'id' => '1792',
            'name' => "Аварийную световую сигнализацию.",
            'num' => '2',
            'question_id' => '514',
        ]);
        $this->insert('option', [
            'id' => '1793',
            'name' => "Только грузовой автомобиль.",
            'num' => '1',
            'question_id' => '515',
        ]);
        $this->insert('option', [
            'id' => '1794',
            'name' => "Только микроавтобус.",
            'num' => '2',
            'question_id' => '515',
        ]);
        $this->insert('option', [
            'id' => '1795',
            'name' => "Только легковой автомобиль.",
            'num' => '3',
            'question_id' => '515',
        ]);
        $this->insert('option', [
            'id' => '1796',
            'name' => "Только грузовой автомобиль и мотоцикл.",
            'num' => '4',
            'question_id' => '515',
        ]);
        $this->insert('option', [
            'id' => '1797',
            'name' => "Все, кроме легкового автомобиля.",
            'num' => '5',
            'question_id' => '515',
        ]);
        $this->insert('option', [
            'id' => '1798',
            'name' => "Необходимо выставить сзади знак аварийной остановки.",
            'num' => '1',
            'question_id' => '516',
        ]);
        $this->insert('option', [
            'id' => '1799',
            'name' => "Включить аварийную сигнализацию на переднем и заднем автомобилях.",
            'num' => '2',
            'question_id' => '516',
        ]);
        $this->insert('option', [
            'id' => '1800',
            'name' => "На всех автомобилях включить аварийную сигнализацию.",
            'num' => '3',
            'question_id' => '516',
        ]);
        $this->insert('option', [
            'id' => '1801',
            'name' => "Запрещается во всех случаях.",
            'num' => '1',
            'question_id' => '517',
        ]);
        $this->insert('option', [
            'id' => '1802',
            'name' => "Запрещается только в условиях, когда это может привести к ослеплению других водителей.",
            'num' => '2',
            'question_id' => '517',
        ]);
        $this->insert('option', [
            'id' => '1803',
            'name' => "Разрешается во всех случаях.",
            'num' => '3',
            'question_id' => '517',
        ]);
        $this->insert('option', [
            'id' => '1804',
            'name' => "Габаритные фонари или противотуманные фары.",
            'num' => '1',
            'question_id' => '518',
        ]);
        $this->insert('option', [
            'id' => '1805',
            'name' => "Ближний свет фар.",
            'num' => '2',
            'question_id' => '518',
        ]);
        $this->insert('option', [
            'id' => '1806',
            'name' => "Аварийная световая сигнализация.",
            'num' => '3',
            'question_id' => '518',
        ]);
        $this->insert('option', [
            'id' => '1807',
            'name' => "Только правой рукой, вытянутой в сторону.",
            'num' => '1',
            'question_id' => '519',
        ]);
        $this->insert('option', [
            'id' => '1808',
            'name' => "Только левой рукой, вытянутой в сторону и согнутой в локте под прямым углом вверх.",
            'num' => '2',
            'question_id' => '519',
        ]);
        $this->insert('option', [
            'id' => '1809',
            'name' => "Одним из перечисленных выше действием.",
            'num' => '3',
            'question_id' => '519',
        ]);
        $this->insert('option', [
            'id' => '1810',
            'name' => "Разрешается.",
            'num' => '1',
            'question_id' => '520',
        ]);
        $this->insert('option', [
            'id' => '1811',
            'name' => "Запрещается.",
            'num' => '2',
            'question_id' => '520',
        ]);
        $this->insert('option', [
            'id' => '1812',
            'name' => "",
            'num' => '1',
            'question_id' => '521',
        ]);
        $this->insert('option', [
            'id' => '1813',
            'name' => "",
            'num' => '2',
            'question_id' => '521',
        ]);
        $this->insert('option', [
            'id' => '1814',
            'name' => "",
            'num' => '3',
            'question_id' => '521',
        ]);
        $this->insert('option', [
            'id' => '1815',
            'name' => "",
            'num' => '4',
            'question_id' => '521',
        ]);
        $this->insert('option', [
            'id' => '1816',
            'name' => "Включить аварийную световую сигнализацию.",
            'num' => '1',
            'question_id' => '522',
        ]);
        $this->insert('option', [
            'id' => '1817',
            'name' => "Только выставить знак аварийной остановки.",
            'num' => '2',
            'question_id' => '522',
        ]);
        $this->insert('option', [
            'id' => '1818',
            'name' => "Только включить габаритные фонари.",
            'num' => '3',
            'question_id' => '522',
        ]);
        $this->insert('option', [
            'id' => '1819',
            'name' => "Выполнить все вышеперечисленные действия.",
            'num' => '4',
            'question_id' => '522',
        ]);
        $this->insert('option', [
            'id' => '1820',
            'name' => "Выполнить действия, перечисленные в ответах 1 и 2.",
            'num' => '5',
            'question_id' => '522',
        ]);
        $this->insert('option', [
            'id' => '1821',
            'name' => "1. Габаритные фонари или противотуманные фары.",
            'num' => '1',
            'question_id' => '523',
        ]);
        $this->insert('option', [
            'id' => '1822',
            'name' => "2. Ближний свет фар.",
            'num' => '2',
            'question_id' => '523',
        ]);
        $this->insert('option', [
            'id' => '1823',
            'name' => "3. Аварийная световая сигнализация.",
            'num' => '3',
            'question_id' => '523',
        ]);
        $this->insert('option', [
            'id' => '1824',
            'name' => "4. Дальний свет фар.",
            'num' => '4',
            'question_id' => '523',
        ]);
        $this->insert('option', [
            'id' => '1825',
            'name' => "Только в случае совершения дорожно-транспортного происшествия.",
            'num' => '1',
            'question_id' => '524',
        ]);
        $this->insert('option', [
            'id' => '1826',
            'name' => "Только в случае вынужденной остановки в местах с ограниченной обзорностью дороги хотя бы в одном направлении менее 100 м.",
            'num' => '2',
            'question_id' => '524',
        ]);
        $this->insert('option', [
            'id' => '1827',
            'name' => "Во всех перечисленных выше случаях.",
            'num' => '3',
            'question_id' => '524',
        ]);
        $this->insert('option', [
            'id' => '1828',
            'name' => "10 м.",
            'num' => '1',
            'question_id' => '525',
        ]);
        $this->insert('option', [
            'id' => '1829',
            'name' => "20 м.",
            'num' => '2',
            'question_id' => '525',
        ]);
        $this->insert('option', [
            'id' => '1830',
            'name' => "30 м.",
            'num' => '3',
            'question_id' => '525',
        ]);
        $this->insert('option', [
            'id' => '1831',
            'name' => "40 м.",
            'num' => '4',
            'question_id' => '525',
        ]);
        $this->insert('option', [
            'id' => '1832',
            'name' => "Только габаритные огни.",
            'num' => '1',
            'question_id' => '526',
        ]);
        $this->insert('option', [
            'id' => '1833',
            'name' => "Только аварийную сигнализацию.",
            'num' => '2',
            'question_id' => '526',
        ]);
        $this->insert('option', [
            'id' => '1834',
            'name' => "Ближний свет фар.",
            'num' => '3',
            'question_id' => '526',
        ]);
        $this->insert('option', [
            'id' => '1835',
            'name' => "Аварийную световую сигнализацию на обоих.",
            'num' => '1',
            'question_id' => '527',
        ]);
        $this->insert('option', [
            'id' => '1836',
            'name' => "Ближний свет фар на обоих.",
            'num' => '2',
            'question_id' => '527',
        ]);
        $this->insert('option', [
            'id' => '1837',
            'name' => "Ближний свет фар на буксирующем и аварийную световую сигнализацию — на буксируемом.",
            'num' => '3',
            'question_id' => '527',
        ]);
        $this->insert('option', [
            'id' => '1838',
            'name' => "Аварийную световую сигнализацию на буксирующем и ближний свет фар — на буксируемом.",
            'num' => '4',
            'question_id' => '527',
        ]);
        $this->insert('option', [
            'id' => '1839',
            'name' => "Дает.",
            'num' => '1',
            'question_id' => '528',
        ]);
        $this->insert('option', [
            'id' => '1840',
            'name' => "Не дает.",
            'num' => '2',
            'question_id' => '528',
        ]);
        $this->insert('option', [
            'id' => '1841',
            'name' => "Непосредственно перед началом выполнения маневра.",
            'num' => '1',
            'question_id' => '529',
        ]);
        $this->insert('option', [
            'id' => '1842',
            'name' => "За 25 м до начала выполнения маневра в населенном пункте.",
            'num' => '2',
            'question_id' => '529',
        ]);
        $this->insert('option', [
            'id' => '1843',
            'name' => "За 50 м до начала выполнения маневра.",
            'num' => '3',
            'question_id' => '529',
        ]);
        $this->insert('option', [
            'id' => '1844',
            'name' => "Только во время посадки детей.",
            'num' => '1',
            'question_id' => '530',
        ]);
        $this->insert('option', [
            'id' => '1845',
            'name' => "Только во время высадки детей.",
            'num' => '2',
            'question_id' => '530',
        ]);
        $this->insert('option', [
            'id' => '1846',
            'name' => "Только во время движения транспортного средства.",
            'num' => '3',
            'question_id' => '530',
        ]);
        $this->insert('option', [
            'id' => '1847',
            'name' => "Во всех вышеперечисленных случаях.",
            'num' => '4',
            'question_id' => '530',
        ]);
        $this->insert('option', [
            'id' => '1848',
            'name' => "В случаях, перечисленных в ответах 1 и 2.",
            'num' => '5',
            'question_id' => '530',
        ]);
        $this->insert('option', [
            'id' => '1849',
            'name' => "Только при движении в населенных пунктах.",
            'num' => '1',
            'question_id' => '531',
        ]);
        $this->insert('option', [
            'id' => '1850',
            'name' => "Только при движении вне населенного пункта.",
            'num' => '2',
            'question_id' => '531',
        ]);
        $this->insert('option', [
            'id' => '1851',
            'name' => "В обоих перечисленных случаях.",
            'num' => '3',
            'question_id' => '531',
        ]);
        $this->insert('option', [
            'id' => '1852',
            'name' => "20-50 м.",
            'num' => '1',
            'question_id' => '532',
        ]);
        $this->insert('option', [
            'id' => '1853',
            'name' => "50-100 м.",
            'num' => '2',
            'question_id' => '532',
        ]);
        $this->insert('option', [
            'id' => '1854',
            'name' => "100-150 м.",
            'num' => '3',
            'question_id' => '532',
        ]);
        $this->insert('option', [
            'id' => '1855',
            'name' => "150-200 м.",
            'num' => '4',
            'question_id' => '532',
        ]);
        $this->insert('option', [
            'id' => '1856',
            'name' => "На дорогах вне населенных пунктов, кроме случаев привлечения внимания водителя обгоняемого транспортного средства.",
            'num' => '1',
            'question_id' => '533',
        ]);
        $this->insert('option', [
            'id' => '1857',
            'name' => "В населенных пунктах, кроме случаев, когда без этого невозможно предотвратить дорожно-транспортное происшествие.",
            'num' => '2',
            'question_id' => '533',
        ]);
        $this->insert('option', [
            'id' => '1858',
            'name' => "В обоих перечисленных местах.",
            'num' => '3',
            'question_id' => '533',
        ]);
        $this->insert('option', [
            'id' => '1859',
            'name' => "Только водитель легкового автомобиля.",
            'num' => '1',
            'question_id' => '534',
        ]);
        $this->insert('option', [
            'id' => '1860',
            'name' => "Только водитель микроавтобуса.",
            'num' => '2',
            'question_id' => '534',
        ]);
        $this->insert('option', [
            'id' => '1861',
            'name' => "Оба водителя.",
            'num' => '3',
            'question_id' => '534',
        ]);
        $this->insert('option', [
            'id' => '1862',
            'name' => "Включением ближнего света фар.",
            'num' => '1',
            'question_id' => '535',
        ]);
        $this->insert('option', [
            'id' => '1863',
            'name' => "Включением аварийной световой сигнализации.",
            'num' => '2',
            'question_id' => '535',
        ]);
        $this->insert('option', [
            'id' => '1864',
            'name' => "Включением габаритных (стояночных) огней.",
            'num' => '3',
            'question_id' => '535',
        ]);
        $this->insert('option', [
            'id' => '1865',
            'name' => "Включением любых из перечисленных выше световых приборов.",
            'num' => '4',
            'question_id' => '535',
        ]);
        $this->insert('option', [
            'id' => '1866',
            'name' => "Должен.",
            'num' => '1',
            'question_id' => '536',
        ]);
        $this->insert('option', [
            'id' => '1867',
            'name' => "Не должен.",
            'num' => '2',
            'question_id' => '536',
        ]);
        $this->insert('option', [
            'id' => '1868',
            'name' => "Должен только в случае наличия сзади транспортных средств.",
            'num' => '3',
            'question_id' => '536',
        ]);
        $this->insert('option', [
            'id' => '1869',
            'name' => "",
            'num' => '1',
            'question_id' => '537',
        ]);
        $this->insert('option', [
            'id' => '1870',
            'name' => "",
            'num' => '2',
            'question_id' => '537',
        ]);
        $this->insert('option', [
            'id' => '1871',
            'name' => "",
            'num' => '3',
            'question_id' => '537',
        ]);
        $this->insert('option', [
            'id' => '1872',
            'name' => "",
            'num' => '1',
            'question_id' => '538',
        ]);
        $this->insert('option', [
            'id' => '1873',
            'name' => "",
            'num' => '2',
            'question_id' => '538',
        ]);
        $this->insert('option', [
            'id' => '1874',
            'name' => "",
            'num' => '3',
            'question_id' => '538',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 9])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
