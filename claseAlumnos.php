<?php
class Alumno
{
	//atributos
	public $nombre;
	public $apellido;
	public $correo;
	public $usuario;
	public $clave1;
	public $pais;
	public $t_doc;
	public $num_doc;
	public $domicilio;
	public $localidad;
	public $cp;
	public $telefono;
	public $c_titulo;

	

	function guardar()
	{
		$archivo=fopen("usuarios.txt", "a");
      		$renglon=$this->nombre."=>".$this->apellido."=>".$this->correo."=>".$this->usuario."=>".$this->clave1."=>".$this->pais."=>".$this->t_doc."=>".$this->num_doc."=>".$this->domicilio."=>".$this->localidad."=>".$this->cp."=>".$this->telefono."=>".$this->c_titulo."\n";
		fwrite($archivo,$renglon);
		fclose($archivo);
	}

	function  mostrar()
	{
		 $archivo=fopen("usuarios.txt", "r");
 			while(!feof($archivo))
 			{
   			$renglon = fgets($archivo);

  			$datosArray=explode("=>", $renglon);
  			var_dump($datosArray);

	}
}
}
?>



