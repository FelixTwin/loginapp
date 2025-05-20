<div class="sidebar bg-dark text-white" style="width: 250px; min-height: 100vh; position: fixed; left: 0; top: 0; padding-top: 56px;">
    <div class="sidebar-header p-3">
        <h5 class="text-center">Navigation Menu</h5>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-primary' : '' }}" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt me-2"></i>
                Dashboard
            </a>
        </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('users.*') ? 'active bg-primary' : '' }}" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-users me-2"></i>
                    User Management
                </a>
            </li>

        <li class="nav-item">
            <a class="nav-link text-white {{ request()->routeIs('categories.*') ? 'active bg-primary' : '' }}" href="{{ route('categories.index') }}">
                <i class="fas fa-fw fa-boxes me-2"></i>
                Manage Categories
            </a>
        </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('products.*') ? 'active bg-primary' : '' }}" href="{{ route('products.index') }}">
                    <i class="fas fa-fw fa-boxes me-2"></i>
                    Product Management
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('orders.*') ? 'active bg-primary' : '' }}" href="{{ route('orders.index') }}">
                    <i class="fas fa-fw fa-shopping-cart me-2"></i>
                    Orders
                </a>
            </li>

    </ul>
</div>
