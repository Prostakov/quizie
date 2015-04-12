<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150412_114420_populate_chapter25_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '4048',
            'name' => "",
            'num' => '1',
            'question_id' => '1229',
        ]);
        $this->insert('option', [
            'id' => '4049',
            'name' => "",
            'num' => '2',
            'question_id' => '1229',
        ]);
        $this->insert('option', [
            'id' => '4050',
            'name' => "",
            'num' => '3',
            'question_id' => '1229',
        ]);
        $this->insert('option', [
            'id' => '4051',
            'name' => "",
            'num' => '1',
            'question_id' => '1230',
        ]);
        $this->insert('option', [
            'id' => '4052',
            'name' => "",
            'num' => '2',
            'question_id' => '1230',
        ]);
        $this->insert('option', [
            'id' => '4053',
            'name' => "",
            'num' => '1',
            'question_id' => '1231',
        ]);
        $this->insert('option', [
            'id' => '4054',
            'name' => "",
            'num' => '2',
            'question_id' => '1231',
        ]);
        $this->insert('option', [
            'id' => '4055',
            'name' => "",
            'num' => '3',
            'question_id' => '1231',
        ]);
        $this->insert('option', [
            'id' => '4056',
            'name' => "",
            'num' => '4',
            'question_id' => '1231',
        ]);
        $this->insert('option', [
            'id' => '4057',
            'name' => "",
            'num' => '1',
            'question_id' => '1232',
        ]);
        $this->insert('option', [
            'id' => '4058',
            'name' => "",
            'num' => '2',
            'question_id' => '1232',
        ]);
        $this->insert('option', [
            'id' => '4059',
            'name' => "",
            'num' => '3',
            'question_id' => '1232',
        ]);
        $this->insert('option', [
            'id' => '4060',
            'name' => "",
            'num' => '4',
            'question_id' => '1232',
        ]);
        $this->insert('option', [
            'id' => '4061',
            'name' => "",
            'num' => '1',
            'question_id' => '1233',
        ]);
        $this->insert('option', [
            'id' => '4062',
            'name' => "",
            'num' => '2',
            'question_id' => '1233',
        ]);
        $this->insert('option', [
            'id' => '4063',
            'name' => "",
            'num' => '1',
            'question_id' => '1234',
        ]);
        $this->insert('option', [
            'id' => '4064',
            'name' => "",
            'num' => '2',
            'question_id' => '1234',
        ]);
        $this->insert('option', [
            'id' => '4065',
            'name' => "",
            'num' => '3',
            'question_id' => '1234',
        ]);
        $this->insert('option', [
            'id' => '4066',
            'name' => "",
            'num' => '4',
            'question_id' => '1234',
        ]);
        $this->insert('option', [
            'id' => '4067',
            'name' => "",
            'num' => '5',
            'question_id' => '1234',
        ]);
        $this->insert('option', [
            'id' => '4068',
            'name' => "",
            'num' => '1',
            'question_id' => '1235',
        ]);
        $this->insert('option', [
            'id' => '4069',
            'name' => "",
            'num' => '2',
            'question_id' => '1235',
        ]);
        $this->insert('option', [
            'id' => '4070',
            'name' => "",
            'num' => '3',
            'question_id' => '1235',
        ]);
        $this->insert('option', [
            'id' => '4071',
            'name' => "",
            'num' => '4',
            'question_id' => '1235',
        ]);
        $this->insert('option', [
            'id' => '4072',
            'name' => "",
            'num' => '1',
            'question_id' => '1236',
        ]);
        $this->insert('option', [
            'id' => '4073',
            'name' => "",
            'num' => '2',
            'question_id' => '1236',
        ]);
        $this->insert('option', [
            'id' => '4074',
            'name' => "",
            'num' => '3',
            'question_id' => '1236',
        ]);
        $this->insert('option', [
            'id' => '4075',
            'name' => "",
            'num' => '1',
            'question_id' => '1237',
        ]);
        $this->insert('option', [
            'id' => '4076',
            'name' => "",
            'num' => '2',
            'question_id' => '1237',
        ]);
        $this->insert('option', [
            'id' => '4077',
            'name' => "",
            'num' => '3',
            'question_id' => '1237',
        ]);
        $this->insert('option', [
            'id' => '4078',
            'name' => "",
            'num' => '1',
            'question_id' => '1238',
        ]);
        $this->insert('option', [
            'id' => '4079',
            'name' => "",
            'num' => '2',
            'question_id' => '1238',
        ]);
        $this->insert('option', [
            'id' => '4080',
            'name' => "",
            'num' => '3',
            'question_id' => '1238',
        ]);
        $this->insert('option', [
            'id' => '4081',
            'name' => "",
            'num' => '4',
            'question_id' => '1238',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 25])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
