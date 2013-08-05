<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Marky Mark Ali</title>
<link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Hanalei+Fill' rel='stylesheet' type='text/css'>
<style>
@import('http://fonts.googleapis.com/css?family=Racing+Sans+One');

body {

	background:url(images/bg.jpg) top no-repeat;
	background-size:100%;
	background-color:#0c0f18;
}

#wrapper {
	width:950px;
	margin:0 auto;
	position:relative;
}
.logo {
	max-width:950px;
}

.logo img{
	max-width:950px;
}

.menu-nav ul {
	display:block;
	margin:0px 10px;
	padding:0px;
	margin:0 auto;
}
.header {
	overflow: hidden;
	position: relative;
}

.menu-nav {
	z-index: 10;
	bottom:32px;
	left: -4px;
	position: absolute;
	display: block;
	width: 227px;

}
.menu-nav ul li {

	display:inline-block;
	float:left;
	padding-top:10px;
	height:25px;
	background:#252933;
	padding: 5px 37px 5px 20px;
	margin:0 10px;
	border:solid 1px #000;
	border-bottom:none;
}

.menu-nav ul li:hover {
	background-color:#1CB529;
}

.menu-nav a {
	font-family: 'Racing Sans One', cursive;
	font-family: 'Hanalei Fill', cursive;
	font-size:14px;
	color:#921211;
	display:block;
	width:100%;
}

.menu-stuffs > li {
	-webkit-box-shadow: 0px -2px 15px rgba(50, 180, 50, 1);
	-moz-box-shadow:    0px -2px 15px rgba(50, 180, 50, 1);
	box-shadow:         0px -2px 15px rgba(50, 180, 50, 1);
	-moz-border-radius-topleft: 8px;
	-webkit-border-top-left-radius: 8px;
	 border-top-left-radius: 8px;
	-moz-border-radius-topright: 40px;
	-webkit-border-top-right-radius: 40px;
	border-top-right-radius: 40px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
}

.top-radius {
	-moz-border-radius-topleft: 10px;
	-webkit-border-top-left-radius: 10px;
	 border-top-left-radius: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-top-right-radius: 10px;
	border-top-right-radius: 10px;

}

.blue-glow {
	-webkit-box-shadow: 0px 0px 10px #187CAA;
	-moz-box-shadow:    0px 0px 10px #187CAA;
	box-shadow:         0px 0px 10px #187CAA;
}
.latest-tags {
	background:#000;
	padding:4px 10px;
	-webkit-box-shadow: inset 0px 3px 17px rgba(255, 255, 255, 1);
	-moz-box-shadow:   inset 0px 3px 17px rgba(255, 255, 255, 1);
	box-shadow:        inset 0px 3px 17px rgba(255, 255, 255, 1);
	-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.main-font {
	color:#1A89B1;
}

h2,h3 {
	font-size:16px;
	margin:0 20px 3px 0 ;
	font-family:'Hanalei Fill', cursive;
}

.latest-tags h2 {
	float:left;
}

.taggers {
	margin:0;
}
.taggers a {
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	color:#1A8BB2;
	text-decoration:none;
}

.taggers li {
	display:inline-block;
	
}
.taggers li:hover {
	background:#0C3;
}

.small-radius {
	border-left:solid 1px #fff;
	padding: 2px 8px 2px 8px;
	color:#921211;
}

.taggers li:nth-child(1) .small-radius {
	border-left:none;
}
#body-stuff {
	height:auto; /*Temp Size*/
	margin:0px auto;
	padding:10px;
	background: rgba(12, 15, 24, .55);
}

#body-stuff .poster img {
	-webkit-box-shadow: 0px 0px 5px rgba(255, 255, 255, 1);
	-moz-box-shadow:    0px 0px 5px rgba(255, 255, 255, 1);
	box-shadow:         0px 0px 5px rgba(255, 255, 255, 1);
	border: solid 1px #fff;
	-webkit-border-radius: 90px;
	-moz-border-radius: 90px;
	border-radius: 90px;
	float:left;
	margin: 5px;
}

.partition {
	border-bottom: solid 2px #666;
}
.poster {

	
}

#sidebar-left {
	float:left;
}

#sidebar-left  h3{
	display:block;
	text-align:center;
	margin-top:10px;
	line-height: 16px;
	margin-bottom:5px;
}

#sidebar-left p {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	display:block;
	text-align:center;
}

