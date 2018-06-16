 <!DOCTYPE html>

<html lang="vi">
<!-- Mirrored from php-huyvandnc.rhcloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 22:10:18 GMT -->
<head>
<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shop Game Việt Nam, Shop Giá Rẻ Uy Tín Hàng Đầu</title>
    <meta name="description" content="Shop lmht việt nam uy tín, shop bán acc game liên minh huyền thoại, nick lol cực rẻ và nhanh gọn, shop lmht vn garena" />
    <meta name="keywords" content="Shop lmht vn, shop acc lmht, shop ban acc lmht, shop lien minh huyen thoai." />
    <meta name="msvalidate.01" content=" Shop LMHT Việt Nam, Shop Bán ACC Liên Minh Huyền Thoại Uy Tín">
    <meta content="293277611088802" property="fb:app_id">
    <meta content="vi_VN" property="og:locale">
    <meta content="article" property="og:type"
	<meta name="robots" content="noodp,index,follow" />
	<meta name="revisit-after" content="1 days" />
	<meta name="author" content="Triệu KT" />
	<link rel="author" href="https://www.facebook.com/Gameonline.CF" />
	<meta name="copyright" content="Copyright 2016  - All rights Reserved." />
	<link rel="apple-touch-icon" href="/assets/img/quyendz.jpg" />
	<link href="/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	
	<?php if(!$not): ?>
	<meta content="<?=base_url()?>acc?id=<?=$query[0]['id']?>" property="og:url">
    <meta content="Bán tài khoản <?=$query[0]['loainick']?> #<?=$query[0]['id']?> giá <?=number_format($query[0]['gia'], 0, '.', '.')?>  vnđ" property="og:title">
    <meta content="<?php $image = explode("|",$query[0]['hinhanh']); echo $image[0];?>" property="og:image">
    <meta content="<?=$query[0]['noidung']?>" property="og:description">
	<?php endif; ?>
