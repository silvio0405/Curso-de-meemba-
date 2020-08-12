<!DOCTYPE html>
<html>
<head>
	<title>Mensaje reciido</title>
</head>
<body>
	<p>Recibiste un mesaje de: <?php echo e($msg['name']); ?> - <?php echo e($msg['email']); ?></p>
	<p><strong>Asunto:</strong> <?php echo e($msg['subject']); ?></p>
	<p><strong>Contenido:</strong> <?php echo e($msg['content']); ?></p>
</body>
</html>
<?php /**PATH C:\laragon\www\laravel\resources\views/emails/message-received.blade.php ENDPATH**/ ?>