<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\book;
use app\models\author;

class BookController extends Controller {
        
    public function actionIndex() {
        
        $book = Book::find()->all();
        $author = Author::find()->all();
        
        return $this->render('index', compact('book','author'));

    }
    
}