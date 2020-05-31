<?php
/**
 * 
 */
class Productos
{
	private $db;
	function __construct()
	{	$this->db=new Base;
		       
		# code...
	}
	public function MostrarProducto($id='')	{
		$this->db->query("SELECT * FROM `productos` where idproducto = $id ");
		return $this->db->registro();
		# code...
	}
	public function Mostrarproductos()
	{
		$this->db->query("SELECT * FROM `productos`");
		return $this->db->registros();
		# code...
	}
		public function MostrarCa($cat='')	{
		$this->db->query("SELECT * FROM `productos` WHERE categoria='$cat' AND `disponibilidad`=1 ");



		return $this->db->registros();
		# code...
	}
	public function Agregarproducto()
	{
		$Foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
    $Nombre=$_POST['Nombre'];
    $Cantidad=$_POST['Cantidad'];
    $Categoria=$_POST['Categoria'];
    $PrecioU=$_POST['PrecioU'];
    $Descripcion=$_POST['Descripcion'];
    $query="INSERT INTO productos(nombrepro, cantexistencia, descripcion, foto, preciou, categoria) VALUES ('$Nombre','$Cantidad','$Descripcion','$Foto','$PrecioU','$Categoria')";
    $this->db->query($query);
    $this->db->execute();

		# code...
	}
	public function Eliminarproducto($id)
	{
		 $query="DELETE FROM productos WHERE idproducto=$id";
		  $this->db->query($query);
	  $this->db->execute();


		# code...
	}
	public function Modificarproducto($id)
	{
		$Foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
    $Nombre=$_POST['Nombre'];
    $Cantidad=$_POST['Cantidad'];
    $Categoria=$_POST['Categoria'];
    $PrecioU=$_POST['PrecioU'];
    $Descripcion=$_POST['Descripcion'];

    $query="UPDATE productos SET nombrepro='$Nombre', cantexistencia='$Cantidad', descripcion='$Descripcion', foto='$Foto', preciou='$PrecioU', categoria='$Categoria' WHERE idproducto='$id'";

		$this->db->query($query);
		$this->db->execute();
		# code...
	}public function buscap()
	{
		$busqueda=$_POST['busqueda'];
		$query=" SELECT * FROM Productos WHERE
               (nombrepro LIKE '$busqueda' OR
               descripcion LIKE '$busqueda' OR
               categoria LIKE '$busqueda') AND disponibilidad LIKE 1;";
                $this->db->query($query);
        return $this->db->registros();
  
		# code...
	}
}