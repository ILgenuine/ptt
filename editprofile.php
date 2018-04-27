<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

        <div class="div header-div edit-profile mt-4">
              <div class="row">
                <div class="col-sm-9 mb-4">
                  <div class="row px-5  mt-4">
                    <div class="col-sm-3 mt-4">
                      คำนำหน้า (ภาษาไทย)
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>


                    <div class="col-sm-3 mt-4">
                      คำนำหน้า (ภาษาอังกฤษ)
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>


                    <div class="col-sm-3 mt-4">
                      ชื่อจริง (ภาษาไทย)
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>


                    <div class="col-sm-3 mt-4">
                      ชื่อจริง (ภาษาอังกฤษ)
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>



                    <div class="col-sm-3 mt-4">
                      นามสกุล (ภาษาไทย)
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>



                    <div class="col-sm-3 mt-4">
                      นามสกุล (ภาษาอังกฤษ)
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>



                    <div class="col-sm-3 mt-4">
                      เบอร์โทร
                    </div>
                    <div class="col-sm-3 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>

                    <div class="col-sm-1 mt-4">
                      Email
                    </div>
                    <div class="col-sm-5 mt-4">
                      <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
                    </div>



                    <div class="col-sm-3 mt-4">
                      Division :
                    </div>
                    <div class="col-sm-9 mt-4">
                      <select class="custom-option">
                        <option>test1</option>
                        <option>test2</option>
                        <option>test3</option>
                        <option>test4</option>
                      </select>
                    </div>



                    <div class="col-sm-3 mt-4">
                      ที่อยู่
                    </div>
                    <div class="col-sm-9 mt-4">
                      <textarea type="text" class="form-control search-form" rows="15" style="margin:0px;text-align:left;" aria-label="..."></textarea>
                    </div>



                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="row mt-4 mb-4">
                    <div class="col-sm-12">
                      <div class="profile-picture-frame mt-4 mb-4">
                        <img src="assets/images/profile-picture.png" alt="..." class="profile-picture">
                        <div class="edit">
                          <span class="btn btn-file">
                            <span class="flaticon-create-new-pencil-button text-grey" aria-hidden="true"></span>
                            <input type="file">
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="profile-picture-frame">
                        <img src="assets/images/sign-picture.png" alt="..." class="profile-picture">
                        <div class="edit">
                          <span class="btn btn-file">
                            <span class="flaticon-create-new-pencil-button text-grey" aria-hidden="true"></span>
                            <input type="file">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <div class="div header-div edit-profile mt-4 mb-4">
          <div class="row px-5">
            <div class="col-sm-2 mt-4">
                User Name :
            </div>
            <div class="col-sm-4 mt-4">
                <input type="text" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
            </div>
            <div class="col-sm-6 mt-4">
            </div>
          </div>
          <div class="row px-5">
            <div class="col-sm-2 mt-4 mb-4">
                Password :
            </div>
            <div class="col-sm-4 mt-4 mb-4">
                <input type="password" class="form-control search-form" style="margin:0px;text-align:left;" aria-label="...">
            </div>
            <div class="col-sm-6 mt-4 mb-4">
            </div>
          </div>
        </div>

        <div class="row px-5">
          <div class="text-center mb-4">

                        <button  type="submit" class="btn btn-default btn-primary">
                          <font class="text-white sumbit-text">
                            ยืนยันข้อมูล
                          </font>
                        </button>

                        <button  type="submit" class="btn btn-default btn-ghost">
                          <font class="sumbit-text">
                            ยกเลิก
                          </font>
                        </button>
          </div>
        </div>


    <?php include_once('inc/footer.php'); ?>

  </body>



</html>




<?php include_once('inc/footer-script.php'); ?>
