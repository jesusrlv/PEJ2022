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
$pdf->SetFont('Times','',12);
$string="El señor José Perez tiene mucho poder.";
$pdf->MultiCell(180,8,$string);

$pdf->Output();
?>

<strong>Estimado participante:</strong>
<p>Por medio de la presente, le agradecemos el haber participado en la convocatoria del <strong>Premio Estatal de la Juventud 2022</strong> en la ciudad de Zacatecas, Zac.</p>
<p>El Gobierno del Estado de Zacatecas agradece tu participación.</p>
<p>ATENTAMENTE</p>
<p><strong>ING. MAURICIO ACEVEDO RODRÍGUEZ</p>
<p>DIRECTOR GENERAL<br>DEL INJUVENTUD</strong></p>