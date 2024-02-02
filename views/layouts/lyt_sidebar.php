<?php

use yii\bootstrap5\Html;

?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Prácticas y servicio social</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <?= Html::a(
            '<i class="fas fa-fw fa-tachometer-alt"></i><span>Panel de Control</span>',
            [
                '/site/index'
            ],
            ['class' => 'nav-link']
        ) ?>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Módulos
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Escolares</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Operaciones:</h6>
                
                    <?= Html::a(
                        'Generación',
                        ['/se-cicloescolar/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Jardín',
                        ['/se-jardin/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Estudiante',
                        ['/se-estudiante/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Docentes',
                        ['/se-docente/index'],
                        ['class' => 'collapse-item']
                    ) ?>
               
                
            </div>
        </div>
    </li>

    <!--?php if (Yii::$app->user->identity->hasRole('Tutoria')) { ?-->
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseObservacion" aria-expanded="true" aria-controls="collapseCursos">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Observaciones</span>
        </a>

        <div id="collapseObservacion" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Listado:</h6>
                
                    <?= Html::a(
                        'Generaciones',
                        ['/se-asesor/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Asesores',
                        ['/se-asesor/asesores'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Prestadores',
                        ['/se-prestador/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                

            </div>
        </div>

    </li>
    <!--?php } ?-->

    <!--?php if (Yii::$app->user->identity->hasRole('Tutoria')) { ?-->
        <!-- Nav Item - Utilities Collapse Menu -->
        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePracticas" aria-expanded="true" aria-controls="collapseCursos">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Practicas intensivas</span>
        </a>

        <div id="collapsePracticas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Listado:</h6>
                
                    <?= Html::a(
                        'Tutores',
                        ['/se-tutor/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Tutorados',
                        ['/se-tutorado/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Planeación',
                        ['/tuplaneacion/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                

            </div>
        </div>

    </li> -->
    <!--?php } ?-->

    <!--?php if (Yii::$app->user->identity->hasRole('Tutoria')) { ?-->
        <!-- Nav Item - Utilities Collapse Menu -->
        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServicio" aria-expanded="true" aria-controls="collapseCursos">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Servicio social</span>
        </a>

        <div id="collapseServicio" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Listado:</h6>
                
                    <?= Html::a(
                        'Tutores',
                        ['/se-tutor/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Tutorados',
                        ['/se-tutorado/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Planeación',
                        ['/tuplaneacion/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                

            </div>
        </div>

    </li> -->
    <!--?php } ?-->

    <!-- Nav Item - Noticias Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNota" aria-expanded="true" aria-controls="collapseNota">
        <i class="fa fa-comments"></i>
            <span>Catalogos</span>
        </a>

        <div id="collapseNota" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                
                    <?= Html::a(
                        'Estatu',
                        ['/se-estatu/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Movimiento',
                        ['/tumovimiento/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                     <?= Html::a(
                        'Carrera',
                        ['/se-carrera/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                     <?= Html::a(
                        'Departamento',
                        ['/se-departamento/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Area de apoyo',
                        ['/se-areaapoyo/index'],
                        ['class' => 'collapse-item']
                    ) ?>
          

            </div>
        </div>

        </li>


         <!-- Nav Item - Noticias Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTutores" aria-expanded="true" aria-controls="collapseTutores">
        <i class="fa fa-comments"></i>
            <span>Asesores</span>
        </a>

        <div id="collapseTutores" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                
                    <?= Html::a(
                        'Tutorados',
                        ['/se-tutor/ciclo'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Planeación',
                        ['/se-planeacion/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                     <?= Html::a(
                        'Bitacora',
                        ['/tubitacora/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                     <?= Html::a(
                        'Reportes',
                        ['/tureportes/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                

            </div>
        </div>

        </li>

           <!-- Nav Item - Noticias Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTutorado" aria-expanded="true" aria-controls="collapseTutorado">
        <i class="fa fa-comments"></i>
            <span>Prestadores</span>
        </a>

        <div id="collapseTutorado" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Acciones:</h6>
                
                    <?= Html::a(
                        'Cuestionario',
                        ['/tucuestionario/bienvenida'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Bitacora',
                        ['/tubitacora/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Carnet',
                        ['/tucarnet/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                     <?= Html::a(
                        'Evidencias',
                        ['/tuevidencia/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                     
                

            </div>
        </div>

        </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilerias</span>
        </a>

        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Configuración:</h6>
                
                    <?= Html::a(
                        'Usuarios',
                        ['/user-management/user/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Permisos de Usuarios',
                        ['/user-management/permission/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    <?= Html::a(
                        'Roles  de Usuarios',
                        ['/user-management/role/index'],
                        ['class' => 'collapse-item']
                    ) ?>
                    
               

            </div>
        </div>

    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?= Yii::getAlias('@web') ?>/img/sun.svg" alt="...">
        <p class="text-center mb-2" style="color:white"><strong>Hoy es un gran día </strong> para ser feliz y mejorar</p>
        <!-- <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a> -->
    </div>

</ul>
<!-- End of Sidebar -->