<?php
session_start();

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

require('prcd/fpdf/fpdf.php');

// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',10);
// $pdf->Image('../img/RESP_logo.png',10,12,30,0,'','http://www.fpdf.org');
// $pdf->Cell(72,10,'Universidad Autónoma de Zacatecas',0, 0, 'C');
// $pdf->Cell(90,10,'Oficio de Aceptación de Ponencia',0, 1, 'R');

// $pdf->Multicell(300,9,'Estimado(a) participante,
// Por medio de la presente, el Instituto de la Juventud del Estado de Zacatecas, a través de su Director General, el Ing. Mauricio Acevedo Rodríguez, reconoce a usted su participación como candidato(a) a recibir el Premio Estatal de la Juventud en su edición 2022.

// Su postulación es fundamental para la construcción de un Estado más próspero, incluyente, democrático e igualitario. Gracias a su intervención, recordamos lo importante que es reconocer el talento y la trayectoria de las y los jóvenes en nuestra Entidad. Los principios rectores de la Nueva Gobernanza, nos obligan a impulsar y generar los espacios oportunos para que las juventudes puedan alcanzar sus objetivos, desarrollarse de manera integral y vivir en bienestar. No sólo representas uno de los cimientos más importantes de la sociedad, también eres protagonista del presente y agente estratégico para la transformación nacional.

// Continúa abriendo brechas, rompiendo estigmas y creciendo, ¡Tú talento y capacidades, no tienen límites!
// ',1,'J',0

// );

// $pdf->Output();

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/RESP_logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,utf8_decode('Constancia de participación'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('../img/RESP_fondo.jpg','0','0','200','300','JPG');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,12,'Estimado(a) participante, '.$nombre.' ',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Multicell(190,9,utf8_decode('Por medio de la presente, el Instituto de la Juventud del Estado de Zacatecas, a través de su Director General, el Ing. Mauricio Acevedo Rodríguez, reconoce a usted su participación como candidato(a) a recibir el Premio Estatal de la Juventud en su edición 2022.

Su postulación es fundamental para la construcción de un Estado más próspero, incluyente, democrático e igualitario. Gracias a su intervención, recordamos lo importante que es reconocer el talento y la trayectoria de las y los jóvenes en nuestra Entidad. Los principios rectores de la Nueva Gobernanza, nos obligan a impulsar y generar los espacios oportunos para que las juventudes puedan alcanzar sus objetivos, desarrollarse de manera integral y vivir en bienestar. No sólo representas uno de los cimientos más importantes de la sociedad, también eres protagonista del presente y agente estratégico para la transformación nacional.

Continúa abriendo brechas, rompiendo estigmas y creciendo, ¡Tú talento y capacidades, no tienen límites!

'),0,'J',0);
$pdf->SetFont('Arial','I',10);
$pdf->Multicell(190,9,'En la ciudad de Zacatecas, Zac., noviembre de 2022.',0,'C',0);
$pdf->Image('../img/rubrica.png','PNG');
//IMAGE (RUTA,X,Y,ANCHO,ALTO,EXTEN)
$pdf->SetFont('Arial','B',10);
$pdf->Multicell(190,8,'DIRECTOR GENERAL
INSTITUTO DE LA JUVENTUD 
DEL ESTADO DE ZACATECAS',0,'C',0);

$pdf->Output();

?>
<html>
    <header>
        <title>Constancia de participación | PEJ2022</title>
    </header>
    <body>
</body>

</html>