<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav>
        <div class="l">
            log
        </div>
    </nav>

    <!-- main menu -->
    <main >

        <!-- Side bar -->
        <div class="sidebar" >
            <div >
            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="d-inline-block rounded-circle" style="width: 50px;"
                    alt="Avatar" />
                <h5>Bienvenu,</h5>
                <h4>Test</h4>
            </div>

            <div class="m-1 mt-4 mb-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><span class="menu">Menu</span></a>
                    </li>
                </ul>
            </div>
            <div class="ml-1">
                <a href="" >
                     <span class="eicon-utilis"></span>
                    <hh64>table de bord</h6>
                </a>
                <a href="">
                    <span class="eicon-setting"></span>
                    <h6>Gestion générale</h6>
                </a>
                <a href="">
                    <span class="eicon-users"></span>
                    <h6>Clients</h6>
                </a>
                <a href="" class="activated">
                    <span class="eicon-fich"></span>
                    <h6>Mandats</h6>
                </a>
                <a href="" class="d-flex justify-conte">
                    <span class="eicon-fich-edit"></span>
                    <h6>Bordereaux vendeurs</h6>
                </a>
                <a href="">
                    <span class="eicon-fich-edit"></span>
                    <h6>Bordereaux acheteurs</h6>
                </a>
                <a href="">
                    <span class="eicon-fich-edit"></span>
                    <h6>Catalogues de vente</h6>
                </a>
                <a href="">
                    <span class="eicon-fich-edit"></span>
                    <h6>Livre de police</h6>
                </a>
            </div>
        </div>

        <!-- Content -->
        <div style="margin-left: 0 !important;"> 
             @yield('content')
    
        </div>

    </main>


</body>
</html>