 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">work gallery<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route ('LoginSup')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

  

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
         data-target="#aboutCollapse"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-list-alt"></i>
            <span>Abouts</span>
        </a>
        <div id="aboutCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('about.create')}}">Add About</a>
                <a class="collapse-item" href="{{route('about.index')}}">All Adbout</a>
            </div>
        </div>
    </li>

    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
         data-toggle="collapse" data-target="#categoryCollapse"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-laptop"></i>
            <span>Categories</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('categories.create')}}">Add Category</a>
                <a class="collapse-item" href="{{route('categories.index')}}">All Category</a>
            </div>
        </div>
    </li>
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#"
         data-toggle="collapse" data-target="#workCollapse"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-laptop"></i>
            <span>My Works</span>
        </a>
        <div id="workCollapse" class="collapse" 
        aria-labelledby="headingTwo"
         data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('works.create')}}">Add Work</a>
                <a class="collapse-item" href="{{route('works.index')}}">All Work</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#"
         data-toggle="collapse" data-target="#postCollapse"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-laptop"></i>
            <span>NEW POSTS</span>
        </a>
        <div id="postCollapse" class="collapse" 
        aria-labelledby="headingTwo"
         data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('posts.create')}}">Add post</a>
                <a class="collapse-item" href="{{route('posts.index')}}">All post</a>
            </div>
        </div>
    </li>


    

</ul>
<!-- End of Sidebar -->