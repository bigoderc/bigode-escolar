<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
       
       <span class="sidebar-normal"> {{ __('G-Escolar') }} </span>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i></i>
          <p>{{ __('Cadastros') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.create') }}">
                <span class="sidebar-normal">{{ __('Usuario') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('Aluno.create') }}" >
                <span class="sidebar-normal">{{ __('Aluno') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" > 
                <span class="sidebar-normal"> {{ __('Professor') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" > 
                <span class="sidebar-normal"> {{ __('Disciplina') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" > 
                <span class="sidebar-normal"> {{ __('Curso') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" > 
                <span class="sidebar-normal"> {{ __('Semestre') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> 
                <span class="sidebar-normal"> {{ __('Turma') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> 
         <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i></i>
          <p>{{ __('Exibir') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
             <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-normal">{{ __('Usuario') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('Aluno.index') }}">
                <span class="sidebar-normal">{{ __('Aluno') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> 
                <span class="sidebar-normal"> {{ __('Professor') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> 
                <span class="sidebar-normal"> {{ __('Disciplina') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> 
                <span class="sidebar-normal"> {{ __('Curso') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> 
                <span class="sidebar-normal"> {{ __('Semestre') }} </span>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}"> 
                <span class="sidebar-normal"> {{ __('Turma') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>    
    </ul>
  </div>
</div>