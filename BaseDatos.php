<?php

class BaseDatos
{

    //atributos == variables
    public $usuarioBD = "root";
    public $passwordBD = "";
    // public $nombreServidor="local";


    //funcion especial que se llama constructor 
    public function __construct()
    {
    }


    //metodo == funciones 
    public function conectarBD()
    {

        try {
            $infoDB = "mysql:host=localhost;dbname=tiendaweb1";
            $conexionBD = new PDO($infoDB, $this->usuarioBD, $this->passwordBD);

            return ($conexionBD);
        } catch (PDOEXception $error) {

            echo ($error->getMessage());
        }
    }


    public function agregarDatos($consultaSQL)
    {
        //1.
        $conexionBD = $this->conectarBD();


        // 2.
        $consultaInsertarDatos = $conexionBD->prepare($consultaSQL);

        // 3. 
        $resultado = $consultaInsertarDatos->execute();

        // 4. 
        if ($resultado) {

            echo ("Registro agregado con exito");
        } else {
            echo ("Error agregando el resgistro");
        }
    }

    public function consultarDatos($consultaSQL)
    {
        //1.Conectarse a la base de datos
        $conexionBD = $this->conectarBD();
        // 2.Preparar la consulta que se va a realizar 
        $consultaInsertarDatos = $conexionBD->prepare($consultaSQL);

        // 3. Definir la forma en la que vamos a traer los datos setFetchMode 
        $consultaInsertarDatos->setFetchMode(PDO::FETCH_ASSOC);

        // 4.Ejecutar la consulta 
        $consultaInsertarDatos->execute();

        // 5.Retornar los datos consultados 
        return ($consultaInsertarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL)
    {
        //1.

				$conexionBD = $this->conectarBD();

        // 2. 
        $consultaEliminarDatos = $conexionBD->prepare($consultaSQL);

        // 3. 
        $resultado = $consultaEliminarDatos->execute();

        // 4.  
        if ($resultado) {

            echo ("Registro eliminado con exito");
        } else {
            echo ("Error eliminando el resgistro");
        }
		}
		
		public function editarDatos($consultaSQL)
		{
			//1.
			$conexionBD = $this->conectarBD();


			// 2. 
			$consultaEditarDatos = $conexionBD->prepare($consultaSQL);

			// 3. 
			$resultado = $consultaEditarDatos->execute();

			// 4. 
			if ($resultado) {

					echo ("Registro editado con exito");
			} else {
					echo ("Error editando el resgistro");
			}
	}


}
