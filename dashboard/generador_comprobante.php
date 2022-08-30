<?php
session_start();

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

require('prcd/fpdf/fpdf.php');

class PDF extends FPDF
{
/* Page header */
function Header()
{
    
    $this->SetFont('Arial','B',15);
    /* Move to the right */
    $this->Cell(60);
    // Logo
    $this->Image('../img/RESP_logo.png',81,27,54);
  
    $this->Cell(81,10,utf8_decode('Constancia de participación'),0,0,'C');
    
}
/* Page footer */
function Footer()
{
    /* Position at 1.5 cm from bottom */
    $this->SetY(-15);
    /* Arial italic 8 */
    $this->SetFont('Arial','I',8);
    /* Page number */
    $this->Cell(0,10,'Hoja '.$this->PageNo().'/{nb}',0,0,'C');
}
}

/* Instanciation of inherited class */
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(72,10,'Universidad Autónoma de Zacatecas',0, 0, 'C');
$pdf->Cell(90,10,'Oficio de Aceptación de Ponencia',0, 1, 'R');

$pdf->Multicell(190,10,'Estimado autor: <AUTOR>
<UNIVERSIDAD>
<CORREO>
Este mensaje es para confirmarle que el resumen cuyos detalles se presentan a continuación ha sido aceptado para ser presentado como ponencia oral en el 1er Congreso Internacional sobre Gestión de las Organizaciones y 3er Encuentro de Investigadores en Gestión Ambiental y Sustentabilidad, por lo que lo invitamos a enviar su ponencia en extenso. La fecha límite para el envío de su trabajo en extenso es el 15 de julio de 2019.
Título del trabajo: <TITULO>
ID del trabajo: <CODIGO>
Autor(es): <3 AUTORES>
Favor de usar la siguiente liga de internet para el envío de su ponencia:  http://unizacatecas.edu.mx/ponencias_CIGO. Las instrucciones para preparar la ponencia se  encuentran en la sección 6. Formato de resúmenes, ponencias y carteles de la convocatoria del Congreso CIGO 2019. De igual forma, en la misma página de internet http://uaca.reduaz.mx/CIGO
podrá encontrar la plantilla de ponencia en extenso. 
Una vez que se haya recibido la ponencia en extenso, ésta será sujeta a revisión, de lo cual será informado con oportunidad. En caso de preguntas le agradeceremos se comunique al siguiente correo electrónico: congreso_cigo@uaz.edu.mx.
Atentamente
Comité Organizador Congreso Internacional sobre Gestión de las Organizaciones',0,'J',0
);

$pdf->Output();
?>

<!-- <strong>Estimado participante:</strong>
<p>Por medio de la presente, le agradecemos el haber participado en la convocatoria del <strong>Premio Estatal de la Juventud 2022</strong> en la ciudad de Zacatecas, Zac.</p>
<p>El Gobierno del Estado de Zacatecas agradece tu participación.</p>
<p>ATENTAMENTE</p>
<p><strong>ING. MAURICIO ACEVEDO RODRÍGUEZ</p>
<p>DIRECTOR GENERAL<br>DEL INJUVENTUD</strong></p> -->

<!-- codigo para generar pdf -->

<?php

//request id


// require 'lib/fpdf/fpdf.php';

// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(72,10,'Universidad Autónoma de Zacatecas',0, 0, 'C');
// $pdf->Cell(90,10,'Oficio de Aceptación de Ponencia',0, 1, 'R');

// $pdf->Multicell(190,10,'Estimado autor: <AUTOR>
// <UNIVERSIDAD>
// <CORREO>

// Este mensaje es para confirmarle que el resumen cuyos detalles se presentan a continuación ha sido aceptado para ser presentado como ponencia oral en el 1er Congreso Internacional sobre Gestión de las Organizaciones y 3er Encuentro de Investigadores en Gestión Ambiental y Sustentabilidad, por lo que lo invitamos a enviar su ponencia en extenso. La fecha límite para el envío de su trabajo en extenso es el 15 de julio de 2019.

// Título del trabajo: <TITULO>

// ID del trabajo: <CODIGO>

// Autor(es): <3 AUTORES>

// Favor de usar la siguiente liga de internet para el envío de su ponencia:  http://unizacatecas.edu.mx/ponencias_CIGO. Las instrucciones para preparar la ponencia se  encuentran en la sección 6. Formato de resúmenes, ponencias y carteles de la convocatoria del Congreso CIGO 2019. De igual forma, en la misma página de internet http://uaca.reduaz.mx/CIGO
// podrá encontrar la plantilla de ponencia en extenso. 

// Una vez que se haya recibido la ponencia en extenso, ésta será sujeta a revisión, de lo cual será informado con oportunidad. En caso de preguntas le agradeceremos se comunique al siguiente correo electrónico: congreso_cigo@uaz.edu.mx.


// Atentamente

// Comité Organizador Congreso Internacional sobre Gestión de las Organizaciones',1,'J',0

// );

// $pdf->Output();



?>