<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150412_114255_populate_chapter17_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '3566',
            'name' => "",
            'num' => '1',
            'question_id' => '1077',
        ]);
        $this->insert('option', [
            'id' => '3567',
            'name' => "",
            'num' => '2',
            'question_id' => '1077',
        ]);
        $this->insert('option', [
            'id' => '3568',
            'name' => "",
            'num' => '1',
            'question_id' => '1078',
        ]);
        $this->insert('option', [
            'id' => '3569',
            'name' => "",
            'num' => '2',
            'question_id' => '1078',
        ]);
        $this->insert('option', [
            'id' => '3570',
            'name' => "",
            'num' => '1',
            'question_id' => '1079',
        ]);
        $this->insert('option', [
            'id' => '3571',
            'name' => "",
            'num' => '2',
            'question_id' => '1079',
        ]);
        $this->insert('option', [
            'id' => '3572',
            'name' => "",
            'num' => '3',
            'question_id' => '1079',
        ]);
        $this->insert('option', [
            'id' => '3573',
            'name' => "",
            'num' => '1',
            'question_id' => '1080',
        ]);
        $this->insert('option', [
            'id' => '3574',
            'name' => "",
            'num' => '2',
            'question_id' => '1080',
        ]);
        $this->insert('option', [
            'id' => '3575',
            'name' => "",
            'num' => '3',
            'question_id' => '1080',
        ]);
        $this->insert('option', [
            'id' => '3576',
            'name' => "",
            'num' => '1',
            'question_id' => '1081',
        ]);
        $this->insert('option', [
            'id' => '3577',
            'name' => "",
            'num' => '2',
            'question_id' => '1081',
        ]);
        $this->insert('option', [
            'id' => '3578',
            'name' => "",
            'num' => '1',
            'question_id' => '1082',
        ]);
        $this->insert('option', [
            'id' => '3579',
            'name' => "",
            'num' => '2',
            'question_id' => '1082',
        ]);
        $this->insert('option', [
            'id' => '3580',
            'name' => "",
            'num' => '3',
            'question_id' => '1082',
        ]);
        $this->insert('option', [
            'id' => '3581',
            'name' => "",
            'num' => '1',
            'question_id' => '1083',
        ]);
        $this->insert('option', [
            'id' => '3582',
            'name' => "",
            'num' => '2',
            'question_id' => '1083',
        ]);
        $this->insert('option', [
            'id' => '3583',
            'name' => "",
            'num' => '3',
            'question_id' => '1083',
        ]);
        $this->insert('option', [
            'id' => '3584',
            'name' => "",
            'num' => '4',
            'question_id' => '1083',
        ]);
        $this->insert('option', [
            'id' => '3585',
            'name' => "",
            'num' => '1',
            'question_id' => '1084',
        ]);
        $this->insert('option', [
            'id' => '3586',
            'name' => "",
            'num' => '2',
            'question_id' => '1084',
        ]);
        $this->insert('option', [
            'id' => '3587',
            'name' => "",
            'num' => '1',
            'question_id' => '1085',
        ]);
        $this->insert('option', [
            'id' => '3588',
            'name' => "",
            'num' => '2',
            'question_id' => '1085',
        ]);
        $this->insert('option', [
            'id' => '3589',
            'name' => "",
            'num' => '1',
            'question_id' => '1086',
        ]);
        $this->insert('option', [
            'id' => '3590',
            'name' => "",
            'num' => '2',
            'question_id' => '1086',
        ]);
        $this->insert('option', [
            'id' => '3591',
            'name' => "",
            'num' => '1',
            'question_id' => '1087',
        ]);
        $this->insert('option', [
            'id' => '3592',
            'name' => "",
            'num' => '2',
            'question_id' => '1087',
        ]);
        $this->insert('option', [
            'id' => '3593',
            'name' => "",
            'num' => '3',
            'question_id' => '1087',
        ]);
        $this->insert('option', [
            'id' => '3594',
            'name' => "",
            'num' => '1',
            'question_id' => '1088',
        ]);
        $this->insert('option', [
            'id' => '3595',
            'name' => "",
            'num' => '2',
            'question_id' => '1088',
        ]);
        $this->insert('option', [
            'id' => '3596',
            'name' => "",
            'num' => '3',
            'question_id' => '1088',
        ]);
        $this->insert('option', [
            'id' => '3597',
            'name' => "",
            'num' => '1',
            'question_id' => '1089',
        ]);
        $this->insert('option', [
            'id' => '3598',
            'name' => "",
            'num' => '2',
            'question_id' => '1089',
        ]);
        $this->insert('option', [
            'id' => '3599',
            'name' => "",
            'num' => '1',
            'question_id' => '1090',
        ]);
        $this->insert('option', [
            'id' => '3600',
            'name' => "",
            'num' => '2',
            'question_id' => '1090',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 17])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