#sidebar-left a {
	font:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:600;
	text-decoration:none;
	color:#FFF;
}

#sidebar-left a:hover {
	text-decoration:underline;
}

.gradient {


}
#sidebar-left div{
		height:100%;
		width:200px;
		position:relative;
}

#sidebar-left > div {
	left:-20px;
	-webkit-transform: perspective( 600px ) rotateY( 20deg );
	-moz-transform: perspective( 600px ) rotateY( 20deg );
	-o-transform: perspective( 600px ) rotateY( 20deg );
	transform: perspective( 600px ) rotateY( 20deg );
	
}

#sidebar-left  > div > div {
	margin-bottom:10px;
	-webkit-box-shadow: 0px 0px 5px rgba(255, 255, 255, 1);
	-moz-box-shadow:    0px 0px 5px rgba(255, 255, 255, 1);
	box-shadow:         0px 0px 5px rgba(255, 255, 255, 1);
	border: solid 1px #fff;
	-webkit-border-radius: 9px;
	-moz-border-radius: 9px;
	border-radius: 9px;
	background: rgba(12, 15, 24, .55);
	color:#FFF;
	overflow:hidden;
	line-height: 16px;
	
}

#sidebar-left  > div > div:hover {
	background: rgba(1, 203, 82, .75);
}

h1 {
	display:block;
	width:49%;
	margin-top:2px;
}
.article {
	font-family:Arial, Helvetica, sans-serif;
	background:rgba(169, 220, 238, 0.9);
	margin-left:200px;
	padding:10px;
	margin-left: 200px;
	-moz-border-radius-topright: 14px;
	-webkit-border-top-right-radius: 14px;
	border-top-right-radius: 14px;
	-moz-border-radius-bottomright: 14px;
	-webkit-border-bottom-right-radius: 14px;
	border-bottom-right-radius: 14px;
-webkit-box-shadow: inset 0px 0px 10px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    inset 0px 0px 10px rgba(50, 50, 50, 0.75);
box-shadow:         inset 0px 0px 10px rgba(50, 50, 50, 0.75);
}
.article .main-image {
	width:40%;
	height:300px;
	float:right;
	-webkit-box-shadow: 2px 2px 10px rgba(50, 50, 50, 0.75);
	-moz-box-shadow:    2px 2px 10px rgba(50, 50, 50, 0.75);
	box-shadow:         2px 2px 10px rgba(50, 50, 50, 0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	border:solid 1px #FFF;
	margin:5px;

}
.article .clearfix {
	clear:both;	
	
}
.article .a-footer {
	margin-top:20px;

}
.article .a-images {
	display:block;
}

.article .a-images li {
	display:inline-block;
	cursor:pointer;
}

.article .a-images li img {
	width:100px;
	border:solid 4px #FFF;
	margin:8px;
}

.article .a-images li img:hover {
	-webkit-box-shadow: 2px 2px 10px rgba(50, 50, 50, 0.75);
	-moz-box-shadow:    2px 2px 10px rgba(50, 50, 50, 0.75);
	box-shadow:         2px 2px 10px rgba(50, 50, 50, 0.75);
}

.sharing img {
	float:left;
	height: 20px;
	width: 20px;
	margin-left: 20px;
}

.sharing ul {
	margin-left:0;
	padding-left:0px;
}

.sharing li {
	clear:both;
	display:block;
	margin: 3px;
	height: 20px;
	padding:5px;
}
#sidebar-left .sharing h3.share-header {
	margin-top:0px;
}

