<?php

use yii\db\Schema;
use yii\db\Migration;

class m150403_173650_populate_quiz_table extends Migration
{
    public function up()
    {
        $this->insert('quiz', [
            'name' => 'Екзамен ДАІ',
            'slug' => 'dai',
            'user_id' => '1',
        ]);
    }

    public function down()
    {
        $this->delete('quiz');
    }
}
