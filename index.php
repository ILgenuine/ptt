<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>


    <div class="container custom-container">

        <a href="#"><font class="text-grey">ใบสั่งซื้อ ></a></font> <font class="text-darkblue">TEST TEXT</font>

        <br>
        <br>

        <font class="title">ใบสั่งซื้อ</font>

        <br>
        <br>

        <select class="custom-option">
          <option>test1</option>
          <option>test2</option>
          <option>test3</option>
          <option>test4</option>
        </select>

        <br>
        <br>


        <div class="col-sm-12 padding-x-0">
             <input placeholder="ค้นหา" type="text" class="form-control search-form">
              <button class="search-box">
               <span class="glyphicon glyphicon-search form-control-feedback" ></span>
              </button>

         </div>

        <br>
        <br>


        <button  type="submit" class="btn btn-default btn-primary">
          btn-primary
        </button>

        <button  type="submit" class="btn btn-default btn-ghost">
          btn-ghost
        </button>

        <button  type="submit" class="btn btn-default btn-quantity">
              <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        </button>

        <button  type="submit" class="btn btn-default btn-quantity">
              <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
        </button>


        <button type="submit" class="btn btn-title-plus padding-x-0">
          <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        </button>



        <br>
        <br>

        <font class="text-blue">test text</font>
        /
        <font class="text-darkblue">test text</font>
        /
        <font class="text-grey">test text</font>
        /
        <font class="text-red">test text</font>

        <br>
        <br>


        <div style="overflow:hidden;">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <div id="datetimepicker12"></div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker12').datetimepicker({
                        inline: true,
                        sideBySide: true
                    });
                });
            </script>
        </div>

    </div>





    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
