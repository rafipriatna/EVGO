<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-utensils"></i><!-- logo di samping nama warung nya -->
        </div>
        <div class="sidebar-brand-text mx-3">EVGO<sup></sup></div>
    </a>

    <!-- Divider untuk menambahkan garis  -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <!-- Heading -->
    <?php

    if ($this->session->userdata('role_id') == 1) {

    ?>
   
      
   
    <?php } ?>

    
    <div class="sidebar-heading">
        Admin
    </div>
   
    <li class="nav-item ">
        <a class="nav-link " href="<?= base_url('user/') ?>">
            <i class="fas fa-home"></i>
            <span>Profil</span></a>
    </li>
    


    <!-- QUERY MENU -->


    <!--?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
    //from and join untng menghubung kan table ke table lain
    // on untuk menguci primary key dan foreig key cth : `alamat_table`.`primary_key` = `alamat_table`.`foreig key` 

    $menu = $this->db->query($queryMenu)->result_array();

    ?>-->


    <!-- LOOPING MENU -->
    <!--?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <!?= $m['menu']; ?>
        </div>-->

    <!-- siapkan sub-men sesuai menu -->
    <!--?php
        $menuID = $m['id'];
        $querySubMenu = "SELECT *
        FROM `user_sub_menu` JOIN `user_menu`
          ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
       WHERE `user_sub_menu`.`menu_id` = $menuID
         AND `user_sub_menu`.`is_active` = 1
         ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>-->
    <!--?php foreach ($subMenu as $sm) : ?>
            <!?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <!?php else : ?>
                <li class="nav-item">
                <!?php endif; ?>
                <a class="nav-link" href="<!?= base_url($sm['url']); ?>">
                    <i class="<!?= $sm['icon']; ?>"></i>
                    <span><!?= $sm['title'] ?> </span></a>
                </li>-->





    <!--?php endforeach; ?>

        <!?php endforeach; ?>
                -->



    <!-- Nav Item - Dashboard -->

    <!-- Divider -->





    <li class="nav-item">
        <a class="nav-link" href=" <?= base_url('user/edit') ?>">
            <i class="far fa-id-card"></i>
            <span>Edit Profile</span></a>
    </li>

    <!-- Nav Item - Tables -->
   
    <!-- Divider -->

    <li class="nav-item">
        <a class="nav-link" href=" <?= base_url('admin/stok_barang') ?>">
            <i class="far fa-id-card"></i>
            <span>stok barang</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-money-check-alt"></i>
            <span>Tranksaksi</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tranksaksi</h6>
                <a class="collapse-item" href="<?= base_url('user/barang_masuk') ?>">Barang Masuk</a>
                <a class="collapse-item" href="<?= base_url('user/barang_keluar') ?>">Barang Keluar</a>
            </div>
        </div>
    </li>

    <!-- Divider -->


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/catatan') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>CATATAN</span></a>
    </li>
    <li class="nav-item">
            <a class="nav-link " href="<?= base_url('admin/users') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Managemen</span></a>
        </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>logout</span></a>
    </li>





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->