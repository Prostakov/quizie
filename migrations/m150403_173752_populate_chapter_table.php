<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173752_populate_chapter_table extends Migration
{
    public function up()
    {
        $this->insert('chapter', [
            'name' => 'Загальні положення',
            'num' => '1',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Обов\'язки і права водіїв механічних транспортних засобів',
            'num' => '2',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Рух транспортних засобів із спеціальними сигналами',
            'num' => '3',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Обов\'язки і права пішоходів',
            'num' => '4',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Обов\'язки і права пасажирів',
            'num' => '5',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Вимоги до велосипедистів',
            'num' => '6',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Вимоги до осіб, які керують гужовим транспортом і погоничів тварин',
            'num' => '7',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Регулювання дорожнього руху',
            'num' => '8',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Попереджувальні сигнали',
            'num' => '9',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Початок руху та зміна його напрямку',
            'num' => '10',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Розташування транспортних засобів на дорозі',
            'num' => '11',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Швидкість руху',
            'num' => '12',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Дистанція, інтервал, зустрічний роз\'їзд',
            'num' => '13',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Обгін',
            'num' => '14',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Зупинка і стоянка',
            'num' => '15',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Проїзд перехресть',
            'num' => '16',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Переваги маршрутних транспортних засобів',
            'num' => '17',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Проїзд пішохідних переходів і зупинок транспортних засобів',
            'num' => '18',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Користування зовнішніми світловими приладами',
            'num' => '19',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Рух через залізничні переїзди',
            'num' => '20',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Перевезення пасажирів',
            'num' => '21',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Перевезення вантражу',
            'num' => '22',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Буксирування та експлуатація транспортних составів',
            'num' => '23',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Навчальна їзда',
            'num' => '24',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Рух транспортних засобів у колонах',
            'num' => '25',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Рух у житловій та пішохідній зоні',
            'num' => '26',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Рух по автомагістралях та дорогах для автомобілів',
            'num' => '27',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Рух по гірських дорогах та крутих спусках',
            'num' => '28',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Міжнародний рух',
            'num' => '29',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Номерні, розпізнавальні знаки, написи і позначення',
            'num' => '30',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Технічний стан транспортних засобів та їх обладнання',
            'num' => '31',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Окремі питання дорожнього руху, що потребують узгодження з державтоінспекцією',
            'num' => '32',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Дорожні знаки',
            'num' => '33',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Дорожня розмітка',
            'num' => '34',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Основи безпеки дорожнього руху',
            'num' => '35',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Основи надання першої медичної допомоги',
            'num' => '36',
            'quiz_id' => '1',
        ]);
        $this->insert('chapter', [
            'name' => 'Основи автотранспортного права',
            'num' => '37',
            'quiz_id' => '1',
        ]);
    }

    public function down()
    {
        $this->delete('chapter');
    }
}
