<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title "><?php echo e(__('Alunos')); ?></h4>
                <p class="card-category"> <?php echo e(__('
Aqui você pode gerenciar os Alunos')); ?></p>
              </div>
              <div class="card-body">
                <?php if(session('status')): ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span><?php echo e(session('status')); ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="<?php echo e(route('Aluno.create')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Adicionar Alunos')); ?></a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     
                      <th>
                          <?php echo e(__('Nome')); ?>

                      </th>
                      <th>
                        <?php echo e(__('Matricula')); ?>

                      </th>
                      <th>
                        <?php echo e(__('Status')); ?>

                      </th>
                      <th class="text-right">
                        <?php echo e(__('Ações')); ?>

                      </th>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          
                          <td>
                            <?php echo e($aluno->NOME); ?>

                          </td>
                          <td>
                            <?php echo e($aluno->NMATRICULA); ?>

                          </td>
                          <td>
                            <?php if($aluno->STATUSS==0): ?><?php echo e('Inativo'); ?><?php else: ?><?php echo e('Ativo'); ?><?php endif; ?>
                          </td>
                          <td class="td-actions text-right">
                           
                              <form action="<?php echo e(route('Aluno.destroy', $aluno->CDALUNO)); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                              
                                   <a rel="tooltip" class="btn btn-success btn-link" href="<?php echo e(route('Aluno.edit', $aluno->CDALUNO)); ?>" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('<?php echo e(__("Deseja excluir o Aluno(a) $aluno->NOME?")); ?>') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Gerenciamento de Alunos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/escola.final/resources/views/alunos/index.blade.php ENDPATH**/ ?>