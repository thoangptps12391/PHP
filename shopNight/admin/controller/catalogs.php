<?php
include_once 'model/catalogs.php';
 $action='index';
  if(isset($_GET['action'])){
    $action=$_GET['action'];
  }
  switch ($action) {
            case 'index':
            $catalogs =getAllcatalog();
            include 'view/catalogs/index.php';
            break;
        case 'addnew':
            $catalogs =getAllcatalog();
            //include 'view/catalogs/addnew.php';
            if (isset($_POST['submit'])) {
                // $name=$_POST['nameCata'];
                // $thutu=$_POST['thutu'];
                // $anhien=$_POST['anhien'];
                // addNewCatalog($name,$thutu,$anhien);
                
                
                //header("Location: index.php?ctrl=catalogs");

                echo '
                <script>
                    alert("Thêm loại thành công");
                    window.location.href="index.php?ctrl=catalogs";</script>';
            }
            else{
                include 'view/catalogs/addnew.php';
            }
            break;
        case 'edit':
            $id=$_GET['ma_loai'];
            $cate=getCatalogById($id);
            include 'view/catalogs/edit.php';
            break;
        case 'update':
            $id=$_POST['id'];
            $name=$_POST['nameCata'];
             $thutu=$_POST['thutu'];
            $anhien=$_POST['anhien'];
            updateCatalog($id,$name,$thutu,$anhien);
            include 'view/catalogs/edit.php';
            break;
        case 'delete':
            $id=$_GET['ma_loai'];
            deleteCatalog($id);
            header('location:index.php?ctrl=catalogs&action=index');
            break;
       
            default:
        break;
  }

