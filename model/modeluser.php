<?php
include 'conection/conection.php';


class user {
    private $enlase;
    public function ConectDB(){
    $this->db();   
    }

    public function db(){
        $this->enlase = CDB();
    }

    public function GetAllUsers ($iduser, $name, $sname, $idn, $rdate, $state){
        $ids = $iduser;
        $nn = $name;
        $sn = $sname;
        $ids = $idn;
        $rdt = $rdate;
        $stt = $state;
        $sql1 = $this->enlase->prepare('SELECT * from user_ket');
        $sql1 -> execute();
        $user = $sql1 -> fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

    public function RegisterUser ($name, $sname, $idn){
        $nn = $name;
        $sn = $sname;
        $ids = $idn;
        $sql1 = $this->enlase -> prepare ('INSERT INTO user_ket (name_ket, surname_ket , idnumber_ket, registerdate_ket) VALUES (?,?,?,NOW');
        $sql1 -> bindParam(1,$nn);
        $sql1 -> bindParam(1,$sn);
        $sql1 -> bindParam(3,$ids);
        $register = $sql1 -> execute();
        return $register;
        }



}

?> 