        <?php session_start(); ?>    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Administrator</a>
                <a class="navbar-brand hidden" href="./">IT</a>
            </div>
            <?php 
            date_default_timezone_set('Asia/Jakarta');
                function hari_ini(){
                    $data = date('D');

                    switch ($data) {
                        case 'Sun':
                            $hari_ini = "Minggu";
                            break;
                        case 'Mon':
                           $hari_ini = "Senin";
                            break;
                        case 'Tue':
                            $hari_ini = "Selasa";
                        case 'Wed':
                           $hari_ini = "Rabu";
                        case 'Thu':
                            $hari_ini ="Kamis";
                        case 'Fri':
                            $hari_ini ="Jumat";
                        case 'Sat':
                            $hari_ini = "Sabtu";
                            break;
                        default:
                            # code...
                            break;
                    }
                    return $hari_ini ;
                }
            ?>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="active" style="color: #fff">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <center>
                    <h6 style="letter-spacing: 0.1px">
                    <?=  date('H:i');?><br>
                    <?=hari_ini() . date(',d M Y'); ?>
                    </h6>
                </center>
                </a>
                </li>
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Beranda </a>
                    </li>                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-comments-o"></i>Complain</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-comment"></i><a href="page.php?page=complain_terjawab">Complain Terjawab</a></li>
                            <li><i class="ti-comments"></i><a href="page.php?page=complain_masuk">Complain Masuk</a></li>
                            <li><i class="fa fa-twitch"></i><a href="page.php?page=pesan_saran">Kotak Saran</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>Setting </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-users"></i><a href="page.php?page=manage_user_client">Manage User</a></li>
                            <li><i class="menu-icon fa fa-user-md"></i><a href="page.php?page=manage_user_admin">Manage Admin</a></li>
                            <li><i class="menu-icon fa fa-lightbulb-o"></i><a href="page.php?page=user_online">Client Online</a></li>
                            <li><i class="menu-icon fa fa-lock"></i><a href="page.php?page=reset_password">Change Password</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Laporan</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Export Laporan  (CSV)</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="page.php?page=cari_data_error">Cari Data Error</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="page.php?page=statistik_complain_masuk">Statistik Complain Masuk </a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="page.php?page=rekap_eror">Rekap Eror Bulanan  </a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <?php 
        if (isset($_GET['page'])) {
            $data = $_GET['page'];

            switch ($data) {
                case 'complain_masuk':
                    include 'tabel-complain.php';
                break;

                case 'form_add_user':
                    include 'page-add-admin.php';
                    break;
                case 'user_online':
                    include 'page_user_online.php';
                    break;
                case 'complain_terjawab':
                    include 'page_complain_terjawab.php';
                    break;
                case 'statistik_complain_masuk':
                    include 'page_statistik_complain_masuk.php';
                    break;
                case 'complain_masuk':
                    include 'tabel-complain.php';
                    break;
                case 'cari_data_error':
                    include 'page_cari_data_error.php';
                    break;
                case 'rekap_eror':
                    include 'page_rekap_eror.php';
                    break;
                case 'pesan_saran':
                    include 'page_kotak_masuk.php';
                    break;
                case 'manage_user_admin':
                    include 'page_manage_user_admin.php';
                    break;
                case 'manage_user_client':
                    include 'page_manage_user_client.php';
                    break;
                case 'my_profile':
                    include 'my_profile.php';
                    break;
                case 'edit_profile':
                    include 'edit-my-profile.php';
                    break;
                case 'reset_password':
                    include 'change_pass.php';
                    break;
                      # code...
                break;
        }
    }
    ?>