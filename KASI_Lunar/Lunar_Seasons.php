<?php
/**
 * Project:: oops\KASI\Seasons :: 한국 천문 연구원의 24절기 데이터 테이블<br>
 * File:     Lunar_KAIS_Table.php
 *
 * 이 패키지는 한국 천문 연구원의 음양력 데이터 자료 이다.
 * Data 에 대한 저작권은 한국 천문 연구원에 있다.
 *
 * @category    Calendar
 * @package     oops\KASI\Lunar
 * @subpackage  oops\KASI\Lunar\Seasons
 * @author      JoungKyun.Kim <http://oops.org>
 * @copyright   (c) 2024, OOPS.org
 * @license     GPL
 * @link        https://github.com/OOPS-ORG-PHP/KASI-Lunar
 * @filesource
 */

/**
 * Namespace oops\KASI
 */
namespace oops\KASI;

/**
 * 한국 천문 연구원의 음양력 데이터 테이블<br>
 *
 * 이 패키지는 한국 천문 연구원의 음양력 데이터 자료 이다.
 *
 * @package     oops\KASI\Lunar
 * @subpackage  oops\KASI\Lunar\Tables
 * @author      JoungKyun.Kim <http://oops.org>
 * @copyright   (c) 2024, OOPS.org
 * @license     GPL
 */
