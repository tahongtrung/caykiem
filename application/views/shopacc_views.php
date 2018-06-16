 <?php ?> 
<?php function time_stamp($time)
{

   $periods = array("giây", "phút", "giờ", "ngày", "tuần", "tháng", "năm", "thập kỉ");
   $lengths = array("60","60","24","7","4.35","12","10");

   $now = time();

       $difference     = $now - $time;
       $tense         = "trước";

   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
       $difference /= $lengths[$j];
   }

   $difference = round($difference);

 

   return "Cách đây $difference $periods[$j]";
}
?> 
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
    <meta name="msvalidate.01" content="shopgamedotkich.com, Shop LMHT Việt Nam, Shop Bán ACC Liên Minh Huyền Thoại Uy Tín">
    <meta content="293277611088802" property="fb:app_id">
    <meta content="http://shopgamedotkich.com" property="og:url">
    <meta content="vi_VN" property="og:locale">
    <meta content="article" property="og:type">
    <meta content="Shop LMHT Việt Nam, Shop Bán ACC Liên Minh Huyền Thoại Uy Tín"    property="og:title">
    <meta content="/assets/img/maxresdefault.jpg"  property="og:image">
    <meta content="Shop lmht việt nam uy tín, shop bán acc game liên minh huyền thoại, nick lol cực rẻ và nhanh gọn, shop lmht vn garena" property="og:description">
	<meta name="robots" content="noodp,index,follow" />
	<meta name="revisit-after" content="1 days" />
	<meta name="author" content="Triệu KT" />
	<link rel="author" href="https://www.facebook.com/Gameonline.CF" />
	<meta name="copyright" content="Copyright 2016 shopgamedotkich.com - All rights Reserved." />
	<link rel="apple-touch-icon" href="/assets/img/quyendz.jpg" />
	<link href="/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	
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
<div class="float-menu visible-lg-block">
         <div id="float-qr-code"><img alt="" src="assets/img/sp.jpg"></div><a class="float-btn" href="https://www.facebook.com/Gameonline.CF" style="background-image:url(assets/img/bg-float-btn-black.jpg);" target="_blank">Triệu KT</a>
		 <a class="float-btn" href="#" data-toggle="modal" data-target="#huongdan" style="background-image:url(assets/img/bg-float-btn-black.jpg);" target="_blank">Hướng dẫn mua</a>
        <a class="float-show block-notext" href="javascript:void(0);" id="float-hide-btn">&gt;&gt;&gt;</a>
    </div>
  <!-- Fixed navbar -->
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
                    "SHOPCFRE"><img alt="" src=
                    "assets/img/ckc.png"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">									
									<li>
										<a href="#" data-toggle="modal" data-target="#huongdan">Hướng Dẫn Hình Ảnh</a>
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
					    <?php if (isset($admin)): ?>
					   <li><a href="javascript:void(0);" id="view-profiles"><i class="fa fa-plus pull-right"></i>Đăng acc</a></li>
					   <li><a href="Admin"><i class="si si-list pull-right"></i>ADMIN</a></li> 
					   <?php endif; ?>
 <li><a href="#" data-toggle="modal" data-target="#thongtin"><i class="si si-user pull-right"></i>Thông Tin Cá Nhân</a></li> 
					   <li><a href="lichsu"><i class="si si-list pull-right"></i>Lịch sử Giao dịch</a></li> 
					   <li><a href="<?= $logout_url ?>"><i class="si si-logout pull-right"></i>Thoát</a></li> </ul> </li>
					   
       
                                
						<?php else: ?>
						  <li>
                        <a href="<?= $login_url ?>"><span aria-hidden=
                        "true" class="fa fa-facebook-square"></span>  Đăng Nhập Bằng Tài Khoản Facebook </a>
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
                                    data-toggle="countTo"></span> MEMBER
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
                        <h3 class="panel-title">Nạp thẻ Ngay Và Luôn</h3>
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
							<img src="http://garena.shop/assets/img/card.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Lịch Sử giao dịch</h3>
                    </div>
                    <div class="panel-body">
                         <marquee>
                             
                               <? include 'lsm.php'; ?>

                      </marquee>
                    </div>
                </div>
            </div>

       <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thông Báo từ Admin</h3>
                    </div>
                    <div class="panel-body">
                         <marquee>
                             
                               <? include 'lms.php'; ?>

                      </marquee>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="block">
            <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
		  <li class="active">
                    
                    <a href="#cf">Shop Đột Kích</a>
                </li>
                <li >

                    <a href="#lmht">Shop LMHT</a>
                </li> 
							
            </ul>
             <div class="tab-content">			 
							<div class="block tab-pane active" id="cf">
                    <div class="block-header remove-padding-b">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        Lọc theo Giá
                                    </div><select class=
                                    "js-cfprice-search form-control" id=
                                    "filterbyprice" name="filterbyprice" size=
                                    "1">
                                        <option value="0">
                                            Tất cả
                                        </option>
                                        <option value="1">
                                            Từ 50k trở xuống
                                        </option>
                                        <option value="2">
                                            Từ 50k đến 100k
                                        </option>
                                        <option value="3">
                                            Từ 100k đến 500k
                                        </option>
                                        <option value="4">
                                            Từ 500k đến 1 Triệu
                                        </option>
                                        <option value="5">
                                            Từ 1 Triệu trở lên
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="js-cf-list row items-push-2x text-center">
						 <?php foreach($querycf->result() as $row): ?>
                            <div class="col-sm-4 col-md-3 remove-margin-b"
                            data-filter-price="<?=$row->gia?>" >
                                <div class="block clickitem" data-id="<?=$row->id?>">
                                    <div class=
                                    "block-content ribbon ribbon-bookmark ribbon-danger text-center bg-gray-lighter">
									<?php if($row->promo > 0) : ?> <div class="ribbon-box">-<?=$row->promo?>%</div> <?php endif; ?>
