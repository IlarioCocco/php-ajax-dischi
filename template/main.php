 <main>
     <container class="box">
         <?php foreach ($database as $valore) { ?>
             <!-- <p><?php echo "{$valore["title"]} {$valore["author"]} {$valore["year"]} {$valore["poster"]}"; ?></p> -->

             <div class="imaginiAlbum">
                <img class="album" src="<?php echo "{$valore["poster"]}" ?>" alt="">
                <h3 class="titolo"><?php echo "{$valore["title"]}" ?></h3>
                <p><?php echo "{$valore["author"]}" ?></p>
                <p><?php echo "{$valore["year"]}" ?></p>
             </div>

         <?php } ?>
     </container>
 </main>