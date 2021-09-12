
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/rizal.png" />

  <title><?php echo $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                 <img width="70" height="70" src="<?php echo base_url(); ?>img/rizal.png"><br><br>
                 <h6><b>Nyamitanga Health Center III</b></h6>
                <h1 class="h4 text-gray-900 mb-4">Patient Record Management System</h1>
              </div>
              <hr>

            <?php if($this->session->flashdata('newpass_success')): ?>
          
          <?php echo "<div class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('newpass_success') ."<h6><i class='con fa fa-check'></i></h6></div>" ?>
          
           <?php endif; ?>
           
           <?php if($this->session->flashdata('failed_login')): ?>
          
          <?php echo "<div class='alert alert-danger alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('failed_login') ."<h6><i class='con fa fa-close '></i></h6></div>" ?>
          
           <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
          
          <?php echo "<div class='alert alert-danger alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('login_failed') ."<h6><i class='con fa fa-close '></i></h6></div>" ?>
          
           <?php endif; ?>

 
                <?php 
                 
                  $this->load->view($logging);

                 ?>
              <hr>
              <div class="text-center">
                <a style="text-decoration: none; color: black;" class="small" href="<?php echo base_url(); ?>indexcontrol/forgotpassuser">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a style="color: black; text-decoration: none" class="small" href="<?php echo base_url(); ?>standardusercontrol/standarduserview">Login to Standard account</a>
              </div>
              
            </div>
          </div>
           <div class="col-lg-3 d-none d-lg-block"></div>
        </div>
      </div>
    </div>

  </div>



</body>

</html>
