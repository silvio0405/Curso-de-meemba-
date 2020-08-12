<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title', 'Aprendible'); ?></title>
	<style> 
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php echo $__env->make('partials/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\laravel\resources\views/layout.blade.php ENDPATH**/ ?>