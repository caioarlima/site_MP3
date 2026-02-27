<?php

function getAlbuns(){
    $albuns = glob('albuns/*');

    return $albuns;
}

function getMusic($album){
    $musicas = glob("albuns/{$album}/music/*.mp3");

    return $musicas;
}