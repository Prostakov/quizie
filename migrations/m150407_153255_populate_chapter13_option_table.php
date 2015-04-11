<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150407_153255_populate_chapter13_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '2536',
            'name' => "",
            'num' => '1',
            'question_id' => '733',
        ]);
        $this->insert('option', [
            'id' => '2537',
            'name' => "",
            'num' => '2',
            'question_id' => '733',
        ]);
        $this->insert('option', [
            'id' => '2538',
            'name' => "",
            'num' => '1',
            'question_id' => '734',
        ]);
        $this->insert('option', [
            'id' => '2539',
            'name' => "",
            'num' => '2',
            'question_id' => '734',
        ]);
        $this->insert('option', [
            'id' => '2540',
            'name' => "",
            'num' => '3',
            'question_id' => '734',
        ]);
        $this->insert('option', [
            'id' => '2541',
            'name' => "",
            'num' => '4',
            'question_id' => '734',
        ]);
        $this->insert('option', [
            'id' => '2542',
            'name' => "",
            'num' => '1',
            'question_id' => '735',
        ]);
        $this->insert('option', [
            'id' => '2543',
            'name' => "",
            'num' => '2',
            'question_id' => '735',
        ]);
        $this->insert('option', [
            'id' => '2544',
            'name' => "",
            'num' => '1',
            'question_id' => '736',
        ]);
        $this->insert('option', [
            'id' => '2545',
            'name' => "",
            'num' => '2',
            'question_id' => '736',
        ]);
        $this->insert('option', [
            'id' => '2546',
            'name' => "",
            'num' => '3',
            'question_id' => '736',
        ]);
        $this->insert('option', [
            'id' => '2547',
            'name' => "",
            'num' => '4',
            'question_id' => '736',
        ]);
        $this->insert('option', [
            'id' => '2548',
            'name' => "",
            'num' => '1',
            'question_id' => '737',
        ]);
        $this->insert('option', [
            'id' => '2549',
            'name' => "",
            'num' => '2',
            'question_id' => '737',
        ]);
        $this->insert('option', [
            'id' => '2550',
            'name' => "",
            'num' => '1',
            'question_id' => '738',
        ]);
        $this->insert('option', [
            'id' => '2551',
            'name' => "",
            'num' => '2',
            'question_id' => '738',
        ]);
        $this->insert('option', [
            'id' => '2552',
            'name' => "",
            'num' => '1',
            'question_id' => '739',
        ]);
        $this->insert('option', [
            'id' => '2553',
            'name' => "",
            'num' => '2',
            'question_id' => '739',
        ]);
        $this->insert('option', [
            'id' => '2554',
            'name' => "",
            'num' => '1',
            'question_id' => '740',
        ]);
        $this->insert('option', [
            'id' => '2555',
            'name' => "",
            'num' => '2',
            'question_id' => '740',
        ]);
        $this->insert('option', [
            'id' => '2556',
            'name' => "",
            'num' => '1',
            'question_id' => '741',
        ]);
        $this->insert('option', [
            'id' => '2557',
            'name' => "",
            'num' => '2',
            'question_id' => '741',
        ]);
        $this->insert('option', [
            'id' => '2558',
            'name' => "",
            'num' => '1',
            'question_id' => '742',
        ]);
        $this->insert('option', [
            'id' => '2559',
            'name' => "",
            'num' => '2',
            'question_id' => '742',
        ]);
        $this->insert('option', [
            'id' => '2560',
            'name' => "",
            'num' => '3',
            'question_id' => '742',
        ]);
        $this->insert('option', [
            'id' => '2561',
            'name' => "",
            'num' => '4',
            'question_id' => '742',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 13])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
