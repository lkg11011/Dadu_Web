<?php
	//-------管理者登出後資料會傳到此處處理
	session_start();
	require_once("function.php");
	$member = new member();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF8">
</head>

<body>
		<?php
		$member->logout();
		?>
</body>

</html>