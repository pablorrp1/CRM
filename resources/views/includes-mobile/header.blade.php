<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a href="/home" class="logo">
                    <img src={{ asset("images/icon/logo-min.png") }} alt="Birulapp" width="20%">
                    {{ config('app.name', 'CRM') }}
                </a>
                <button class="hamburger hamburger--spin" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    @include('includes-mobile.menu')
</header>