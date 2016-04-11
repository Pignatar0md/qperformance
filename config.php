<?php
date_default_timezone_set('America/Buenos_Aires');
define('AMI', '/var/lib/asterisk/agi-bin/phpagi-asmanager.php');
define('ECCP', '/var/www/html/modules/agent_console/libs/ECCP.class.php');
//define('LSTAGENTES', '/opt/elastix/dialer/ListaAgentes.class.php');
//define('urlTCP', '/freetech_ccenter/qPerformance/Ctl/');
//define('urlTCPR', '/freetech_ccenter/supervision/Ctl/reports/');

define('AMI_IP', 'localhost:5038');
define('AMI_USER', 'ccenterfts');
define('AMI_PASS', 'c0nqu33st4sFreetech');

define('ECCP_IP', 'localhost');
define('ECCP_USER', 'marcelo');
define('ECCP_PASS', 'marcelo');
//define('ECCP_USER', 'fr33T3ch');
//define('ECCP_PASS', 'FR33t3CH123cuatro');

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'MiEseCuElefreetech');

define('root',$_SERVER['DOCUMENT_ROOT'].'/freetech_ccenter/qPerformance');
//define('home',root."/freetech_ccenter/qPerformance");
define('includes',root."/inc");
define('ctl',root."/Ctl");
define('utilities',root."/utils");
define('view',root."/Vw");
define('entities',root."/entities");
define('model',root."/Mdl");
define('CONNECTION',model.'/Connection.php');
define('DIR_COPY', root.'/tmpRecords/');
define('DIR_AUDIO', '/var/spool/asterisk/asternic/');
define("DIR_POSITION", "/var/spool/asterisk/asternic");
define('Ext', 'mp3');
define('DIR_DST', '/var/spool/asterisk/grabacionesMarcadas/');
?>
