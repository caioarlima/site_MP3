<a href="?page=albuns" class="voltar">Voltar Para os Álbuns</a>

<H1 class="titulo">Cadastrar Novo Álbum</H1>

<form action="#" method = "post" enctype="multipart/form-data" class="formulario">

  
        <input type="text" name= "nome" placeholder="Nome:" class="form-control">
        <br>
        <input type="file" name= "imagem" class="form-control">
        <br>
        <button type="submit" class="btnNovoAlbum">Cadastrar</button>

</form>

<?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $album = $_POST['nome'];
                $path = "albuns/{$album}";

                if (!is_dir($path)) {
                        mkdir($path);
                }

                $file = $_FILES['imagem'];
                $fileInfo = explode('.', $file['nome']);

                $extensao = pathinfo($file['name'], PATHINFO_EXTENSION);
                $nomeImagem = $album . '.' . $extensao;

                if(move_uploaded_file($file['tmp_name'], $path . '/' . $nomeImagem)){
                        header('Location: ?page=albuns');
                } else{
                       echo '<p class="erro-falha">Falha ao Cadastrar</p>';
                }
        }

?>