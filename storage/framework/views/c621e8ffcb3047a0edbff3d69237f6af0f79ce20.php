

<?php $__env->startSection('title', 'Porfolio'); ?>


<?php $__env->startSection('content'); ?>
	<h1>Porfolio</h1>

	<ul>

		<?php $__empty_1 = true; $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<li><?php echo e($project->title); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<li>No hay proyectos para mostrar</li>
		<?php endif; ?>
		<?php echo e($project->links()); ?>

	</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/Porfolio.blade.php ENDPATH**/ ?>