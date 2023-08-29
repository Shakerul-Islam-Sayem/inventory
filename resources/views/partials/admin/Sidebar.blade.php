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
                    <a class="sidebar-link"  href="{{ route('inward.index') }}" class="nav-link dropdown-toggle" href="#forinward"
                        role="button" data-bs-toggle="collapse" data-bs-target="#forinward" aria-expanded="true"
                        aria-controls="forinward">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Inward Product</span>
                    </a>
                    <div id="forinward" class="nav-collapse collapse" data-bs-parent="#products"
                        hs-parent-area="#products" style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('inward.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Inward List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('inward.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Inward Create</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('outward.index') }}" class="nav-link dropdown-toggle" href="#foroutward"
                        role="button" data-bs-toggle="collapse" data-bs-target="#foroutward" aria-expanded="true"
                        aria-controls="foroutward">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Outward Product</span>
                    </a>
                    <div id="foroutward" class="nav-collapse collapse" data-bs-parent="#products"
                        hs-parent-area="#products" style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('outward.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Outward List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('outward.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Outward Create</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('return.create') }}" class="nav-link dropdown-toggle" href="#forreturn"
                        role="button" data-bs-toggle="collapse" data-bs-target="#forreturn" aria-expanded="true"
                        aria-controls="forreturn">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Return Product</span>
                    </a>
                    <div id="forreturn" class="nav-collapse collapse" data-bs-parent="#products"
                        hs-parent-area="#products" style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('return.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Return List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('return.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Return Create</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="javascript:void(0)" class="nav-link dropdown-toggle" href="#fordamage"
                        role="button" data-bs-toggle="collapse" data-bs-target="#fordamage" aria-expanded="true"
                        aria-controls="fordamage">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Damage Product</span>
                    </a>
                    <div id="fordamage" class="nav-collapse collapse" data-bs-parent="#products"
                        hs-parent-area="#products" style="margin-left: 1rem;">
                        <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Damage Inward</span>
                        </a>
                        <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Damage Outward</span>
                        </a>
                        <a class="sidebar-link" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Damage Stock</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('stock.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-typography"></i>
                        </span>
                        <span class="hide-menu">Stock</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">SKU & CATEGORY</span>
                </li>
                <li class="sidebar-item submenu">
                    <a class="sidebar-link" href="{{ route('product.index') }}" class="nav-link dropdown-toggle"
                        href="#forproductslist" role="button" data-bs-toggle="collapse"
                        data-bs-target="#forproductslist" aria-expanded="true" aria-controls="forproductslist">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">SKU</span>
                    </a>
                    <div id="forproductslist" class="nav-collapse collapse" data-bs-parent="#productslist"
                        hs-parent-area="#productslist" style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('product.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">SKU List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('product.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">SKU Create</span>
                        </a>
                    </div>
                </li>
                <li class="sidebar-item submenu">
                    <a class="sidebar-link" href="{{ route('category.index') }}" class="nav-link dropdown-toggle"
                        href="#forcategory" role="button" data-bs-toggle="collapse" data-bs-target="#forcategory"
                        aria-expanded="true" aria-controls="forcategory">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Category</span>
                    </a>
                    <div id="forcategory" class="nav-collapse collapse" data-bs-parent="#category"
                        hs-parent-area="#category" style="margin-left: 1rem;">
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
                <li class="sidebar-item submenu">
                    <a class="sidebar-link" href="{{ route('roles.index') }}" class="nav-link dropdown-toggle"
                        href="#forrole" role="button" data-bs-toggle="collapse" data-bs-target="#forrole"
                        aria-expanded="true" aria-controls="forrole">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Role</span>
                    </a>
                    <div id="forrole" class="nav-collapse collapse" data-bs-parent="#role" hs-parent-area="#role"
                        style="margin-left: 1rem;">
                        <a class="sidebar-link" href="{{ route('roles.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Role List</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('roles.create') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Role Create</span>
                        </a>
                    </div>
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
