<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); ?>

<!-- ===================================== TABLE ==================================== -->
      <div class="row inbox-set">
        <div class="col-sm-8">
          <label class="text-darkblue inbox-set-lable">Inbox</label>
        </div>
        <div class="col-sm-2">
            <input placeholder="ค้นหา" type="text" class="form-control search-form">
            <button class="search-box">
              <span class="glyphicon glyphicon-search form-control-feedback right-15"></span>
            </button>
        </div>

        <div class="col-sm-2 mt-2 text-right">
          <form class="form-inline">
            <div class="form-group">
              <a  role="button" class="btn requst-btn-title-plus padding-x-0 requst-set-bnt-size" >
                  <i class="glyphicon glyphicon-plus pt-2-5" aria-hidden="true"></i>
              </a>
              <label class="text-grey mr-0 ml-3">เพิ่มหัวข้อคำถาม</label>
            </div>
          </form>
        </div>







        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="glyphicon glyphicon-remove-circle custom-close" aria-hidden="true"></i>
                          </button>
                          <h4 class="modal-title text-darkblue">หัวข้อคำถาม</h4>
                      </div>
                      <div class="modal-body">



                          <div class="row">


                              <!-- left chat-->
                              <div class="col-sm-12">
                                <div class="pull-left">
                                    <font class="text-grey">มานะใจดี 30/03/2561 09.00 น.</font><br>
                                      <div class="pull-left">
                                        <img src="assets/images/footer/sp.jpg" class="footer-sp" style="position:relative;top:5px" />
                                      </div>
                                      <div class="pull-left left-chat-mt">
                                        <font class="left-chat-bubble">
                                          สอบถาม
                                        </font>
                                      </div>
                                </div>
                              </div>




                              <!-- Right chat-->
                              <div class="col-sm-12 pull-right">
                                <div class="pull-right">
                                  <font class="text-grey">Web Master 30/03/2561 09.10 น.</font><br>
                                  <div class="pull-right">
                                    <img src="assets/images/footer/sp.jpg" class="footer-sp" style="position:relative;top:5px" />
                                  </div>
                                  <div class="pull-right right-chat-mt">
                                    <font class="right-chat-bubble">
                                      คำตอบ
                                    </font>
                                  </div>
                                </div>
                              </div>




                              <!-- left chat-->
                              <div class="col-sm-12">
                                <div class="pull-left">
                                    <font class="text-grey">มานะใจดี 30/03/2561 09.15 น.</font><br>
                                      <div class="pull-left">
                                        <img src="assets/images/footer/sp.jpg" class="footer-sp" style="position:relative;top:5px" />
                                      </div>
                                      <div class="pull-left left-chat-mt">
                                        <font class="left-chat-bubble">
                                          สอบถาม
                                        </font>
                                      </div>
                                </div>
                              </div>


                          </div>




                      </div>
                      <div class="modal-footer">
                          <div class="row">
                            <div class="col-sm-10  padding-x-0">
                              <input placeholder="ค้นหา" type="text" class="form-control search-form" style="z-index:600;">
                            </div>
                            <div class="col-sm-2">
                                <div class="col-sm-12 mt-2">
                                  <button  type="submit" class="btn btn-default btn-primary w-100">
                                   ส่ง
                                  </button>
                                </div>
                                <div class="col-sm-12 mt-2">
                                  <div class="file-upload-frame">
                                      <span class="btn btn-file btn-ghost  w-100">
                                        แนบไฟล์
                                        <input class="re-decorate-file" type="file">
                                      </span>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>













        <div class="col-sm-12 mt-4">
          <table class="width100 table">
            <tr>
              <th class="text-center" style="width: 5%;">No.</th>
              <th class="text-center" style="width: 47%;">Topic</th>
              <th class="text-center" style="width: 10%;">Message From</th>
              <th class="text-center" style="width: 13%;">Message Date ▼</th>
              <th class="text-center" style="width: 10%;">Message Reply</th>
              <th class="text-center" style="width: 10%;">Mesage Date ▼</th>
              <th class="text-center" style="width: 5%;"></th>
            </tr>

            <tr>
              <td class="text-center text-grey">1</td>
              <td class="text-darkblue">หัวข้อคำถาม AA</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">2</td>
              <td class="text-darkblue">หัวข้อคำถาม BB</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">3</td>
              <td class="text-darkblue">หัวข้อคำถาม CC</td>
              <td class="text-center text-grey">มานะ ใจดี</td>_
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">4</td>
              <td class="text-darkblue">หัวข้อคำถาม DD</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">5</td>
              <td class="text-darkblue">หัวข้อคำถาม EE</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">6</td>
              <td class="text-darkblue">หัวข้อคำถาม FF</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">7</td>
              <td class="text-darkblue">หัวข้อคำถาม GG</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">8</td>
              <td class="text-darkblue">หัวข้อคำถาม HH</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">9</td>
              <td class="text-darkblue">หัวข้อคำถาม II</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
            </tr>
            <tr>
              <td class="text-center text-grey">10</td>
              <td class="text-darkblue">หัวข้อคำถาม JJ</td>
              <td class="text-center text-grey">มานะ ใจดี</td>
              <td class="text-center text-grey">01/01/2561 09.00</td>
              <td class="text-center text-grey">มานี ใจดี</td>
              <td class="text-center text-grey">01/01/2561 10.00</td>
              <td class="text-center text-grey"><a href="#myModal" data-toggle="modal" class="glyphicon glyphicon-share inbox-icon-share"></a></td>
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
