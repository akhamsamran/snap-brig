<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 1/24/2018
 * Time: 8:11 AM
$crimes = ["larceny","embezzlement", "praising Comcast", "tampering with replicators", "vehicular manslaughter"];
$prisoners = ["Brent", "Miguel", "Nat"];
 **/
function throwInBrig() {
	$crimes = ["dividing by zero","larceny","embezzlement", "praising Comcast", "tampering with replicators", "vehicular manslaughter"];
	$prisoners = ["Brent", "Miguel", "Nat"];
	$conviction = $crimes[array_rand($crimes)];
	$perpetrator = $prisoners[random_int(0, count($prisoners) - 1)];

	echo "Mr. Worf, throw $perpetrator in the brig for $conviction!" . PHP_EOL;

	$solitaryCell = new \stdClass();
	$solitaryCell->conviction = $conviction;
	$solitaryCell->perpetrator = $perpetrator;
	return($solitaryCell);
	}

	$solitaryCell = throwInBrig();
	var_dump($solitaryCell);
	?>

/**result:
*Mr. Worf, throw Brent in the brig for embezzlement!

*object(stdClass)#1 (2) {
*["conviction"]=>
*string(12) "embezzlement"
*["perpetrator"]=>
*string(5) "Brent"
*}
**/



/**
 * my attempts:
 **/
/**
 * @return string
 */
//public function getCrime(): string {
//	return ($this->crime);
//}
/**
 * @return string
 */
//public function getPrisoner(): string{
//	return ($this->prisoner);
//}
/**
 * @param int $crime
 */
//public function setCrime($crime): void {
//	$this->crime = $crime;
}
/**
 * @param int $prisoner
 */
//public function setPrisoner($prisoner): void {
//	$this->prisoner = $prisoner;
//}
//}
/**
 * @param int $randomCrime
 **/
//public function setRandomCrime($randomCrime) : void {
//	$this->randomCrime = $randomCrime;

/**
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
**/


/**
$charge = new charge();
$chargeCrime = $charge->getCrime();
$chargePrisoner = $charge->getPrisoner();
echo ("throw " . $chargePrisoner . " in the brig for " . $chargeCrime ." !");
**/
