<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ config('app.name', 'ElBlogCMS') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <header>
        <!-- Intro settings -->
        <style>
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 58px;
            }

            @media (max-width: 991px) {
                #intro {
                    /* Margin to fix overlapping fixed navbar */
                    margin-top: 45px;
                }
            }

        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="/">
                    <img src="/img/logo.svg" height="50" alt="" loading="lazy" style="margin-top: -3px;" />
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        @foreach ($categories as $c)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.category',$c->slug) }}"
                                    rel="nofollow" target="_blank">{{ $c->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <ul class="navbar-nav d-flex flex-row">
                        <!-- Icons -->
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.facebook.com/thomas.winchestar" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://twitter.com/thomaswinches11" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="{{ route('login') }}" rel="nofollow" target="_blank">
                                <i class="fas fa-sign-in-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="{{ route('register') }}" rel="nofollow" target="_blank">
                                <i class="fas fa-user-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light">
            <h1 class="mb-3 h2">El Blog CMS</h1>
            <p class="mb-3">Sharing is caring!</p>
            <a class="btn btn-primary m-2" href="{{ route('login') }}" role="button"
                rel="nofollow" target="_blank">Login</a>
            <a class="btn btn-primary m-2" href="{{ route('register') }}" target="_blank"
                role="button">Register</a>
        </div>
        <!-- Jumbotron -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Latest posts</strong></h4>

                @yield('content')

            </section>
            <!--Section: Content-->

            <!-- Pagination -->
            <nav class="my-4" aria-label="...">
                <ul class="pagination pagination-circle justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
{{--        <div class="py-4 text-center">--}}
{{--            <a role="button" class="btn btn-primary btn-lg m-2"--}}
{{--                href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">--}}
{{--                Learn Bootstrap 5--}}
{{--            </a>--}}
{{--            <a role="button" class="btn btn-primary btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"--}}
{{--                target="_blank">--}}
{{--                Download MDB UI KIT--}}
{{--            </a>--}}
{{--        </div>--}}

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow me on social platform!</p>
            <a href="https://www.facebook.com/thomas.winchestar" class="btn btn-primary m-1" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/thomaswinches11" class="btn btn-primary m-1" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/thomaswinchestar" class="btn btn-primary m-1" role="button"
                rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022
            <a class="text-dark" href="https://devpph.netlify.app/">Devpph</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>
