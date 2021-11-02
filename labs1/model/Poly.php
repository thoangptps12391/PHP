<?php 
	class Poly{

		function isSoNguyenTo($x){
			$isSNT = true;

			for ($i=2; $i<$x ; $i++) { 
				if ($x%$i==0) {
					$isSNT=false;
					break;
				}
			}
			return $isSNT;
		}

		function getList($x,$y){
			for ($i=$x+1; $i <= $y; $i++) { 
				if ($this->isSoNguyenTo($i)) {
					echo $i."<br/>";
				}
			}
		}
		function Stg($x,$y){
			// settype($x,double);
			// settype($y,double);
			$S=($x*$y)/2;
			echo $S;
		}
	}
?>