Class Seasons {
	// {{{ +-- protected prpperties
	/**#@+
	 * @access public
	 */
	/**
	 * 절기 이름
	 * @var array
	 */
	static $so24n = array (
		'소한', '대한', '입춘', '우수', '경칩', '춘분',
		'청명', '곡우', '입하', '소만', '망종', '하지',
		'소서', '대서', '입추', '처서', '백로', '추분',
		'한로', '상강', '입동', '소설', '대설', '동지'
	);
	/**
	 * 절기 한자 이름
	 * @var array
	 */
	static $so24hn = array (
		'小寒', '大寒', '立春', '雨水', '驚蟄', '春分',
		'淸明', '穀雨', '立夏', '小滿', '芒種', '夏至',
		'小暑', '大暑', '立秋', '處暑', '白露', '秋分',
		'寒露', '霜降', '立冬', '小雪', '大雪', '冬至'
	);
	/**
	 * 절기 별 태양 황경
	 * @var array
	 */
	static $so24ecliptic = array (
		315, 330, 145, 0, 15, 30, 45, 60, 75, 90, 105,
		120, 135, 150, 165, 180, 195, 210, 225, 240,
		255, 270, 285, 300
	);

	/**
	 * 년도별 절기별 입절시각
	 * 2004년도 데이터 부터 있으므로, 배열 0 은 2004년도 데이터이다.
	 * @var array [year] => array ([so24n] => timestamp)
	 */
	static $so24 = array (
		array (
			1073348340, 1074620520, 1075895760, 1077177000, 1078466160, 1079765340, 1081075380,
			1082397000, 1083729720, 1085072340, 1086423240, 1087779420, 1089138660, 1090497000,
			1091852400, 1093200780, 1094541180, 1095870600, 1097189340, 1098496140, 1099792740,
			1101079320, 1102358940, 1103632920
		),
		array (
			1104904980, 1106176920, 1107452580, 1108733520, 1110023100, 1111321980, 1112632440,
			1113953820, 1115286780, 1116629220, 1117980120, 1119336360, 1120695420, 1122054060,
			1123408980, 1124757900, 1126097820, 1127427780, 1128745980, 1130053320, 1131349320,
			1132636500, 1133915580, 1135190100
		),
		array (
			1136461620, 1137734100, 1139009220, 1140290760, 1141579740, 1142879160, 1144188900,
			1145510760, 1146843060, 1148185920, 1149536220, 1150892760, 1152251460, 1153610280,
			1154965260, 1156314180, 1157654340, 1158984180, 1160302860, 1161609960, 1162906500,
			1164193320, 1165472820, 1166746920
		),
		array (
			1168018800, 1169290860, 1170566280, 1171847340, 1173136680, 1174435620, 1175745900,
			1177067220, 1178400000, 1179742320, 1181093220, 1182449160, 1183808520, 1185166800,
			1186522260, 1187870880, 1189211340, 1190541060, 1191859860, 1193166900, 1194463440,
			1195750200, 1197029640, 1198303680
		),
		array (
			1199575500, 1200847380, 1202122800, 1203403740, 1204693140, 1205992080, 1207302360,
			1208623860, 1209956580, 1211299260, 1212649920, 1214006340, 1215365220, 1216724100,
			1218078960, 1219428120, 1220768040, 1222098240, 1223416620, 1224724140, 1226020200,
			1227307440, 1228586520, 1229861040
		),
		array (
			1231132440, 1232404800, 1233679800, 1234961160, 1236250020, 1237549440, 1238859240,
			1240181040, 1241513460, 1242856260, 1244206740, 1245563100, 1246921980, 1248280560,
			1249635660, 1250984280, 1252324680, 1253654340, 1254973200, 1256280180, 1257576960,
			1258863720, 1260143520, 1261417620
		),
		array (
			1262689740, 1263961680, 1265237280, 1266518160, 1267807560, 1269106320, 1270416600,
			1271737800, 1273070640, 1274412840, 1275763740, 1277119680, 1278478920, 1279837260,
			1281192540, 1282541220, 1283881500, 1285211340, 1286529960, 1287837300, 1289133720,
			1290420840, 1291700280, 1292974680
		),
		array (
			1294246500, 1295518680, 1296793980, 1298075100, 1299364200, 1300663260, 1301973120,
			1303294620, 1304626980, 1305969660, 1307320020, 1308676560, 1310035320, 1311394320,
			1312749180, 1314098460, 1315438440, 1316768700, 1318087140, 1319394600, 1320690900,
			1321978080, 1323257340, 1324531800
		),
		array (
			1325803440, 1327075800, 1328350920, 1329632220, 1330921260, 1332220440, 1333530300,
			1334851920, 1336184400, 1337526900, 1338877560, 1340233740, 1341592860, 1342951260,
			1344306600, 1345655220, 1346995740, 1348325340, 1349644320, 1350951180, 1352247960,
			1353534600, 1354814340, 1356088260
		),
		array (
			1357360440, 1358632320, 1359907980, 1361188860, 1362478500, 1363777320, 1365087720,
			1366408980, 1367741880, 1369084140, 1370434980, 1371791040, 1373150040, 1374508560,
			1375863600, 1377212520, 1378552560, 1379882640, 1381201080, 1382508600, 1383804840,
			1385092080, 1386371280, 1387645860
		),
		array (
			1388917440, 1390189860, 1391464980, 1392746340, 1394035320, 1395334620, 1396644420,
			1397966100, 1399298340, 1400641140, 1401991380, 1403347860, 1404706500, 1406065260,
			1407420120, 1408769160, 1410109260, 1411439340, 1412758020, 1414065420, 1415362020,
			1416649080, 1417928640, 1419202980
		),
		array (
			1420474800, 1421746980, 1423022280, 1424303400, 1425592560, 1426891500, 1428201540,
			1429522920, 1430855520, 1432197900, 1433548680, 1434904680, 1436263920, 1437622200,
			1438977660, 1440326220, 1441666740, 1442996400, 1444315380, 1445622420, 1446919080,
			1448205900, 1449485580, 1450759680
		),
		array (
			1452031680, 1453303620, 1454579160, 1455860040, 1457149380, 1458448200, 1459758420,
			1461079740, 1462412520, 1463754960, 1465105680, 1466462040, 1467820980, 1469179800,
			1470534780, 1471883880, 1473223860, 1474554060, 1475872380, 1477179900, 1478476080,
			1479763320, 1481042460, 1482317040
		),
		array (
			1483588560, 1484860980, 1486136040, 1487417460, 1488706380, 1490005680, 1491315420,
			1492637220, 1493969460, 1495312260, 1496662560, 1498019040, 1499377860, 1500736500,
			1502091600, 1503440400, 1504780680, 1506110520, 1507429320, 1508736420, 1510033080,
			1511319840, 1512599520, 1513873680
		),
		array (
			1515145740, 1516417740, 1517693280, 1518974280, 1520263680, 1521562500, 1522872780,
			1524193980, 1525526700, 1526868900, 1528219740, 1529575620, 1530934920, 1532293200,
			1533648660, 1534997340, 1536337800, 1537667640, 1538986500, 1540293720, 1541590320,
			1542877320, 1544156760, 1545430980
		),
		array (
			1546702740, 1547974800, 1549250040, 1550531040, 1551820200, 1553119080, 1554429060,
			1555750500, 1557082980, 1558425540, 1559775960, 1561132440, 1562491260, 1563850200,
			1565205180, 1566554520, 1567894620, 1569225000, 1570543560, 1571851200, 1573147440,
			1574434740, 1575713880, 1576124340
		),
		array (
			1578194580, 1579466340, 1580808600, 1582088220, 1583376960, 1584676200, 1585985880,
			1587307500, 1588639860, 1589982540, 1591333080, 1592689380, 1594048440, 1595406960,
			1596762360, 1598111100, 1599451680, 1600781400, 1602100500, 1603407540, 1604704380,
			1605991140, 1607270940, 1608546180
		),
		array (
			1609816980, 1611088800, 1612364340, 1613645040, 1614934440, 1616233020, 1617543300,
			1618864380, 1620197220, 1621539420, 1622890320, 1624246320, 1625605500, 1626963960,
			1628319240, 1629668100, 1631008380, 1632338460, 1633657140, 1634964660, 1636261140,
			1637548440, 1638827820, 1640102340
		),
		array (
			1641352980, 1642624800, 1643900340, 1645181040, 1646470440, 1647769020, 1649079300,
			1650400380, 1651733220, 1653075420, 1654426320, 1655782320, 1657141500, 1658499960,
			1659855240, 1661204100, 1662544380, 1663874460, 1665193140, 1666500660, 1667797140,
			1669084440, 1670363820, 1671638340
		),
		array (
			1672931100, 1674203400, 1675478580, 1676759640, 1678048560, 1679347440, 1680657180,
			1681978440, 1683310740, 1684652940, 1686003480, 1687359480, 1688718660, 1690077000,
			1691432580, 1692781260, 1694122020, 1695451800, 1696770960, 1698078060, 1699374960,
			1700661780, 1701941580, 1703215620
		),
		array (
			1704487740, 1705759620, 1707035220, 1708315980, 1709605380, 1710903960, 1712214120,
			1713535200, 1714867800, 1716210000, 1717560600, 1718916660, 1720275600, 1721634240,
			1722989340, 1724338500, 1725678660, 1727009040, 1728327600, 1729635300, 1730931600,
			1732218960, 1733498220, 1734772860
		),
		array (
			1736044380, 1737316800, 1738591800, 1739873220, 1741162020, 1742461260, 1743770940,
			1745092560, 1746424620, 1747767300, 1749117420, 1750473720, 1751832300, 1753190940,
			1754545920, 1755894840, 1757235120, 1758565140, 1759884060, 1761191460, 1762488240,
			1763775360, 1765055100, 1766329380
		),
		array (
			1767601380, 1768873500, 1770148920, 1771429920, 1772719140, 1774017960, 1775328000,
			1776649140, 1777981740, 1779323820, 1780674480, 1782030300, 1783389420, 1784747580,
			1786102980, 1787451540, 1788792060, 1790121900, 1791440940, 1792748280, 1794045120,
			1795332180, 1796611980, 1797886200
		)
	);
	/**#@-*/
	// }}}
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim: set filetype=php noet sw=4 ts=4 fdm=marker:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
?>