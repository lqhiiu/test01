<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户注册</title>
</head>
<body>
	<font size="5" color="red">欢迎注册php.cn</font>
	<form name="user" method="get" action="index.php">
		用户名：<input type="text" name="username" value="hello"/> 
		<br /> 
		密码：<input type="password" name="userpwd" value="12345678" /> 
		<br>
		性别：<input type="radio" name="sex" value="男" checked = "checked">男
			<input type="radio" name="sex" value="女">女
			<br>
		爱好：<input type="checkbox" name="hobby" value="运动">运动
			<input type="checkbox" name="hobby" value="看电影">看电影
			<input type="checkbox" name="hobby" value="宅着">宅着
			<input type="checkbox" name="hobby" value="编程">编程
		
		<br /> 
		<input type="submit" value="提交信息" />
	</form>
</body>
</html>