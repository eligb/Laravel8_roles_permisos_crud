<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Inicio</span>
    </a>
   
    <a class="menu-header">PANEL DE ADMINISTRACIÓN</a>
    <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>ADMIN</span></a>
              <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span></a></li>
                <li><a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span></a></li>
              </ul>
            </li>

    <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-handshake"></i> <span>RRHH</span></a> 
              <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="/empleados">
        <i class=" far fa-address-card"></i><span>Empleados</span></a></li>
                <li><a class="nav-link" href="/asignasuper">
        <i class=" fas fa-user-circle"></i><span>Asignar Super</span></a></li>
                <li><a class="nav-link" href="/constancias">
        <i class=" far fa-file"></i><span>Constancias</span></a></li>
                <li><a class="nav-link" href="/permisos">
        <i class=" far fa-comment"></i><span>Permisos</span></a></li>
                <li><a class="nav-link" href="/asistencias">
        <i class=" far fa-calendar"></i><span>Asistencias</span></a></li>
              </ul>
            </li>  
    
    <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-eye"></i> <span>SUPERVISORES</span></a>
              <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="/empleados">
        <i class=" far fa-address-card"></i><span>Empleados</span></a></li>
                <li><a class="nav-link" href="/constancias">
        <i class=" far fa-file"></i><span>Constancias</span></a></li>
                <li><a class="nav-link" href="/permisos">
        <i class=" far fa-comment"></i><span>Permisos</span></a></li>
                <li><a class="nav-link" href="/asistencias">
        <i class=" far fa-calendar"></i><span>Asistencias</span></a></li>
              </ul>
            </li>  

    <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-calculator"></i> <span>NÓMINA</span></a>
              <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="/empleados">
        <i class=" far fa-address-card"></i><span>Empleados</span></a></li>
                <li><a class="nav-link" href="/nomina">
        <i class=" far fa-credit-card"></i><span>Generar Nómina</span></a></li>
                <li><a class="nav-link" href="/reportes">
        <i class=" fas fa-file-alt"></i><span>Reportes</span></a></li>
                <li><a class="nav-link" href="/asistencias">
        <i class=" far fa-calendar"></i><span>Asistencias</span></a></li>
              </ul>
            </li>  

</li>
