<!DOCTYPE HTML>
<!--
 <em>和<strong>标签是为了强调一段话中的关键字时使用，它们的语义是强调。
 <span>标签是没有语义的，它的作用就是为了设置单独的样式用的。
如果现在我们想把上一段诗中的朝代和作者设置成red（red红色），
但注意不是为了强调这个，而只是想为它设置和其它文字不同的样式
（并不想让屏幕阅读器对朝代和加重音读出），所以这样情况下就可以用到<span>标签了。 
 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
span {
	color: red;
}
</style>
<body>
	<h1>水调歌头·丙辰中秋</h1>
	<pre>
<span>朝代：宋代
作者：苏轼</span>
<strong>丙辰中秋，欢饮达旦，大醉，作此篇，兼怀子由。</strong>

明月几时有，把酒问青天。不知天上宫阙，今夕是何年。我欲乘风归去，又恐琼楼玉宇，高处不胜寒。起舞弄清影，何似在人间？
<em>转朱阁，低绮户，照无眠。不应有恨，何事长向别时圆？人有悲欢离合，月有阴晴圆缺，此事古难全。但愿人长久，千里共婵娟。</em>
<pre>
    

</body>
</html>