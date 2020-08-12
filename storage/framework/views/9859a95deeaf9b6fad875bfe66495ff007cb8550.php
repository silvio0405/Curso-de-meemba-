<nav>
		<ul>
			<li class="<?php echo e(setActive('home')); ?>"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
			<li class="<?php echo e(setActive('about')); ?>"><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('About'); ?></a></li>
			<li class="<?php echo e(setActive('contac')); ?>"><a href="<?php echo e(route('contac')); ?>"><?php echo app('translator')->get('Contac'); ?></a></li>
			<li class="<?php echo e(setActive('projects.index')); ?>"><a href="<?php echo e(route('projects.index')); ?>"><?php echo app('translator')->get('Projects'); ?></a></li>
		</ul>
	</nav><?php /**PATH C:\laragon\www\laravel\resources\views/partials/nav.blade.php ENDPATH**/ ?>