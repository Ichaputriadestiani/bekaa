<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard">Sahabatbk</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SBK</a>
        </div>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/dashboard" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Dashboard
            </a>
            <ul class="sidebar-menu">
                <li class="{{ request()->routeIs('todo.*')?'active':'' }}"><a class="nav-link active" href="/todo"><i class="fas fa-calendar"></i> <span>To Do</span></a></li>
                <li>
                    <li class="dropdown {{ request()->routeIs(['post.*','category.*'])?'active':'' }}">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-edit"></i> <span>Article</span></a>
                        <ul class="dropdown-menu" style="display: none;">
                            <li class="{{ request()->routeIs('post.*')?'active':'' }}"><a class="nav-link" href="/post">Post</a></li>
                            <li class="{{ request()->routeIs('category.*')?'active':'' }}"><a class="nav-link" href="/category">Category</a></li>
                        </ul>
                    </li>
                </li>
                <li class="{{ request()->routeIs('gallery.*')?'active':'' }}"><a class="nav-link" href="/admin/gallery"><i class="fas fa-image"></i> <span>Gallery</span></a></li>
                <li>
                <li class="dropdown {{ request()->is(['admin/user/mentor','admin/user/student'])?'active':'' }}">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li class="{{ request()->is('admin/user/mentor')?'active':'' }}"><a class="nav-link" href="/admin/user/mentor">Mentor</a></li>
                        <li class="{{ request()->is('admin/user/student')?'active':'' }}"><a class="nav-link" href="/admin/user/student">Siswa</a></li>
                    </ul>
                </li>
                </li>
                <li>
                <li class="dropdown {{ request()->is('admin/consult-session')?'active':'' }}">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-comment-dots"></i> <span>Konsultasi</span></a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li class="{{ request()->is('admin/consult-session')?'active':'' }}"><a class="nav-link" href="/admin/consult-session">Kelola Jadwal</a></li>
                        <li class="{{ request()->is('admin/consult-session')?'active':'' }}"><a class="nav-link" href="/admin/consult-session">Riwayat Konsultasi</a></li>
                    </ul>
                </li>
                </li>
                <li>
                <li class="dropdown ">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>Settings</span></a>
                    <ul class="dropdown-menu" style="display: none;">
                        <li class=""><a class="nav-link" href="#">Kelola Profile</a></li>
                        <li class=""><a class="nav-link" href="#">Backup</a></li>
                        <li class=""><a class="nav-link" href="#">Import</a></li>
                        <li class=""><a class="nav-link" href="#">Change Password</a></li>
                    </ul>
                </li>
                </li>
                <li><a class="nav-link" href="/credit"><i class="fas fa-fire"></i> <span>Credits</span></a></li>
            </ul>
    </aside>
</div>
