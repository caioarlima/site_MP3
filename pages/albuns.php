<h1 class= "titulo">Álbum Músicas MP3</h1>

<a href="?page=new_album" class = "btnNovoAlbum">Adicionar Novo Álbum</a>

<div class= "row">
    <?php

            $albuns = getAlbuns();

            foreach ($albuns as $album) :

                $infoAlbum = explode('/' , $album);
                $nomeAlbum = $infoAlbum[1];
                $imgAlbum = '/' . $album . '/' . $nomeAlbum . '.jpg';
            
    ?>
    <div class="gridCard album">
        <a href="?page=musicas&album=<?=$nomeAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nomeAlbum?>" class = "img-album">
            <h3><?=$nomeAlbum?></h3>
        </a>
    </div>

    <?php
            endforeach;
    ?>

</div>