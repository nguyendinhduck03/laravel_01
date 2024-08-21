<div class="sidebar">
    <h4 class="text-center">Admin Menu</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="/admin">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('categories.index')}}">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('products.index')}}">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('users.index')}}">Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('comments.index')}}">Comment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="toggleSubmenu(event)">Statistical</a>
            <ul class="nav flex-column submenu">
                <li class="nav-item">
                    <a class="nav-link" href="">View Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dailyStats')}}">Statistics by day</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Statistics by month</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('orders.index')}}">Order</a>
        </li>
        
    </ul>
</div>