

<?php $__env->startSection('title', 'Crear Proyecto'); ?>


<?php $__env->startSection('content'); ?>
	<h1>Crear nuevo Proyecto</h1>

	<?php if($errors->any()): ?>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>

	<?php endif; ?>



	<form method="POST" action="<?php echo e(route('projects.store')); ?>">
		<?php echo csrf_field(); ?>
		<label>
			Titulo del Proyecto<br>
			<input type="text" name="title">
		</label>
		<br>
		<label>
			URl del Proyecto<br>
			<input type="text" name="url">
		</label>
		<br>
		<label>
			Descripción del Proyecto<br>
			<textarea name="description"></textarea>
		</label>
		<br>
		<button>Guardar</button>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/projects/create.blade.php ENDPATH**/ ?>