<?php foreach($authors as $author){
         echo '<br>';
         echo '<h2> '.$author->name.' </h2>';
         echo '<hr>';
         if($author->book){
             
              foreach($author->book as $book){
                  echo '<h3> '.$book->title.' </h3>';
                  echo '<br>';
                  echo '<p> '.$book->description.' </p>';
               }
          }else{
                echo '<br>';              
                echo 'Ни одной книги этого автора не найдено';
                echo '<br>';
         }
}
 ?>
