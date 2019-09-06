<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="<?php echo e(route('Aluno.update', $aluno)); ?>" autocomplete="off" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('Editar Usuarios')); ?></h4>
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
                      <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="nome" id="input-name" type="text" placeholder="<?php echo e(__('Nome')); ?>" value="<?php echo e(old('NOME', $aluno->NOME)); ?>" required="true" aria-required="true"/>
                      <?php if($errors->has('name')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('name')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Matricula')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="nmatricula" id="input-name" type="number" placeholder="<?php echo e(__('Matricula')); ?>" value="<?php echo e(old('nmatricula', $aluno->NMATRICULA)); ?>" required="true" aria-required="true"/>
                      <?php if($errors->has('name')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('name')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Status')); ?></label>
                  <div class="col-sm-2">
                    <div class="form-group<?php echo e($errors->has('statuss') ? ' has-danger' : ''); ?>">
                      <select class="form-control<?php echo e($errors->has('statuss') ? ' is-invalid' : ''); ?>" name="statuss"    required="true" aria-required="true">
                        <option value="<?php echo e(old('STATUSS', $aluno->STATUSS)); ?>"><?php if($aluno->STATUSS==0): ?><?php echo e('Inativo'); ?><?php else: ?><?php echo e('Ativo'); ?><?php endif; ?></option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                      </select>
                    </div>
                  </div>
                </div>
               
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Salvar')); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('
Aqui você pode gerenciar usuários')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/escola.final/resources/views/alunos/edit.blade.php ENDPATH**/ ?>