<?php
	function consoleLog($message) {
		echo '<script type="text/javascript">' .
          'console.log(' . $message . ');</script>';
	}

	consoleLog('Hello, greppers!');
?>