<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\author;
use app\models\book;

class AuthorController extends Controller {
    
    public function actionIndex() {
        
    $authors = Author::find()->with('book')->all();
    
        return $this->render('index', ['authors' => $authors]);   
    }
}