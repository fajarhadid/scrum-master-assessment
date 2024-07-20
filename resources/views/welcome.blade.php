<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrum Master Assessment</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('welcome-template/dist/assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('welcome-template/dist/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="/">Scrum Master Assessment</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @if (Route::has('login'))
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                            @auth
                                <li class="nav-item"><a href="{{ url('/penilaian') }}" wire:navigate class="nav-link">Penilaian</a></li>
                                <li class="nav-item"><a href="{{ url('/penilaian/hasil') }}" wire:navigate class="nav-link">Hasil Penilaian</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{route('login')}}" wire:navigate>Login</a></li>
                                @if (Route::has('register'))
                                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}" wire:navigate>Register</a></li>    
                                @endif
                            @endauth
                        </ul>
                    </div>                   
                @endif
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-2">Scrum Master Assessment</h1>
                    <h3 class="mb-0">Assessmen Kompetensi Scrum Master Dalam Penerapan Scrum Di Lingkungan Pengembangan Global</h3>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="{{route('penilaian')}}" wire:navigate>Lakukan Penilaian</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('welcome-template/dist/assets/img/scrum.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Global Software Development</h2>
                            <p>Paradigma pendekatan formal untuk pengembangan perangkat lunak terdistribusi. GSD memiliki tantangan pada pengaturan komunikasi, koordinasi, dan control yang muncul karena adanya distance berupa geografis, temporal, dan sosio-kultural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('welcome-template/dist/assets/img/gsd.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Scrum</h2>
                            <p>Scrum merupakan metodologi agile paling populer dan diterapkan secara luas. Faktor penting yang menunjang kesuksesan praktik Scrum di GSD adalah SDM yang mampu menjalankan metode dan menguasai tools untuk berkolaborasi dan berinteraksi secara efektif dengan berbagai perbedaan geografis, temporal, dan sosio-kultural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('welcome-template/dist/assets/img/scrum-master.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Scrum Master</h2>
                            <p>Scrum Master adalah seorang profesional yang bertanggung jawab untuk memfasilitasi dan mengelola penerapan metodologi Scrum di tim pengembangan yang tersebar secara geografis. Peran ini mencakup berbagai tanggung jawab untuk memastikan bahwa proses pengembangan perangkat lunak berjalan lancar, meskipun anggota tim berada di lokasi yang berbeda di seluruh dunia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Fajar Hadid Arizal - Politeknik Negeri Jakarta 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('welcome-template/dist/js/scripts.js') }}"></script>
    </body>
</html>
