<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\author;
use app\models\book;

class AuthorController extends Controller {
        
    public function actionIndex() {
        
        $author = Author::find()->all();
        $id = Author::find()->select('id');
        $book = Book::find()->where(['author_id' => $id])->count();

        
        return $this->render('index', ['author' => $author, 'book' => $book, 'id' => $id]);
        
    }
    
}