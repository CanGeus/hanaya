<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link align-items-center">
            <img src="{{ asset('images/logo.png') }}" style="filter: invert();" alt="" srcset="">
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-capitalize text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        {{-- page --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <!-- Home -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link text-capitalize menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Home</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link text-capitalize">
                        <div data-i18n="solution">solution</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link text-capitalize menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="product">product</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link text-capitalize">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link text-capitalize">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link text-capitalize">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link text-capitalize menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Solution">Solution</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link text-capitalize">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link text-capitalize">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link text-capitalize">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- career --}}
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link text-capitalize">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Career">Career</div>
            </a>
        </li>
        {{-- About Us --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link text-capitalize menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="About Us">About Us</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link text-capitalize">
                        <div data-i18n="Visi">Visi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link text-capitalize">
                        <div data-i18n="misi">misi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link text-capitalize">
                        <div data-i18n="benefit">benefit</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- footer --}}
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link text-capitalize">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Footer">Footer</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="Components">Components</span>
        </li>
        <!-- Components -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link text-capitalize menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Components">Components</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link text-capitalize">
                        <div data-i18n="Clients">Clients</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link text-capitalize">
                        <div data-i18n="Hero">Hero</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link text-capitalize">
                        <div data-i18n="Jumbotron">Jumbotron</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link text-capitalize">
                        <div data-i18n="Product">Product</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link text-capitalize">
                        <div data-i18n="Story">Story</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-fluid.html" class="menu-link text-capitalize">
                        <div data-i18n="Review">Review</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link text-capitalize">
                        <div data-i18n="Price">Price</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Post</span>
        </li>
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link text-capitalize">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="blog">blog</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link text-capitalize">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="news">news</div>
            </a>
        </li>
    </ul>
</aside>
