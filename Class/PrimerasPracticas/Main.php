<?php
include 'Books.php';

$book1 = new Books;

$book1->setTitle('Mi planta de naranja y lima');
$book1->setAuthorB('José Mauro de Vasconcelos');
$book1->setPageNumber('193');
$book1->setYearEdition('1968');

echo 'Datos del Libro';
echo "<br></br>";
echo 'Título: ' . $book1->getTitle();
echo "<br>";
echo 'Autor: ' . $book1->getAuthorB();
echo "<br>";
echo 'Números de páginas: ' . $book1->getPageNUmber();
echo "<br>";
echo 'Año de Edición: ' . $book1->getYearEDition();
echo "<br>";


?>