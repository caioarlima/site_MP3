<a href="?page=albuns" class="voltar">Voltar Para o Álbum <?=$_GET['album']?></a>

<H1 class="titulo">Cadastrar Nova Música Para o Álbum <?=$_GET['album']?></H1>

<form action="#" method = "post" enctype="multipart/form-data" class="formulario">

        <input type="file" name= "audio" class="form-control">
        <br>
        <button type="submit" class="btnNovoAlbum">Cadastrar</button>

</form>


<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $album = $_GET['album'];

        $path = "albuns/{$album}/music/";

        if (!is_dir($path)) {
            mkdir($path);
        }

        if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
            header("Location: ?page=musicas&album={$album}");
        } else {
            echo '<p class="erro-falha">Falha ao Cadastrar!</p>';
        }
    }

?>