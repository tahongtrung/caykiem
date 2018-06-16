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
    <meta name="description" content="SShop game việt nam uy tín, shop bán acc game liên minh huyền thoại, nick đột kích cực rẻ và nhanh gọn, shop đột kích - garena vn" />
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
	<meta name="author" content="Diệp Quốc Quyền" />
	<link rel="author" href="https://www.facebook.com/Gameonline.CF" />
	<meta name="copyright" content="Copyright 2016 shopgamedotkich.com - All rights Reserved." />
	<link rel="apple-touch-icon" href="/assets/img/ckc.jpg" />
	<link href="/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	
	
<!-- Web fonts -->
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"><!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/oneui.min-2.2.css" rel="stylesheet">
    <link href="assets/js/slick/slick.min.css" rel="stylesheet">
    <link href="assets/js/slick/slick-theme.min.css" rel="stylesheet">
    <link href="assets/css/core.css" rel="stylesheet">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
</head>
<body>
<audio autoplay="autopaly">
					<source src="assets/nnca.mp3" type="audio/mp3">
			</audio>  
    <div id="fb-root"></div>
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
										<a href="#" data-toggle="modal" data-target="#huongdanvideo">Hướng Dẫn Video</a>
									</li>
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
					   <i class="si si-wallet pull-right"></i><strong class="text-primary"><?=number_format($money)?> <sup class="text-muted">vnđ</sup></strong></li> 
					     <?php if (isset($admin)): ?>
					   <li><a href="javascript:void(0);" id="view-profiles"><i class="fa fa-plus pull-right"></i>Đăng acc</a></li>
					   <?php endif; ?>
					   <li><a href="lichsu"><i class="si si-list pull-right"></i>Lịch sử Giao dịch</a></li> <li><a href="<?= $logout_url ?>">
					   <i class="si si-logout pull-right"></i>Thoát</a></li> </ul> </li>
					   
       
                                
						<?php else: ?>
						  <li>
                        <a href="<?= $login_url ?>"><span aria-hidden=
                        "true" class="fa fa-facebook"></span> Đăng nhập</a>
                    </li><?php endif; ?>
                   
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
 <div class="container">
 <div class="block"> 
 <ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
 <li class="active"> <a href="#taikhoan">Mua tài khoản</a> </li>
 <li class=""> <a href="#napthe">Nạp tiền vào tài khoản</a> </li>
 							<?php if (isset($admin)): ?>

 <li class=""> <a href="#thongke">Thống kê giao dịch</a> </li> 
 <li class=""> <a href="#thongkenaptien">Thống kê nạp tiền</a> </li> 
<?php endif; ?> </ul>
 <div class="tab-content">
 <div class="block tab-pane active" id="taikhoan"> 
 <div class="block-content">                             <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Hoạt động</th>
                                        <th>Nội dung</th>
                                        <th>Thay đổi</th>
                                        <th class="hidden-xs">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($query as $row): ?>
<tr >
 <td class="text-primary">Mua Tài khoản <?=$row['loainick']?> #<?=$row['idacc']?></td> 
  <td class="text-muted">Tài khoản <?=$row['loainick']?> #<?=$row['idacc']?> là: <span class="label label-success"><?=$row['taikhoan']?></span> Mật khẩu <span class="label label-success text-success"><?=$row['matkhau']?></span>
 </td>
	<td class="font-w600 text-danger">-<?=number_format($row['price'])?> <sup class="text-muted">vnđ</sup></td>
 <td><em class="font-s13 text-muted hidden-xs"><?php $time_agoa = strtotime($row['date']);
									echo time_stamp($time_agoa); ?></em></td> 
 </tr>
                                   
									   <?php endforeach; ?>   

                                  
                                 
                                </tbody>
                            </table>  </div> </div> 
 <div class="block tab-pane" id="napthe">
 <div class="block-content">                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Hoạt động</th>
                                        <th>Nội dung</th>
                                        <th>Thay đổi</th>
                                        <th class="hidden-xs">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($querynap as $row): ?>
								<tr class=""> <td class="text-primary">Nạp thẻ mệnh giá #<?=number_format($row['menhgia'])?> <sup class="text-muted">vnđ</sup></td>
								<td class="text-muted">Nạp thẻ cào số serial <?=$row['serial']?>, mã thẻ <?=$row['mathe']?>, mạng <?=$row['loaithe']?></td> 
								<td class="font-w600 text-danger">+<?=number_format($row['menhgia'])?> <sup class="text-muted">vnđ</sup></td> 
								<td><em class="font-s13 text-muted hidden-xs"><?php $time_ago = strtotime($row['date']);
									echo time_stamp($time_ago); ?></em></td> </tr>

                                   
									   <?php endforeach; ?>   

                                  
                                 
                                </tbody>
                            </table>  </div> </div> 
							<?php if (isset($admin)): ?>
							 <div class="block tab-pane" id="thongke">
 <div class="block-content">                            <table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Hoạt động</th>
                                        <th>Người mua</th>
										<th>Nội dung</th>
                                        <th>Giá tiền</th>
                                        <th class="hidden-xs">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($queryall as $row): ?>
