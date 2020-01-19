<?php
class Database
{
	private $mysqli;


	public function __construct()
	{
		$this->mysqli = new mysqli("172.17.0.2:3306", "root", "admin", "restauracja");
		
		if ($this->mysqli->connect_errno) 
		{
			printf("Nie udało sie połączenie z serwerem: %s\n", $this->mysqli->connect_error);	
			exit();	
		}
		if ($this->mysqli->set_charset("utf8"))  {}
	}
	
	function __destruct() 
	{
		$this->mysqli->close();
	}

    function getMysqli() {
        return $this->mysqli;
    }

	public function select($sql, $fields) 
	{
		$content = "";
		if ($result = $this->mysqli->query($sql)) 
		{
			$fieldsAmount = count($fields);
			$rowAmount = $result->num_rows;

			$content.="<table><tbody>";

			while($row = $result->fetch_object())
			{
				$content.="<tr>";
				for ($i = 0; $i < $fieldsAmount; $i++) 
				{
					$field = $fields[$i];
					$content.="<td>" . $row->$field . "</td>";
				}	
				$content.="</tr>";			
			}
			$content.="</table></tbody>";
			$result->close();
		}
		return $content;
	}

	public function insert($query)
	{
		if($this->mysqli->query($query) == True)
		{
			return True;		
		}
		else
		{
			return False;
		}	
	}

	public function delete($query)
	{
		if($this->mysli->query($query) == True)
		{
			echo "Successfully delete";	
		}
		else
		{
			echo "Error: " . $sql . "<br>" . $this->mysqli->error;
		}
	}
}
?>


