<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="<?php echo e(route('Aluno.store')); ?>" autocomplete="off" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('Adicionar Alunos')); ?></h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="<?php echo e(route('Aluno.index')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Voltar a Lista')); ?></a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Nome')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="nome" id="input-name" type="text" placeholder="<?php echo e(__('Nome')); ?>" value="<?php echo e(old('nome')); ?>" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Matricula')); ?></label>
                  <div class="col-sm-5">
                    <div class="form-group<?php echo e($errors->has('Matricula') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('nmatricula') ? ' is-invalid' : ''); ?>" name="nmatricula" id="input-name" type="number" placeholder="<?php echo e(__('Matricula')); ?>" value="<?php echo e(old('nmatricula')); ?>" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Status')); ?></label>
                  <div class="col-sm-2">
                    <div class="form-group<?php echo e($errors->has('statuss') ? ' has-danger' : ''); ?>">
                      <select class="form-control<?php echo e($errors->has('statuss') ? ' is-invalid' : ''); ?>" name="statuss"  value="<?php echo e(old('statuss')); ?>" required="true" aria-required="true">
                        <option value=""></option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                
                
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Adicionar')); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'aluno-management', 'titlePage' => __('
Aqui você pode gerenciar Aluno')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/escola.final/resources/views/alunos/create.blade.php ENDPATH**/ ?>