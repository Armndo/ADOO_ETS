<?php

	class Producto {
	 
	 	private $id;
	 	private $barcode;
		private $nombre;
		private $codigo;
		private $descripcion;
		private $categoria;
		private $img;
		private $costo;
		private $precio;

		public function __construct($id, $barcode, $nombre, $codigo, $categoria, $img, $costo, $precio) {
			$this->id = $id;
			$this->barcode = $barcode;
			$this->nombre = $nombre;
			$this->codigo = $codigo;
			$this->categoria = $categoria;
			$this->img = $img;
			$this->costo = $costo;
			$this->precio = $precio;
		}

		public function getId() {
		    return $this->id;
		}

	    public function getBarcode() {
	        return $this->barcode;
	    }

	    public function getNombre() {
	        return $this->nombre;
	    }

	    public function getCodigo() {
	        return $this->codigo;
	    }

	    public function getDescripcion() {
	        return $this->descripcion;
	    }

	    public function getCategoria() {
	        return $this->categoria;
	    }

	    public function getImg() {
	        return $this->img;
	    }

	    public function getCosto() {
	        return $this->costo;
	    }

	    public function getPrecio() {
	        return $this->precio;
	    }

	}

?>