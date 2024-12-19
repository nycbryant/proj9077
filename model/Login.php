<?php
class Login extends Database
{
    public function register($userid,$password)
    {	
        $result=$this->conn->query("SELECT userid FROM login WHERE userid='$userid'");
        $row=$result->fetch(PDO::FETCH_ASSOC);
        if(isset($row['USERID'])) return false;
        else
        {
    	    $result=$this->conn->query("insert INTO login VALUES('$userid','$password')");
	        return true;
        }
    }  
    public function login($userid,$password)
    {   
        $result=$this->conn->query("SELECT * FROM login WHERE userid='$userid'");
        $row=$result->fetch(PDO::FETCH_ASSOC);
        if(isset($row['PASSWORD']))
        {
            echo "XXXXXXXXXXXX";
            if($row['PASSWORD']==$password) 
            {
                return true;
            }
            else  return false;
        }
        else
        {
    	    return false;
        }

    }
}
?>