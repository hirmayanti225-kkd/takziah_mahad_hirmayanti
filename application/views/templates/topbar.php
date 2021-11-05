<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - Alerts -->
                <h4>
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <?php
						$notif = $this->db->get_where('tbl_notif', ['is_read' => 0])->result_array();
						$notif_count = count($notif);
						?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown"
                                href="<?php echo base_url('notif/index') ?>" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i style="color:black" class="fas fa-bell fa-fw"></i><span
                                    style="color:red"><?= $notif_count ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <?php foreach ($notif as $data) : ?>
                                <a class="dropdown-item" href="<?= base_url('notif/index') ?>"><?= $data['judul'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    </ul>
                </h4>


                <!-- Nav Item - User Information -->

                <li class="nav-item dropdown no-arrow">
                    <h4><a class="nav-link dropdown-toggle" href="<?php echo base_url('user/index') ?>"
                            id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                            <img class="img-profile rounded-circle"
                                src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>">
                        </a></h4>

                </li>



            </ul>

        </nav>
        <!-- End of Topbar -->
        <script type="text/javascript">
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {



                    document.getElementById("noti_number").innerHTML = this.responseText;
                }


            };
            xhttp.open("GET", "auth/templates/notif", true);
            xhttp.send();
        }
        loadDoc();
        </script>