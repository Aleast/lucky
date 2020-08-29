<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin11</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="static/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="static/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="static/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="static/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:static/partials/_navbar.html -->
    <?php @$this->load->view("top");?>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:static/partials/_sidebar.html -->
      <?php @$this->load->view("left");?>

      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="d-flex">
                    <i class="mdi mdi-account-off"></i>
                    <p class="mb-0 hover-cursor text-danger">您暂时没有权限访问该功能，如有疑问请联系网站管理员！</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:static/partials/_footer.html -->
      
        <?php @$this->load->view("footer");?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  

  
  <!-- plugins:js -->
  <script src="static/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="static/vendors/chart.js/Chart.min.js"></script>
  <script src="static/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="static/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="static/js/off-canvas.js"></script>
  <script src="static/js/hoverable-collapse.js"></script>
  <script src="static/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="static/js/dashboard.js"></script>
  <script src="static/js/data-table.js"></script>
  <script src="static/js/jquery.dataTables.js"></script>
  <script src="static/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
