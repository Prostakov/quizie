<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_174220_populate_chapter1_question_table extends Migration
{
    public function up()
    {
        $this->insert('question', [
            'id' => '1',
            'name' => "До мікроавтобуса належить одноповерховий автобус з кількістю місць для сидіння (з місцем для водія включно) тільки:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '1',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '2',
            'name' => "Водій, який створив небезпеку чи перешкоду для руху, зобов'язаний:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '2',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '3',
            'name' => "На якому малюнку зображено регульований пішохідний перехід?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '3',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '4',
            'name' => "Наявність на другорядній дорозі покриття безпосередньо перед перехрестям:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '4',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '5',
            'name' => "На транспортних засобах, що рухаються в колоні, ближнє світло фар має бути ввімкнено:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '5',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '6',
            'name' => "Дорожньо-транспортною пригодою вважають подію, що відбулася під час руху:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '6',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '7',
            'name' => "До мотоциклів належать двоколісні механічні транспортні засоби з бічним причепом або без нього, що мають двигун з робочим об’ємом:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '7',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '8',
            'name' => "Чи порушує водій Правила, рухаючись посередині такої дороги?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '8',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '9',
            'name' => "До автобуса належить автомобіль з кількістю місць для сидіння (з місцем водія включно):",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '9',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '10',
            'name' => "Небезпекою для руху вважають зміну дорожньої обстановки або технічного стану транспортного засобу, яка загрожує безпеці дорожнього руху і змушує водія:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '10',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '11',
            'name' => "Видимістю в напрямку руху вважають максимальну відстань, на якій з місця водія можна чітко зозпізнати:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '11',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '12',
            'name' => "Рухається у населеному пункті водій:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '12',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '13',
            'name' => "Особи, які порушують Правила дорожнього руху, несуть відповідальність:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '13',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '14',
            'name' => "Перевагою вважається право на першочерговий рух стосовно:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '14',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '15',
            'name' => "На якому з малюнків виконано стоянку, якщо вона триває більше ніж 5 хвилин?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '15',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '16',
            'name' => "Водій, який створив небезпеку чи перешкоду для руху, зобов’язаний попередити та повідомити про них:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '16',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '17',
            'name' => "Автомобільною дорогою (вулицею) вважають частину території, в тому числі в населеному пункті, призначену для руху:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '17',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '18',
            'name' => "Прилегла територія призначена для:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '18',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '19',
            'name' => "Тротуаром вважається елемент дороги, призначена для руху:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '19',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '20',
            'name' => "Чим обмежується трамвайна колія по ширині?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '20',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '21',
            'name' => "На якому з малюнків показано обгін:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '21',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '22',
            'name' => "До автомагістралі належить автомобільна дорога:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '22',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '23',
            'name' => "Використовувати дорогу не за її призначенням дозволено лише за рішенням:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '23',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '24',
            'name' => "Що з зображеного належать до транспортних засобів?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '24',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '25',
            'name' => "До маршрутних транспортних засобів належать:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '25',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '26',
            'name' => "Габаритно-ваговий контроль — це перевірка:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '26',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '27',
            'name' => "Оглядовістю вважається об'єктивна можливість бачити з місця водія:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '27',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '28',
            'name' => "Вимушеною зупинкою вважається припинення руху транспортного засобу через:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '28',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '29',
            'name' => "Який транспортний засіб є для вас перешкодою?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '29',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '30',
            'name' => "До рейкового транспортного засобу належить:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '30',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '31',
            'name' => "Головною дорогою вважається дорога:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '31',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '32',
            'name' => "Згідно з Правилами до мотоциклів прирівнюються моторолери, мотоколяски та механічні транспортні засоби, дозволена маса яких не перевищує:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '32',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '33',
            'name' => "Естакада — інженерна споруда, призначена для руху:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '33',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '34',
            'name' => "Безпечним інтервалом вважається відстань, за якої забезпечено безпеку дорожнього руху:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '34',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '35',
            'name' => "Згідно з Правилами перехрестям вважається:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '35',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '36',
            'name' => "Який із зображених транспортних засобів згідно з Правилами, вважається велосипедом?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '36',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '37',
            'name' => "До вантажного автомобіля належить автомобіль, який за своєю конструкцією та обладнанням призначений для перевезення:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '37',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '38',
            'name' => "У якому з перелічених випадків припинення руху транс¬портного засобу на час більше ніж 5 хвилин вважається зупинкою?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '38',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '39',
            'name' => "У цій ситуації випередити мікроавтобус на перехресті дозволяється:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '39',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '40',
            'name' => "Небезпека чи перешкода для руху можуть бути створені:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '40',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '41',
            'name' => "Недостатньою видимістю вважається видимість дороги у напрямку руху менше ніж 300 м:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '41',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '42',
            'name' => "На якому малюнку неправильно вказано стрілкою край проїзної частини?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '42',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '43',
            'name' => "До транспортного засобу належить пристрій, призначений для перевезення:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '43',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '44',
            'name' => "Безпечною дистанцією вважається відстань до транспортного засобу, що дозволить вам, у разі раптового його гальмування або зупинки, запобігти зіткненню без виконання будь-якого маневру, якщо цей транспортний засіб рухається:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '44',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '45',
            'name' => "До мосту належить споруда, призначена для руху:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '45',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '46',
            'name' => "До дорожньо-транспортної пригоди належить подія, в результаті якої:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '46',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '47',
            'name' => "Населеним пунктом вважається забудована територія, в'їзди на яку і виїзди з якої позначено дорожніми знаками:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '47',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '48',
            'name' => "Хто з осіб, зображених на малюнку, є водієм?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '48',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '49',
            'name' => "Колоною пішоходів вважають організовану групу людей, які рухаються по:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '49',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '50',
            'name' => "Дорожньою обстановкою вважається сукупність чинників, що характеризуються:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '50',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '51',
            'name' => "Поза межами пішохідного переходу дорогу переходить:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '51',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '52',
            'name' => "Учасником дорожнього руху вважається особа, яка бере безпосередню участь у процесі руху на дорозі як:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '52',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '53',
            'name' => "До шляхопроводу належить споруда мостового типу в місці перетину:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '53',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '54',
            'name' => "Сукупністю яких чинників характеризуються дорожні умови?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '54',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '55',
            'name' => "На якому малюнку водій виїжджає з житлової зони?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '55',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '56',
            'name' => "Яка максимальна кількість місць для сидіння (з місцем водія включно) може бути в легковому автомобілі згідно з Правилами?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '56',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '57',
            'name' => "Обгоном вважається випередження одного або кількох транспортних засобів:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '57',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '58',
            'name' => "Безпечною щвидкістю вважається швидкість:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '58',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '59',
            'name' => "Виконати об'їзд вантажного автомобіля, що зупинився, у напрямку, показаному стрілкою:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '59',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '60',
            'name' => "Дозволеною максимальною масою вважається маса спорядженого транспортного засобу з вантажем, водієм і пасажирами, яка встановлена технічною характеристикою як максимально допустима:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '60',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '61',
            'name' => "Регулювальником вважаєтсья особа, яка регулює дорожній рух та має екіпіровку і посвідчення:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '61',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '62',
            'name' => "Головною дорогою вважається дорога, позначена знаками:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '62',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '63',
            'name' => "Випередженням ваажається рух транспортного засобу зі швидкістю, яка перевищує швидкість попутного транспортного засобу, що рухається:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '63',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '64',
            'name' => "Небезпека для руху настає у разі:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '64',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '65',
            'name' => "Де може бути розташовано пішохідну доріжку?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '65',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '66',
            'name' => "Чи порушує Правила водій мікроавтобуса, зупинившись зоні знака \"Cтоянку заборонено\" на час більший, ніж 5хв?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '66',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '67',
            'name' => "Що з переліченого належить до експлуатації транспортного складу?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '67',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '68',
            'name' => "Хто може бути власником транспортного засобу?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '68',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '69',
            'name' => "Колона транспортних засобів — це:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '69',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '70',
            'name' => "На якому з малюнків зображено дорогу з розділювальною смугою?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '70',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '71',
            'name' => "Буксирування можна здійснювати:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '71',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '72',
            'name' => "Пасажиром вважають особу, яка користується і яка перебуває:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '72',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '73',
            'name' => "Водій якого транспортного засобу рухається по головній дорозі?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '73',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '74',
            'name' => "Велосипед — це транспортний засіб:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '74',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '75',
            'name' => "Обмеженою оглядовістю вважається видимість дороги в напрямку руху, яка обмежена:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '75',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '76',
            'name' => "Пішоходом вважають особу, яка бере участь у дорожньому русі:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '76',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '77',
            'name' => "На якому малюнку показано залізничний переїзд?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '77',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '78',
            'name' => "Темною порою доби вважають частину доби від:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '78',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '79',
            'name' => "У такій ситуації легковий автомобіль для вас є:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '79',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '80',
            'name' => "Згідно з Правилами смугою для руху нерейкових транспортних засобів вважається поздовжня смуга на проїзній частині:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '80',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '81',
            'name' => "Водій легкового автомобіля виконує поворот з крайнього положення?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '81',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '82',
            'name' => "По велосипедній доріжці рух дозволено:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '82',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '83',
            'name' => "Згідно з Правилами до мопедів належать двоколісні транспортні засоби:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '83',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '84',
            'name' => "У населеному пункті рухається водій:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '84',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '85',
            'name' => "Видимість у напрямку руху повинна враховуватися водієм під час вибору:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '85',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '86',
            'name' => "Розділювальна смуга автомобільної дороги призначена для:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '86',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '87',
            'name' => "Яке із зображених транспортних засобів належать до причепів?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '87',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '88',
            'name' => "У якому з перелічених випадків учасник дорожнього руху не виконав вимогу Правил «дати дорогу»?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '88',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '89',
            'name' => "Житловою зоною вважається:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '89',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '90',
            'name' => "На якому з малюнків правильно показано синім кольором межі перехрестя?",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '90',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '91',
            'name' => "Гальмовим шляхом вважається відстань, що проходить транспортний засіб під час екстреного гальмування з:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '91',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '92',
            'name' => "До механічних транспортних засобів належать:",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '92',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '93',
            'name' => "Перешкодою для руху вважається нерухомий об’єкт у межах смуги руху транспортного засобу чи об’єкт, що рухається попутно в межах цієї смуги і який змушує водія:",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '93',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '94',
            'name' => "Краєм проїзної частини (для нерейкових транспортних засобів) вважається видима умовна або позначена дорожньою розміткою лінія на проїзній частині:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '94',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '95',
            'name' => "Згідно з Правилами проїзною частиною вважається елемент дороги, призначений для руху:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '95',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '96',
            'name' => "На якому малюнку зображено мотоцикл, якщо його дозволена маса не перевищує 400 кг?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '96',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '97',
            'name' => "За відсутності дорожньої розмітки межі пішохідного переходу визначаються:",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '97',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '98',
            'name' => "На якому малюнку зображено дорогу з розділювальною смугою?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '98',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '99',
            'name' => "Скільки проїзних частин має ця дорога?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '99',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '100',
            'name' => "Скільки смуг для руху має ця дорога?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '100',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '101',
            'name' => "Скільки перехресть зображено на малюнку?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '101',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '102',
            'name' => "У якому випадку відбувається вимушена зупинка?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '102',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '103',
            'name' => "Проїзна частина зображеної дороги має:",
            'correct_option' => '2',
            'rule_reference' => '',
            'num' => '103',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '104',
            'name' => "Проїзна частина зображеної дороги має:",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '104',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '105',
            'name' => "Які з зображених транспортних засобів Правила відносять до автопоїзда?",
            'correct_option' => '4',
            'rule_reference' => '',
            'num' => '105',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '106',
            'name' => "На якому з малюнків зображено острівець безпеки?",
            'correct_option' => '3',
            'rule_reference' => '',
            'num' => '106',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '107',
            'name' => "Що із зображеного, згідно з Правилами, слід вважати «газоном»?",
            'correct_option' => '1',
            'rule_reference' => '',
            'num' => '107',
            'chapter_id' => '1',
        ]);
        $this->insert('question', [
            'id' => '108',
            'name' => "Що з переліченого Правила вважають «маневром»?",
            'correct_option' => '5',
            'rule_reference' => '',
            'num' => '108',
            'chapter_id' => '1',
        ]);
    }

    public function down()
    {
        $this->delete('question', ['chapter_id' => '1']);
    }
}
