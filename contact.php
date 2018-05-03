<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>
        <div class="row contact-row text-grey">


          <div class="col-md-6">
            <div class="col-md-12"><p class="contact-text-haed"><b>บริษัท พีทีที โกลบอล เคมิคอล จำกัด (มหาชน)</b></p></div>
            <div class="col-md-12 contact-pb-1">
              <div class="col-md-1"><i class="flaticon-office contact-pr-0"></i></div>
              <div class="col-md-11 contact-pl-5 contact-hidden-1">Head Office เลขที่ 555/1 ศูนย์เอนเนอร์ยี่คอมเพล็กซ์ อาคารเอกชั้น 3,10 ถนนวิภาวดีรังสิต แขวงจอมพล เขตจตุจักร กรุงเทพ 10900</div>
            </div>

            <div class="col-md-12 contact-pb-1">
              <div class="col-md-1"><i class="flaticon-telephone contact-pr-0"></i></div>
              <div class="col-md-11 contact-pl-5 contact-hidden-2">02-2265-8400</div>
            </div>

            <div class="col-md-12 contact-pb-1">
              <div class="col-md-1"><i class="flaticon-technology-1 contact-pr-0"></i></div>
              <div class="col-md-11 contact-pl-5 contact-hidden-2">02-2265-8500</div>
            </div>

            <div class="col-md-12">
              <div><img src="assets/images/Head-Office.jpg" width="100%" height="358" style="border: solid 1px #DCF3FE;"></div>
            </div>
          </div>



          <div class="col-md-6 contact-background-set" style="position: relative;">
              <div class="form-group">
                <label class="control-label col-md-3 contact-label">เลือกหัวข้อการติดต่อ</label>
                <div class="col-md-9">
                  <select class="form-control contact-formborser contact-select" id="sel1">
                    <option>ฝ่ายการขาย</option>
                    <option>ฝ่าย IT</option>
                    <option>สมัครงาน</option>
                    <option>อื่นๆ</option>
                  </select>
                </div>
              </div>

              <div class="form-group contact-fromgroup">
                <label class="control-label col-md-3 contact-label">ชื่อ - นามสกุล</label>
                <div class="col-md-9">
                    <input type="text" class="form-control contact-formborser contact-mb-1" id="name-lastname">
                </div>
              </div>

              <div class="form-group contact-fromgroup">
                <label class="control-label col-md-3 contact-label">บริษัท</label>
                <div class="col-md-9">
                    <input type="text" class="form-control contact-formborser contact-mb-1" id="office">
                </div>
              </div>


              <div class="form-group contact-fromgroup">
                <label class="control-label col-md-3 contact-label">เบอร์โทร</label>
                <div class="col-md-9">
                    <input type="text" class="form-control contact-formborser contact-mb-1" id="phone">
                </div>
              </div>

              <div class="form-group contact-fromgroup">
                <label class="control-label col-md-3 contact-label">อีเมล</label>
                <div class="col-md-9">
                    <input type="email" class="form-control contact-formborser contact-mb-1" id="email">
                </div>
              </div>

              <div class="form-group contact-fromgroup">
                <label class="control-label col-md-2 contact-label">หัวข้อ</label>
                <div class="col-md-10">
                    <input type="text" class="form-control contact-formborser contact-mb-1" id="title">
                </div>
              </div>

              <div class="form-group contact-fromgroup">
                <label class="control-label col-md-2 contact-label">ข้อความ</label>
                <div class="col-md-10">
                    <textarea class="form-control contact-formborser contact-mb-1" rows="8" id="comment" style="resize: none;"></textarea>
                </div>
              </div>
          </div>


          <div class="col-md-12">
            <div class="contact-position-right contact-fromgroup">
              <button type="button" class="btn-primary contact-btn-size">ตกลง</button>
              <button type="button" class="btn btn-default btn-ghost contact-btn-size" style="margin-top: -10px;">ยกเลิก</button>
            </div>
          </div>

        </div>



    <?php include_once('inc/footer.php'); ?>

  </body>



</html>

<?php include_once('inc/footer-script.php'); ?>

