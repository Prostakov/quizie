<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150412_114448_populate_chapter28_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '4180',
            'name' => "",
            'num' => '1',
            'question_id' => '1266',
        ]);
        $this->insert('option', [
            'id' => '4181',
            'name' => "",
            'num' => '2',
            'question_id' => '1266',
        ]);
        $this->insert('option', [
            'id' => '4182',
            'name' => "",
            'num' => '3',
            'question_id' => '1266',
        ]);
        $this->insert('option', [
            'id' => '4183',
            'name' => "",
            'num' => '1',
            'question_id' => '1267',
        ]);
        $this->insert('option', [
            'id' => '4184',
            'name' => "",
            'num' => '2',
            'question_id' => '1267',
        ]);
        $this->insert('option', [
            'id' => '4185',
            'name' => "",
            'num' => '3',
            'question_id' => '1267',
        ]);
        $this->insert('option', [
            'id' => '4186',
            'name' => "",
            'num' => '4',
            'question_id' => '1267',
        ]);
        $this->insert('option', [
            'id' => '4187',
            'name' => "",
            'num' => '5',
            'question_id' => '1267',
        ]);
        $this->insert('option', [
            'id' => '4188',
            'name' => "",
            'num' => '1',
            'question_id' => '1268',
        ]);
        $this->insert('option', [
            'id' => '4189',
            'name' => "",
            'num' => '2',
            'question_id' => '1268',
        ]);
        $this->insert('option', [
            'id' => '4190',
            'name' => "",
            'num' => '3',
            'question_id' => '1268',
        ]);
        $this->insert('option', [
            'id' => '4191',
            'name' => "",
            'num' => '4',
            'question_id' => '1268',
        ]);
        $this->insert('option', [
            'id' => '4192',
            'name' => "",
            'num' => '1',
            'question_id' => '1269',
        ]);
        $this->insert('option', [
            'id' => '4193',
            'name' => "",
            'num' => '2',
            'question_id' => '1269',
        ]);
        $this->insert('option', [
            'id' => '4194',
            'name' => "",
            'num' => '1',
            'question_id' => '1270',
        ]);
        $this->insert('option', [
            'id' => '4195',
            'name' => "",
            'num' => '2',
            'question_id' => '1270',
        ]);
        $this->insert('option', [
            'id' => '4196',
            'name' => "",
            'num' => '3',
            'question_id' => '1270',
        ]);
        $this->insert('option', [
            'id' => '4197',
            'name' => "",
            'num' => '4',
            'question_id' => '1270',
        ]);
        $this->insert('option', [
            'id' => '4198',
            'name' => "",
            'num' => '1',
            'question_id' => '1271',
        ]);
        $this->insert('option', [
            'id' => '4199',
            'name' => "",
            'num' => '2',
            'question_id' => '1271',
        ]);
        $this->insert('option', [
            'id' => '4200',
            'name' => "",
            'num' => '3',
            'question_id' => '1271',
        ]);
        $this->insert('option', [
            'id' => '4201',
            'name' => "",
            'num' => '1',
            'question_id' => '1272',
        ]);
        $this->insert('option', [
            'id' => '4202',
            'name' => "",
            'num' => '2',
            'question_id' => '1272',
        ]);
        $this->insert('option', [
            'id' => '4203',
            'name' => "",
            'num' => '1',
            'question_id' => '1273',
        ]);
        $this->insert('option', [
            'id' => '4204',
            'name' => "",
            'num' => '2',
            'question_id' => '1273',
        ]);
        $this->insert('option', [
            'id' => '4205',
            'name' => "",
            'num' => '3',
            'question_id' => '1273',
        ]);
        $this->insert('option', [
            'id' => '4206',
            'name' => "",
            'num' => '4',
            'question_id' => '1273',
        ]);
        $this->insert('option', [
            'id' => '4207',
            'name' => "",
            'num' => '1',
            'question_id' => '1274',
        ]);
        $this->insert('option', [
            'id' => '4208',
            'name' => "",
            'num' => '2',
            'question_id' => '1274',
        ]);
        $this->insert('option', [
            'id' => '4209',
            'name' => "",
            'num' => '3',
            'question_id' => '1274',
        ]);
        $this->insert('option', [
            'id' => '4210',
            'name' => "",
            'num' => '4',
            'question_id' => '1274',
        ]);
        $this->insert('option', [
            'id' => '4211',
            'name' => "",
            'num' => '1',
            'question_id' => '1275',
        ]);
        $this->insert('option', [
            'id' => '4212',
            'name' => "",
            'num' => '2',
            'question_id' => '1275',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 28])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
