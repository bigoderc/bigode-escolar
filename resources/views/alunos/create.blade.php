@extends('layouts.app', ['activePage' => 'aluno-management', 'titlePage' => __('
Aqui você pode gerenciar Aluno')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('Aluno.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adicionar Alunos') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('Aluno.index') }}" class="btn btn-sm btn-primary">{{ __('Voltar a Lista') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nome" id="input-name" type="text" placeholder="{{ __('Nome') }}" value="{{ old('nome') }}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Matricula') }}</label>
                  <div class="col-sm-5">
                    <div class="form-group{{ $errors->has('Matricula') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nmatricula') ? ' is-invalid' : '' }}" name="nmatricula" id="input-name" type="number" placeholder="{{ __('Matricula') }}" value="{{ old('nmatricula') }}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('statuss') ? ' has-danger' : '' }}">
                      <select class="form-control{{ $errors->has('statuss') ? ' is-invalid' : '' }}" name="statuss"  value="{{ old('statuss') }}" required="true" aria-required="true">
                        <option value=""></option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                
                
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Adicionar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection