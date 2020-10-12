<?php

$kalimat2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

function tolow($kalimat)
{
    return strtolower($kalimat);
}

function toup($kalimat)
{
    return strtoupper($kalimat);
}

function tocap($kalimat)
{
    return ucfirst($kalimat);
}

function tolcap($kalimat)
{
    return lcfirst($kalimat);
}

echo tolcap(toup($kalimat2)), "<br><br>";
echo tocap(tolow($kalimat2)), "<br><br>";
echo tolow($kalimat2), "<br><br>";
echo toup($kalimat2), "<br><br>";
echo "<hr>";

$nama = "Adi Fauzi";
$arr = explode(" ", $nama);
$kode = implode(rand($min = 0, $max = 100), $arr);

echo "Nama : ", $nama, "<br>";
echo "Kode : ", $kode, "<br>";
echo "<hr>";
