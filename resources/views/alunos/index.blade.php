@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Gerenciamento de Alunos')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Alunos') }}</h4>
                <p class="card-category"> {{ __('
Aqui você pode gerenciar os Alunos') }}</p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('Aluno.create') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Alunos') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     
                      <th>
                          {{ __('Nome') }}
                      </th>
                      <th>
                        {{ __('Matricula') }}
                      </th>
                      <th>
                        {{ __('Status') }}
                      </th>
                      <th class="text-right">
                        {{ __('Ações') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($alunos as $aluno)
                        <tr>
                          
                          <td>
                            {{ $aluno->NOME}}
                          </td>
                          <td>
                            {{ $aluno->NMATRICULA }}
                          </td>
                          <td>
                            @if($aluno->STATUSS==0){{{'Inativo'}}}@else{{{'Ativo'}}}@endif
                          </td>
                          <td class="td-actions text-right">
                           
                              <form action="{{ route('Aluno.destroy', $aluno->CDALUNO) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                   <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('Aluno.edit', $aluno->CDALUNO) }}" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Deseja excluir o Aluno(a) $aluno->NOME?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection