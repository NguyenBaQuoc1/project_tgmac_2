<aside class="left-sidebar" style="position: fixed;">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <h1>ADMIN</h1>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="init">
            <div class="simplebar-wrapper selected" style="margin: 0px -24px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask selected">
                    <div class="simplebar-offset selected" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper selected" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content selected" style="padding: 0px 24px;">
                                <ul id="sidebarnav" class="in">
                                    <div class="dropdown">
                                        <button style="width: 200px" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Sản Phẩm
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li class="sidebar-item dropdown-item">
                                                <a class="sidebar-link" href="{{route("list")}}" aria-expanded="false">
                                            <span>
                                                <i class="ti ti-layout-dashboard"></i>
                                            </span>
                                                    <span class="hide-menu">Danh sách sản phẩm

                                            </span>
                                                </a>
                                            </li>
                                            <li class="sidebar-item dropdown-item">
                                                <a class="sidebar-link" href="{{route("create-form")}}" aria-expanded="false">
                                            <span>
                                                <i class="fa-brands fa-product-hunt"></i>
                                            </span>
                                                    <span class="hide-menu">Đăng Sản Phẩm</span>
                                                </a>
                                            </li>

                                        </div>
                                        <div class="dropdown" style="margin-top: 20px">
                                            <button style="width: 200px" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Loại Sản Phẩm
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li class="sidebar-item dropdown-item">
                                                    <a class="sidebar-link " href="{{route("list-category")}}" aria-expanded="false">
                                            <span>
                                                <i class="fa-solid fa-conveyor-belt-arm"></i>
                                            </span>
                                                        <span class="hide-menu">Loại Sản Phẩm</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item dropdown-item">
                                                    <a class="sidebar-link " href="{{route("form-category")}}" aria-expanded="false">
                                            <span>
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                                        <span class="hide-menu">Thêm Loại Sản Phẩm</span>
                                                    </a>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="dropdown" style="margin-top: 20px">
                                            <button style="width: 200px" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Đơn Hàng
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li class="sidebar-item dropdown-item">
                                                    <a class="sidebar-link " href="{{route('list-order')}}" aria-expanded="false">
                                            <span>
                                                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                            </span>
                                                        <span class="hide-menu">Danh Sách Đơn Hàng</span>
                                                    </a>
                                                </li>

                                            </div>
                                        </div>
                                        <div class="dropdown" style="margin-top: 20px">
                                            <button style="width: 200px" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Người dùng & Admins
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li class="sidebar-item dropdown-item">
                                                    <a class="sidebar-link " href="{{route('list-user')}}" aria-expanded="false">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                                </svg>
                                            </span>
                                                        <span class="hide-menu">Danh Sách Người Dùng</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item dropdown-item">
                                                    <a class="sidebar-link " href="{{route('list-admin')}}" aria-expanded="false">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                                </svg>
                                            </span>
                                                        <span class="hide-menu">Danh Sách Admin</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-item dropdown-item">
                                                    <a class="sidebar-link " href="{{route('create-user')}}" aria-expanded="false">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                                </svg>
                                            </span>
                                                        <span class="hide-menu">Thêm Admin</span>
                                                    </a>
                                                </li>

                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 888px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 145px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
