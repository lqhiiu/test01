<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户注册</title>
</head>
<body>
	<?php
$errMsg = "";
$HardErr = $PlmnErr = $APNErr = "";
$HardCode = $Plmn = $APN = $USR = $PWD = $DNS = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_REQUEST['hardcode'])) {
        $HardErr = "硬码不能为空";
        $errMsg = "Error";
    } else {
        $HardCode = $_REQUEST['hardcode'];
    }
    
    if (empty($_REQUEST['plmn'])) {
        $PlmnErr = "plmn不能为空";
        $errMsg = "Error";
    } else {
        $Plmn = $_REQUEST['plmn'];
    }
    
    if (empty($_REQUEST['apn'])) {
        $APNErr = "Apn不能为空";
        $errMsg = "Error";
    } else {
        $APN = $_REQUEST['apn'];
    }
    
    if (! empty($_REQUEST['puser']))
        $USR = $_REQUEST['puser'];
    if (! empty($_REQUEST["passwd"]))
        $PWD = $_REQUEST["passwd"];
    if (! empty($_REQUEST["dns"]))
        $DNS = $_REQUEST["dns"];
}

function show_result_string()
{
    global $errMsg, $Plmn, $HardCode, $APN, $USR, $PWD, $DNS;
    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (! empty($errMsg))
            return $result;
            // kidswatch#2F100014#0#100#46000,cmnet,,,#
        $result = 'kidswatch#';
        $result = $result . $HardCode . "#0#100#" . $Plmn . "," . $APN . "," . $USR . "," . $PWD . "," . $DNS . "#";
    }
    return $result;
}

?>
	<font size="5" color="red">欢迎使用APN配置平台</font>
	<form name="apnsetting" method="post" action="">
		HardCode：<input type="text" name="hardcode" value="e0000389" /><?php echo $HardErr?> 
		<br /> PLMN：<input type="text" name="plmn" value="46001" /> <?php echo $PlmnErr?>
		<br /> APN：<input type="text" name="apn" value="cmnet" /> <?php echo $APNErr?>
		<br> User：<input type="text" name="puser" value="" /> <br> Password：<input
			type="text" name="passwd" value="" /> <br> Dns：<input type="text"
			name="dns" value="" /> <br> <br> <input type="submit" value="提交" /> <br>
	</form>
	
	<?php
echo '你输入的内容是：';
echo '<br>';
echo show_result_string();
?>
</body>
</html>