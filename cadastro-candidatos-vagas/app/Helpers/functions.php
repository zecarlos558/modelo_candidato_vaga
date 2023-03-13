<?php

function formataNomeMenu($nome)
{
    if (count(explode(" ", $nome)) == 1) {
        $nome = $nome[0];
    } else {
        $nome = strstr($nome, ' ', true)[0] . trim(strstr($nome, ' ')[1]);
    }
    return $nome;
}
