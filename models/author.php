<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\book;

class Author extends ActiveRecord
{
    public static function tableName()
    {
       return 'author';
    }

    public static function primaryKey()
    {
        return ['id'];
    }
    
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }
}
