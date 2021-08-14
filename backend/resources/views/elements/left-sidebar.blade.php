
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://127.0.0.1:8080/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-vuejs"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SHOP <sup>Vue</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product"
           aria-expanded="true" aria-controls="product">
           <i class="fab fa-product-hunt"></i>
            <span>Sản phẩm</span>
        </a>
        <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('product.index')}}">Danh sách</a>
                <a class="collapse-item" href="{{route('product.create')}}">Thêm sản phẩm</a>
                <a class="collapse-item" href="{{route('product.trashed')}}">Đã xóa</a>
            </div>
        </div>
    </li>

 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category"
       aria-expanded="true" aria-controls="category">
       <i class="fas fa-folder"></i>
        <span>Danh mục sản phẩm</span>
    </a>
    <div id="category" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('category.index')}}">Danh sách</a>
            <a class="collapse-item" href="{{route('category.create')}}">Thêm danh mục</a>
            <a class="collapse-item" href="{{route('category.trashed')}}">Đã xóa</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#post"
       aria-expanded="true" aria-controls="post">
       <i class="far fa-file"></i>
        <span>Bài viết</span>
    </a>
    <div id="post" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('post.index')}}">Danh sách</a>
            <a class="collapse-item" href="{{route('post.create')}}">Thêm bài viết</a>
            <a class="collapse-item" href="{{route('post.trashed')}}">Đã xóa</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blog"
           aria-expanded="true" aria-controls="blog">
           <i class="fas fa-folder"></i>
            <span>Danh mục bài viết</span>
        </a>
        <div id="blog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('blogs.index')}}">Danh sách</a>
                <a class="collapse-item" href="{{route('blogs.create')}}">Thêm danh mục</a>
                <a class="collapse-item" href="{{route('blogs.trashed')}}">Đã xóa</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#banner"
           aria-expanded="true" aria-controls="banner">
            <i class="fab fa-slideshare"></i>
            <span>Banner slide</span>
        </a>
        <div id="banner" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('banner.index')}}">Danh sách</a>
                <a class="collapse-item" href="{{route('banner.create')}}">Thêm banner</a>
                <a class="collapse-item" href="{{route('banner.trashed')}}">Đã xóa</a>
            </div>
        </div>
    </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-cogs"></i>
            <span>Setting</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
