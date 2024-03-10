<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Páginas</a></li>
                @if(Request::path() === '/')
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">Início</li>
                @else
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
                @endif
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">
                @if(Request::path() === '/')
                Início
                @else
                {{ str_replace('-', ' ', Request::path()) }}
                @endif
            </h6>
        </nav>
    </div>
    <div>
        <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->