<!-- Web fonts -->
    <link href=
    "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"
    rel="stylesheet"><!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/oneui.min-2.2.css" rel="stylesheet">
    <link href="assets/js/slick/slick.min.css" rel="stylesheet">
    <link href="assets/js/slick/slick-theme.min.css" rel="stylesheet">
    <link href="assets/css/core.css" rel="stylesheet">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=293277611088802";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" class=
                "navbar-toggle collapsed" data-target="#navbar" data-toggle=
                "collapse" type="button"><span class="sr-only">Toggle
                navigation</span> <span class="icon-bar"></span> <span class=
                "icon-bar"></span> <span class="icon-bar"></span></button>
                <div class="animbrand">
                    <a class="navbar-brand animate" href="index.php" title=
                    "ACCLMHT247"><img alt="" src=
                    "assets/img/ckc.png"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
			
			
               <ul class="nav navbar-nav">
									<li>
										<a href="#" data-toggle="modal" data-target="#huongdan">Hướng Dẫn Mua ACC</a>
									</li>
                    <li>
                        <a href=
                        "https://www.facebook.com/Gameonline.CF"
                        target="_blank">Liên hệ Admin Shop</a>
                    </li>
                   
                </ul>
                <ul class="nav navbar-nav navbar-right">
				        <?php if (@$user_profile):  // call var_dump($user_profile) to view all data ?>
					   <li class="dropdown">
					   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					   <img class="avatar hidden-xs" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" alt="Avatar"> Chào <strong><?=$user_profile['name']?></strong> 
					   <span class="caret"></span></a> <ul class="dropdown-menu"> <li class="dropdown-header">
					   <i class="si si-wallet pull-right"></i><strong class="text-primary"><?=number_format($money, 0, '.', '.')?> <sup class="text-muted">vnđ</sup></strong></li> 
					      <?php if (isset($admin)): ?>
					   <li><a href="javascript:void(0);" id="view-profiles"><i class="fa fa-plus pull-right"></i>Đăng acc</a></li>
					   <?php endif; ?>
					   <li><a href="lichsu"><i class="si si-list pull-right"></i>Lịch sử Giao dịch</a></li> <li><a href="<?= $logout_url ?>">
					   <i class="si si-logout pull-right"></i>Thoát</a></li> </ul> </li>
					   
       
                                
						<?php else: ?>
						  <li>
                        <a href="<?= $login_url ?>"><span aria-hidden=
                        "true" class="fa fa-facebook-square"></span> Đăng nhập</a>
                    </li><?php endif; ?>
                   
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thống kê</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row items-push">
                            <div class="col-md-3">
                                <div class="text-muted">
                                    <small><i class=
                                    "si si-game-controller"></i> LMHT</small>
                                </div>
                                <div class="font-w600">
                                    <span class="text-danger" data-to="<?=$lienminh?>"
                                    data-toggle="countTo"></span> tài khoản
                                </div>
                            </div>
                          <div class="col-md-3">
                                <div class="text-muted">
                                    <small><i class=
                                    "si si-game-controller"></i> Đột
                                    Kích</small>
                                </div>
                                <div class="font-w600">
                                    <span class="text-danger" data-to="<?=$dotkich?>"
                                    data-toggle="countTo"></span> tài khoản
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-muted">
                                    <small><i class="si si-users"></i> Thành
                                    viên</small>
                                </div>
                                <div class="font-w600">
                                    <span class="text-danger" data-to="<?=$user?>"
                                    data-toggle="countTo"></span> đứa
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-muted">
                                    <small><i class="si si-users"></i> Đang
                                    Online</small>
                                </div>
                                <div class="font-w600">
                                    <span class="text-success" data-to="<?=$useronline?>"
                                    data-toggle="countTo"></span> khách,
                                    <span class="text-danger" data-to="<?=$memonline?>"
                                    data-toggle="countTo"></span> thành viên
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nạp thẻ nhanh</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row text-center">
                            <form id="topup-card" name="topup-card">
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-group">
                                        <label class="sr-only">Số Seri</label>
                                        <input class="form-control input-sm"
                                        id="" name="cardSerial" placeholder=
                                        "Mã serial" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-group">
                                        <label class="sr-only">Mã thẻ</label>
                                        <input class="form-control input-sm"
                                        id="" name="cardPin" placeholder=
                                        "Mã thẻ" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-group">
                                        <select class=
                                        "form-control input-sm input-block"
                                        name="telcoCode">
                                         <option value="1">Viettel</option>
											<option value="2">Mobiphone</option>
											<option value="3">Vinaphone</option>
											<option value="4">Gate</option>
											<option value="6">VNM</option>
											<option value="7">Zing</option>
											<option value="8">Bit</option>
                                  
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-3">
                                    <div class="form-group">
                                        <button class=
                                        "btn btn-success btn-sm btn-block"
                                        data-loading-text="Đang xử lý..." id=
                                        "btn-topup" type="button">Nạp
                                        luôn</button>
                                    </div>
                                </div>
                            </form>
							<img src="http://shopgamedotkich.com/assets/img/card.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <?php if(!$not): ?>
      <div class="block remove-margin-b remove-padding-b">
    <div class="block-content bg-gray-lighter text-center remove-padding-b">
        <h2 class="page-heading">Tài khoản <?=$query[0]['loainick']?> #<?=$query[0]['id']?> - Giá: 
                                           <span class="text-danger"><?=number_format($query[0]['gia'], 0, '.', '.');?> <sup class=
                                            "text-muted">vnđ </sup></span>  </h2>
        <div class="font-s14">
            <?=$query[0]['noidung']?>
        </div><button class="btn btn-primary push-15-t" data-loading-text="Chờ..." id="btn-buy" type="button"><i class="fa fa-check"></i> Mua luôn</button>
    </div>
