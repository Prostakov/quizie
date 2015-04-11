<?php

namespace app\models;

use Yii;

class Quiz extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'quiz';
    }

    public function rules()
    {
        return [
            [['name', 'user_id'], 'required'],
            [['description'], 'string'],
            [['user_id'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'slug' => 'Slug',
            'user_id' => 'User ID',
        ];
    }

    public function getChapters()
    {
        return $this->hasMany(Chapter::className(), ['quiz_id' => 'id']);
    }
}