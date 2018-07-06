<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $description
 * @property string $image
 *
 * @property Author $author
 * @property Author $author0
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }
    public static function primaryKey()
    {
        return ['id'];
    }
        public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'title', 'description', 'image'], 'required'],
            [['author_id'], 'integer'],
            [['description', 'image'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
