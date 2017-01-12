<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>PHP中文网(php.cn)</title>
</head>

<style type="text/css">
.error {
	color: red;
	font-weight: bold;
}
</style>
<body>
 
 <?php
// 定义变量并默认设置为空值
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "*名字不能为空";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "*邮箱不能为空";
    } else {
        $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST['website'])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }
    
    if (empty($_POST['comment'])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    
    if (empty($_POST["gender"])) {
        $genderErr = "*性别不能为空";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
 
 <h2>PHP 表单验证实例</h2>
	<form method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		名字: <input type="text" name="name"> <span class="error"> <?php echo $nameErr?></span>
		<br> <br> 
		E-mail: <input type="text" name="email"> <span class="error"> <?php echo $emailErr?></span>
		<br> <br> 
		网址: <input type="text" name="website"> 
		<br> <br> 
		备注: <textarea name="comment" rows="5" cols="40"></textarea>
		<br> <br> 
		性别: <input type="radio" name="gender" value="female"
			checked="checked">女 <input type="radio" name="gender" value="male">男
			<span class="error"> <?php echo $genderErr?></span> 
		<br> <br> 
		<input type="submit" name="submit" value="提交">
	</form>
 
 <?php
echo "<h2>您输入的内容是:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
 
 </body>