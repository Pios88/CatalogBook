<?php
namespace app\models;
use yii\db\ActiveRecord;


class Book extends ActiveRecord
{
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
}