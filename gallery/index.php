<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demos : 99Points : Super JQuery Image Gallery</title>
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script type="text/javascript" src="jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="gallery.js"></script> 
<link href="style.css" rel="stylesheet" />
<link href='multi-line-button.css' rel='stylesheet' /> 
<!--
Fancy Transparent JQuery Image Gallery with CSS3 and JQuery
===========================================================
Created By: Zeeshan Rasool at  http://www.99Points.info 
This is copy righted script and You can use it free but can't publish it without permission of Author.
Contact Me:
==========
www.99Points.info
GTalk: zishan.rasool85@gmail.com  
Skype: zeeshan-rasool


Image used in this tutorial from flickr  http://www.flickr.com/photos/markjsebastian/sets/72157594232728012/

IMPORTANT
=========
if you want to use this gallery with no change, then take care of these things given below: Also this gallery is created for fixed position view on left bottom sided.

- thumbs names should be 1 -to- n   
- thumbs width should be 100px  <img src="img/1.jpg" id="3" width="100" />
- id of thumbs will be name of thumb without extension i-e <img src="img/1.jpg" id="1" width="100" />
- large images must be size 606 x 413  i-e <img src="img/1b.jpg" width="606" height="413" id="1b" />
- if thumb name is 1.jpg then its large image name must be 1b.jpg  

-->
</head>
<body>
	
	<div style="height:750px;">
		
		 <!-- Click to show gallery  -->
		 <p id="click"> 
		  <a class='multi-line-button red' href='#' style='width:10em'> 
			<span class='titles'>Show Gallery</span> 
		  </a> 
		</p> 
		
		<div id="left_bar">
			
			<div id="left_boxes">
				<!-- copy large image name in id of image without extension . We will get this id and show big image -->
				
				<div class="box"><img src="img/3.jpg" id="3" width="100" /></div>
				<div class="box"><img src="img/2.jpg" id="2" width="100" /></div>
				<div class="box"><img src="img/1.jpg" id="1" width="100" /></div>
				
			</div>
			
		</div>
		
		<div id="top_bar">
			
			<div id="top_boxes">
				<!-- copy large image name in id of image without extension . We will get this id and show big image -->
				<div class="box"><img src="img/4.jpg" id="4" width="100" /></div>
				<div class="box"><img src="img/5.jpg" id="5" width="100" /></div>
				<div class="box"><img src="img/6.jpg" id="6" width="100" /></div>
				<div class="box"><img src="img/7.jpg" id="7" width="100" /></div>
				<div class="box"><img src="img/8.jpg" id="8" width="100" /></div>
			</div>
			
		</div>
		
		<div id="right_bar">
		
			<div id="right_boxes">
				<!-- copy large image name in id of image without extension . We will get this id and show big image -->
				<div class="box"><img src="img/9.jpg" id="9" width="100" /></div>
				<div class="box"><img src="img/10.jpg" id="10" width="100" /></div>
				<div class="box"><img src="img/11.jpg" id="11" width="100" /></div>
			</div>
			
		</div>
		
		<!-- Image Holder Main -->
		<div id="imagePlacer">
			
			<span>
				<!-- use image name as id of image without extension -->
				<img src="img/1b.jpg" width="606" height="413" id="1b" />
				<img src="img/2b.jpg" width="606" height="413" style="display:none" id="2b" />
				<img src="img/3b.jpg" width="606" height="413" style="display:none" id="3b" />
				
				<img src="img/4b.jpg" width="606" height="413" style="display:none" id="4b" />
				<img src="img/5b.jpg" width="606" height="413" style="display:none" id="5b" />
				<img src="img/6b.jpg" width="606" height="413" style="display:none" id="6b" />
				<img src="img/7b.jpg" width="606" height="413" style="display:none" id="7b" />
				<img src="img/8b.jpg" width="606" height="413" style="display:none" id="8b" />
				<img src="img/9b.jpg" width="606" height="413" style="display:none" id="9b" />
				<img src="img/10b.jpg" width="606" height="413" style="display:none" id="10b" />
				<img src="img/11b.jpg" width="606" height="413" style="display:none" id="11b" />
			</span>
			
			<!-- images captions -->
			<div id="captions">
			
				<span id="caption-1b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-2b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-3b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-4b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-5b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-6b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-7b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-8b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-9b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-10b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				<span id="caption-11b">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</span>
				
			</div>
			
		</div>
		
		<div id="controls">
			<!-- Click to hide gallery  -->
			<img src="close.png" id="hide" title="Close" />
			<!-- Play Pause AutoRotate Images  -->
			<img src="pause.png" id="pause" title="Pause" width="30" />
			<img src="play.png" id="play" title="Play" width="30" />
		</div>
		
		<!-- Bottom Bar  -->
		<img src="bar.png" id="border" />
		
		<br clear="all" /><br clear="all" />
		
	</div>
	
	<a href="http://www.flickr.com/photos/markjsebastian/sets/72157594232728012/" class="link"> Images source flickr </a>
	
	
</body>
</html>
 
