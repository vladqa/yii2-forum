<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property string $id
 * @property integer $topic_id
 * @property integer $user_id
 * @property string $text
 * @property string $date
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'user_id', 'text', 'date'], 'required'],
            [['topic_id', 'user_id'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic_id' => 'Topic ID',
            'user_id' => 'User ID',
            'text' => 'Text',
            'date' => 'Date',
        ];
    }
}
