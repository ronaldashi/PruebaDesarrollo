<?php
class reservation
{

	private $pdo;    
    public $id;
    public $room_type_id;
    public $startDate;
    public $endDate;
    public $admin_id;
	

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

			$stm = $this->pdo->prepare("SELECT reservation.id, room_type_id, startDate, endDate, admin_id FROM reservation JOIN room_type group by reservation.id ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getreservation($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM reservation WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM reservation WHERE id = ?");			          

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
			$sql = "UPDATE reservation SET startDate = ?, endDate = ?, admin_id = ? WHERE id = ?";



			$this->pdo->prepare($sql)
			     ->execute(
				    array( 
                        $data->startDate,                       
                        $data->endDate,
                        $data->admin_id,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function aggreservation($data)
	{
		
		try 
		{
			$sql = "INSERT INTO reservation(id,name,nof) 
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