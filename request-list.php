<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

<!-- ===================================== TABLE ==================================== -->

      <div class="row inbox-set">
        <div class="col-sm-12 text-grey requst-set-title-bottom">
          <a class="inbox-icon-share">ใบสั่งซื้อสินค้า</a>
          <font class="text-grey"> > </font>
          <a class="text-darkblue cursor-pointer">รายการใบสั่งซื้อทั้งหมด</a>
        </div>


        <div class="col-sm-8">
          <select class="custom-option requst-set-col-3">
            <option>test1</option>
            <option>test2</option>
            <option>test3</option>
            <option>test4</option>
          </select>
        </div>

        <div class="col-sm-4 text-right">

          <form class="form-inline">
            <div class="form-group requst-mr5">
              <button type="submit" class="btn requst-btn-title-plus padding-x-0 requst-set-bnt-size">
                  <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
              </button>
              <label class="text-grey ml-3">Keep On Shelf</label>
            </div>

            <div class="form-group">
              <button type="submit" class="btn requst-btn-title-plus padding-x-0 requst-set-bnt-size">
                  <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
              </button>
              <label class="text-grey ml-3">As Request</label>
            </div>

          </form>
        </div>



        <div class="col-sm-12 mt-4">
          <table class="width100 table">
            <tr>
              <th class="text-center" style="width: 5%;">No.</th>
              <th class="text-center" style="width: 11.25%;">Request Entry</th>
              <th class="text-center" style="width: 11.25%;">Request Date ▼</th>
              <th class="text-center" style="width: 11.25%;">Request No.</th>
              <th class="text-center" style="width: 11.25%;">QTY</th>
              <th class="text-center" style="width: 11.25%;">Unit</th>
              <th class="text-center" style="width: 11.25%;">Price Total ▼</th>
              <th class="text-center" style="width: 11.25%;">Delivery Date ▼</th>
              <th class="text-center" style="width: 11.25%;"></th>
              <th class="text-center" style="width: 5%;"></th>
            </tr>

            <tr>
              <td class="text-center text-grey">1</td>
              <td class="text-center text-blue">Keep On Shelf</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-001</td>
              <td class="text-center text-grey">134</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">400,212 B.</td>
              <td class="text-center text-grey">02/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">2</td>
              <td class="text-center text-red">As Request</td>
              <td class="text-center text-grey">05/01/2561</td>
              <td class="text-center text-grey">RE-01-002</td>
              <td class="text-center text-grey">26</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">98,011 B.</td>
              <td class="text-center text-grey">06/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">3</td>
              <td class="text-center text-red">As Request</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-003</td>
              <td class="text-center text-grey">134</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">400,212 B.</td>
              <td class="text-center text-grey">02/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">4</td>
              <td class="text-center text-red">As Request</td>
              <td class="text-center text-grey">05/01/2561</td>
              <td class="text-center text-grey">RE-01-003</td>
              <td class="text-center text-grey">26</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">98,011 B.</td>
              <td class="text-center text-grey">06/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">5</td>
              <td class="text-center text-blue">Keep On Shelf</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-006</td>
              <td class="text-center text-grey">134</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">400,212 B.</td>
              <td class="text-center text-grey">02/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">6</td>
              <td class="text-center text-blue">Keep On Shelf</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-006</td>
              <td class="text-center text-grey">134</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">400,212 B.</td>
              <td class="text-center text-grey">02/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">7</td>
              <td class="text-center text-blue">Keep On Shelf</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-007</td>
              <td class="text-center text-grey">26</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">98,011 B.</td>
              <td class="text-center text-grey">06/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">8</td>
              <td class="text-center text-red">As Request</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-008</td>
              <td class="text-center text-grey">134</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">400,212 B.</td>
              <td class="text-center text-grey">02/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">9</td>
              <td class="text-center text-red">As Request</td>
              <td class="text-center text-grey">05/01/2561</td>
              <td class="text-center text-grey">RE-01-009</td>
              <td class="text-center text-grey">26</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">98,011 B.</td>
              <td class="text-center text-grey">06/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>

            <tr>
              <td class="text-center text-grey">10</td>
              <td class="text-center text-blue">Keep On Shelf</td>
              <td class="text-center text-grey">01/01/2561</td>
              <td class="text-center text-grey">RE-01-010</td>
              <td class="text-center text-grey">134</td>
              <td class="text-center text-grey">ชิ้น</td>
              <td class="text-center text-grey">400,212 B.</td>
              <td class="text-center text-grey">02/01/2561</td>
              <td class="text-center"><a class="inbox-icon-share" id="underline">ดูรายละเอียด</a></td>
              <td class="text-center"><a class="glyphicon glyphicon-download-alt inbox-icon-share"></a></td>
            </tr>
          </table>
        </div>


        <div class="col-sm-12 mt-4">
          <div class="text-center">
            <ul class="pagination">
              <li>
                <a class="inbox-pagination inbox-border-none pagination-right-set" href="#">
                  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                </a>
              </li>
              <li><a class="inbox-pagination" href="#">1</a></li>
              <li><a class="inbox-pagination" href="#">2</a></li>
              <li><a class="inbox-pagination" href="#">3</a></li>
              <li><a class="inbox-pagination" href="#">4</a></li>
              <li><a class="inbox-pagination" href="#">5</a></li>
              <li>
                <a class="inbox-pagination inbox-border-none pagination-right-set" href="#" >
                  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>






    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
