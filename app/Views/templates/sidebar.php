<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
      <img src="<?php echo base_url('themes/dist'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sensus Karyawan
    </a>
 
    <div class="sidebar">

        <?php
        $db      = \Config\Database::connect();
        $roleId = session()->get('role_id');
        $queryMenu = "SELECT *
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`menu_id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $roleId
                    ORDER BY `user_access_menu`.`menu_id` ASC
                    ";
                    $menu = $db->query($queryMenu)->getResultArray();
        ?>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php foreach($menu as $m): ?>
                    <li class="nav-item">
                    <a href="<?php echo base_url($m['url']); ?>" class="nav-link">
                        <i class="<?= $m['icon']; ?>"></i>
                        <p><?= $m['title']; ?></p>
                    </a>
                </li>
                <?php endforeach; ?>

                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li> 
            </ul>
        </nav>
    </div>
</aside>