<?php

class Categoria
{
	private $pdo;    
    public $id_categoria;
    public $Nombre;
  

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM categorias");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$sql = "SELECT * FROM categorias WHERE id_categoria=".$id;
			          
            $stm = $this->pdo->prepare($sql);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM categorias WHERE id_categoria = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar( Categoria $data)
	{
		try 
		{
			$sql = "UPDATE categorias SET 	nombre   = ? WHERE id_categoria = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre,
                        $data->id_categoria
                   
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Categoria $data)
	{
		try 
		{
		$sql = "INSERT INTO categorias (.id_categoria, nombre) 
		        VALUES (?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id.
                    $data->Nombre

                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}