</div>
    
       <div class="block bg-gray-lighter remove-margin-b">
            <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#imgs" aria-controls="imgs" role="tab" data-toggle="tab" aria-expanded="true">Hình ảnh</a></li>
        <? if($query[0]['loainick']=="LMHT"): ?>
        <li class=""><a href="#champions" aria-controls="champions" role="tab" data-toggle="tab" aria-expanded="false">Tướng <span class="label label-danger"><?=count(explode('|',$query[0]['champs']));?></span></a></li>
        <li class=""><a href="#skins" aria-controls="skins" role="tab" data-toggle="tab" aria-expanded="false">Skin <span class="label label-danger"><?=count(explode('|',$query[0]['skins']));?></span></a> </li>
        <? endif; ?>
      </ul>
      <div class="block-content bg-gray-lighter">
        <div class="row items-push remove-padding-b">
                      <div class="col-xs-12 remove-margin-b">

            <div class="font-s13 text-muted"><?=$query[0]['noidung']?></div>
                    </div></div>
      </div>
        <div class="block-content tab-content remove-padding-b">
                    <div role="tabpanel" class="tab-pane active" id="imgs">
                         
       <!-- Slider with dots and hover arrows -->
          <div class="js-slider slick-nav-white slick-nav-hover" data-slider-dots="true" data-slider-arrows="true">
          <?php $image = explode("|",$query[0]['hinhanh']); ?>
                            <?php foreach($image as $row): ?>
 <img class="img-responsive" src="<?=$row?>">                       
                        <?php endforeach; ?>      
                      
            
          </div>
          <!-- END Slider with dots and hover arrows -->
                    </div>
                <? if($query[0]['loainick']=="LMHT"): ?>
                    <div role="tabpanel" class="tab-pane" id="champions">
          <ul class="hide-bullets">
                           <?php
                    $champs = explode('|',$query[0]['champs']);
                  foreach($champs as $row): ?>
                    <?php $champs1 = explode('-',$row); ?>
                              <li class="col-xs-3 col-sm-1"><img class="img-responsive thumbnail" src="<?=base_url()?>assets/champs/<?=$champs1[0]?>_Web_0.jpg" title="<?=$champs1[1]?>"></li>
              <?php endforeach; ?>

                
          </ul>
        </div>
                    <div role="tabpanel" class="tab-pane" id="skins">
          <ul class="hide-bullets">
                          <?php
                  $skins = explode('|',$query[0]['skins']);
                  foreach($skins as $row): ?>
                  <?php $skins1 = explode('-',$row); ?>
                           <li class="col-xs-6 col-sm-2">
              <div class="featured-article">
                <img class="img-responsive thumbnail" src="<?=base_url()?>assets/skins/<?=$skins1[0]?>.jpg" title="<?=$skins1[1]?>">
                <div class="block-title text-center"><?=$skins1[1]?></div>
              </div>
            </li>
              <?php endforeach; ?>

                     
          </ul>
        </div>
      
            <? endif; ?>
      </div>
         
      <div class="block-content remove-padding-b">
                                <div class="fb-comments" data-width="100%" data-href="<?=base_url()?>acc?id=<?=$query[0]['id']?>" data-numposts="5" data-order-by="reverse_time"></div>

    </div>
</div>
<?php else: ?>
<div class="block remove-margin-b remove-padding-b">
    <div class="alert alert-danger">
        <span><strong>Lỗi!</strong> Tài khoản này không có hoặc đã bị xóa.</span>
    </div>
