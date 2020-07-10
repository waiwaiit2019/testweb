<?

$text = "     Hello world   ";
echo strlen($text).":rtrim=".strlen(rtrim($text))."<br>";
echo strlen($text).":ltrim=".strlen(ltrim($text))."<br>";
echo $mytext = strlen(ltrim(rtrim($text))); echo "<p>";
//echo strlen($text).":rtrim and ltrim=".strlen(ltrim((rtrim($text)))."<br>";

echo substr("sp25673",2)."<br>";
include("RC4.php");

$pass = "superHero@101";
echo "sha1($pass) = ".sha1($pass); echo "<br>";

$pass = "089841994345180";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "@min2020";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "@SupWai$^$";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "dupracha2014@101";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "myschool";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "myweb";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "swp101";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "okweb";
echo "md5($pass) = ".md5($pass); echo "<br>";

$pass = "45180@45";
echo "sha1($pass) = ".sha1(trim($pass)); echo "<br>";


$pass = "center@sci60";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "admin@sci60";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "sm27@sci60";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "waiwai@2559";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "sci59@sm27";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "money@2016";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";


$pass = "smret27";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";


$pass = "HelloWorld";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "admin";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "art64@sillapa.net";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "art65@sillapa.net";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "SuperWai@101";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "sm27";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "admin";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "SuperWai@101";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "admin";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "photakadmin";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "adminlaoongsai";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "demo";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "45180";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "4518045180";
echo "md5(md5($pass)) = ".md5(md5($pass)); echo "<br>";

$pass = "0X4Hhn7d";//รหัสธงธานี
echo "md5(md5($pass)) = ".md5(md5($pass)); echo " ธงธานี";echo "<br>";

$pass = "adminttn101";//รหัสธงธานี
echo "md5(md5($pass)) = ".md5(md5($pass)); echo " admin ธงธานี";echo "<br>";

$pass = "6WoSl6UR";//ดู่น้อยประชาสรรค์
echo "md5(md5($pass)) = ".md5(md5($pass)); echo " ดู่น้อยประชาสรรค์"; echo "<br>";

echo "sha1(adminret1) = ".sha1("adminret1"); echo "<br>";
//define("WEB_TITLE",":: SAR online -:-"); 
$key="waiwaiprojectoklove";
echo "<br>".$key."<br>";
echo "RC4(admin)=".$enpass = EncryptRC4($key,"admin");
echo "<br>RC4 decript = ".DecryptRC4($key,$enpass);

?>
<hr />
<?
/*
$pre = "ab";
for ($i = 1; $i< 61 ; $i++){
	$user = $pre.$i;
	//echo "md5($user) = ".md5($user)."<br>";
	echo " UPDATE  `radiusdb`.`account` SET  `password` =  '".substr(md5($user),0,15)."' WHERE  `account`.`username` =  '".$user."'; <br>" ;
	echo " UPDATE  `radiusdb`.`account` SET  `firstname` =  'คุณ".$user."' WHERE  `account`.`username` =  '".$user."'; <br>" ;
	echo " UPDATE  `radiusdb`.`account` SET  `lastname` =  'คุณ".$user."' WHERE  `account`.`username` =  '".$user."'; <br>" ;
	echo " UPDATE  `radiusdb`.`account` SET  `pid` =  '2450400001023' WHERE  `account`.`username` =  '".$user."'; <br>" ;
	echo " UPDATE  `radiusdb`.`account` SET  `mailaddr` =  '".$user."@gmail.com' WHERE  `account`.`username` =  '".$user."'; <br>" ;
	echo " UPDATE  `radiusdb`.`account` SET  `address` =  '9206 หมู่  12 ต.สว่างแดนดิน  อ.สว่างแดนดิน จ.สกลนคร  47240' WHERE  `account`.`username` =  '".$user."'; <br>" ;
	
	
	
	//('ab1', '68b6a776378decb', 'ab1', 'aa', 'bb@gmail.com', '2450400001023', '', '  ', '2013-02-22 09:09:14', 'md5', 1),
	//echo " UPDATE  `radiusdb`.`account` SET  `password` =  '8b14dbe9e9e0551' WHERE  `account`.`username` =  '".$user."'; <br>" ;	
}
*/
?>