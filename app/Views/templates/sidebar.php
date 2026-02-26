<div class="page-sidebar">
    <a class="logo" href="<?= base_url() ?>">Name of App</a>
    <ul class="list-unstyled accordion-menu">
        <li class="active-page">
            <a href="<?= base_url() ?>">
                <i data-feather="activity"></i> Dashboard
            </a>
        </li>
        <!-- add "active-page" class to li below to activate submenu -->
        <li>
            <!-- add "active" class to a below to show the submenu -->
            <a href="#">
                <i data-feather="grid"></i>
                Menu
                <i class="fas fa-chevron-right dropdown-icon"></i>
            </a>
            <ul>
                <li>
                    <!-- add "active" class to a below to highlight the submenu -->
                    <a href="<?= base_url('somewhere') ?>">
                        <i class="far fa-circle"></i> Sub Menu
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('somewhere') ?>">
                        <i class="far fa-circle"></i> Sub Menu
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>
</div>