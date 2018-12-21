<?php  
class producto_model extends CI_Model
{
	public function __construct() { parent::__construct(); }

	public function getProducto()
	{
		$sql = "SELECT DISTINCT producto.proveedor_id, producto.id, producto.nombre, producto.descripcion, producto.precio, producto.stock, imagen_producto.ruta FROM `producto` INNER JOIN imagen_producto ON producto.id = imagen_producto.producto_id";
		return $this->db->query($sql)->result();
	}

    public function InsertProducto($ritmo, $fecha, $hora, $estado)
	{
		$sql = "INSERT INTO `batalla` (`id`, `data`, `fecha`, `hora`, `estado`) VALUES (NULL, '".$ritmo."', '".$fecha."', '".$hora."', '".$estado."');";
		$this->db->query($sql);
	}

	public function UpdateProducto($ritmo, $fecha, $hora, $estado, $id)
	{
		$sql = "UPDATE batalla SET data = '".$ritmo."', fecha = '".$fecha."', hora = '".$hora."', estado = '".$estado."' WHERE id = '".$id."';";
		$this->db->query($sql);
	}

	public function DeleteProducto( $id)
	{
		$sql = "DELETE FROM batalla WHERE id = '".$id."';";
		$this->db->query($sql);
	}



	public function getRitmoID($id)
	{
		$sql = $this->db->query("SELECT * FROM batalla where id = '".$id."';");
		$row = $sql->row();
		return $row;
	}


	public function getRitmoAlerta($fecha,$hora)
	{
		$query = $this->db->query("SELECT * FROM batalla WHERE fecha = '".$fecha."' AND hora = '".$hora."'");
		return $query->row();
	}


	public function getFrecuencias()
	{
		$sql = "SELECT * FROM frecuencias;";
		$query = $this->db->query($sql);
		return $query->row();
	}


 	public function getEnlaces()
	{
		$sql = "SELECT * FROM enlaces;";
		return $this->db->query($sql)->result();
	}


	public function UpdateFrecuencias($frecuencias=array())
	{
		$this->db->where('id', '1');
		$this->db->update('frecuencias', $frecuencias); 
	}

	public function UpdateEnlaces($enlaces=array(), $id)
	{
		$this->db->where('id', $id);
		$this->db->update('enlaces', $enlaces); 
	}
}
?>