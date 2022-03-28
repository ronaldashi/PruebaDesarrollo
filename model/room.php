<?php
class room
{

	private $pdo;    
    public $id;
    public $name;
    public $nof;
    
	

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

	public function toList()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM room_type ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getroom_type($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM room_type WHERE id = ?");
			          

			$stm->execute(array($id));
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
			$stm = $this->pdo
			            ->prepare("DELETE FROM room_type WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		
		try 
		{
			$sql = "UPDATE room_type SET name = ?,nof = ? WHERE id = ?";



			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->name, 
                        $data->nof,                       
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function aggroom_type($data)
	{
		
		try 
		{
			$sql = "INSERT INTO room_type(id,name,nof) 
			VALUES (? ,?, ?)";


			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->id,
				    	$data->name, 
                        $data->nof,         
                       
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}