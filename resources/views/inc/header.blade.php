<!-- Header Awal -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="../resources/js/jquery-3.4.1.min.js"></script>
        <script src="../resources/js/bootstrap.min.js"></script>
        <script src="../resources/js/validation.js"></script>
        <link rel="stylesheet" href="../resources/css/style.css">
        <title>@yield('title')</title>
    </head>

    <body>
        
            <nav class="navbar navbar-dark bg-primary">
                <a class="navbar-brand" href="index">Portal Siswa</a>
                <form class="form-inline" action="cari_siswa" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari nama siswa" aria-label="Search" name="cari" value="{{ old('cari') }}">
                    <button class="btn btn-light my-2 my-sm-0" type="submit" value="cari">Cari</button>
                </form>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="input">Tambah Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data">Data Siswa</a>
                    </li>
                </ul>
            </nav>
        
       
        @yield('content')
    </body>

</html>