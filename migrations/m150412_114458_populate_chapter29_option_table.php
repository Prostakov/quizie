<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150412_114458_populate_chapter29_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '4213',
            'name' => "",
            'num' => '1',
            'question_id' => '1276',
        ]);
        $this->insert('option', [
            'id' => '4214',
            'name' => "",
            'num' => '2',
            'question_id' => '1276',
        ]);
        $this->insert('option', [
            'id' => '4215',
            'name' => "",
            'num' => '3',
            'question_id' => '1276',
        ]);
        $this->insert('option', [
            'id' => '4216',
            'name' => "",
            'num' => '1',
            'question_id' => '1277',
        ]);
        $this->insert('option', [
            'id' => '4217',
            'name' => "",
            'num' => '2',
            'question_id' => '1277',
        ]);
        $this->insert('option', [
            'id' => '4218',
            'name' => "",
            'num' => '3',
            'question_id' => '1277',
        ]);
        $this->insert('option', [
            'id' => '4219',
            'name' => "",
            'num' => '4',
            'question_id' => '1277',
        ]);
        $this->insert('option', [
            'id' => '4220',
            'name' => "",
            'num' => '1',
            'question_id' => '1278',
        ]);
        $this->insert('option', [
            'id' => '4221',
            'name' => "",
            'num' => '2',
            'question_id' => '1278',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 29])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