</div>
<?php endif; ?>
        <footer class=
        "content-mini content-mini-full font-s12 bg-gray-lighter clearfix" id=
        "page-footer">
          <div class="text-center"><span class="js-year-copy">Copyright © 2016.</span> <a class="font-w600"
                href="http://shopgamedotkich.com">Shop LMHT VN</a> | Shop ACC Liên Minh Huyền Thoại Việt Nam<br/>
				Shop LMHT Việt Nam - Bán ACC Giá Rẻ - Đảm Bảo Uy Tín<br/>
				Website được thiết kể và chỉnh sửa bởi: <a title="Ckimcute" href="http://Facebook.com/Gameonline.CF" rel="nofollow" target="_blank">Triệu KT ™</a><br/>
				<a rel="dofollow" title="Shop bán acc liên minh" target="_blank" href="http://shopgamedotkich.com/"><b>Shop Liên Minh</i>
             </a>
            </div>
			
			
            
        </footer>
    </div>
    <div class="modal fade" id="requestModal" role="dialog" tabindex="-1">
    </div>
    
    <script src="assets/js/jquery.min.js">
    </script> 
    <script src="assets/js/bootstrap.min.js">
    </script> 
    <script src="assets/js/jquery.slimscroll.min.js">
    </script> 
    <script src="assets/js/bootstrap-notify/bootstrap-notify.min.js">
    </script> 
    <script src="assets/js/bootstrap-show-password.js">
    </script> 
    <script src="assets/js/slick/slick.min.js">
    </script> 
    <script src="assets/js/jquery.appear.min.js">
    </script> 
    <script src="assets/js/jquery.countTo.min.js">
    </script> 
    <script src="assets/js/jquery.showHideItem.js">
    </script> 
    <script src="assets/js/core.js">
    </script> 
     <script type="text/javascript">
    $(document).ready(function() {
      var req;
      $("#btn-buy").click(function() {
        var $btn = $(this);
        $btn.button('loading');
        if (req) {
          req.abort();
        }
        req = $.ajax({
          url: "getacc?act=buy",
          type: "POST",
          data: "id=<?=$query[0]['id']?>"
        });
        req.done(function(response, textStatus, jqXHR) {
          var json = $.parseJSON(response);
          console.log(json);
          if (json.err == 0) {
            App.notifyTopCenter('<strong>Ok!</strong> ' + json.msg, 'success', 'fa fa-times');
          } else {
            App.notifyTopCenter('<strong>Opps!</strong> ' + json.msg, 'danger', 'fa fa-times');
          }
          $btn.button('reset');
        });
        event.preventDefault();
      });
    });</script>

    <!-- Mirrored from php-huyvandnc.rhcloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 22:11:19 GMT -->
		<!-- Modal -->
<div class="modal fade" id="huongdan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="modal-title" id="myModalLabel">Hướng Dẫn Mua Acc Tại SHOP</h3>
</div>
<div class="modal-body">
<div class="panel-body">
		        <h4>Bước 1: Các bạn bấm vào đăng nhập bằng facebook sau đó chấp nhận ứng dụng của SHOP</h4><br />
			<img class="img-responsive push" src="https://3.bp.blogspot.com/-HZRKEhvmVs4/V70fb9z7DRI/AAAAAAAAQRk/FAkHEoUof_w__ITBWw-arhB1lD41iIXZQCLcB/s320/2.PNG" alt="" border="0" /><br><br>
                        <hr>
		        <h4>Bước 2: Sau khi đăng nhập nó sẽ hiển thị như thế này :</h4><br />
			<img class="img-responsive push" src="https://i.imgur.com/0oJRVOl.png" alt="" border="0" />
                        <hr>
		        <h4>Bước 3: Các bạn chọn acc mình muốn mua và xem giá Tiền rồi nạp thẻ cho đủ tiền mua acc tại ô nạp thẻ</h4><br />
			<img class="img-responsive push" src="https://2.bp.blogspot.com/-Oy_6YVCA2N8/V70gN7UnzDI/AAAAAAAAQR0/Q3MbQG5gwNYDlO4TsC9kdR6kgKc07ywMgCLcB/s320/4.PNG" alt="" border="0" />
                        <hr>
		        <h4>Bước 4: Bấm mua luôn nếu đã đủ tiền trong tài khoản.</h4><br />
			<img class="img-responsive push" src="https://i.imgur.com/uxqMFqP.png" alt="" border="0" />
                        <hr>
		        <h4>Bước 5: Sau khi mua acc. Hệ thống sẽ thông báo mua acc thành công. Các bạn chỉ việc vào phần lịch sử giao dịch và nhận acc. các bạn vào sẽ thấy tên tài khoản còn pass sẽ bị che đi ,cách để thấy pass là các bạn bôi đen là thấy nha. shop làm vậy để anh em ngồi net ko sợ bị nhìn pass
</h4><br />
			<img class="img-responsive push" src="https://i.imgur.com/0oJRVOl.png" alt="" border="0" />
			<img class="img-responsive push" src="https://2.bp.blogspot.com/-vn5Qo_ZI1Ss/V70hT038U1I/AAAAAAAAQSE/8ai2YWFTAMgxFF2fP0It3f0L0Va443HwwCLcB/s640/6.PNG" alt="" border="0" />
</div></div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>


</body>
</html>
