<?php

require 'core.php';

if (isset($argv) && (count($argv) > 2)) {
	if ((count($argv[1]) <= 30) && (count($argv[2]) <= 30) && (count($argv[3]) <= 5) && ($argv[3] < 65535) && (is_file($argv[1]))) {
		if (!is_dir('bot-settings')) { mkdir('bot-settings'); }
		echo 'Accounts: '.$argv[1]. ' ('.strlen($argv[1]).'), Template: '.$argv[2].' ('.strlen($argv[2]).')'.PHP_EOL;
		sleep(1);
		echo 'Reading '.$argv[1].'...'.PHP_EOL;
		sleep(1);
		$template = file_get_contents($argv[2]);
		$accounts = getAccounts($argv[1]);
		echo count($accounts).' accounts found. Generating files...'.PHP_EOL;
		echo '----------------------------------------------------------------'.PHP_EOL;
		$i = 0;
		foreach ($accounts as $key => $val) {
			echo 'Making '.$val['username'].'.json'.PHP_EOL;
			$guiport = $argv[3]+$i;
			$search = array('##LATITUDE##','##LONGITUDE##','##USERNAME##','##PASSWORD##','##GUIPORT##','##PROXYIP##','##PROXYPORT##','##RESTAPIPASSWORD##');
			$replace = array($val['latitude'],$val['longitude'],$val['username'],$val['password'],$guiport,$val['proxy_ip'],$val['proxy_port'],$val['rest_api_password']);
			$content = str_replace($search, $replace, $template);
			file_put_contents('bot-settings/'.$guiport.'-'.$val['username'].'.json', $content, LOCK_EX);
			$i++;
		}
		sleep(1);
		echo '----------------------------------------------------------------'.PHP_EOL;
		echo 'All JSON files generated in /bot-settings folder.'.PHP_EOL;
	} else {
		echo 'ERROR! Max lengths: Accounts filename=30, Template filename=30, GUI port=5 (<65535)'.PHP_EOL;
	}
} else {
	echo 'ERROR! Invalid arguments. Use: php cli.php <accounts.csv> <default.json> <gui_port_start>'.PHP_EOL;
}

?>
