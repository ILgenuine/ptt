<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

    <div class="banner">
      <div class="img-banner">
        <img src="assets/images/ptt-banner.jpg" class="img-responsive">
      </div>
    </div>


    <div class="container">
      <div class="login-container-card login-form text-center">

          <font class="title">WELCOME</font>

        <div class="col-sm-12 padding-x-0 mt-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><i class="flaticon-user-1" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><i class="flaticon-keys" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
            </div>
         </div>
         <div class="col-sm-12 padding-x-0">
           <div class="input-group" style="margin-top: -15px;">
              <a href="#">
                <label class="text-grey login-label-forget">Forget Password</label>
              </a> 
           </div>
         </div>

          <div class="col-sm-12 padding-x-0">
            <div class="input-group login-position-bnt">
              <button  type="submit" class="btn btn-default btn-primary" style="width: 300px;">
              LOGIN
            </button>
          </div>
        </div>


        

  </div>
    </div>





    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
