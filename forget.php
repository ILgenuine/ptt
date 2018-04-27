<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

    <div class="col-12">

      <div class="header-img-frame" style="height:400px;">
        <div style="background: url(assets/images/bg/header-bg.jpg) fixed;z-index:-1;position:absolute;top:0;height:400px;width:100%;">
        </div>
          <!-- <img src="assets/images/bg/header-bg.jpg" class="img-responsive" style="width:100%;height:450px;z-index:-1;"/> -->

          <div class="redtext">
                <h1 class="redtext-title text-center pagination-centered">SP PTTGC</h1>
          </div>

          <div class="redtext-2 redtext-underline">
          </div>

          <div class="whitetext">
            <div class="section-content">
              <h3 class="redtext-title text-center pagination-centered">PARTNERSHIP OF CONSUMABLE CONTRACT</h3>
            </div>
          </div>
      </div>
    </div>


    <div class="container">
      <div class="login-container-card login-form">

          <div class="text-center"><font class="title">FORGET PASSWORD</font></div>

          <div class="col-sm-12">
              <div class="input-group width100">
                <label class="text-grey reset-label-set">User Name</label>
                <input type="text" class="form-control" placeholder="รหัสผ่านเก่า" aria-describedby="basic-addon1">
              </div>
          </div>

          <div class="col-sm-12">
              <div class="input-group width100">
                <label  class="text-grey reset-label-set">รหัสผ่านใหม่</label>
                <input type="Password" class="form-control" placeholder="รหัสผ่านใหม่" aria-describedby="basic-addon2">
              </div>
          </div>


          <div class="col-sm-12">
              <div class="input-group width100">
                <label  class="text-grey reset-label-set">ยืนยันรหัสผ่านใหม่</label>
                <input type="Password" class="form-control" placeholder="ยืนยันรหัสผ่านใหม่" aria-describedby="basic-addon3">
              </div>
          </div>
           

          
           <!-- ============= SUBMIT LOGIN ======================== -->
            <div class="col-sm-12 padding-x-0">
              <div class="input-group login-position-bnt">
                <button  type="submit" class="btn btn-default btn-primary login-bntsize-300px">
                ยืนยัน
              </button>
            </div>
          </div>


        

       </div>
    </div>





    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
