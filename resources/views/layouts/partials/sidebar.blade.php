<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset('theme/images/icon/logo_escuela.png') !!}" alt="Logo" style="width: 50px;" /> <span>Colegio</span>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                @can('dashboard')
                <li  @if($currentPage == 'dashboard') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('dashboard') }}">
                        <i class="fa fa-briefcase"></i>Dashboard</a>
                </li>
                @endcan
                @can('users.index')
                <li @if($currentPage == 'users') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('users.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Users</a>
                </li>
                
                <li @if($currentPage == 'teachers') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('teachers.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Teachers</a>
                </li>

                <li @if($currentPage == 'teachers') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('teachers.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Materias</a>
                </li>

                <li @if($currentPage == 'teachers') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('teachers.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Estudiantes</a>
                </li>
                @endcan  git merge
La herramienta git merge se utiliza para fusionar uno o más ramas dentro de la rama que tienes activa. A continuación avanzará la rama actual al resultado de la fusión.

El comando git merge fue introducido por primera en Procedimientos Básicos de Ramificación. A pesar de que se utiliza en diversos lugares en el libro, hay muy pocas variaciones del comando merge — en general, sólo git merge <branch> con el nombre de la rama individual que se desea combinar.

Cubrimos cómo hacer una fusión aplastada (squashed merge) (donde Git fusiona el trabajo, pero finge como si fuera simplemente un nuevo commit sin registrar la historia de la rama que se está fusionando) al final de Proyecto público bifurcado.

Repasamos mucho sobre el proceso de fusión y dirección, incluyendo el comando -Xignore-all-whitespace y el indicador --abort para abortar un problema de fusión en Fusión Avanzada.
                
                
                
            </ul>
        </nav>
    </div>
</aside>