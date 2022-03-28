<?php
class user
{

	private $pdo;    
    public $id;
    public $firstName;
    public $lastName;
    public $phoneNumber;
	public $birthDate;      
    public $email;

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

			$stm = $this->pdo->prepare("SELECT * FROM user");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getUser($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM user WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM user WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Update($data)
	{
		
		try 
		{
			$sql = "UPDATE user SET 
						firstName      		= ?,
						lastName          = ?, 
						phoneNumber        = ?,
                        birthDate        = ?,
						email        = ?
						
				    WHERE id = ?";



			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->firstName, 
                        $data->lastName,        
                       $data->phoneNumber,
						 $data->birthDate,
                        $data->email, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		
		try 
		{
			$sql = "INSERT INTO user(id,firstName,lastName,phoneNumber,birthDate,email) 
			VALUES (? ,?, ?, ?, ?, ?)";


			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->id,
				    	$data->firstName, 
                        $data->lastName,        
                       $data->phoneNumber,
						 $data->birthDate,
                        $data->email, 
                       
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}