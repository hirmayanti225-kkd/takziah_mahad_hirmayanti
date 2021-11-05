 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
     <h5>

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
             <div class="sidebar-brand-icon ">
                 <h4><i class="fas fa-place-of-worship"></i></h4>
             </div>
             <div class="sidebar-brand-text mt-5 mb-5">
                 <h4><b>Ta'ziah</b></h4> <sup>
                     <h6><b>Ma'had</b></h6>
                 </sup>
             </div>
         </a>


         <!--QUERY MENU-->
         <?php
			// source : nyontek kodingan dari pak Dika, hehe

			$role_id = $this->session->userdata('role_id');
			$queryMenu = " SELECT `user_menu`.`id`, `menu`
						FROM `user_menu` JOIN `user_access_menu`
						ON `user_menu`.`id` = `user_access_menu`.`menu_id`
						WHERE `user_access_menu`.`role_id` = $role_id
						ORDER BY `user_access_menu`.`menu_id` ASC
	";
			$menu = $this->db->query($queryMenu)->result_array();
			?>

         <!-- LOOPING MENU -->
         <?php foreach ($menu as $m) : ?>

         <div class="sidebar-heading">
             <?= $m['menu']; ?>
         </div>

         <!--sub menu sesuai menu-->
         <?php
				$menuId = $m['id'];
				$querySubMenu = "SELECT  *
                  FROM `user_sub_menu` JOIN `user_menu` 
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  WHERE `user_sub_menu`.`menu_id` = $menuId
                    AND `user_sub_menu`.`id_active` = 1
                    ";
				$subMenu = $this->db->query($querySubMenu)->result_array();
				?>

         <?php foreach ($subMenu as $sm) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                 <i class="<?= $sm['icon']; ?>"></i>
                 <span><?= $sm['title']; ?></span>
             </a>
         </li>


         <?php endforeach; ?>

         <hr class="sidebar-divider">


         <?php endforeach; ?>

         <!-- Divider -->

         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                 <i class="fas fa-fw fa-sign-out-alt"></i>
                 <span>Logout</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
     </h5>

 </ul>

 <!-- End of Sidebar -->
