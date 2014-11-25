<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topics".
 *
 * @property string $id
 * @property integer $section_id
 * @property string $date
 * @property integer $user_id
 * @property string $name
 * @property string $text
 */
class Topics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id', 'date', 'user_id', 'name', 'text'], 'required'],
            [['section_id', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['text'], 'string'],
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
            'section_id' => 'Section ID',
            'date' => 'Date',
            'user_id' => 'User ID',
            'name' => 'Name',
            'text' => 'Text',
        ];
    }
}
