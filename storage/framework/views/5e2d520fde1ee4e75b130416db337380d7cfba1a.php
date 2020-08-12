

<?php $__env->startSection('title', 'Porfolio'); ?>


<?php $__env->startSection('content'); ?>
	<h1><?php echo app('translator')->get('Porfolio'); ?></h1>

	<a href="<?php echo e(route('projects.create')); ?>">Crear Proyecto</a>
	<ul>

		<?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<li><a href="<?php echo e(route('projects.show', $project)); ?>"><?php echo e($project->title); ?></a></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<li>No hay proyectos para mostrar</li>
		<?php endif; ?>
		<?php echo e($projects->Links()); ?>

	</ul>;

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/projects/index.blade.php ENDPATH**/ ?>