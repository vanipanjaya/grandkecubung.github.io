<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?= base_url() ?>/images/logo1.png">

    <link rel="stylesheet" href="<?= base_url(
        'assets/vendors/bootstrap/dist/css/bootstrap.min.css'
    ) ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <p class="navbar-brand">Cloud Hotel</p>
                 <p class="navbar-brand hidden">C</p>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= site_url(
                            'Welcome/index'
                        ) ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Master</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bed"></i><a href="<?= site_url(
                                'Kamar/read'
                            ) ?>">Kamar </a></li>
                            <li><i class="fa fa-address-card"></i><a href="<?= site_url(
                                'Pengguna/read'
                            ) ?>">Pengguna</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-envelope"></i><a href="<?= site_url(
                                'Transaksi/read'
                            ) ?>">Pending</a></li>
                            <li><i class="fa fa-envelope-open"></i><a href="<?= site_url(
                                'Transaksi/data'
                            ) ?>">Confirm</a></li>
                            <li><i class="fa fa-plus"></i><a href="<?= site_url(
                                'Transaksi/add'
                            ) ?>">Baru</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        
                        <div class="form-inline">
                        </div>


                        <div class="dropdown for-message">
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" style="height: 40px; width: 35px;" src="<?= base_url() ?>/images/pengguna/<?= $this->session->userdata(
    'gambar'
) ?>">
                        </a>

                        <div class="user-menu dropdown-menu">
                             <a class="nav-link" href="<?= site_url(
                                 'Auth/logout'
                             ) ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Pengguna</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?= site_url(
                                'Welcome/index'
                            ) ?>">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><button class="btn btn-warning " data-toggle="modal" data-target="#contact-modal">Tambah Data</button></strong>

                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">No. Telp</th>
                                            <th scope="col">Akses</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($result as $user) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><img src="<?= base_url(
                                                'images/pengguna/' .
                                                    $user->gambar
                                            ) ?>" width="50px" height="50px" style="border-radius: 100%">
                                            </td>
                                            <td><?= $user->nama ?></td>
                                            <td><?= $user->email ?></td>
                                            <td><?= $user->no ?></td>
                                            <td><?= $user->akses ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= site_url(
                                                    'Pengguna/edit/' . $user->id
                                                ) ?>">Edit</a>
                                                <a class="btn btn-danger" href="<?= site_url(
                                                    'Pengguna/hapus/' .
                                                        $user->id
                                                ) ?>" onclick="return confirm('Are U Sure?')">Delete</a>
                                            </td>
                                            <!-- <td>
                                                <?php if (
                                                    $cat->sold_049 == 1
                                                ) { ?>
                                                        <button class="btn btn-default">SOLD OUT</button>
                                                 <?php } else { ?>
                                                    <a class="btn btn-warning" href="<?= site_url(
                                                        'cats049/sale/' .
                                                            $cat->id_049
                                                    ) ?>">Sale</a>
                                                <?php } ?>
                                            </td> -->
                                        </tr>
                                    <?php }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


              

    </div>
    <div id="contact-modal" class="modal fade" role="dialog" style="margin-top: 200px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">×</a>
                    
                </div>
                    <form action="<?= site_url(
                        'Pengguna/do_upload'
                    ) ?>" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        <div id="pay-invoice">
                            <div class="card-body">
                                <hr>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Nama Lengkap</label>
                                    <input id="cc-name"  name="nama" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Email</label>
                                    <input id="cc-number" name="email" type="tel" class="form-control" >
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">No. Telp</label>
                                            <input id="cc-exp" name="no" type="tel" class="form-control "  >
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="cc-j" class="control-label mb-1">Hak Akses</label>
                                            <select id="cc-j" name="akses" class="form-control">
                                                <option>Admin</option>
                                                <option>User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="x_card_code" class="control-label mb-1">Foto</label>
                                        <div class="input-group">
                                            <input id="x_card_code" name="gambar" type="file" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input name="simpan" id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="Simpan">
                                </div>
                                    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url(
        'assets/vendors/jquery/dist/jquery.min.js'
    ) ?>"></script>
    <script src="<?= base_url(
        'assets/vendors/popper.js/dist/umd/popper.min.js'
    ) ?>"></script>
    <script src="<?= base_url(
        'assets/vendors/bootstrap/dist/js/bootstrap.min.js'
    ) ?>"></script>
    <script src="<?= base_url('assets/main.js') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){    
            $("#contactForm").submit(function(event){
                submitForm();
                return false;
            });
        });
        // function to handle form submit
        function submitForm(){
             $.ajax({
                type: "POST",
                url: "save_kontak.php",
                cache:false,
                data: $('form#contactForm').serialize(),
                success: function(response){
                    $("#contact").html(response)
                    $("#contact-modal").modal('hide');
                },
                error: function(){
                    alert("Error");
                }
            });
        }
    </script>
</body>
</html>