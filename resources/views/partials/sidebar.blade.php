<!-- Sidebar -->
<ul
    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar"
>
    <!-- Sidebar - Brand -->
    <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="/welcome"
    >
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bud<sup>dy</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Papan Pemuka</span></a
        >
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <!-- <div class="sidebar-heading">Antara Muka</div> -->
    <div class="sidebar-heading">Tugasan</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
        >
            <i class="fa fa-list" aria-hidden="true"></i>
            <span>Senarai Semak</span>
        </a>
        <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perkara:</h6>
                <a class="collapse-item" href="/todos">Senarai Semak</a>
                <a class="collapse-item" href="/todos/create">Tambah Item</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseStaff"
            aria-expanded="true"
            aria-controls="collapseStaff"
        >
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <span>Senarai Kakitangan</span>
        </a>
        <div
            id="collapseStaff"
            class="collapse"
            aria-labelledby="headingStaff"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perkara:</h6>
                <a class="collapse-item" href="/staffs">Senarai Kakitangan</a>
                <a class="collapse-item" href="/staffs/create"
                    >Tambah Kakitangan</a
                >
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseUtilities"
            aria-expanded="true"
            aria-controls="collapseUtilities"
        >
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utiliti</span>
        </a>
        <div
            id="collapseUtilities"
            class="collapse"
            aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utiliti Tersuai:</h6>
                <a class="collapse-item" href="utilities-color.html">Warna</a>
                <a class="collapse-item" href="utilities-border.html"
                    >Sempadan</a
                >
                <a class="collapse-item" href="utilities-animation.html"
                    >Animasi</a
                >
                <a class="collapse-item" href="utilities-other.html"
                    >Lain-Lain</a
                >
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Tambahan Lain</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapsePages"
            aria-expanded="true"
            aria-controls="collapsePages"
        >
            <i class="fas fa-fw fa-folder"></i>
            <span>Belajar Templating</span>
        </a>
        <div
            id="collapsePages"
            class="collapse"
            aria-labelledby="headingPages"
            data-parent="#accordionSidebar"
        >
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Skrin Log Masuk:</h6>
                <a class="collapse-item" href="login.html">Log Masuk</a>
                <a class="collapse-item" href="register.html">Pendaftaran</a>
                <a class="collapse-item" href="forgot-password.html"
                    >Lupa Kata Laluan</a
                >
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Halaman Templating:</h6>
                <a class="collapse-item" href="/master">Halaman Master</a>
                <a class="collapse-item" href="/child1">Halaman Child 1</a>
                <a class="collapse-item" href="/child2">Halaman Child 2</a>
                <a class="collapse-item" href="blank.html">Halaman Kosong</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/todos">
            <i class="fas fa-fw fa-cog"></i>
            <span>Tetapan Lain</span></a
        >
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Jadual</span></a
        >
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
