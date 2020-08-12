<!DOCTYPE html>
<html>
<head>
	<title>Mensaje reciido</title>
</head>
<body>
	<p>Recibiste un mesaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
	<p><strong>Asunto:</strong> {{$msg['subject'] }}</p>
	<p><strong>Contenido:</strong> {{$msg['content'] }}</p>
</body>
</html>
