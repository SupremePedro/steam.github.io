
<!DOCTYPE html>

<html>
<head>

<link href="1.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="jcarousellite_1.0.1c5.js" type="text/javascript"></script>
<link href="1_1.css" rel="stylesheet" type="text/css">



<script type="text/javascript">
$(function() {
	$("#slidebox").jCarouselLite({
		vertical: false,
		hoverPause:true,
		btnPrev: ".previous",
		btnNext: ".next",
		visible: 1,
		start: 0,
		scroll: 1,
		circular: true,
		auto:2000,
		speed:800,				
		btnGo:
		    [".1", ".2",
		    ".3", ".4", ".5", ".6",".7",".8",".9", ".10"],
		
		afterEnd: function(a, to, btnGo) {
				if(btnGo.length <= to){
					to = 0;
				}
				$(".thumbActive").removeClass("thumbActive");
				$(btnGo[to]).addClass("thumbActive");
		    }
	});
});

      </script>

	  <script language="javascript">
function click(){
if (event.button==2){
alert('Вы не можете посмотреть код страницы, или сохранить ее');
} }
document.onmousedown=click;
</script>
<title> STEAM COMMUNITY </title>


    </head>
<body>


<div id="logo"><img src="logo.jpg" style="width: 180px; height: 100px;"></div>
 <footer id="footer" width="1360" height="60">Copyright © Valyok Davidenko 2015| Valid HTML and CSS | Adverties  </footer>
   
 
<div id="left-menu">
<a align=center style="margin-left:30px;color:white; font-size:15px;">Browse by game</a>
<ul>
	
	<ol><a href="#">Free to play</a></ol>
	<ol><a href="#">Early Access</a></ol>
	<ol><a href="#">Action</a></ol>
	<ol><a href="#">Adventure</a></ol>
	<ol><a href="#">Casual</a></ol>
	<ol><a href="#">Indie</a></ol>
	<ol><a href="#">Massievly MP</a></ol>
	<ol><a href="#">Racing</a></ol>
	<ol><a href="#">Simulation</a></ol>
	<ol><a href="#">Sports</a></ol>
	<ol><a href="#">Strategy</a></ol>
	</ul>
</div> 
  

  <div class="panel">
                <a href="#login_form" id="login_pop">LOGIN</a>
                <a href="#join_form" id="join_pop">REGISTRATION</a>
            </div>
   
	    

    <form id="login_f"  action="testreg.php" method="post"> 
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popin">
            <h2><font color="grey">Authorization</font></h2>
            <div>
                
                <input type="text" name="login" placeholder="Login" onkeyup=changeButtonStatus() onchange=changeButtonStatus() style="width:170px; height:30px;"/>
            </div>
            <div>
                
                <input type="password" name="password" placeholder="Password" onkeyup=changeButtonStatus() onchange=changeButtonStatus() style="width:170px; height:30px;"/>
            </div>
            <input type="submit" id="in_in"name="submit" value="LOGIN" style="width:175px; height:30px; font-size:16px;"/>
            <a class="close" href="#close"></a>
			</div>
			</form>
			
			

	
        
		<form id="reg_f" name="mainForm" action="registr.php" method="post">
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
            <h2><font color="grey"> Registration</font></h2>
           
		   
            <div>
                
                <input type="text" name="login" id="login" placeholder="Login" onkeyup=changeButtonStatus() onchange=changeButtonStatus() style="width:170px; height:30px;"/>
            </div>
            <div>
               
                <input type="password" name="password" id="password" placeholder="Password" onkeyup=changeButtonStatus() onchange=changeButtonStatus() style="width:170px; height:30px;"/>
            </div>
			<div>
               
                <input type="password" name="r_password" id="r_password" placeholder="Confirmation"onkeyup=changeButtonStatus() onchange=changeButtonStatus() style="width:170px; height:30px;"/>
            </div>
            <div>
                
                <input type="text" name="first_name" id="first_name"  placeholder="Name" style="width:170px; height:30px;"/>
            </div>
            <div>
                
                <input type="text" name="last_name" id="last_name" placeholder="Last name" style="width:170px; height:30px;"/>
            </div>
            <input type="submit" id="rego" name="submit" value="Register" style="width:175px; height:30px; font-size:16px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;или&nbsp;&nbsp;&nbsp;<a href="#login_form" id="login_pop">Войти</a>
			
            <a class="close" href="#close"></a>
			 </div>
			</form>
			
			
			

       <script language="JavaScript"> 
