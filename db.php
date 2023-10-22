<?php
class dataBase
{
    private $con;
    public function connect_db()
    {
        $this->con = mysqli_connect("localhost", "root", "", "firsttask");
        if(mysqli_connect_error())
        {
            die("database connection failed...".mysqli_connect_error());
        }
    }

    public function create($Name, $BirthDate, $Nick_name, $Address, $Salary)
    {
        $sql = "INSERT INTO employee(`Name`, `BirthDate`, `Nick_name`, `Address`, `Salary`) VALUES ('$Name','$BirthDate','$Nick_name','$Address','$Salary')";
        $res = mysqli_query($this->con, $sql);

        if($res)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function getData()
    {
        $sql = "select * from employee";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    function Edit($id)
    {
        $sql = "select * from employee where id = '$id'";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function update($id, $Name, $BirthDate, $Nick_name, $Address, $Salary)
    {
        $sql = "UPDATE employee SET Name='$Name',BirthDate='$BirthDate', Nick_name='$Nick_name', Address='$Address', Salary='$Salary' WHERE id='$id'";
        $res = mysqli_query($this->con, $sql);

        if($res)
        {
            return true;
        }
        else{
            return false;
        }
    }

    function Delete($id)
    {
        $sql = "delete from employee where id = '$id'";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }


}
$database = new dataBase();
$database->connect_db();

?>