<title>Mangahub Grabber</title>
<?php $start_time = microtime(true); ?>
<link rel="stylesheet" type="text/css" href="inc/style.css">
<script type="text/javascript" src="inc/rain.js"></script> 
<font face=consolas color=gold>
<style>
 body { 
   background: black; 
 }
 a {
   color: gold;
 }
 </style>
<form action="index.php" method="get">
<center>

url before obj: <input type="text" style="width:22%;" placeholder="i.e https://cdn.mangahub.io/file/imghub/boku-no-hero-academia/234/" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="225" name="am0">
<select name="fat">
    <option value=".jpg">jpg</option>
    <option value=".png">png</option>
</select>

<input type="submit" name="submit" value=">">
<br>
</form>
<?php 

//geturl
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
       $link = "https"; 
   else
       $link = "http"; 
   $link .= "://"; 
   $link .= $_SERVER['HTTP_HOST']; 
   $link .= $_SERVER['REQUEST_URI']; 

//ignr some err   
@ini_set('display_errors', 0);

if(isset($_GET['submit'])){
$c0 = $_GET['c0'];
$fat = $_GET['fat'];
$am0 = $_GET['am0'];
echo '[ <font color=gray>',$link,'</font> ] -> as victim';

//get and count
echo'<br><br><div class="kotakan">';
echo'<a href="inc/grab.php" rel="nofollow" target="_blank"><b>GRAB<b/></a><p>'; 
for($i=1;$i<=$am0;$i++){
    $jml++;
		
echo '<img width="220" height="350" src="',$c0,$i,$fat,'">';
	}
}
print "</div>Count: $jml";
?>
</div>
<div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
<font size="3" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/mangahub</font>
</font>
</div>   