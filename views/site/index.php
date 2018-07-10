<?php

/* @var $this yii\web\View */

$this->title = 'BookCatalog';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Добро пожаловать!</h1>

        <p class="lead">В BookCatalog вы найдете собрание лучшей литературы.</p>

        <p><a class="btn btn-lg btn-success" href="/web/index.php?r=%2Fauthor%2Findex">Смотреть все</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Постоянным гостям</h2>

                <p>Для зарегистрированных пользователей.</p>

                <p><a class="btn btn-default" href="/web/index.php?r=site%2Flogin">Войти &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Связаться с нами</h2>

                <p>Вы можете написать нам письмо.</p>

                <p><a class="btn btn-default" href="/web/index.php?r=site%2Fcontact">Написать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Администраторам</h2>

                <p>Для служебного пользования.</p>

                <p><a class="btn btn-default" href="/web/index.php?r=admin%2Fdefault/index">Управление &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
