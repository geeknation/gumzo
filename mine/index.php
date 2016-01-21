<html>
	<head>
		<title>Web sockets app</title>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

		<script src="jQwebsocket.js"></script>
		<script>

		if ("WebSocket" in window){
               var wa=new WebSocket("ws://localhost:9998/phpChatApplication/mine/server.php")
		}
		
		</script>
	</head>
	<body>
		

	</body>
</html>