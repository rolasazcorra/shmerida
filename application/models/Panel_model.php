<?php 

class Panel_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function auto_insertar($table,$insert)
	{
		$this->db->insert(''.$table.'',$insert);
	}

	
	public function get_banners()
	{
		return $this->db->get('banners');
	}
	
		public function get_banner($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('banners');
	}

	
	public function get_noticias()
	{
		$this->db->where('id_seccion', '6');
		$this->db->order_by('id', 'desc'); 
		return $this->db->get('contenido');
	}
	
	public function get_secciones()
	{
		return $this->db->get('secciones');
	}

	public function get_secciones_join()
	{
			$this->db->select('*, secciones.id as id, secciones.nombre as nombre, secciones.categoria as categoria, categorias.id as cat_id, categorias.nombre as cat_nombre');
			$this->db->from('secciones');
			$this->db->join('categorias', 'categorias.id = secciones.categoria', 'inner');
			
			
			return $this->db->get();
	}

	public function get_categorias()
	{
		return $this->db->get('categorias');
	}
	
	
	public function get_seccion($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('secciones');
	}
	
	public function get_foto($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('fotos');
	}
	
	public function get_fotos_seccion($id)
	{
		$this->db->where('galeria', $id);
		return $this->db->get('fotos');
	}
	
	
	public function get_slider($id)
	{
		$this->db->where('galeria', $id);
		return $this->db->get('fotos');
	}
	
	
	public function get_contenido($id)
	{
		$this->db->where('id_seccion', $id);
		return $this->db->get('contenido');
	}
	
	public function get_contenido_a($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('contenido');
	}
	
	public function get_letras()
	{
		return $this->db->get('letras');
	}
	
	public function get_glosario()
	{
		return $this->db->get('glosario');
	}
	
	public function get_seccion_a($id)
	{
		$this->db->where('titulo', $id);
		return $this->db->get('secciones');
	}

	public function get_contenido_n($id)
	{
		$this->db->where('titulo', $id);
		return $this->db->get('contenido');
	}

	
	public function get_fotos_contenido()
	{	
		$this->db->where('galeria', '0');
		return $this->db->get('fotos');
	}
	
	
	public function get_carrito($id)
	{
		$this->db->where('carrito.c_usuario',$id);
			$this->db->select('*, productos.id as id, productos.nombre as nombre,  productos.descripcion as descripcion,  productos.rating as rating,  productos.precio as precio, productos.foto as foto, productos.thumb as thumb, carrito.id as cid');
			//productos.id as id es para no causar conflicto con el campo id de categorias al llamarse idéntico, esto aplica para otros que se repitan.
			$this->db->from('carrito');
			$this->db->join('productos', 'carrito.c_producto = productos.id');

			return $this->db->get();
	}
	
	public function get_articulos($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('carrito');
	}
	
	public function get_ventas()
	{
			$this->db->select('*, ventas.id as id, usuarios.usuario as usuario, productos.nombre as producto');
			$this->db->from('ventas');
			$this->db->join('usuarios', 'usuarios.id = ventas.v_usuario', 'inner');
			$this->db->join('productos','productos.id = ventas.v_producto', 'inner');
			
			
			return $this->db->get();
	}
	
	public function obtener_productos_join($edit)
	{
			$this->db->where('productos.id',$edit);
			$this->db->select('*, productos.id as id, productos.nombre as nombre, categoria.nombre as cat'); 
			//productos.id as id es para no causar conflicto con el campo id de categorias al llamarse idéntico, esto aplica para otros que se repitan.
			$this->db->from('productos');
			$this->db->join('categoria', 'productos.categoria = categoria.id');

			return $this->db->get();
	}
	
	public function get_fotos_join($edit)
	{
			$this->db->where('fotos.id',$edit);
			$this->db->select('*, fotos.id as id, fotos.nombre as nombre, secciones.titulo as ti'); 
			//productos.id as id es para no causar conflicto con el campo id de categorias al llamarse idéntico, esto aplica para otros que se repitan.
			$this->db->from('fotos');
			$this->db->join('secciones', 'fotos.galeria = secciones.id');

			return $this->db->get();
	}

	public function get_fotos_join_2($edit)
	{
			$this->db->where('fotos.id',$edit);
			$this->db->select('*, fotos.id as id, fotos.nombre as nombre, secciones.nombre as ti'); 
			//productos.id as id es para no causar conflicto con el campo id de categorias al llamarse idéntico, esto aplica para otros que se repitan.
			$this->db->from('fotos');
			$this->db->join('secciones', 'fotos.galeria = secciones.id');

			return $this->db->get();
	}
	
	public function obtener_fotos_productos($datos)
	{	
		$this->db->where('categoria', $datos);
		return $this->db->get('productos');
	}
	
	public function edit_foto_pro($edit)
	{
		//recibe un arreglo llamado $edit y pide que regrese la foto que coincida con el id.
		$this->db->where('id',$edit);
		return $this->db->get('productos');
	}
	
	public function auto_eliminar($id,$table)
	{	
	
		$local= './uploads/';
	
 	  $x=$this->db->where('id', $id)->get(''.$table.'');
      $y=$x->row();
      
	  if ($table == 'fotos')
	  {
	  	if (file_exists(''.$local.''.$y->foto)) 
	 {
	 	@unlink(''.$local.''.$y->foto);
	 }
	 if (file_exists(''.$local.''.$y->thumb)) 
	 {
	 	@unlink(''.$local.''.$y->thumb);
	 }
	  }
	 
		$this->db->where('id', $id)->delete(''.$table.'');
		
	
	}
	
	function vaciar_carrito($id)
	{
		$this->db->where('c_usuario', $id)->delete('carrito');
	}
	
	
}
