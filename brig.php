<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 1/24/2018
 * Time: 8:11 AM
$crimes = ["larceny","embezzlement", "praising Comcast", "tampering with replicators", "vehicular manslaughter"];
$prisoners = ["Brent", "Miguel", "Nat"];
 **/

echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(0,5));



/**
 * @return string
 */
public function getCrime(): string {
	return ($this->crime);
}
/**
 * @return string
 */
public function getPrisoner(): string{
	return ($this->prisoner);
}
/**
 * @param int $crime
 */
public function setCrime($crime): void {
	$this->crime = $crime;
}
/**
 * @param int $prisoner
 */
public function setPrisoner($prisoner): void {
	$this->prisoner = $prisoner;
}
}
/**
 * @param int $randomNumber
 **/
public function setRandomNumber($randomNumber) : void {
	$this->randomNumber = $randomNumber;

	public function setRandomNumber($randomNumber) : void {
		try { $min=1;
			$max=5;
			echo rand($min,$max);
		}
	}
}
$a=array("larceny","embezzelment","praising Comcast","tampering with replicators","vehicular manslaughter");
$random_keys=array_rand($a,5);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]]."<br>";
echo $a[$random_keys[3]]."<br>";
echo $a[$random_keys[4]];

//mixed array_rand ( array $array [, int $num = 1 ] )
//$randomNumber = echo(rand(0,4));
//let eightBall = '';
/*switch(randomNumber) {
	case 0:
		eightBall = 'it is certain';
		break;
	case 1:
		eightBall = 'it is decidedly so';
		break;
	case 3:
		eightBall = 'Reply hazy try again';
		break;
	case 4:
		eightBall = 'Cannot predict now';
		break;
	case 5:
		eightBall = "Don't count on it";
		break;
	case 6:
		eightBall = 'My sources say no';
		break;
	case 7 :
		eightBall = 'Outlook not so good';
		break;
	case 8 :
		eightBall = 'Signs point to yes';
		break;
}
console.log('The user asked: '+userQuestion);
console.log('The eight ball answered: '+eightBall);
**/


$charge = new charge();
$chargeCrime = $charge->getCrime();
$chargePrisoner = $charge->getPrisoner();
echo ($chargeCrime ." " . $chargePrisoner);



?>