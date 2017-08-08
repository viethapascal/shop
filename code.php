<?php

function pt3($a,$b,$c,$d){
	echo $a."x^3 + ".$b."x^2 + ".$c."x + ".$d."<br>";
	$delta = $b**2 - 3*$a*$c;
	$k = (9*$a*$b*$c - 2*$b**3 - 27*$a**2*$d)/(2*abs($delta)**1.5);
	echo "delta = ". $delta."<br>"."k = ".$k."<br>";
	if($delta>0){
		if(abs($k)<=1){ 
			echo "co ba nghiem <br>";
			$x1 = (2*$delta**0.5*cos(acos($k)/3)-$b)/(3*$a);
			echo "x1= ".$x1."<br>";
			$x2 = (2*$delta**0.5*cos((acos($k)-2*pi())/3)-$b)/(3*$a);
			echo "x2= ".$x2."<br>";
			$x3 = (2*$delta**0.5*cos((acos($k)+2*pi())/3)-$b)/(3*$a);
			echo "x3= ".$x3."<br>";
		}
		else {
			echo "Co nghiem duy nhat<br>";
			$p0 = ($delta**0.5*abs($k))/(3*$a*$k);
			$p1 = (abs($k)+($k**2-1)**0.5)**(1/3);
			$p2 = (abs($k)-($k**2-1)**0.5)**(1/3);
			$x = $p0*($p1+$p2)-($b/(3*$a));
			echo "x = ".$x;
		}
	}
	elseif($delta==0){
		if ($b**3-27*$a**2*$d == 0) {
			echo "Co nghiem boi<br>";
			$x = (-$b)/(3*$a);
			echo "x = ".$x;
		}
		else {
			echo "Co nghiem duy nhat<br>";
			$x = (-$b+ ($b**3 - 27*$a**2*$d)**(1/3))/(3*$a);
			echo "x = ".$x;
		}
	}
	else {
		echo "Co nghiem duy nhat<br>";
		$p0 = (abs($delta)**0.5)/(3*$a);
        $p1 = ($k+($k**2+1)**0.5)**(1/3);
        $p2 = ($k-($k**2+1)**0.5)**(1/3);
        $x = $p0*($p1+$p2)-($b/(3*$a));
        echo "x = ".pow(-0.142, 0.3);
	}
}
pt3(1,-4,6,-24);
?>