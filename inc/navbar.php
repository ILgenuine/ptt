<nav class="nav navbar padding-x-0">

        <div class="col-md-2">
            <a href="dashboard.php"><img src="assets/images/logo/logo.png" class="img-responsive" style="position:relative;top:5px" /></a>
        </div>
        <div class="col-md-10">

            <div class="row pull-right" style="overflow:inherit;">
              <ul class="nav navbar-nav pull-right mr-4">
                <li>
                  <div class="dropdown">
                      <div class="img-profile">
                        <img src="assets/images/avatar.png" class="img-responsive">
                      </div>
                      <button class="btn dropdown-toggle btn-drop-profile" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Mana Jaidee
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="editprofile.php">PROFILE</a></li>
                        <li><a href="resetpassword.php">RESET PASSWORD</a></li>
                        <li><a href="#">LOGOUT</a></li>
                      </ul>
                    </div>
                </li>


                <li><a href="#" class="nav-badge">
                     <span class="flaticon-shopping-cart icon-blue"></span>
                     <span class="badge"> 1 </span>
                </a></li>
                <li><a href="#" class="nav-badge">
                     <span class="flaticon-technology icon-blue"></span>
                     <span class="badge"> 1 </span>
                 </a></li>
                 <li><a href="#" class="nav-badge">
                      <span class="flaticon-letter icon-blue"></span>
                      <span class="badge"> 1 </span>
                  </a></li>
               </ul>
            </div>

            <div class="row pull-left">
              <ul class="nav navbar-nav pull-left">

                <?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>

                   <li><a class="text-grey-manubar <?php if($actual_link == "http://localhost/ptt/dashboard.php" || $actual_link == "http://localhost/ptt/dashboard.php") echo "active-menu"; else ""; ?>" href="dashboard.php">DASHBOARD</a></li>
                   <li><a class="text-grey-manubar <?php if($actual_link == "http://localhost/ptt/product.php" || $actual_link == "http://localhost/ptt/product.php") echo "active-menu"; else ""; ?>" href="product.php">PRODUCT</a></li>
                   <li><a class="text-grey-manubar <?php if($actual_link == "http://localhost/ptt/request.php" || $actual_link == "http://localhost/ptt/request.php") echo "active-menu"; else ""; ?>" href="request.php">REQUEST ENTRY</a></li>
                   <li><a class="text-grey-manubar <?php if($actual_link == "http://localhost/ptt/report.php" || $actual_link == "http://localhost/ptt/report.php") echo "active-menu"; else ""; ?>" href="report.php">REPORT</a></li>
                   <li><a class="text-grey-manubar <?php if($actual_link == "http://localhost/ptt/contact.php" || $actual_link == "http://localhost/ptt/contact.php") echo "active-menu"; else ""; ?>" href="contact.php">CONTACT US</a></li>
               </ul>
               <ul class="nav navbar-nav pull-right">
                  <li><input type="text" class="form-control search-form" aria-label="..."></li>
                  <li><button  type="submit" class="btn btn-default btn-search">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                      </button>
                  </li>
               </ul>
            </div>

        </div>

</nav>
