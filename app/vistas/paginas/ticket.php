<?php
          
require('fpdf libreria/fpdf.php');
class PDF extends FPDF
{
  private $db;
// Cabecera de página
function Header()
{
  //session_start();

    // Arial bold 15
    $this->SetFont('Arial','B',30);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(80,10,'BioPlant.',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',20);
    $this->Cell(50);
    $this->Cell(80,10,'Ticket de Compra.',0,0,'C');
    $this->Ln(10);

}

// Pie de página
function Footer()
{
 // session_start();
  
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->Cell(200,1,utf8_decode('¡Gracias por tu compra!'),0,1,'C',0);
    $this->Cell(200,5,'www.bioplant.com',0,1,'C',0); 
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().' Bioplant 2020',0,0,'C');
}
}


$pdf = new PDF();
$pdf-> AliasNbPages();          
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(200,10,'Informacion: BioPlant es una tienda online que ofrece los productos de',0,0,'C'); 
$pdf->Ln(5);
$pdf->Cell(200,10,'un invernadero de la zona de Fortin de las flores: "El corazon de metlac".',0,0,'C');
$pdf->Ln(8);

$pdf->Cell(180,10,'Telefono: +52(272)789 51 32',0,1,'C');
$pdf->Cell(30);
$pdf->Cell(130,10,'Correo: bioplantcontigo@gmail.com ',0,1,'C');
$pdf->Cell(50);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,10,'Fecha:'.$fecha,0,0,'C');
$pdf->Cell(80,10,'Folio:'.$folio,0,1,'C');
$pdf->Cell(20);
                $pdf->Cell(60);
                $pdf->Cell(10,10,'-------------------------------------------------------------------------------------',0,1,'C',0);  
                $pdf->Cell(35);
                $pdf->Cell(30,10,'Producto',0,0,'C',0);    
                $pdf->Cell(30,10, 'Cantidad',0,0,'C',0);                     
                $pdf->Cell(30,10, 'Subtotal',0,1,'C',0);
  //session_start();
  foreach($_SESSION["agregar_carro"] as $keys => $values)
                {$pdf->Cell(35);
                $pdf->Cell(30,10, $values['nombrepro'],0,0,'C',0);    
                $pdf->Cell(30,10, $values['cantidadpro'],0,0,'C',0);                     
                $pdf->Cell(30,10, '$'.($values["cantidadpro"] * $values["preciopro"]),0,1,'C',0);
               
                  }

$pdf->Ln(20);
$pdf->Cell(70,10,'Comision del Banco: xxxxxx',0,1,'C',0);
$pdf->Cell(60,10,'Iva de comision: 16%',0,1,'C',0);
$pdf->Cell(60,10,'Monto total: $'.$mtotal,0,1,'C',0);          
$pdf->Cell(70,10,'Total + comision: $'.($mtotal+($mtotal*.16)),0,1,'C',0);
 $pdf->Ln(10);         
           $this->db = new Base;
          
          $query4="SELECT * FROM cliente c INNER JOIN direccion d ON d.iddireccion=c.iddireccion WHERE c.nombreusuario='$usu' AND c.clavecli='$cla' AND c.idcliente='$idcli'";
          $this->db->query($query4);
          $row=$this->db->registro();
            
          $pdf->Cell(70,10,'Cliente: '.$row->nombrecli.' '.$row->apellidop.' '.$row->apellidom,0,1,'C',0);
          $pdf->Cell(60,10,'Correo: '.$row->email,0,0,'C',0);
          $pdf->Cell(40,10,'Telefono: '.$row->telefono,0,1,'C',0);
          $pdf->Cell(90,10,'Direccion: '.$row->calle.' #'.$row->num_casa.', '.$row->municipio.', '.$row->estado,0,1,'C',0);
          $pdf->Cell(40,10,'CP: '.$row->cp,0,0,'C',0);
          $pdf->Cell(20,10,'Ciudad: '.$row->ciudad,0,1,'C',0);
          
 $pdf->Ln(30);
 $pdf->SetFont('Arial','I',8);
    $pdf->Cell(200,10,utf8_decode('Revisaremos su compra y nos pondremos en contacto para su envio por medio'),0,1,'C',0); 
    $pdf->Cell(200,2,utf8_decode('de su correo, cualquier duda tiene nuestra informacion en la parte superior del ticket.'),0,1,'C',0);
$pdf->Output();
    


?>