<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property integer $id
 * @property string $name
 * @property integer $correct_option
 * @property integer $num
 * @property integer $chapter_id
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'correct_option', 'num', 'chapter_id'], 'required'],
            [['name'], 'string'],
            [['correct_option', 'num', 'chapter_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'correct_option' => 'Correct Option',
            'num' => 'Num',
            'chapter_id' => 'Chapter ID',
        ];
    }

    public function getChapter()
    {
        return $this->hasOne(Chapter::className(), ['id' => 'chapter_id']);
    }

    public function getOptions()
    {
        return $this->hasMany(Option::className(), ['question_id' => 'id']);
    }
}
