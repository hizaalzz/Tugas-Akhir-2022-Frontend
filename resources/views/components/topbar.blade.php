<div class="navbar-header">
    <div class="container-fluid">
        <div class="float-right">
            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('/images/user.svg') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1">Admin</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle mr-1"></i>
                        Profil Saya</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href=""><i
                            class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>


        </div>
        <div>
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('/images/cbt_logo_only.svg') }}" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/images/cbt_logo.svg') }}" alt="" height="40">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('/images/ujian.png') }}" width="70px" height="60px" alt="" >
                    </span>
                    {{-- <span class="logo-lg">
                        <img src="{{ asset('/images/ujian.png') }}" width="70px" height="60px" alt="" >
                    </span> --}}
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

    </div>
</div>
