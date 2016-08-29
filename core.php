<?php

function getAccounts($filename) {
	$content = file_get_contents($filename, FILE_USE_INCLUDE_PATH);
	$i = 0; foreach (explode(PHP_EOL, $content) as &$value) {
		$parameter = explode(';', $value);
		$account[$i]['username'] = $parameter[0];
		$account[$i]['password'] = $parameter[1];
		$account[$i]['latitude'] = $parameter[2];
		$account[$i]['longitude'] = $parameter[3];
		if (isset($parameter[5])) { $account[$i]['proxy_ip'] = $parameter[5]; } else { $account[$i]['proxy_ip'] = ''; }
		if (isset($parameter[6])) { $account[$i]['proxy_port'] = $parameter[6]; } else { $account[$i]['proxy_port'] = '-1'; $account[$i]['proxy_ip'] = ''; }
		if (isset($parameter[4])) { $account[$i]['rest_api_password'] = $parameter[4]; } else { $account[$i]['rest_api_password'] = 'mydefaultpassword'; }
		//if (!empty($parameter[4]) && isset($parameter[4])) { $account[$i]['acc_type'] = $parameter[4]; }
		
		$i++;
	}
	return $account;
}

?>
