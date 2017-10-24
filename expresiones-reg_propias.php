<?php

echo "<button onclick=\"window.open('https://diego.com.es/expresiones-regulares-en-php', '_blank')\">Abrir documentación de referencia</button>";
print("<br><br>");

/*---------------------------------------------------*/
function verificarEmail($email)
{
    return preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email);
}
function verificarUrl($url)
{
    return preg_match("\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))", $url);
}
function verificarNombre($nombre)
{
    return preg_match("/^[A-Z]{1}[\D\s]+[A-Z]{1}[\D\s]*[A-Z]{1}[a-z\s\D]*$/u", $nombre);
}

function verificarFonoChile($fono)
{
    return preg_match("/^(\+56){1}[0-9]{9}$/", $fono);
}

function verificarRut($rut)
{
    return preg_match("/\A[1-9]{1,2}\.[0-9]{3}\.[0-9]{3}\-[1-9k]\Z/", $rut);
}
function encontrarEtiquetas($a)
{
    return preg_match("/<[^>]+>/", $a);
}

/*-----------------------------------------------------------------*/
echo verificarEmail("nose@poto.cl")."<br>";
echo verificarNombre("Sebastián Olate Huenuñir")."<br>";
echo verificarFonoChile("+56992116903")."<br>";
echo verificarRut("18.095.447-3")."<br>";
echo encontrarEtiquetas("<h1>Hola mundo</h1>");
?>