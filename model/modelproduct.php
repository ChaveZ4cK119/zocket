<?php
include 'conection/conection.php';


class product {
    private $enlase;
    public function ConectDB(){
    $this->db();   
    }

    public function db(){
        $this->enlase = CDB();
    }

    public function GetAllProducts ($id_pro, $name_pro, $descr_pro, $code_pro, $price_pro, $state_pro){
        $idp = $id_pro;
        $np = $name_pro;
        $dcr = $descr_pro;
        $cd = $code_pro;
        $prc = $price_pro;
        $stp = $state_pro;
        $sql1 = $this->enlase->prepare('SELECT * from product_ket');
        $sql1 -> execute();
        $product = $sql1 -> fetchAll(PDO::FETCH_ASSOC);
        return $product;
    }

    public function RegisterProduct ($name_pro, $descr_pro, $code_pro, $price_pro){
        $np = $name_pro;
        $dcr = $descr_pro;
        $cd = $code_pro;
        $prc = $price_pro;
        $sql1 = $this->enlase -> prepare ('INSERT INTO user_ket ($name_pro, $descr_pro, $code_pro, $price_pro) VALUES (?,?,?,?');
        $sql1 -> bindParam(1,$np);
        $sql1 -> bindParam(2,$dcr);
        $sql1 -> bindParam(3,$cd);
        $sql1 -> bindParam(4,$prc);
        $register = $sql1 -> execute();
        return $register;
        }



}

?> 