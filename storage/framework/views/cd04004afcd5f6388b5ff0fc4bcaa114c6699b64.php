

<?php $__env->startSection('title', 'porfolio | '. $project->title); ?>

<?php $__env->startSection('content'); ?>
	<h1><?php echo e($project->title); ?></h1>
	<a href="<?php echo e(route('projects.edit', $project)); ?>">Editar</a>
	<p><?php echo e($project->description); ?></p>
	<p><?php echo e($project->created_at->diffForHumans()); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/projects/show.blade.php ENDPATH**/ ?>