 <main>
     <div class="box">
         <?php foreach ($database as $valore) { ?>
             <!-- <p><?="{$valore["title"]} {$valore["author"]} {$valore["year"]} {$valore["poster"]}"; ?></p> -->
             <div class="imaginiAlbum">
                 <img class="album" src="<?="{$valore["poster"]}" ?>" alt="imagine album">
                 <h3 class="titolo"><?="{$valore["title"]}" ?></h3>
                 <p><?="{$valore["author"]}" ?></p>
                 <p><?="{$valore["year"]}" ?></p>
                 <p class="genre"><?="{$valore["genre"]}" ?></p>
             </div>
         <?php } ?>
     </div>
 </main>