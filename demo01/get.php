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
		
		所在城市：
		<select name="city">
		<option value="厦门">厦门</option>
		<option value="深圳">深圳</option>
		<option value="杭州">杭州</option>
		<option value="武汉">武汉</option>
		</select>
		
		<br>个人介绍
		<br>
		<textarea name="selfinfo" rows="12" cols=50>个人介绍</textarea>
		
		<br>
		确认无误？<input type="submit" value="提交信息" />
		<input type="reset" value="重填一次"/>
		<input type="button" onclick="javascript:window.close()" value="关闭窗口"/>
	</form>
</body>
</html>