<?php
session_start();

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

require('prcd/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Image('../img/RESP_logo.png',10,12,30,0,'','http://www.fpdf.org');
$pdf->Cell(72,10,'Universidad Autónoma de Zacatecas',0, 0, 'C');
$pdf->Cell(90,10,'Oficio de Aceptación de Ponencia',0, 1, 'R');

$pdf->Multicell(200,7,'Estimado(a) participante,
Por medio de la presente, el Instituto de la Juventud del Estado de Zacatecas, a través de su Director General, el Ing. Mauricio Acevedo Rodríguez, reconoce a usted su participación como candidato(a) a recibir el Premio Estatal de la Juventud en su edición 2022.

Su postulación es fundamental para la construcción de un Estado más próspero, incluyente, democrático e igualitario. Gracias a su intervención, recordamos lo importante que es reconocer el talento y la trayectoria de las y los jóvenes en nuestra Entidad. Los principios rectores de la Nueva Gobernanza, nos obligan a impulsar y generar los espacios oportunos para que las juventudes puedan alcanzar sus objetivos, desarrollarse de manera integral y vivir en bienestar. No sólo representas uno de los cimientos más importantes de la sociedad, también eres protagonista del presente y agente estratégico para la transformación nacional.

Continúa abriendo brechas, rompiendo estigmas y creciendo, ¡Tú talento y capacidades, no tienen límites!
',1,'J',0

);

$pdf->Output();
?>