<tr >
 <td class="text-primary">Mua Tài khoản <?=$row['loainick']?> #<?=$row['idacc']?></td> 
 <td class="text-primary"><?=$row['name']?></td> 
 <td class="text-muted">Tài khoản <?=$row['loainick']?> #<?=$row['idacc']?> là: <span class="label label-success"><?=$row['taikhoan']?></span> Mật khẩu <span class="label label-success text-success"><?=$row['matkhau']?>| Email <span class="label label-success"><?=$row['idemail']?></span> |MK-email <span class="label label-success"><?=$row['mkemail']?></span><br /><br /> Câu hỏi <span class="label label-success"><?=$row['cauhoi']?></span> |Câu Trả Lời <span class="label label-success"><?=$row['cautraloi']?></span> | CMND <span class="label label-success"><?=$row['cmnd']?></span></span>
 </td>
	<td class="font-w600 text-danger"><?=number_format($row['price'])?> <sup class="text-muted">vnđ</sup></td>
 <td><em class="font-s13 text-muted hidden-xs"><?php $time_agoa = strtotime($row['date']);
									echo time_stamp($time_agoa); ?></em></td> 
 </tr>
                                   
									   <?php endforeach; ?>    

                                  
                                 
                                </tbody>
                            </table>  </div> </div> 
							
							 <div class="block tab-pane" id="thongkenaptien">
 <div class="block-content">                            <table class="table table-striped table-vcenter">
                                 <thead>
                                    <tr>
                                        <th>Hoạt động</th>
										<th>Người mua</th>
										<th>Nội dung</th>
                                        <th>Thay đổi</th>
                                        <th class="hidden-xs">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($querynapall as $row): ?>
								<tr> <td class="text-primary">Nạp thẻ mệnh giá #<?=number_format($row['menhgia'])?> <sup class="text-muted">vnđ</sup></td>
								 <td class="text-primary"><?=$row['name']?></td> 
								<td class="text-muted">Nạp thẻ cào số serial <?=$row['serial']?>, mã thẻ <?=$row['mathe']?>, mạng <?=$row['loaithe']?></td> 
								<td class="font-w600 text-danger">+<?=number_format($row['menhgia'])?> <sup class="text-muted">vnđ</sup></td> 
								<td><em class="font-s13 text-muted hidden-xs"><?php $time_ago = strtotime($row['date']);
									echo time_stamp($time_ago); ?></em></td> </tr>
									   <?php endforeach; ?>    

                                  
                                 
                                </tbody>
                            </table>  </div> </div> 
							<?php endif; ?>
 </div> </div>
 
       
     <footer class=
        "content-mini content-mini-full font-s12 bg-gray-lighter clearfix" id=
        "page-footer">
          <div class="text-center"><span class="js-year-copy">Copyright © 2016.</span> <a class="font-w600"
                href="http://shopgamedotkich.com">Shop LMHT VN</a> | Shop ACC Liên Minh Huyền Thoại Việt Nam<br/>
				Shop LMHT Việt Nam - Bán ACC Giá Rẻ - Đảm Bảo Uy Tín<br/>
				Website được thiết kể và chỉnh sửa bởi: <a title="Ckimcute" href="http://Facebook.com/Gameonline.CF" rel="nofollow" target="_blank">Diệp Quốc Quyền ™</a><br/>
				<a rel="dofollow" title="Shop bán acc liên minh" target="_blank" href="http://shopgamedotkich.com/"><b>Shop Game </i>
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
    <!-- Mirrored from php-huyvandnc.rhcloud.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2016 22:11:19 GMT -->
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
