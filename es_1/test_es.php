<?php

include "es_rettangolo.php";

$rett1 = new Rettangolo(16, 8);
$rett2 = new Rettangolo(30, 15);
$rett3 = new Rettangolo(10, 2);

$totArea = $rett1->area() + $rett2->area() + $rett3->area();
$totPerimetro = $rett1->perimetro() + $rett2->perimetro() + $rett3->perimetro();
echo "Valori prima del ridimensionamento:";
echo "\n";
echo "Somma totale delle aree => ".$totArea;
echo "\n";
echo "Somma totale dei perimetri => ".$totPerimetro;

$rett1->ridimensiona(20, 10);
$totArea = $rett1->area() + $rett2->area() + $rett3->area();
$totPerimetro = $rett1->perimetro() + $rett2->perimetro() + $rett3->perimetro();

echo "\n\n";
echo "Valori dopo il ridimensionamento:";
echo "\n";
echo "Somma totale delle aree => ".$totArea;
echo "\n";
echo "Somma totale dei perimetri => ".$totPerimetro;

?>