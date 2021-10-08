<?php
  include "php/view_user.php";
 
  include "php/total_balance_credit.php";
  include "php/total_balance_debit.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <title>Brahmani Readymade Store</title>
      <!--favicon-->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- simplebar CSS-->
      <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
      <!-- Bootstrap core CSS-->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
      <!--Data Tables -->
      <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
      <!-- animate CSS-->
      <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
      <!-- Icons CSS-->
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
      <!-- Sidebar CSS-->
      <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
      <!-- Custom Style-->
      <link href="assets/css/app-style.css" rel="stylesheet"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <!-- Start wrapper-->
      <div id="wrapper">
         <!--Start sidebar-wrapper-->
         <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
               <a href="index.html">
                  <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                  <h5 class="logo-text">Brahmani</h5>
               </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
               <li class="sidebar-header">Readymade store</li>
               <li>
                  <a href="index.php" class="waves-effect">
                  <i class="zmdi zmdi-view-dashboard"></i> <span>Home</span> 
                  </a>
               </li>
               <li>
                  <a href="pages-403.php" class="waves-effect">
                  <i class="zmdi zmdi-layers"></i> <span>Settings</span> 
                  </a>
               </li>
               <li>
                  <a href="pages-404.php" class="waves-effect">
                  <i class="zmdi zmdi-card-travel"></i> <span>Suggestions</span> 
                  </a>
               </li>
               
               <li class="sidebar-header">Communicate</li>
               <li><a href="pages-500.php" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Share app</span></a></li>
            </ul>
         </div>
         <!--End sidebar-wrapper-->
         <!--Start topbar header-->
         <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top bg-white">
               <ul class="navbar-nav mr-auto align-items-center">
                  <li class="nav-item">
                     <a class="nav-link toggle-menu" href="javascript:void();">
                     <i class="icon-menu menu-icon"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <h5>
                      <marquee behavior="alternate" direction="right">Brahmani Readymade Store</marquee>
                    </h5>
                  </li>
               </ul>
            </nav>
         </header>
         <!--End topbar header-->
         <div class="clearfix"></div>
         <div class="content-wrapper">
            <div class="container-fluid">
               <!-- Breadcrumb-->
               <div class="row pt-2 pb-2">
                  <div class="col-sm-9">
                     <h4 class="page-title">Home</h4>
                  </div>
               </div>
               <!-- End Breadcrumb-->
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><i class="fa fa-table"></i>Accounts</div>
                        <div class="col-12 col-lg-6 col-xl-3" style="margin-left: 300px;">
                          <div class="card gradient-blooker">
                            <div class="card-body">
                              <div class="media align-items-center">
                                <div class="media-body">
                                  <p class="text-white">Total</p>
                                  <h4 class="text-white line-height-5">
                                    <?php if (empty($user))
                                      { 
                                        echo '₹ 0';
                                      } else { ?>
                                      ₹<?php
                                        echo $total_balance_credit - $total_balance_debit;
                                      ?>
                                    <?php } ?>
                                  </h4>
                                </div>
                                <div class="w-circle-icon rounded-circle border border-white">
                                  <i class="fa fa-pie-chart text-white"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <?php if (empty($user)){ ?>
                                <h4>Click the + icon the bottom left corner to add an Account</h4>
                              <?php } else { ?>
                                <table id="example" class="table table-bordered">
                                 <thead>
                                    <tr class="main_tr">
                                       <th>No</th>
                                       <th>Name</th>
                                       <th>Edit & Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <?php
                                    foreach ($user as $key => $value) {
                                  ?>
                                    <tr>
                                       <td class="num"><?php echo $key+1 ?></td>
                                       <td class="name_user">
                                          <a href="user_detail.php?id=<?php echo $value['u_id'] ?>" class="a_color"><?php echo $value['u_name']?>
                                          </a>
                                        </td>
                                       <td class="butt">
                                         <button type="button" class="btn btn-success waves-effect waves-light m-1" data-toggle="modal" data-target="#a<?php echo $value['u_id'] ?>" style="background-color: #0d3d27;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Edit</span> </button>
                                       
                                        <a href="php/delete_user?id=<?php echo $value['u_id'] ?>">
                                         <button type="button" class="btn btn-danger waves-effect waves-light m-1" data-toggle="modal" data-target=""><i class="fa fa-trash" aria-hidden="true"></i> <span>Delete</span> </button>
                                       </td>
                                    </tr>
                                  <?php } ?>
                                 </tbody>
                              </table>
                            <?php } ?>
                              
                              <!-- Trigger the modal with a button -->
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i aria-hidden="true" class="fa fa-plus"></i></button>

                              <!-- Modal for add user -->
                              <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Add Account</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <form method="post" action="php/add_user.php">
                                      <div class="modal-body">
                                        <div class="form-group row">
                                          <label for="input-10" class="col-sm-2 col-form-label">Name</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" id="input-10" name="name" value="">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                      </form>
                                  </div>
                                </div>
                              </div>
                              <!-- End user add modal -->

                              <!-- modal for edit the user detail -->
                              <?php 
                                if (empty($user)){
                                } else { ?>
                               
                              <?php
                                foreach ($user as $key => $row) {
                              ?>
                              <div class="modal fade" id="a<?php echo $row['u_id'] ?>">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Edit User Detail</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form id="signupForm" action="php/edit_user?id=<?php echo($row['u_id']); ?>" method="post">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <div class="form-group row">
                                          <label for="input-10" class="col-sm-2 col-form-label">Name</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" id="input-10" name="name" value="<?php echo $row['u_name'] ?>">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <?php }}  ?>
                              <!-- end edit user modal -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Row-->
            </div>

            <!-- <button type="button" class="btn btn-dark waves-effect waves-light m-1"><i aria-hidden="true" class="fa fa-plus"></i></button> -->
            <!-- End container-fluid-->
         </div>
         <!--End content-wrapper-->
         <!--Start Back To Top Button-->
         <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
         <!--End Back To Top Button-->
         <!--Start footer-->
         <footer class="footer">
            <div class="container">
               <div class="text-center">
                  Copyright © 2020 Brahmani Readymade store 
               </div>
            </div>
         </footer>
         <!--End footer-->
      </div>
      <!--End wrapper-->
      <!-- Bootstrap core JavaScript-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- simplebar js -->
      <script src="assets/plugins/simplebar/js/simplebar.js"></script>
      <!-- waves effect js -->
      <script src="assets/js/waves.js"></script>
      <!-- sidebar-menu js -->
      <script src="assets/js/sidebar-menu.js"></script>
      <!-- Custom scripts -->
      <script src="assets/js/app-script.js"></script>
      <!--Data Tables js-->
      <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
      <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
      <script>
         $(document).ready(function() {
          //Default data table
           $('#default-datatable').DataTable();
         
         
           var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
          } );
         
         table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
          
          } );
         
      </script>
   </body>
</html>