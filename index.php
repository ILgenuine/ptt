<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>


  <div class="container">
      <div class="container-card">
        <a href="#"><font class="text-grey">ใบสั่งซื้อ ></font></a> <font class="text-darkblue">TEST TEXT</font>

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


            <button  type="submit" class="btn btn-default">
              <span class="flaticon-plus-symbol-in-a-rounded-black-square"></span>
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

          <table class="table">
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Savings</th>
          </tr>
          <tr>
            <td>Peter</td>
            <td>Griffin</td>
            <td>$100</td>
          </tr>
          <tr>
            <td>Lois</td>
            <td>Griffin</td>
            <td>$150</td>
          </tr>
          <tr>
            <td>Joe</td>
            <td>Swanson</td>
            <td>$300</td>
          </tr>
          <tr>
            <td>Cleveland</td>
            <td>Brown</td>
            <td>$250</td>
          </tr>
          </table>
      </div>




  </div>





    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
