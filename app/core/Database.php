<?php
trait Database
{

    private function connect(){
        $string = "mysql:localhost=".DBHOST.";dbname=".DBNAME;
        $con = new PDO($string, DBUSER,DBPASS);

    return($con);
    }
   
    /*public function test(){
        $query = "select * from user";
        $result = $this->query($query);
        show($result); 
    }*/
    public function query($query,$data= []){
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll((PDO::FETCH_OBJ));
            if (is_array($result) && count($result)) {
            return $result;
            }
        }
        return false;
    }
}