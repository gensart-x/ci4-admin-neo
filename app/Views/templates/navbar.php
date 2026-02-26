<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="header-title flex-fill">
            <a href="#" id="sidebar-toggle">
                <i data-feather="arrow-left"></i>
            </a>
            <h5><?= $title ?? 'Hmm, no $title?' ?></h5>
        </div>
        <div class="flex-fill" id="headerNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://placehold.co/400" alt="profile image"></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        <a class="dropdown-item" href="#">
                            <i data-feather="user"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i data-feather="edit"></i>Activities
                            <span class="badge rounded-pill bg-success">12</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>