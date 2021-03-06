--TEST--
date suffixes test
--FILE--
<?php
require_once(dirname(__DIR__)."/SHDate.php");
date_default_timezone_set('UTC');
class test extends SHDate
{
	public function __construct(){
		for($y = 1300; $y < 1500; $y+=6){
			for($m = 1; $m < 13; $m++){
				for ($d = 1; $d < 32; $d++) {
					$date = self::dates('Y-n-j', self::mktimes(0,0,0, $d, $m, $y, true));
					$dateb = $y.'-'.$m.'-'.$d;
					if($date!==$dateb)
						var_dump($date.' == '.$dateb.' -- false');
					if($d<5)
						$d=25;
				}
				if($m<3)
					$m = 6;
				elseif($m<8)
					$m = 11;
			}
		}
	}
}
$tst = new test();

echo "Done\n";
?>
--EXPECT--
string(18) "1300-1 -- 1300-1-1"
string(19) "1300-4 -- 1300-1-26"
string(19) "1300-5 -- 1300-1-27"
string(19) "1300-5 -- 1300-1-28"
string(19) "1300-5 -- 1300-1-29"
string(19) "1300-5 -- 1300-1-30"
string(19) "1300-5 -- 1300-1-31"
string(19) "1300-27 -- 1300-7-1"
string(20) "1300-31 -- 1300-7-26"
string(20) "1300-31 -- 1300-7-27"
string(20) "1300-31 -- 1300-7-28"
string(20) "1300-31 -- 1300-7-29"
string(20) "1300-32 -- 1300-7-30"
string(20) "1300-32 -- 1300-7-31"
string(20) "1300-49 -- 1300-12-1"
string(21) "1300-52 -- 1300-12-26"
string(21) "1300-53 -- 1300-12-27"
string(21) "1300-53 -- 1300-12-28"
string(21) "1300-53 -- 1300-12-29"
string(21) "1300-53 -- 1300-12-30"
string(21) "1300-53 -- 1300-12-31"
string(18) "1306-1 -- 1306-1-1"
string(19) "1306-5 -- 1306-1-26"
string(19) "1306-5 -- 1306-1-27"
string(19) "1306-5 -- 1306-1-28"
string(19) "1306-5 -- 1306-1-29"
string(19) "1306-5 -- 1306-1-30"
string(19) "1306-5 -- 1306-1-31"
string(19) "1306-28 -- 1306-7-1"
string(20) "1306-31 -- 1306-7-26"
string(20) "1306-31 -- 1306-7-27"
string(20) "1306-31 -- 1306-7-28"
string(20) "1306-32 -- 1306-7-29"
string(20) "1306-32 -- 1306-7-30"
string(20) "1306-32 -- 1306-7-31"
string(20) "1306-49 -- 1306-12-1"
string(21) "1306-53 -- 1306-12-26"
string(21) "1306-53 -- 1306-12-27"
string(21) "1306-53 -- 1306-12-28"
string(21) "1306-53 -- 1306-12-29"
string(21) "1306-53 -- 1306-12-30"
string(21) "1306-53 -- 1306-12-31"
string(18) "1312-1 -- 1312-1-1"
string(19) "1312-5 -- 1312-1-26"
string(19) "1312-5 -- 1312-1-27"
string(19) "1312-5 -- 1312-1-28"
string(19) "1312-5 -- 1312-1-29"
string(19) "1312-5 -- 1312-1-30"
string(19) "1312-5 -- 1312-1-31"
string(19) "1312-28 -- 1312-7-1"
string(20) "1312-31 -- 1312-7-26"
string(20) "1312-31 -- 1312-7-27"
string(20) "1312-31 -- 1312-7-28"
string(20) "1312-32 -- 1312-7-29"
string(20) "1312-32 -- 1312-7-30"
string(20) "1312-32 -- 1312-7-31"
string(20) "1312-49 -- 1312-12-1"
string(21) "1312-53 -- 1312-12-26"
string(21) "1312-53 -- 1312-12-27"
string(21) "1312-53 -- 1312-12-28"
string(21) "1312-53 -- 1312-12-29"
string(21) "1312-53 -- 1312-12-30"
string(21) "1312-53 -- 1312-12-31"
string(19) "1317-53 -- 1318-1-1"
string(19) "1318-4 -- 1318-1-26"
string(19) "1318-4 -- 1318-1-27"
string(19) "1318-4 -- 1318-1-28"
string(19) "1318-4 -- 1318-1-29"
string(19) "1318-4 -- 1318-1-30"
string(19) "1318-4 -- 1318-1-31"
string(19) "1318-27 -- 1318-7-1"
string(20) "1318-30 -- 1318-7-26"
string(20) "1318-30 -- 1318-7-27"
string(20) "1318-31 -- 1318-7-28"
string(20) "1318-31 -- 1318-7-29"
string(20) "1318-31 -- 1318-7-30"
string(20) "1318-31 -- 1318-7-31"
string(20) "1318-48 -- 1318-12-1"
string(21) "1318-52 -- 1318-12-26"
string(21) "1318-52 -- 1318-12-27"
string(21) "1318-52 -- 1318-12-28"
string(21) "1318-52 -- 1318-12-29"
string(21) "1318-52 -- 1318-12-30"
string(21) "1318-52 -- 1318-12-31"
string(19) "1323-53 -- 1324-1-1"
string(19) "1324-4 -- 1324-1-26"
string(19) "1324-4 -- 1324-1-27"
string(19) "1324-4 -- 1324-1-28"
string(19) "1324-4 -- 1324-1-29"
string(19) "1324-4 -- 1324-1-30"
string(19) "1324-4 -- 1324-1-31"
string(19) "1324-27 -- 1324-7-1"
string(20) "1324-30 -- 1324-7-26"
string(20) "1324-30 -- 1324-7-27"
string(20) "1324-31 -- 1324-7-28"
string(20) "1324-31 -- 1324-7-29"
string(20) "1324-31 -- 1324-7-30"
string(20) "1324-31 -- 1324-7-31"
string(20) "1324-48 -- 1324-12-1"
string(21) "1324-52 -- 1324-12-26"
string(21) "1324-52 -- 1324-12-27"
string(21) "1324-52 -- 1324-12-28"
string(21) "1324-52 -- 1324-12-29"
string(21) "1324-52 -- 1324-12-30"
string(21) "1324-52 -- 1324-12-31"
string(19) "1329-53 -- 1330-1-1"
string(19) "1330-4 -- 1330-1-26"
string(19) "1330-4 -- 1330-1-27"
string(19) "1330-4 -- 1330-1-28"
string(19) "1330-4 -- 1330-1-29"
string(19) "1330-4 -- 1330-1-30"
string(19) "1330-5 -- 1330-1-31"
string(19) "1330-27 -- 1330-7-1"
string(20) "1330-30 -- 1330-7-26"
string(20) "1330-31 -- 1330-7-27"
string(20) "1330-31 -- 1330-7-28"
string(20) "1330-31 -- 1330-7-29"
string(20) "1330-31 -- 1330-7-30"
string(20) "1330-31 -- 1330-7-31"
string(20) "1330-48 -- 1330-12-1"
string(21) "1330-52 -- 1330-12-26"
string(21) "1330-52 -- 1330-12-27"
string(21) "1330-52 -- 1330-12-28"
string(21) "1330-52 -- 1330-12-29"
string(21) "1330-52 -- 1330-12-30"
string(21) "1330-53 -- 1330-12-31"
string(19) "1335-52 -- 1336-1-1"
string(19) "1336-4 -- 1336-1-26"
string(19) "1336-4 -- 1336-1-27"
string(19) "1336-4 -- 1336-1-28"
string(19) "1336-4 -- 1336-1-29"
string(19) "1336-4 -- 1336-1-30"
string(19) "1336-5 -- 1336-1-31"
string(19) "1336-27 -- 1336-7-1"
string(20) "1336-30 -- 1336-7-26"
string(20) "1336-31 -- 1336-7-27"
string(20) "1336-31 -- 1336-7-28"
string(20) "1336-31 -- 1336-7-29"
string(20) "1336-31 -- 1336-7-30"
string(20) "1336-31 -- 1336-7-31"
string(20) "1336-48 -- 1336-12-1"
string(21) "1336-52 -- 1336-12-26"
string(21) "1336-52 -- 1336-12-27"
string(21) "1336-52 -- 1336-12-28"
string(21) "1336-52 -- 1336-12-29"
string(21) "1336-52 -- 1336-12-30"
string(21) "1336-53 -- 1336-12-31"
string(19) "1341-52 -- 1342-1-1"
string(19) "1342-4 -- 1342-1-26"
string(19) "1342-4 -- 1342-1-27"
string(19) "1342-4 -- 1342-1-28"
string(19) "1342-4 -- 1342-1-29"
string(19) "1342-4 -- 1342-1-30"
string(19) "1342-5 -- 1342-1-31"
string(19) "1342-27 -- 1342-7-1"
string(20) "1342-30 -- 1342-7-26"
string(20) "1342-31 -- 1342-7-27"
string(20) "1342-31 -- 1342-7-28"
string(20) "1342-31 -- 1342-7-29"
string(20) "1342-31 -- 1342-7-30"
string(20) "1342-31 -- 1342-7-31"
string(20) "1342-48 -- 1342-12-1"
string(21) "1342-52 -- 1342-12-26"
string(21) "1342-52 -- 1342-12-27"
string(21) "1342-52 -- 1342-12-28"
string(21) "1342-52 -- 1342-12-29"
string(21) "1342-52 -- 1342-12-30"
string(21) "1342-53 -- 1342-12-31"
string(19) "1347-52 -- 1348-1-1"
string(19) "1348-4 -- 1348-1-26"
string(19) "1348-4 -- 1348-1-27"
string(19) "1348-4 -- 1348-1-28"
string(19) "1348-4 -- 1348-1-29"
string(19) "1348-5 -- 1348-1-30"
string(19) "1348-5 -- 1348-1-31"
string(19) "1348-27 -- 1348-7-1"
string(20) "1348-31 -- 1348-7-26"
string(20) "1348-31 -- 1348-7-27"
string(20) "1348-31 -- 1348-7-28"
string(20) "1348-31 -- 1348-7-29"
string(20) "1348-31 -- 1348-7-30"
string(20) "1348-31 -- 1348-7-31"
string(20) "1348-48 -- 1348-12-1"
string(21) "1348-52 -- 1348-12-26"
string(21) "1348-52 -- 1348-12-27"
string(21) "1348-52 -- 1348-12-28"
string(21) "1348-52 -- 1348-12-29"
string(21) "1348-53 -- 1348-12-30"
string(21) "1348-53 -- 1348-12-31"
string(19) "1353-52 -- 1354-1-1"
string(19) "1354-4 -- 1354-1-26"
string(19) "1354-4 -- 1354-1-27"
string(19) "1354-4 -- 1354-1-28"
string(19) "1354-4 -- 1354-1-29"
string(19) "1354-5 -- 1354-1-30"
string(19) "1354-5 -- 1354-1-31"
string(19) "1354-27 -- 1354-7-1"
string(20) "1354-31 -- 1354-7-26"
string(20) "1354-31 -- 1354-7-27"
string(20) "1354-31 -- 1354-7-28"
string(20) "1354-31 -- 1354-7-29"
string(20) "1354-31 -- 1354-7-30"
string(20) "1354-31 -- 1354-7-31"
string(20) "1354-48 -- 1354-12-1"
string(21) "1354-52 -- 1354-12-26"
string(21) "1354-52 -- 1354-12-27"
string(21) "1354-52 -- 1354-12-28"
string(21) "1354-52 -- 1354-12-29"
string(20) "1355-1 -- 1354-12-30"
string(20) "1355-1 -- 1354-12-31"
string(18) "1360-1 -- 1360-1-1"
string(19) "1360-4 -- 1360-1-26"
string(19) "1360-4 -- 1360-1-27"
string(19) "1360-4 -- 1360-1-28"
string(19) "1360-5 -- 1360-1-29"
string(19) "1360-5 -- 1360-1-30"
string(19) "1360-5 -- 1360-1-31"
string(19) "1360-27 -- 1360-7-1"
string(20) "1360-31 -- 1360-7-26"
string(20) "1360-31 -- 1360-7-27"
string(20) "1360-31 -- 1360-7-28"
string(20) "1360-31 -- 1360-7-29"
string(20) "1360-31 -- 1360-7-30"
string(20) "1360-31 -- 1360-7-31"
string(20) "1360-49 -- 1360-12-1"
string(21) "1360-52 -- 1360-12-26"
string(21) "1360-52 -- 1360-12-27"
string(21) "1360-52 -- 1360-12-28"
string(20) "1361-1 -- 1360-12-29"
string(20) "1361-1 -- 1360-12-30"
string(20) "1361-1 -- 1360-12-31"
string(18) "1366-1 -- 1366-1-1"
string(19) "1366-4 -- 1366-1-26"
string(19) "1366-4 -- 1366-1-27"
string(19) "1366-4 -- 1366-1-28"
string(19) "1366-5 -- 1366-1-29"
string(19) "1366-5 -- 1366-1-30"
string(19) "1366-5 -- 1366-1-31"
string(19) "1366-27 -- 1366-7-1"
string(20) "1366-31 -- 1366-7-26"
string(20) "1366-31 -- 1366-7-27"
string(20) "1366-31 -- 1366-7-28"
string(20) "1366-31 -- 1366-7-29"
string(20) "1366-31 -- 1366-7-30"
string(20) "1366-31 -- 1366-7-31"
string(20) "1366-49 -- 1366-12-1"
string(21) "1366-52 -- 1366-12-26"
string(21) "1366-52 -- 1366-12-27"
string(21) "1366-52 -- 1366-12-28"
string(20) "1367-1 -- 1366-12-29"
string(20) "1367-1 -- 1366-12-30"
string(20) "1367-1 -- 1366-12-31"
string(18) "1372-1 -- 1372-1-1"
string(19) "1372-4 -- 1372-1-26"
string(19) "1372-4 -- 1372-1-27"
string(19) "1372-5 -- 1372-1-28"
string(19) "1372-5 -- 1372-1-29"
string(19) "1372-5 -- 1372-1-30"
string(19) "1372-5 -- 1372-1-31"
string(19) "1372-27 -- 1372-7-1"
string(20) "1372-31 -- 1372-7-26"
string(20) "1372-31 -- 1372-7-27"
string(20) "1372-31 -- 1372-7-28"
string(20) "1372-31 -- 1372-7-29"
string(20) "1372-31 -- 1372-7-30"
string(20) "1372-32 -- 1372-7-31"
string(20) "1372-49 -- 1372-12-1"
string(21) "1372-52 -- 1372-12-26"
string(21) "1372-52 -- 1372-12-27"
string(20) "1373-1 -- 1372-12-28"
string(20) "1373-1 -- 1372-12-29"
string(20) "1373-1 -- 1372-12-30"
string(20) "1373-1 -- 1372-12-31"
string(18) "1378-1 -- 1378-1-1"
string(19) "1378-4 -- 1378-1-26"
string(19) "1378-4 -- 1378-1-27"
string(19) "1378-5 -- 1378-1-28"
string(19) "1378-5 -- 1378-1-29"
string(19) "1378-5 -- 1378-1-30"
string(19) "1378-5 -- 1378-1-31"
string(19) "1378-27 -- 1378-7-1"
string(20) "1378-31 -- 1378-7-26"
string(20) "1378-31 -- 1378-7-27"
string(20) "1378-31 -- 1378-7-28"
string(20) "1378-31 -- 1378-7-29"
string(20) "1378-31 -- 1378-7-30"
string(20) "1378-32 -- 1378-7-31"
string(20) "1378-49 -- 1378-12-1"
string(21) "1378-52 -- 1378-12-26"
string(21) "1378-52 -- 1378-12-27"
string(20) "1379-1 -- 1378-12-28"
string(20) "1379-1 -- 1378-12-29"
string(20) "1379-1 -- 1378-12-30"
string(20) "1379-1 -- 1378-12-31"
string(18) "1384-1 -- 1384-1-1"
string(19) "1384-4 -- 1384-1-26"
string(19) "1384-5 -- 1384-1-27"
string(19) "1384-5 -- 1384-1-28"
string(19) "1384-5 -- 1384-1-29"
string(19) "1384-5 -- 1384-1-30"
string(19) "1384-5 -- 1384-1-31"
string(19) "1384-27 -- 1384-7-1"
string(20) "1384-31 -- 1384-7-26"
string(20) "1384-31 -- 1384-7-27"
string(20) "1384-31 -- 1384-7-28"
string(20) "1384-31 -- 1384-7-29"
string(20) "1384-32 -- 1384-7-30"
string(20) "1384-32 -- 1384-7-31"
string(20) "1384-49 -- 1384-12-1"
string(21) "1384-52 -- 1384-12-26"
string(20) "1385-1 -- 1384-12-27"
string(20) "1385-1 -- 1384-12-28"
string(20) "1385-1 -- 1384-12-29"
string(20) "1385-1 -- 1384-12-30"
string(20) "1385-1 -- 1384-12-31"
string(18) "1390-1 -- 1390-1-1"
string(19) "1390-4 -- 1390-1-26"
string(19) "1390-5 -- 1390-1-27"
string(19) "1390-5 -- 1390-1-28"
string(19) "1390-5 -- 1390-1-29"
string(19) "1390-5 -- 1390-1-30"
string(19) "1390-5 -- 1390-1-31"
string(19) "1390-27 -- 1390-7-1"
string(20) "1390-31 -- 1390-7-26"
string(20) "1390-31 -- 1390-7-27"
string(20) "1390-31 -- 1390-7-28"
string(20) "1390-31 -- 1390-7-29"
string(20) "1390-32 -- 1390-7-30"
string(20) "1390-32 -- 1390-7-31"
string(20) "1390-49 -- 1390-12-1"
string(21) "1390-52 -- 1390-12-26"
string(20) "1391-1 -- 1390-12-27"
string(20) "1391-1 -- 1390-12-28"
string(20) "1391-1 -- 1390-12-29"
string(20) "1391-1 -- 1390-12-30"
string(20) "1391-1 -- 1390-12-31"
string(18) "1396-1 -- 1396-1-1"
string(19) "1396-5 -- 1396-1-26"
string(19) "1396-5 -- 1396-1-27"
string(19) "1396-5 -- 1396-1-28"
string(19) "1396-5 -- 1396-1-29"
string(19) "1396-5 -- 1396-1-30"
string(19) "1396-5 -- 1396-1-31"
string(19) "1396-28 -- 1396-7-1"
string(20) "1396-31 -- 1396-7-26"
string(20) "1396-31 -- 1396-7-27"
string(20) "1396-31 -- 1396-7-28"
string(20) "1396-32 -- 1396-7-29"
string(20) "1396-32 -- 1396-7-30"
string(20) "1396-32 -- 1396-7-31"
string(20) "1396-49 -- 1396-12-1"
string(21) "1396-53 -- 1396-12-26"
string(21) "1396-53 -- 1396-12-27"
string(21) "1396-53 -- 1396-12-28"
string(21) "1396-53 -- 1396-12-29"
string(21) "1396-53 -- 1396-12-30"
string(21) "1396-53 -- 1396-12-31"
string(18) "1402-1 -- 1402-1-1"
string(19) "1402-5 -- 1402-1-26"
string(19) "1402-5 -- 1402-1-27"
string(19) "1402-5 -- 1402-1-28"
string(19) "1402-5 -- 1402-1-29"
string(19) "1402-5 -- 1402-1-30"
string(19) "1402-5 -- 1402-1-31"
string(19) "1402-28 -- 1402-7-1"
string(20) "1402-31 -- 1402-7-26"
string(20) "1402-31 -- 1402-7-27"
string(20) "1402-31 -- 1402-7-28"
string(20) "1402-32 -- 1402-7-29"
string(20) "1402-32 -- 1402-7-30"
string(20) "1402-32 -- 1402-7-31"
string(20) "1402-49 -- 1402-12-1"
string(21) "1402-53 -- 1402-12-26"
string(21) "1402-53 -- 1402-12-27"
string(21) "1402-53 -- 1402-12-28"
string(21) "1402-53 -- 1402-12-29"
string(21) "1402-53 -- 1402-12-30"
string(21) "1402-53 -- 1402-12-31"
string(18) "1408-1 -- 1408-1-1"
string(19) "1408-5 -- 1408-1-26"
string(19) "1408-5 -- 1408-1-27"
string(19) "1408-5 -- 1408-1-28"
string(19) "1408-5 -- 1408-1-29"
string(19) "1408-5 -- 1408-1-30"
string(19) "1408-5 -- 1408-1-31"
string(19) "1408-28 -- 1408-7-1"
string(20) "1408-31 -- 1408-7-26"
string(20) "1408-31 -- 1408-7-27"
string(20) "1408-31 -- 1408-7-28"
string(20) "1408-32 -- 1408-7-29"
string(20) "1408-32 -- 1408-7-30"
string(20) "1408-32 -- 1408-7-31"
string(20) "1408-49 -- 1408-12-1"
string(21) "1408-53 -- 1408-12-26"
string(21) "1408-53 -- 1408-12-27"
string(21) "1408-53 -- 1408-12-28"
string(21) "1408-53 -- 1408-12-29"
string(21) "1408-53 -- 1408-12-30"
string(21) "1408-53 -- 1408-12-31"
string(19) "1413-53 -- 1414-1-1"
string(19) "1414-4 -- 1414-1-26"
string(19) "1414-4 -- 1414-1-27"
string(19) "1414-4 -- 1414-1-28"
string(19) "1414-4 -- 1414-1-29"
string(19) "1414-4 -- 1414-1-30"
string(19) "1414-4 -- 1414-1-31"
string(19) "1414-27 -- 1414-7-1"
string(20) "1414-30 -- 1414-7-26"
string(20) "1414-30 -- 1414-7-27"
string(20) "1414-31 -- 1414-7-28"
string(20) "1414-31 -- 1414-7-29"
string(20) "1414-31 -- 1414-7-30"
string(20) "1414-31 -- 1414-7-31"
string(20) "1414-48 -- 1414-12-1"
string(21) "1414-52 -- 1414-12-26"
string(21) "1414-52 -- 1414-12-27"
string(21) "1414-52 -- 1414-12-28"
string(21) "1414-52 -- 1414-12-29"
string(21) "1414-52 -- 1414-12-30"
string(21) "1414-52 -- 1414-12-31"
string(19) "1419-53 -- 1420-1-1"
string(19) "1420-4 -- 1420-1-26"
string(19) "1420-4 -- 1420-1-27"
string(19) "1420-4 -- 1420-1-28"
string(19) "1420-4 -- 1420-1-29"
string(19) "1420-4 -- 1420-1-30"
string(19) "1420-4 -- 1420-1-31"
string(19) "1420-27 -- 1420-7-1"
string(20) "1420-30 -- 1420-7-26"
string(20) "1420-30 -- 1420-7-27"
string(20) "1420-31 -- 1420-7-28"
string(20) "1420-31 -- 1420-7-29"
string(20) "1420-31 -- 1420-7-30"
string(20) "1420-31 -- 1420-7-31"
string(20) "1420-48 -- 1420-12-1"
string(21) "1420-52 -- 1420-12-26"
string(21) "1420-52 -- 1420-12-27"
string(21) "1420-52 -- 1420-12-28"
string(21) "1420-52 -- 1420-12-29"
string(21) "1420-52 -- 1420-12-30"
string(21) "1420-52 -- 1420-12-31"
string(19) "1425-52 -- 1426-1-1"
string(19) "1426-4 -- 1426-1-26"
string(19) "1426-4 -- 1426-1-27"
string(19) "1426-4 -- 1426-1-28"
string(19) "1426-4 -- 1426-1-29"
string(19) "1426-4 -- 1426-1-30"
string(19) "1426-5 -- 1426-1-31"
string(19) "1426-27 -- 1426-7-1"
string(20) "1426-30 -- 1426-7-26"
string(20) "1426-31 -- 1426-7-27"
string(20) "1426-31 -- 1426-7-28"
string(20) "1426-31 -- 1426-7-29"
string(20) "1426-31 -- 1426-7-30"
string(20) "1426-31 -- 1426-7-31"
string(20) "1426-48 -- 1426-12-1"
string(21) "1426-52 -- 1426-12-26"
string(21) "1426-52 -- 1426-12-27"
string(21) "1426-52 -- 1426-12-28"
string(21) "1426-52 -- 1426-12-29"
string(21) "1426-52 -- 1426-12-30"
string(21) "1426-53 -- 1426-12-31"
string(19) "1431-52 -- 1432-1-1"
string(19) "1432-4 -- 1432-1-26"
string(19) "1432-4 -- 1432-1-27"
string(19) "1432-4 -- 1432-1-28"
string(19) "1432-4 -- 1432-1-29"
string(19) "1432-4 -- 1432-1-30"
string(19) "1432-5 -- 1432-1-31"
string(19) "1432-27 -- 1432-7-1"
string(20) "1432-30 -- 1432-7-26"
string(20) "1432-31 -- 1432-7-27"
string(20) "1432-31 -- 1432-7-28"
string(20) "1432-31 -- 1432-7-29"
string(20) "1432-31 -- 1432-7-30"
string(20) "1432-31 -- 1432-7-31"
string(20) "1432-48 -- 1432-12-1"
string(21) "1432-52 -- 1432-12-26"
string(21) "1432-52 -- 1432-12-27"
string(21) "1432-52 -- 1432-12-28"
string(21) "1432-52 -- 1432-12-29"
string(21) "1432-52 -- 1432-12-30"
string(21) "1432-53 -- 1432-12-31"
string(19) "1437-52 -- 1438-1-1"
string(19) "1438-4 -- 1438-1-26"
string(19) "1438-4 -- 1438-1-27"
string(19) "1438-4 -- 1438-1-28"
string(19) "1438-4 -- 1438-1-29"
string(19) "1438-5 -- 1438-1-30"
string(19) "1438-5 -- 1438-1-31"
string(19) "1438-27 -- 1438-7-1"
string(20) "1438-31 -- 1438-7-26"
string(20) "1438-31 -- 1438-7-27"
string(20) "1438-31 -- 1438-7-28"
string(20) "1438-31 -- 1438-7-29"
string(20) "1438-31 -- 1438-7-30"
string(20) "1438-31 -- 1438-7-31"
string(20) "1438-48 -- 1438-12-1"
string(21) "1438-52 -- 1438-12-26"
string(21) "1438-52 -- 1438-12-27"
string(21) "1438-52 -- 1438-12-28"
string(21) "1438-52 -- 1438-12-29"
string(21) "1438-53 -- 1438-12-30"
string(21) "1438-53 -- 1438-12-31"
string(19) "1443-52 -- 1444-1-1"
string(19) "1444-4 -- 1444-1-26"
string(19) "1444-4 -- 1444-1-27"
string(19) "1444-4 -- 1444-1-28"
string(19) "1444-4 -- 1444-1-29"
string(19) "1444-5 -- 1444-1-30"
string(19) "1444-5 -- 1444-1-31"
string(19) "1444-27 -- 1444-7-1"
string(20) "1444-31 -- 1444-7-26"
string(20) "1444-31 -- 1444-7-27"
string(20) "1444-31 -- 1444-7-28"
string(20) "1444-31 -- 1444-7-29"
string(20) "1444-31 -- 1444-7-30"
string(20) "1444-31 -- 1444-7-31"
string(20) "1444-48 -- 1444-12-1"
string(21) "1444-52 -- 1444-12-26"
string(21) "1444-52 -- 1444-12-27"
string(21) "1444-52 -- 1444-12-28"
string(21) "1444-52 -- 1444-12-29"
string(21) "1444-53 -- 1444-12-30"
string(21) "1444-53 -- 1444-12-31"
string(18) "1450-1 -- 1450-1-1"
string(19) "1450-4 -- 1450-1-26"
string(19) "1450-4 -- 1450-1-27"
string(19) "1450-4 -- 1450-1-28"
string(19) "1450-5 -- 1450-1-29"
string(19) "1450-5 -- 1450-1-30"
string(19) "1450-5 -- 1450-1-31"
string(19) "1450-27 -- 1450-7-1"
string(20) "1450-31 -- 1450-7-26"
string(20) "1450-31 -- 1450-7-27"
string(20) "1450-31 -- 1450-7-28"
string(20) "1450-31 -- 1450-7-29"
string(20) "1450-31 -- 1450-7-30"
string(20) "1450-31 -- 1450-7-31"
string(20) "1450-49 -- 1450-12-1"
string(21) "1450-52 -- 1450-12-26"
string(21) "1450-52 -- 1450-12-27"
string(21) "1450-52 -- 1450-12-28"
string(20) "1451-1 -- 1450-12-29"
string(20) "1451-1 -- 1450-12-30"
string(20) "1451-1 -- 1450-12-31"
string(18) "1456-1 -- 1456-1-1"
string(19) "1456-4 -- 1456-1-26"
string(19) "1456-4 -- 1456-1-27"
string(19) "1456-4 -- 1456-1-28"
string(19) "1456-5 -- 1456-1-29"
string(19) "1456-5 -- 1456-1-30"
string(19) "1456-5 -- 1456-1-31"
string(19) "1456-27 -- 1456-7-1"
string(20) "1456-31 -- 1456-7-26"
string(20) "1456-31 -- 1456-7-27"
string(20) "1456-31 -- 1456-7-28"
string(20) "1456-31 -- 1456-7-29"
string(20) "1456-31 -- 1456-7-30"
string(20) "1456-31 -- 1456-7-31"
string(20) "1456-49 -- 1456-12-1"
string(21) "1456-52 -- 1456-12-26"
string(21) "1456-52 -- 1456-12-27"
string(21) "1456-52 -- 1456-12-28"
string(20) "1457-1 -- 1456-12-29"
string(20) "1457-1 -- 1456-12-30"
string(20) "1457-1 -- 1456-12-31"
string(18) "1462-1 -- 1462-1-1"
string(19) "1462-4 -- 1462-1-26"
string(19) "1462-4 -- 1462-1-27"
string(19) "1462-5 -- 1462-1-28"
string(19) "1462-5 -- 1462-1-29"
string(19) "1462-5 -- 1462-1-30"
string(19) "1462-5 -- 1462-1-31"
string(19) "1462-27 -- 1462-7-1"
string(20) "1462-31 -- 1462-7-26"
string(20) "1462-31 -- 1462-7-27"
string(20) "1462-31 -- 1462-7-28"
string(20) "1462-31 -- 1462-7-29"
string(20) "1462-31 -- 1462-7-30"
string(20) "1462-32 -- 1462-7-31"
string(20) "1462-49 -- 1462-12-1"
string(21) "1462-52 -- 1462-12-26"
string(21) "1462-52 -- 1462-12-27"
string(20) "1463-1 -- 1462-12-28"
string(20) "1463-1 -- 1462-12-29"
string(20) "1463-1 -- 1462-12-30"
string(20) "1463-1 -- 1462-12-31"
string(18) "1468-1 -- 1468-1-1"
string(19) "1468-4 -- 1468-1-26"
string(19) "1468-4 -- 1468-1-27"
string(19) "1468-5 -- 1468-1-28"
string(19) "1468-5 -- 1468-1-29"
string(19) "1468-5 -- 1468-1-30"
string(19) "1468-5 -- 1468-1-31"
string(19) "1468-27 -- 1468-7-1"
string(20) "1468-31 -- 1468-7-26"
string(20) "1468-31 -- 1468-7-27"
string(20) "1468-31 -- 1468-7-28"
string(20) "1468-31 -- 1468-7-29"
string(20) "1468-31 -- 1468-7-30"
string(20) "1468-32 -- 1468-7-31"
string(20) "1468-49 -- 1468-12-1"
string(21) "1468-52 -- 1468-12-26"
string(21) "1468-52 -- 1468-12-27"
string(20) "1469-1 -- 1468-12-28"
string(20) "1469-1 -- 1468-12-29"
string(20) "1469-1 -- 1468-12-30"
string(20) "1469-1 -- 1468-12-31"
string(18) "1474-1 -- 1474-1-1"
string(19) "1474-4 -- 1474-1-26"
string(19) "1474-4 -- 1474-1-27"
string(19) "1474-5 -- 1474-1-28"
string(19) "1474-5 -- 1474-1-29"
string(19) "1474-5 -- 1474-1-30"
string(19) "1474-5 -- 1474-1-31"
string(19) "1474-27 -- 1474-7-1"
string(20) "1474-31 -- 1474-7-26"
string(20) "1474-31 -- 1474-7-27"
string(20) "1474-31 -- 1474-7-28"
string(20) "1474-31 -- 1474-7-29"
string(20) "1474-31 -- 1474-7-30"
string(20) "1474-32 -- 1474-7-31"
string(20) "1474-49 -- 1474-12-1"
string(21) "1474-52 -- 1474-12-26"
string(21) "1474-52 -- 1474-12-27"
string(20) "1475-1 -- 1474-12-28"
string(20) "1475-1 -- 1474-12-29"
string(20) "1475-1 -- 1474-12-30"
string(20) "1475-1 -- 1474-12-31"
string(18) "1480-1 -- 1480-1-1"
string(19) "1480-4 -- 1480-1-26"
string(19) "1480-5 -- 1480-1-27"
string(19) "1480-5 -- 1480-1-28"
string(19) "1480-5 -- 1480-1-29"
string(19) "1480-5 -- 1480-1-30"
string(19) "1480-5 -- 1480-1-31"
string(19) "1480-27 -- 1480-7-1"
string(20) "1480-31 -- 1480-7-26"
string(20) "1480-31 -- 1480-7-27"
string(20) "1480-31 -- 1480-7-28"
string(20) "1480-31 -- 1480-7-29"
string(20) "1480-32 -- 1480-7-30"
string(20) "1480-32 -- 1480-7-31"
string(20) "1480-49 -- 1480-12-1"
string(21) "1480-52 -- 1480-12-26"
string(20) "1481-1 -- 1480-12-27"
string(20) "1481-1 -- 1480-12-28"
string(20) "1481-1 -- 1480-12-29"
string(20) "1481-1 -- 1480-12-30"
string(20) "1481-1 -- 1480-12-31"
string(18) "1486-1 -- 1486-1-1"
string(19) "1486-4 -- 1486-1-26"
string(19) "1486-5 -- 1486-1-27"
string(19) "1486-5 -- 1486-1-28"
string(19) "1486-5 -- 1486-1-29"
string(19) "1486-5 -- 1486-1-30"
string(19) "1486-5 -- 1486-1-31"
string(19) "1486-27 -- 1486-7-1"
string(20) "1486-31 -- 1486-7-26"
string(20) "1486-31 -- 1486-7-27"
string(20) "1486-31 -- 1486-7-28"
string(20) "1486-31 -- 1486-7-29"
string(20) "1486-32 -- 1486-7-30"
string(20) "1486-32 -- 1486-7-31"
string(20) "1486-49 -- 1486-12-1"
string(21) "1486-52 -- 1486-12-26"
string(21) "1486-53 -- 1486-12-27"
string(21) "1486-53 -- 1486-12-28"
string(21) "1486-53 -- 1486-12-29"
string(21) "1486-53 -- 1486-12-30"
string(21) "1486-53 -- 1486-12-31"
string(18) "1492-1 -- 1492-1-1"
string(19) "1492-5 -- 1492-1-26"
string(19) "1492-5 -- 1492-1-27"
string(19) "1492-5 -- 1492-1-28"
string(19) "1492-5 -- 1492-1-29"
string(19) "1492-5 -- 1492-1-30"
string(19) "1492-5 -- 1492-1-31"
string(19) "1492-28 -- 1492-7-1"
string(20) "1492-31 -- 1492-7-26"
string(20) "1492-31 -- 1492-7-27"
string(20) "1492-31 -- 1492-7-28"
string(20) "1492-32 -- 1492-7-29"
string(20) "1492-32 -- 1492-7-30"
string(20) "1492-32 -- 1492-7-31"
string(20) "1492-49 -- 1492-12-1"
string(21) "1492-53 -- 1492-12-26"
string(21) "1492-53 -- 1492-12-27"
string(21) "1492-53 -- 1492-12-28"
string(21) "1492-53 -- 1492-12-29"
string(21) "1492-53 -- 1492-12-30"
string(21) "1492-53 -- 1492-12-31"
string(18) "1498-1 -- 1498-1-1"
string(19) "1498-5 -- 1498-1-26"
string(19) "1498-5 -- 1498-1-27"
string(19) "1498-5 -- 1498-1-28"
string(19) "1498-5 -- 1498-1-29"
string(19) "1498-5 -- 1498-1-30"
string(19) "1498-5 -- 1498-1-31"
string(19) "1498-28 -- 1498-7-1"
string(20) "1498-31 -- 1498-7-26"
string(20) "1498-31 -- 1498-7-27"
string(20) "1498-31 -- 1498-7-28"
string(20) "1498-32 -- 1498-7-29"
string(20) "1498-32 -- 1498-7-30"
string(20) "1498-32 -- 1498-7-31"
string(20) "1498-49 -- 1498-12-1"
string(21) "1498-53 -- 1498-12-26"
string(21) "1498-53 -- 1498-12-27"
string(21) "1498-53 -- 1498-12-28"
string(21) "1498-53 -- 1498-12-29"
string(21) "1498-53 -- 1498-12-30"
string(21) "1498-53 -- 1498-12-31"
Done