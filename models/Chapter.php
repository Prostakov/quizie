<?php

namespace app\models;

use Yii;


class Chapter extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'chapter';
    }

    public function rules()
    {
        return [
            [['name', 'num', 'quiz_id'], 'required'],
            [['description'], 'string'],
            [['num', 'quiz_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'num' => 'Num',
            'quiz_id' => 'Quiz ID',
        ];
    }

    public function getQuiz()
    {
        return $this->hasOne(Quiz::className(), ['id' => 'quiz_id']);
    }

    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['chapter_id' => 'id']);
    }
}
