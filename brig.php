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
 * @param int $randomCrime
 **/
public function setRandomCrime($randomCrime) : void {
	$this->randomCrime = $randomCrime;


$a=array("larceny","embezzelment","praising Comcast","tampering with replicators","vehicular manslaughter");
$random_keys=array_rand($a,5);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]]."<br>";
echo $a[$random_keys[3]]."<br>";
echo $a[$random_keys[4]];

$b=array("Brent","Miguel","Nat");
	$random_keys=array_rand($a,5);
	echo $b[$random_keys[0]]."<br>";
	echo $b[$random_keys[1]]."<br>";
	echo $b[$random_keys[2]];




$charge = new charge();
$chargeCrime = $charge->getCrime();
$chargePrisoner = $charge->getPrisoner();
echo ("throw " . $chargePrisoner . " in the brig for " . $chargeCrime ." !");



?>