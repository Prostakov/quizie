<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Query;

class m150405_102858_populate_chapter7_option_table extends Migration
{
    public function up()
    {
        $this->insert('option', [
            'id' => '820',
            'name' => "Дозволено тільки у світлу пору доби.",
            'num' => '1',
            'question_id' => '237',
        ]);
        $this->insert('option', [
            'id' => '821',
            'name' => "Дозволено тільки по узбіччю.",
            'num' => '2',
            'question_id' => '237',
        ]);
        $this->insert('option', [
            'id' => '822',
            'name' => "Дозволено не більше ніж дві тварини на одного погонича.",
            'num' => '3',
            'question_id' => '237',
        ]);
        $this->insert('option', [
            'id' => '823',
            'name' => "Дозволено у всіх перелічених вище випадках.",
            'num' => '4',
            'question_id' => '237',
        ]);
        $this->insert('option', [
            'id' => '824',
            'name' => "Заборонено.",
            'num' => '5',
            'question_id' => '237',
        ]);
        $this->insert('option', [
            'id' => '825',
            'name' => "Лівому малюнку.",
            'num' => '1',
            'question_id' => '238',
        ]);
        $this->insert('option', [
            'id' => '826',
            'name' => "Правому малюнку.",
            'num' => '2',
            'question_id' => '238',
        ]);
        $this->insert('option', [
            'id' => '827',
            'name' => "Не молодше ніж 12 років.",
            'num' => '1',
            'question_id' => '239',
        ]);
        $this->insert('option', [
            'id' => '828',
            'name' => "Не молодше ніж 14 років.",
            'num' => '2',
            'question_id' => '239',
        ]);
        $this->insert('option', [
            'id' => '829',
            'name' => "Керувати возом особам не молодше ніж 15 років, а переганяти тварин — 12 років.",
            'num' => '3',
            'question_id' => '239',
        ]);
        $this->insert('option', [
            'id' => '830',
            'name' => "Дозволено по всій ширині дороги тільки в населених пунктах.",
            'num' => '1',
            'question_id' => '240',
        ]);
        $this->insert('option', [
            'id' => '831',
            'name' => "Дозволено тільки так, щоб не займати більше половини ширини проїзної частини дороги.",
            'num' => '2',
            'question_id' => '240',
        ]);
        $this->insert('option', [
            'id' => '832',
            'name' => "Дозволено тільки якнайближче до правого краю дороги.",
            'num' => '3',
            'question_id' => '240',
        ]);
        $this->insert('option', [
            'id' => '833',
            'name' => "Дозволено тільки по узбіччю.",
            'num' => '4',
            'question_id' => '240',
        ]);
        $this->insert('option', [
            'id' => '834',
            'name' => "Заборонено.",
            'num' => '5',
            'question_id' => '240',
        ]);
        $this->insert('option', [
            'id' => '835',
            'name' => "Порушуються.",
            'num' => '1',
            'question_id' => '241',
        ]);
        $this->insert('option', [
            'id' => '836',
            'name' => "Не порушуються, якщо перегін здійснюється у світлу пору доби.",
            'num' => '2',
            'question_id' => '241',
        ]);
        $this->insert('option', [
            'id' => '837',
            'name' => "Не порушуються, якщо залучено достатня кількість погоничів.",
            'num' => '3',
            'question_id' => '241',
        ]);
        $this->insert('option', [
            'id' => '838',
            'name' => "Заборонено.",
            'num' => '1',
            'question_id' => '242',
        ]);
        $this->insert('option', [
            'id' => '839',
            'name' => "Дозволено тільки за межами узбіччя дороги.",
            'num' => '2',
            'question_id' => '242',
        ]);
        $this->insert('option', [
            'id' => '840',
            'name' => "Дозволено тільки не ближче ніж 10 м від краю земляного полотна дороги.",
            'num' => '3',
            'question_id' => '242',
        ]);
        $this->insert('option', [
            'id' => '841',
            'name' => "Дозволено.",
            'num' => '1',
            'question_id' => '243',
        ]);
        $this->insert('option', [
            'id' => '842',
            'name' => "Заборонено.",
            'num' => '2',
            'question_id' => '243',
        ]);
        $this->insert('option', [
            'id' => '843',
            'name' => "Дозволено з увімкненими ліхтарями білого і червоного кольору.",
            'num' => '3',
            'question_id' => '243',
        ]);
        $this->insert('option', [
            'id' => '844',
            'name' => "Дозволено тільки в умовах недостатньої видимості по узбіччю.",
            'num' => '4',
            'question_id' => '243',
        ]);
        $this->insert('option', [
            'id' => '845',
            'name' => "Тільки водій гужового воза.",
            'num' => '1',
            'question_id' => '244',
        ]);
        $this->insert('option', [
            'id' => '846',
            'name' => "Тільки погонич тварини.",
            'num' => '2',
            'question_id' => '244',
        ]);
        $this->insert('option', [
            'id' => '847',
            'name' => "Обидва учасники дорожнього руху.",
            'num' => '3',
            'question_id' => '244',
        ]);
        $this->insert('option', [
            'id' => '848',
            'name' => "Правильно тільки гужовий віз.",
            'num' => '1',
            'question_id' => '245',
        ]);
        $this->insert('option', [
            'id' => '849',
            'name' => "Правильно тільки сани.",
            'num' => '2',
            'question_id' => '245',
        ]);
        $this->insert('option', [
            'id' => '850',
            'name' => "Правильно віз і сани.",
            'num' => '3',
            'question_id' => '245',
        ]);
        $this->insert('option', [
            'id' => '851',
            'name' => "Неправильно віз і сани.",
            'num' => '4',
            'question_id' => '245',
        ]);
        $this->insert('option', [
            'id' => '852',
            'name' => "Тільки, якщо рух здійснюється по дорозі поза населеним пунктом.",
            'num' => '1',
            'question_id' => '246',
        ]);
        $this->insert('option', [
            'id' => '853',
            'name' => "Тільки, якщо рух здійснюється по дорозі у населеному пункті.",
            'num' => '2',
            'question_id' => '246',
        ]);
        $this->insert('option', [
            'id' => '854',
            'name' => "У всіх випадках.",
            'num' => '3',
            'question_id' => '246',
        ]);
        $this->insert('option', [
            'id' => '855',
            'name' => "Заборонено.",
            'num' => '1',
            'question_id' => '247',
        ]);
        $this->insert('option', [
            'id' => '856',
            'name' => "Заборонено тільки в темну пору доби.",
            'num' => '2',
            'question_id' => '247',
        ]);
        $this->insert('option', [
            'id' => '857',
            'name' => "Заборонено лише на дорозі поза населеними пунктами.	",
            'num' => '3',
            'question_id' => '247',
        ]);
        $this->insert('option', [
            'id' => '858',
            'name' => "Не порушуються, якщо перегін здійснюється у світлу пору доби.",
            'num' => '1',
            'question_id' => '248',
        ]);
        $this->insert('option', [
            'id' => '859',
            'name' => "Не порушуються, якщо залучено достатню кількість погоничів.",
            'num' => '2',
            'question_id' => '248',
        ]);
        $this->insert('option', [
            'id' => '860',
            'name' => "Порушуються.",
            'num' => '3',
            'question_id' => '248',
        ]);
    }

    public function down()
    {
        $query = (new Query())->select('id')->from('question')->where(['chapter_id' => 7])->all();
        $questionIDs = [];
        foreach ($query as $key => $val) {
            $questionIDs[] = $val['id'];
        }
        $this->delete('option', ['in', 'question_id', $questionIDs]);
    }
}
