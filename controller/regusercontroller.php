<?php 
include 'conection/conection.php';
include 'model/modeluser.php';
class reguser {
    public function UnpackData($name, $sname, $idn){
        extract($_POST);
        
        $name = $post['name'];
        $sname = $post['surname'];
        $idn = $post['identification'];
    
    }
    
}




?>