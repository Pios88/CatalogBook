<h3>Авторы:</h3>
<ul>
    
<?php if(!empty($author)); ?>
<?php foreach($author as $author): ?>

<li>
        <h4> <?=$author->name?> </h4>
</li>

<?php endforeach; ?>

</ul>

<hr>

<h3>Каталог книг:</h3>

<?php if(!empty($book)); ?>
<?php foreach($book as $book): ?>

<div style="display:inline-block;margin: 20px; auto; 20px; auto; background: #F6F8FA; border-radius: 10px;">
    <h3 style="margin:20px;"> <?=$book->title?> </a></h3> <h4 style="margin:20px;"> <?=$book->author->name ?> </h4>
    <div style="display:inline-block;width:10%; margin:20px;">
        <img style="width:100px;weight:200px; margin:auto;padding:auto;" src="<?=$book->image?>" alt="...">
    </div>
    <div style="display:inline-block;width:80%;">
        <div>
        <p> <?=$book->description ?> </p>
        </div>
    </div>
</div>


<?php endforeach; ?>