<div class="wrapper-label">
<span class="label label-success">SHOP Triệu KT</span></div>
                                    <div class="item item-2x bg-crystal-op">
                                     <img alt="" class="img-responsive push"
                                         src="//cf.vtcgame.vn/vipmedia/images/images/logo-vip%20copy.png" ></div>
                                        <div class="h5 font-w600">
                                            Tài khoản CF #<?=$row->id?>
                                        </div>
                                        <div class="font-s12">
                                            <?=$row->noidung?>
                                        </div>
									
                                        <div class="text-danger font-w600">
										<?php if($row->promo > 0) : ?><span class="text-muted" style="text-decoration: line-through;">
                                           <?=number_format($row->giacu, 0, '.', '.');?></span> <?php endif; ?>
                                            <?=number_format($row->gia, 0, '.', '.');?> <sup class=
                                            "text-muted">vnđ</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                    
                        </div>
                    </div>
                </div>
                <div class="block tab-pane " id="lmht">
                    <div class="block-header remove-padding-b">
                        <div class="row">
													<div class="col-md-6"> <div class="input-group"> <div class="input-group-addon">Lọc theo Rank</div> <select class="js-rank-search form-control" id="filterbyrank" name="filterbyrank" size="1"> <option value="0">Tất cả</option> <option value="1">Chưa Rank</option> <option value="2">Đồng đoàn</option> <option value="3">Bạc đoàn</option> <option value="4">Vàng đoàn</option> <option value="5">Bạch Kim</option> <option value="6">Kim Cương</option> <option value="7">Cao Thủ</option> <option value="8">Thách Đấu</option> </select>  </div> </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        Lọc theo Giá
                                    </div><select class=
                                    "js-price-search form-control" id=
                                    "filterbyprice" name="filterbyprice" size=
                                    "1">
                                        <option value="0">
                                            Tất cả
                                        </option>
                                        <option value="1">
                                            Từ 50k trở xuống
                                        </option>
                                        <option value="2">
                                            Từ 50k đến 100k
                                        </option>
                                        <option value="3">
                                            Từ 100k đến 500k
                                        </option>
                                        <option value="4">
                                            Từ 500k đến 1 Triệu
                                        </option>
                                        <option value="5">
                                            Từ 1 Triệu trở lên
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="js-lmht-list row items-push-2x text-center">
						 <?php foreach($querylmht->result() as $row): ?>
                            <div class="col-sm-4 col-md-3 remove-margin-b" data-filter-rank="<?=$row->rank?>"
                            data-filter-price="<?=$row->gia?>">
                                <div class="block clickitem" data-id="<?=$row->id?>">
                                    <div class=
                                    "block-content ribbon ribbon-bookmark ribbon-danger text-center bg-gray-lighter">
									<?php if($row->promo > 0) : ?> <div class="ribbon-box">-<?=$row->promo?>%</div> <?php endif; ?>
                                    <div class="item item-2x bg-crystal-op">
                                        <img alt="" class="img-responsive push"
                                         src="assets/img/rank/base_icons/<?=$row->rank?>.png" ></div>
                                        <div class="h5 font-w600">
                                            Tài khoản LMHT #<?=$row->id?>
                                        </div>
                                       <!--<div class="font-s12">
                                            <?=$row->noidung?>
                                        </div>-->
																				<div class="font-s12">
                                            <?=$row->thongtin?>
                                        </div>
                                        <div class="text-danger font-w600">
										<?php if($row->promo > 0) : ?><span class="text-muted" style="text-decoration: line-through;">
                                           <?=number_format($row->giacu, 0, '.', '.');?></span> <?php endif; ?>
                                            <?=number_format($row->gia, 0, '.', '.');?> <sup class=
                                            "text-muted">vnđ</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
													
                          <?php endforeach; ?>
                    
                        </div>
                    </div>
                </div>
				
            </div>
      
        </div>
   <footer class=
        "content-mini content-mini-full font-s12 bg-gray-lighter clearfix" id=
        "page-footer">
          <div class="text-center"><span class="js-year-copy">Copyright © 2016.</span> <a class="font-w600"
                href="http://shopgamedotkich.com">Shop LMHT VN</a> | Shop ACC Liên Minh Huyền Thoại Việt Nam<br/>
				Shop LMHT Việt Nam - Bán ACC Giá Rẻ - Đảm Bảo Uy Tín<br/>
				Website được thiết kế bởi: <a title="Ckimcute" href="https://www.facebook.com/Gameonline.CF" rel="nofollow" target="_blank">Triệu KT ™</a><br/>
				<a rel="dofollow" title="Shop bán acc liên minh" target="_blank" href="http://shopgamedotkich.com/"><b>Shop GAME</i>
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
	 <script src="assets/js/clipboard.js">
  
			<div style="display:none;"><?php if(@$user_profile):?><script id="_wauxte">var _wau = _wau || []; _wau.push(["classic", "fa3k1r2sr3fg", "xte"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="//widgets.amung.us/classic.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script><?php else: ?><script id="_wauuye">var _wau = _wau || []; _wau.push(["classic", "dmrfqe4prez6", "uye"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="//widgets.amung.us/classic.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script><?php endif ;?></div>
    <!-- Mirrored from php-huyvandnc.rhcloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 22:11:19 GMT -->
	
<!-- Modal -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h4 class="modal-title" id="memberModalLabel">Chào mừng đến với shopgamedotkich.com
                  !</h4>

            </div>
            <div class="modal-body">
                <p> Đây Là Website bán Acc LMHT Tự Động của <a href="http://shopgamedotkich.com/">shopgamedotkich.com</a></p>
 <p> Chúng tôi chuyên cung cấp các nick cf - liên minh giá cả cạnh tranh <3 chất lượng nhất Việt Nam</a></p>
 <p> Lời hứa của shop: ♥ UY TÍN - CHẤT LƯỢNG - GIÁ RẺ ♥</a></p>
 
 <p>Mọi thắc mắc vui lòng liên hệ fb admin : <a href="https://www.facebook.com/Gameonline.CF" >Triệu KT </a>.</p>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success center-block" data-dismiss="modal">Đồng Ý</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- Modal -->
<div class="modal fade" id="thongtin" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                 <h4 class="modal-title" id="memberModalLabel">THÔNG TIN
                  !</h4>

            </div>
            <div class="modal-body">
              <i class="si si-wallet pull-right"></i><strong class="text-primary">Số Tiền Hiện Có</br><?=number_format($money, 0, '.', '.')?> <sup class="text-muted"><span style="color: green">vnđ</span></sup></strong></li>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success center-block" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
	
	<!-- Modal -->
<div class="modal fade" id="huongdan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="modal-title" id="myModalLabel">Hướng Dẫn Mua Acc Tại shopgamedotkich.com</h3>
</div>
<div class="modal-body">
<div class="panel-body">
		        <h4>Bước 1: Các bạn bấm vào đăng nhập bằng facebook sau đó chấp nhận ứng dụng của shopgamedotkich.com</h4><br />
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

<!-- Modal -->
<div class="modal fade" id="huongdanvideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h3 class="modal-title" id="myModalLabel">Hướng Dẫn Mua Acc Tại shopgamedotkich.com</h3>
</div>
<div class="modal-body">
<div class="panel-body">
<iframe width="560" height="315" src="https://www.youtube.com/embed/poq1izW0PFM" frameborder="0" allowfullscreen></iframe>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>


</body>
</html>
