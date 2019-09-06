<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
       
       <span class="sidebar-normal"> <?php echo e(__('G-Escolar')); ?> </span>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
          <i class="material-icons">dashboard</i>
            <p><?php echo e(__('Home')); ?></p>
        </a>
      </li>
      <li class="nav-item <?php echo e(($activePage == 'profile' || $activePage == 'user-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i></i>
          <p><?php echo e(__('Cadastros')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.create')); ?>">
                <span class="sidebar-normal"><?php echo e(__('Usuario')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('Aluno.create')); ?>" >
                <span class="sidebar-normal"><?php echo e(__('Aluno')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" > 
                <span class="sidebar-normal"> <?php echo e(__('Professor')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" > 
                <span class="sidebar-normal"> <?php echo e(__('Disciplina')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" > 
                <span class="sidebar-normal"> <?php echo e(__('Curso')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" > 
                <span class="sidebar-normal"> <?php echo e(__('Semestre')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>"> 
                <span class="sidebar-normal"> <?php echo e(__('Turma')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li> 
         <li class="nav-item <?php echo e(($activePage == 'profile' || $activePage == 'user-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i></i>
          <p><?php echo e(__('Exibir')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
             <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                <span class="sidebar-normal"><?php echo e(__('Usuario')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('Aluno.index')); ?>">
                <span class="sidebar-normal"><?php echo e(__('Aluno')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>"> 
                <span class="sidebar-normal"> <?php echo e(__('Professor')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>"> 
                <span class="sidebar-normal"> <?php echo e(__('Disciplina')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>"> 
                <span class="sidebar-normal"> <?php echo e(__('Curso')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>"> 
                <span class="sidebar-normal"> <?php echo e(__('Semestre')); ?> </span>
              </a>
            </li>
             <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>"> 
                <span class="sidebar-normal"> <?php echo e(__('Turma')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>    
    </ul>
  </div>
</div><?php /**PATH /var/www/escola.final/resources/views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>