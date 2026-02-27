<a href="?page=albuns" class="voltar">Voltar para os álbuns</a>


<h1 class="titulo">Músicas Do Álbum <?=$_GET['album']?></h1>

<a href="?page=new_music&album=<?=$_GET['album']?>" class= "btnNovoAlbum">Cadastrar Novas Músicas</a>

<br>

<?php
$album = $_GET['album'];
$musicas = getMusic($album);

foreach ($musicas as $music) :

?>
<div class="col-12">
<audio src="<?=$music?>" controls </audio>
</div>

<?php

endforeach;

?>