<aside class="left-sidebar sidebar js-sidebar">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('index') }}" class="text-nowrap logo-img">
                <img src="{{ asset('assets/images/logos/inventory.png') }}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">INVENTORY</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="javascript()" class="nav-link dropdown-toggle"
                        href="#forproducts" role="button" data-bs-toggle="collapse"
                        data-bs-target="#forproducts" aria-expanded="true"
                        aria-controls="forproducts">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Product</span>
                    </a>
                    <div id="forproducts" class="nav-collapse collapse"
                        data-bs-parent="#products" hs-parent-area="#products"
                        style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('admin.inward') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Inward</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('admin.inward') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Outward</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Stock</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">PRODUCTS</span>
                </li>
                <li class="sidebar-item submenu">
                    <a class="sidebar-link" href="{{ route('products-list') }}" class="nav-link dropdown-toggle"
                        href="#forproductslist" role="button" data-bs-toggle="collapse"
                        data-bs-target="#forproductslist" aria-expanded="true"
                        aria-controls="forproductslist">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Product List</span>
                    </a>
                    <div id="forproductslist" class="nav-collapse collapse"
                        data-bs-parent="#productslist" hs-parent-area="#productslist"
                        style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('products-list') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Product List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('products-create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Product Create</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item submenu">
                    <a class="sidebar-link" href="{{ route('category.index') }}" class="nav-link dropdown-toggle"
                        href="#forcategory" role="button" data-bs-toggle="collapse"
                        data-bs-target="#forcategory" aria-expanded="true"
                        aria-controls="forcategory">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Category</span>
                    </a>
                    <div id="forcategory" class="nav-collapse collapse"
                        data-bs-parent="#category" hs-parent-area="#category"
                        style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('category.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Category List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('category.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Category Create</span>
                        </a>
                    </div>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">SUPPLIER</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('supplier.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Supplier</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('supplier.create') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Create</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('login') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-login"></i>
                        </span>
                        <span class="hide-menu">Login</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('register') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">EXTRA</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-aperture"></i>
                        </span>
                        <span class="hide-menu">Sample Page</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
