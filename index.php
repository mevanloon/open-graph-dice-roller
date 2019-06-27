<?php
// error_log(1);

$action = $_GET['action'] ?? false;
$dice = $_GET['dice'] ?? 21;
if(! $action) die('geen action');

$actionHash = md5($action);
$actionHexDec = hexdec(substr($actionHash, 0, 15));
$actionNumber = $actionHexDec % $dice;
?>
<!DOCTYPE html>
<html>
<head>
	<meta property="og:title" content="OG Dice Roller" />
	<meta property="og:description" content="<?=$actionNumber?> voor actie '<?=$action?>'" />
</head>
<body>
	<?= $actionHash ?>
	<?= $actionHexDec ?>
	<?=$actionNumber?> voor actie <?=$action?>
</body>
</html>
