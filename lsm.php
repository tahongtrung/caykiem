<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = @mysql_connect($dbhost, $dbuser, $dbpass);
   mysql_query("SET NAMES utf8");
   if(! $conn )
   {
      die('Không thể kết nối: ' . mysql_error());
   }
   
   $sql = 'SELECT * 
FROM  `lichsumua` ORDER BY  `lichsumua`.`uid` DESC LIMIT 0 , 10';
   mysql_select_db('trieu');
   $retval = mysql_query( $sql, $conn );

   
   if(! $retval )
   {
      die('Không thể lấy dữ liệu: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval))
   {
      $time_ago = strtotime($row['date']);
      $timemua = time_stamp($time_ago);
?>
<?php
      echo "<a href='http://facebook.com/{$row['id']}' color='blue'> {$row['name']} </a> đã mua <b>Tài khoản {$row['loainick']} #{$row['idacc']}</b>  $timemua giá <b clolor='red'>{$row['price']}</b> <sup class='text-muted'>vnđ</sup> . ";
?>

<?php
   }
   
  
   
   mysql_close($conn);
?>