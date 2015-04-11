<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "option".
 *
 * @property integer $id
 * @property string $name
 * @property integer $num
 * @property integer $question_id
 */
class Option extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'option';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'num', 'question_id'], 'required'],
            [['num', 'question_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'num' => 'Num',
            'question_id' => 'Question ID',
        ];
    }

    public function getQuestion()
    {
        return $this->hasOne(Question::className(), ['id' => 'question_id']);
    }
}
