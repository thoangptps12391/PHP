<?php
    include_once'database.php';

    function getAllBrand(){
        $sql='SELECT * FROM hang_SX ORDER by ma_hang desc  ';
        return query($sql);
    }
     function getAllBrands($limit , $start){
        $sql='SELECT * FROM hang_SX ORDER by ma_hang desc limit '.$limit.','.$start;
        return query($sql);
    }
     function addBrand($id,$hang){
         $sql="INSERT INTO hang_SX(ma_hang,hang) values (null,'$hang') ";
         execute($sql);
     }
     function updateBrand($id,$hang){
         $sql="UPDATE hang_SX set hang_SX='$hang' where ma_hang='$id'";
         execute($sql);
     }
     function deleteBrand($id){
         $sql="DELETE from hang_SX where ma_hang='$id'";
         execute($sql);
     }
     function getBrandById($id){
        $sql="SELECT * from hang_SX where ma_hang='$id'";
        return queryOne($sql);
    }
    function countBrand(){
		$sql="select count(ma_hang) as totalrecord from hang_SX";
		return queryOne($sql);
	}
?>