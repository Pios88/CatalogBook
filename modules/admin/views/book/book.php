<?php if(!empty($book)); ?>
<?php foreach($book as $book): ?>

<div style="display:inline-block;margin: 10px; auto; 10px; auto; background: #F6F8FA; border-radius: 10px;width:100%;">
    <h3 style="display:inline-block;margin:20px;"> <?=$book->title?> </a></h3> <h4 style="display:inline-block;margin:20px;float:right;"> <?=$book->author->name ?> </h4>
</div>


<?php endforeach; ?>