<div class="wrapper ">
  <?php echo $__env->make('layouts.navbars.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="main-panel">
    <?php echo $__env->make('layouts.navbars.navs.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div><?php /**PATH /var/www/escola.final/resources/views/layouts/page_templates/auth.blade.php ENDPATH**/ ?>