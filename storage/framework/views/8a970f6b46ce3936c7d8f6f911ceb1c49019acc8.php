

<?php $__env->startSection('title', 'Contac'); ?>


<?php $__env->startSection('content'); ?>
	<h1><?php echo e(__('Contac')); ?></h1>
	<form method="POST" action="<?php echo e(route('messages.store')); ?>">
		<?php echo csrf_field(); ?>
		<input name="name" placeholder="Nombre value" value="<?php echo e(old('name')); ?>"><br>
		<?php echo $errors->first('name', '<small>:message</small><br>'); ?>


		<input type="email" name="email" placeholder="Email..." value="<?php echo e(old('email')); ?>"><br>
		<?php echo $errors->first('email', '<small>:message</small><br>'); ?>

		
		<input name="subject" placeholder="Asunto..." value="<?php echo e(old('subject')); ?>"><br>
		<?php echo $errors->first('subject', '<small>:message</small><br>'); ?>

		<textarea name="content" placeholder="Mensaje..."><?php echo e(old('content')); ?></textarea><br>
		<?php echo $errors->first('content', '<small>:message</small><br>'); ?>

		<button><?php echo app('translator')->get('Send'); ?></button>	
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel\resources\views/contac.blade.php ENDPATH**/ ?>