var f=document.mainForm; 
var p=document.regForm;
function changeButtonStatus(){ 
f.submit.disabled=(f.login.value && f.password.value && f.r_password.value) ? false : true;
p.submit.disabled=(p.login.value && p.password.value) ? false :true; 
} 
changeButtonStatus(); 

</script>
	


  
  
<div id="header"></div> 
   




<ul class="menu">
<li> <a href="#">STORE</a>
<ul class="submenu" align=center>
 <li><a href="#">FEATURED</a></li>
 <li><a href="#">EXPLORE</a></li>
 <li><a href="#">CURATORS</a></li>
 <li><a href="#">WISHLIST</a></li>
 <li><a href="#">NEWS</a></li>
 <li><a href="#">STATS</a></li>
 </ul>
</li>
<li> <a href="#">COMMUNITY</a>
<ul class="submenu" align=center>
<li><a href="#">HOME</a></li>
 <li><a href="#">DISCUSSIONS</a></li>
 <li><a href="#">WORKSHOP</a></li>
 <li><a href="#">GREENLIGHT</a></li>
 <li><a href="#">MARKET</a></li>
 <li><a href="#">BROADCASTS</a></li>
 </ul>
</li>
<li> <a href="#">ABOUT</a></li>
<li> <a href="#">SUPPORT</a></li>
</ul>


<div id="block-body"></div>

<div id="slidebox">
<div class="next"></div>
<div class="previous"></div>
<div class="thumbs">
<a href="#" onclick="" class="1 thumbActive">1</a> 
<a href="#" onclick="" class="2">2</a> 
<a href="#" onclick="" class="3 ">3</a> 
<a href="#" onclick="" class="4">4</a> 
<a href="#" onclick="" class="5">5</a> 
<a href="#" onclick="" class="6">6</a> 
<a href="#" onclick="" class="7">7</a> 
<a href="#" onclick="" class="8">8</a> 
<a href="#" onclick="" class="9">9</a> 
<a href="#" onclick="" class="10">10</a> 
</div>
<div id="slid">
    <ul>
        <li><img src="1_1.jpg" style="width:939px; height:570px;"/></li>
        <li><img src="2_1.jpg" style="width:939px; height:570px;"/></li>
        <li><img src="3_1.jpg" style="width:939px; height:570px;"/></li>
        <li><img src="4_1.jpg" style="width:939px; height:570px;"/></li>
		<li><img src="5_1.jpg" style="width:939px; height:570px;"/></li>
		<li><img src="6_1.jpg" style="width:939px; height:570px;"/></li>
		<li><img src="7_1.jpg" style="width:939px; height:570px;"/></li>
		<li><img src="8_1.jpg" style="width:939px; height:570px;"/></li>
		<li><img src="9_1.jpg" style="width:939px; height:570px;"/></li>
		<li><img src="10_1.jpg" style="width:939px; height:570px;"/></li>
    </ul>
	</div>
</div>	




<div class="conten">
<div class="content1"><img src="index-en_us-480.jpg" style="width:310px; height:318px;"></div>
<div class="content2"><img src="x_0377e0cd.jpg" style="width:310px; height:318px;"></div>
<div class="content3"><img src="codheroes.jpg" style="width:310px; height:318px;"></div>
<div class="content4"><img src="THECREW_Q&A_590x332_116366.jpg" style="width:310px; height:310px;"></div>
<div class="content5"><img src="payday-2-cheats.jpg" style="width:310px; height:310px;"></div>
<div class="content6"><img src="Middle-Earth-Shadow-of-Mordor-Trophies-Guide-750x400.jpeg" style="width:310px; height:310px;" alt="Купить"></div>
</div> 







<div id="vk"><img src="2345.png" style="width:48px; height48px;"></div>
<div id="fb"><img src="102.png" style="width:45px; height:45px;"></div>
<div id="tw"><img src="234.png" style="width:40px; height:40px;"></div>
</body>
  
</html>
