<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150412_114410_populate_chapter24_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '4011',
            'name' => "",
            'num' => '1',
            'question_id' => '1219',
        ]);
        $this->insert('option', [
            'id' => '4012',
            'name' => "",
            'num' => '2',
            'question_id' => '1219',
        ]);
        $this->insert('option', [
            'id' => '4013',
            'name' => "",
            'num' => '3',
            'question_id' => '1219',
        ]);
        $this->insert('option', [
            'id' => '4014',
            'name' => "",
            'num' => '1',
            'question_id' => '1220',
        ]);
        $this->insert('option', [
            'id' => '4015',
            'name' => "",
            'num' => '2',
            'question_id' => '1220',
        ]);
        $this->insert('option', [
            'id' => '4016',
            'name' => "",
            'num' => '3',
            'question_id' => '1220',
        ]);
        $this->insert('option', [
            'id' => '4017',
            'name' => "",
            'num' => '4',
            'question_id' => '1220',
        ]);
        $this->insert('option', [
            'id' => '4018',
            'name' => "",
            'num' => '1',
            'question_id' => '1221',
        ]);
        $this->insert('option', [
            'id' => '4019',
            'name' => "",
            'num' => '2',
            'question_id' => '1221',
        ]);
        $this->insert('option', [
            'id' => '4020',
            'name' => "",
            'num' => '3',
            'question_id' => '1221',
        ]);
        $this->insert('option', [
            'id' => '4021',
            'name' => "",
            'num' => '4',
            'question_id' => '1221',
        ]);
        $this->insert('option', [
            'id' => '4022',
            'name' => "",
            'num' => '5',
            'question_id' => '1221',
        ]);
        $this->insert('option', [
            'id' => '4023',
            'name' => "",
            'num' => '1',
            'question_id' => '1222',
        ]);
        $this->insert('option', [
            'id' => '4024',
            'name' => "",
            'num' => '2',
            'question_id' => '1222',
        ]);
        $this->insert('option', [
            'id' => '4025',
            'name' => "",
            'num' => '3',
            'question_id' => '1222',
        ]);
        $this->insert('option', [
            'id' => '4026',
            'name' => "",
            'num' => '4',
            'question_id' => '1222',
        ]);
        $this->insert('option', [
            'id' => '4027',
            'name' => "",
            'num' => '1',
            'question_id' => '1223',
        ]);
        $this->insert('option', [
            'id' => '4028',
            'name' => "",
            'num' => '2',
            'question_id' => '1223',
        ]);
        $this->insert('option', [
            'id' => '4029',
            'name' => "",
            'num' => '3',
            'question_id' => '1223',
        ]);
        $this->insert('option', [
            'id' => '4030',
            'name' => "",
            'num' => '1',
            'question_id' => '1224',
        ]);
        $this->insert('option', [
            'id' => '4031',
            'name' => "",
            'num' => '2',
            'question_id' => '1224',
        ]);
        $this->insert('option', [
            'id' => '4032',
            'name' => "",
            'num' => '3',
            'question_id' => '1224',
        ]);
        $this->insert('option', [
            'id' => '4033',
            'name' => "",
            'num' => '4',
            'question_id' => '1224',
        ]);
        $this->insert('option', [
            'id' => '4034',
            'name' => "",
            'num' => '1',
            'question_id' => '1225',
        ]);
        $this->insert('option', [
            'id' => '4035',
            'name' => "",
            'num' => '2',
            'question_id' => '1225',
        ]);
        $this->insert('option', [
            'id' => '4036',
            'name' => "",
            'num' => '3',
            'question_id' => '1225',
        ]);
        $this->insert('option', [
            'id' => '4037',
            'name' => "",
            'num' => '1',
            'question_id' => '1226',
        ]);
        $this->insert('option', [
            'id' => '4038',
            'name' => "",
            'num' => '2',
            'question_id' => '1226',
        ]);
        $this->insert('option', [
            'id' => '4039',
            'name' => "",
            'num' => '3',
            'question_id' => '1226',
        ]);
        $this->insert('option', [
            'id' => '4040',
            'name' => "",
            'num' => '1',
            'question_id' => '1227',
        ]);
        $this->insert('option', [
            'id' => '4041',
            'name' => "",
            'num' => '2',
            'question_id' => '1227',
        ]);
        $this->insert('option', [
            'id' => '4042',
            'name' => "",
            'num' => '3',
            'question_id' => '1227',
        ]);
        $this->insert('option', [
            'id' => '4043',
            'name' => "",
            'num' => '4',
            'question_id' => '1227',
        ]);
        $this->insert('option', [
            'id' => '4044',
            'name' => "",
            'num' => '1',
            'question_id' => '1228',
        ]);
        $this->insert('option', [
            'id' => '4045',
            'name' => "",
            'num' => '2',
            'question_id' => '1228',
        ]);
        $this->insert('option', [
            'id' => '4046',
            'name' => "",
            'num' => '3',
            'question_id' => '1228',
        ]);
        $this->insert('option', [
            'id' => '4047',
            'name' => "",
            'num' => '4',
            'question_id' => '1228',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 24])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
