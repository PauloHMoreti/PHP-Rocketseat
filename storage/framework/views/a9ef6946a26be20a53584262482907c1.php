<div>
    <p>Pesquisa</p>
    <input wire:model.live="search" />

    <br>

    <ul>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($user -> name); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
</div><?php /**PATH C:\Users\Admin\Desktop\Projetos\PHP - RocketSeat\freelance-hours\freelance-hours\resources\views/livewire/teste.blade.php ENDPATH**/ ?>