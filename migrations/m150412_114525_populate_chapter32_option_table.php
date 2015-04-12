<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150412_114525_populate_chapter32_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '4616',
            'name' => "",
            'num' => '1',
            'question_id' => '1389',
        ]);
        $this->insert('option', [
            'id' => '4617',
            'name' => "",
            'num' => '2',
            'question_id' => '1389',
        ]);
        $this->insert('option', [
            'id' => '4618',
            'name' => "",
            'num' => '3',
            'question_id' => '1389',
        ]);
        $this->insert('option', [
            'id' => '4619',
            'name' => "",
            'num' => '4',
            'question_id' => '1389',
        ]);
        $this->insert('option', [
            'id' => '4620',
            'name' => "",
            'num' => '1',
            'question_id' => '1390',
        ]);
        $this->insert('option', [
            'id' => '4621',
            'name' => "",
            'num' => '2',
            'question_id' => '1390',
        ]);
        $this->insert('option', [
            'id' => '4622',
            'name' => "",
            'num' => '3',
            'question_id' => '1390',
        ]);
        $this->insert('option', [
            'id' => '4623',
            'name' => "",
            'num' => '1',
            'question_id' => '1391',
        ]);
        $this->insert('option', [
            'id' => '4624',
            'name' => "",
            'num' => '2',
            'question_id' => '1391',
        ]);
        $this->insert('option', [
            'id' => '4625',
            'name' => "",
            'num' => '3',
            'question_id' => '1391',
        ]);
        $this->insert('option', [
            'id' => '4626',
            'name' => "",
            'num' => '1',
            'question_id' => '1392',
        ]);
        $this->insert('option', [
            'id' => '4627',
            'name' => "",
            'num' => '2',
            'question_id' => '1392',
        ]);
        $this->insert('option', [
            'id' => '4628',
            'name' => "",
            'num' => '3',
            'question_id' => '1392',
        ]);
        $this->insert('option', [
            'id' => '4629',
            'name' => "",
            'num' => '4',
            'question_id' => '1392',
        ]);
        $this->insert('option', [
            'id' => '4630',
            'name' => "",
            'num' => '1',
            'question_id' => '1393',
        ]);
        $this->insert('option', [
            'id' => '4631',
            'name' => "",
            'num' => '2',
            'question_id' => '1393',
        ]);
        $this->insert('option', [
            'id' => '4632',
            'name' => "",
            'num' => '1',
            'question_id' => '1394',
        ]);
        $this->insert('option', [
            'id' => '4633',
            'name' => "",
            'num' => '2',
            'question_id' => '1394',
        ]);
        $this->insert('option', [
            'id' => '4634',
            'name' => "",
            'num' => '3',
            'question_id' => '1394',
        ]);
        $this->insert('option', [
            'id' => '4635',
            'name' => "",
            'num' => '4',
            'question_id' => '1394',
        ]);
        $this->insert('option', [
            'id' => '4636',
            'name' => "",
            'num' => '1',
            'question_id' => '1395',
        ]);
        $this->insert('option', [
            'id' => '4637',
            'name' => "",
            'num' => '2',
            'question_id' => '1395',
        ]);
        $this->insert('option', [
            'id' => '4638',
            'name' => "",
            'num' => '3',
            'question_id' => '1395',
        ]);
        $this->insert('option', [
            'id' => '4639',
            'name' => "",
            'num' => '1',
            'question_id' => '1396',
        ]);
        $this->insert('option', [
            'id' => '4640',
            'name' => "",
            'num' => '2',
            'question_id' => '1396',
        ]);
        $this->insert('option', [
            'id' => '4641',
            'name' => "",
            'num' => '3',
            'question_id' => '1396',
        ]);
        $this->insert('option', [
            'id' => '4642',
            'name' => "",
            'num' => '4',
            'question_id' => '1396',
        ]);
        $this->insert('option', [
            'id' => '4643',
            'name' => "",
            'num' => '5',
            'question_id' => '1396',
        ]);
        $this->insert('option', [
            'id' => '4644',
            'name' => "",
            'num' => '1',
            'question_id' => '1397',
        ]);
        $this->insert('option', [
            'id' => '4645',
            'name' => "",
            'num' => '2',
            'question_id' => '1397',
        ]);
        $this->insert('option', [
            'id' => '4646',
            'name' => "",
            'num' => '3',
            'question_id' => '1397',
        ]);
        $this->insert('option', [
            'id' => '4647',
            'name' => "",
            'num' => '1',
            'question_id' => '1398',
        ]);
        $this->insert('option', [
            'id' => '4648',
            'name' => "",
            'num' => '2',
            'question_id' => '1398',
        ]);
        $this->insert('option', [
            'id' => '4649',
            'name' => "",
            'num' => '3',
            'question_id' => '1398',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 32])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