.sharing li:hover {
	background:#000;		
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.border-normal {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
}
.search img{
	float: left;
	margin-right: 6px;
}
.search {
	padding-bottom:3px;
}

Box { width:50px; height:30px; display:block; background:#ccc;}
Box:hover {background:#aaa;}

div.pers {-webkit-transform: perspective(500) rotateY(20deg);}

</style>
</head>

<body>
<div class="gradient"></div>
<div id="wrapper" class="blue-glow top-radius">
<div class="header top-radius"> 
<div class="logo"><img src="images/logo_v4.jpg" alt="Logo" /></div>
<div class="menu-nav">
<ul class="menu-stuffs">
<li>
<a href="#">Home</a>
</li>
<li>
<a href="#">Search</a>
</li>
<li>
<a href="#">Latest Articles</a>
</li>
<li>
<a href="#">Coding Fun</a>
</li>
<li>
<a href="#">Contact</a>
</li>
</ul>

</div>
<div class="latest-tags"> 
<h2 class="main-font">Latest Tags:</h2>
<ul class="taggers">
<li>
<a href="#" class="small-radius">Tag 1</a>
</li>
<li>
<a href="#" class="small-radius">Tag 2</a>
</li>
<li>
<a href="#" class="small-radius">Some Lorem Ipsum Stuff</a>
</li>

</ul>
</div>
</div>
<div id="body-stuff">
<!--div style="width:250px; height:120px; margin:200px; float: left;">
<div class='pers'>
  <Box> <div class="search">
      <img src="images/search.png" width="50"/>
      <h3>Search</h3>
<input name="search" type="text" size="17" />
     </div></Box>
     <box>
      <div class="tags">
      <h3>Article Tags</h3>
      <p><a href="#">Ut tristique</a>, <a href="#">odio sed</a>, <a href="#">gravida pretium</a>, <a href="#">magna</a>, <a href="#">dui</a>, <a href="#">pellentesque</a></p>
     </div>
     </box>
</div>
</div-->
<div id="sidebar-left">

<div>
    <div class="search">
      <img src="images/search.png" width="50"/>
      <h3>Search</h3>
<input name="search" type="text" size="17" />
     </div>
    <div class="poster">
      <img src="images/my_pic.jpg" width="50"/>
      <h3>Marky Mark Ali</h3>
      <p>26th of December 2013</p>
     </div>
     <div class="tags">
      <h3>Article Tags</h3>
      <p><a href="#">Ut tristique</a>, <a href="#">odio sed</a>, <a href="#">gravida pretium</a>, <a href="#">magna</a>, <a href="#">dui</a>, <a href="#">pellentesque</a></p>
     </div>
     <div class="sharing">
     <ul>
     <li>
     <img class="border-normal" src="images/social_05.jpg" width="50"/>
      <h3 class="share-header">Facebook</h3>

       </li>
        <li>
      <img class="border-normal" src="images/social_03.jpg" width="50"/>
      <h3 class="share-header">LinkedIn</h3>

      </li>
       <li>
      <img class="border-normal" src="images/social_12.jpg" width="50"/>
      <h3 class="share-header">Youtube</h3>

      </li>
       <li>
      <img class="border-normal" src="images/social_14.jpg" width="50"/>
      <h3 class="share-header">LinkedIn</h3>

      </li>
     </div>
     </ul>
 </div>
  </div>
<div class="article">
<img class="main-image" src="images/my_pic.jpg"/>
<h1>My good Stuff Article</h1>
<p class="teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel arcu venenatis, commodo mauris et, mollis purus. Etiam sed eros sem. Etiam nulla nisi, mollis id ultricies sed, porttitor vitae est. Donec laoreet est eget tempus rutrum. Maecenas adipiscing a nulla a venenatis. Nunc feugiat enim eu adipiscing sollicitudin. Pellentesque ut hendrerit sapien, sed vehicula dolor. Nullam lacus erat, molestie eu felis sit amet, hendrerit adipiscing enim. Pellentesque viverra, mi a ultrices tempor, massa lacus adipiscing purus, in tempus tortor ipsum ac tortor. Nunc in massa id eros tempus consequat ac sit amet est.</p>

<ul class="a-images">
<li>
<img src="images/my_pic.jpg"/>
</li>
<li>
<img src="images/my_pic.jpg"/>
</li>
<li>
<img src="images/my_pic.jpg"/>
</li>
<li>
<img src="images/my_pic.jpg"/>
</li>
<li>
<img src="images/my_pic.jpg"/>
</li>
</ul>
<div class="a-footer">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel arcu venenatis, commodo mauris et, mollis purus. Etiam sed eros sem. Etiam nulla nisi, mollis id ultricies sed, porttitor vitae est. Donec laoreet est eget tempus rutrum. Maecenas adipiscing a nulla a venenatis. Nunc feugiat enim eu adipiscing sollicitudin. Pellentesque ut hendrerit sapien, sed vehicula dolor. Nullam lacus erat, molestie eu felis sit amet, hendrerit adipiscing enim. Pellentesque viverra, mi a ultrices tempor, massa lacus adipiscing purus, in tempus tortor ipsum ac tortor. Nunc in massa id eros tempus consequat ac sit amet est.</p>
</div>
</div>

</div>
<div id="footer-stuff-stuff" style="color:#CCC">Footer</div>
</div>

</body>
</html>