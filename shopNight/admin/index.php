<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script>
    function canhbao() {
        if (confirm('Bạn có thưc sự muốn xóa mục này') == true) {
            return true;
        } else {
            return false;
        }
    }
    </script>
</head>

<body id="page-top">
    <div id="wrapper">
        <!--Phần bên trái-->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FShop Admin</div>
            </a>
            <hr class="sidebar-divider my-0" />
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0" />
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-cloud"></i>
                    <span>Vào trang web</span></a>
            </li>
            <hr class="sidebar-divider" />
            <div class="sidebar-heading">Quản lý</div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLSP"
                    aria-expanded="true" aria-controls="collapseLSP">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Loại sản phẩm</span>
                </a>
                <div id="collapseLSP" class="collapse" aria-labelledby="headingLSP" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=catalogs&action=index">Xem danh sách</a>
                        <a class="collapse-item" href="index.php?ctrl=catalogs&action=addnew">Thêm loại mới</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php?ctrl=product" data-toggle="collapse"
                    data-target="#collapseSP" aria-expanded="true" aria-controls="collapseSP">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sản phẩm</span>
                </a>
                <div id="collapseSP" class="collapse" aria-labelledby="headingSP" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=product">Xem danh sách</a>
                        <a class="collapse-item" href="index.php?ctrl=product&act=addnew">Thêm sản phẩm mới</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDH"
                    aria-expanded="true" aria-controls="collapseDH">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Đơn Hàng</span>
                </a>
                <div id="collapseDH" class="collapse" aria-labelledby="headingDH" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=cart&action=index">Xem danh sách</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKH"
                    aria-expanded="true" aria-controls="collapseKH">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Khách Hàng</span>
                </a>
                <div id="collapseKH" class="collapse" aria-labelledby="headingKH" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=user">Xem danh sách</a>
                        <a class="collapse-item" href="index.php?ctrl=user&act=newAccount">Thêm khách hàng mới</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNCC"
                    aria-expanded="true" aria-controls="collapseNCC">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Hãng sản xuất</span>
                </a>
                <div id="collapseNCC" class="collapse" aria-labelledby="headingNCC" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=brand&action=index">Xem danh sách</a>
                        <a class="collapse-item" href="index.php?ctrl=brand&action=add">Thêm hãng sản xuất mới</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBL"
                    aria-expanded="true" aria-controls="collapseBL">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Bình luận</span>
                </a>
                <div id="collapseBL" class="collapse" aria-labelledby="headingNCC" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=comment&action=index">Xem danh sách</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseN"
                    aria-expanded="true" aria-controls="collapseN">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tin Tức</span>
                </a>
                <div id="collapseN" class="collapse" aria-labelledby="headingNCC" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chức năng:</h6>
                        <a class="collapse-item" href="index.php?ctrl=news">Xem danh sách</a>
                        <a class="collapse-item" href="index.php?ctrl=news&action=addnews">Thêm Tin Tức</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider" />
        </ul>

        <!-- Phần bên phải-->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!--Phần trên-->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="btn_group">

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn_group nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                Thanh Thoảng
                                <!--  echo $_SESSION['username']; ?>  -->
                            </span>
                            <i class="fas fa-user-lock"></i>
                        </a>
                        <div class="dropdown-menu" style="right: 2%;padding: .5rem 1rem;">
                            <a class="dropdown-item" href="index.php?logout"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a>
                        </div>
                    </div>
                </nav>
                <!--Hết phần trên-->

                <!--Phần main-->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <?php 
                            $ctrl= "home";
                              if (isset($_GET['ctrl'])) {
                                $ctrl=$_GET['ctrl'];
                              }
                              include 'controller/'.$ctrl.'.php';
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>