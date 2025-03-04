<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>楊靖惠的簡介</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:pink; font-size:60px;}
		h2 {color:#FFEE99; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Jing-Hui Yang";
		}
	</script>


</head>

<body>
	<table width="70%">

		<tr>
			<td><img src="cliff.jpg"width="110%"id="pic" onmouseover="change1()" onmouseout="change2()"></img></td>

			<td>
				<h1>楊靖惠</h1>
				<h2 id="h2text">Jing-Hui Yang</h2>
			</td>
		</tr>

	</table>
	<table width="70%" border="1">
		<tr>
			<td>
				個人網頁：<a href="file:///C:/Users/student/Desktop/411203364.html">file:///C:/Users/student/Desktop/411203364.html</a><br>
				IG：<a href="https://www.instagram.com/yjh_516/"target="_blank">https://www.instagram.com/yjh_516/</a><br>
				Tel: <a href="tel:0906589503">0906589503</a><br>
				E-Mail: <a href="mailto:jing050916@gmail.com"> jing050916@gmail.com</a><br>
			</td>

			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
				<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>

			<td>
				不要去臺灣<br>
				<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
			</td>
		</tr>
		</table>
		<table width="70%" border="1">
			<tr>
				<td>
					聊天機器人<br>
					<iframe
    				allow="microphone;"
    				width="350"
   					height="430"
    				src="https://console.dialogflow.com/api-client/demo/embedded/323b3ad9-a66f-4639-842b-6b65c8c68f68">
</iframe>
				</td>
			</tr>
		</table>	
	<?php echo date("Y-m-d")?>
</body>
</html>