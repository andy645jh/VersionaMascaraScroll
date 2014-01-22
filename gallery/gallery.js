/*
Fancy Transparent JQuery Image Gallery with CSS3 and JQuery
===========================================================
Created By: Zeeshan Rasool at  http://www.99Points.info 
This is copy righted script and You can use it free but can't publish it without permission of Author.
Contact Me:
==========
www.99Points.info
GTalk: zishan.rasool85@gmail.com  
Skype: zeeshan-rasool

*/

var AutoLoadGallery = false; // autoload gallery on page load, no need to click to show the gallery
var AutoPlayOn = true; // auto image rotating is on
var Interval   = 8000; // load new image after each 8 seconds, you can change it 

var current_img_name = 1; // first image name  // please use images name 1.jpg,2.jpg,3.jpg,4.jpg for thumbs and 1b.jpg,2b.jpg,3b.jpg,4b.jpg for large images respectvly
var total_images 	 = 11; // total image count

var Timer = '';
	
$(function() {
		   
	// Param
	var left_bar		 = $('#left_bar');
	var top_bar		 	 = $('#top_bar');
	var right_bar		 = $('#right_bar');

	$('#click').click(function () {
		
		clearTimeout(Timer);
		AutoPlayOn = true;		
		// disable play button 
		$('#play').css('opacity', '0.4');
		$('#play').css('cursor', 'default');
		// enable pause button 
		$('#pause').css('opacity', '1.0');
		$('#pause').css('cursor', 'pointer');
		
		loadGallery();
    });
    
	/// if AutoLoadGallery is true load gallery in start
	if(AutoLoadGallery)
	{
		loadGallery();
	}
	
	function loadGallery()
	{
		//  left bar
		left_bar.stop().animate({
			'height'    :'342px',
		},1000,'easeOutBack',function(){
			$('#click').fadeOut();
		});
		// top bar
		top_bar.stop().animate({
			'width'    :'570px',
		},1000,'easeOutBack',function(){
				
			$('#imagePlacer').fadeIn();
			$('#top_boxes').fadeIn();
		});
		//right bar
		right_bar.stop().animate({
			'height'    :'342px',
		},1000,'easeOutBack',function(){
			
			$('#controls').fadeIn();
			$('#border').fadeIn();
			
			/// start 
			autoplay ();
			
		}); 
	}
	
   // caption on hover
   
   $('#imagePlacer img').hover(function () {
   		
   		var id = $(this).attr("id");
		
		$('#captions span').fadeOut('fast');
		
		$('#captions').stop().animate({ 
		
			'bottom'    :'6px',
			
		},300,'easeOutBack',function(){
			
			$('#captions span#caption-'+id).fadeIn('fast');
		});
   
   },function(){ // on mouse out hide caption
   
		$('#captions').stop().animate({ 
		
			'bottom'    :'-100px',
			
		},200,'easeOutBack',function(){
		
			$('#captions span').fadeOut('fast'); // hide all captions
		});
	});
	
	// stop autplay when click pause
	$('#pause').click(function () {
		
		// stop autoplay
		AutoPlayOn = false;
		
		clearTimeout(Timer);

		// disable pause button 
		$('#pause').css('opacity', '0.4');
		$('#pause').css('cursor', 'default');
		// enable play button 
		$('#play').css('opacity', '1.0');
		$('#play').css('cursor', 'pointer');
		
	});
		
	$('#play').click(function () {
		
		// start autoplay
		AutoPlayOn = true;
		
		Timer = setTimeout('autoplay ();', Interval);
		
		// disable play button 
		$('#play').css('opacity', '0.4');
		$('#play').css('cursor', 'default');
		// enable pause button 
		$('#pause').css('opacity', '1.0');
		$('#pause').css('cursor', 'pointer');
	});
	
    // show next image in gallery
    $('#left_bar img,#top_bar img,#right_bar img').click(function () 
	{
		var name = $(this).attr("id");
		clearTimeout(Timer);
		
		$('#imagePlacer').find('img').hide();
		
		Timer = setTimeout('func("'+name+'");', 200);
		
		if(AutoPlayOn)
		{
			clearTimeout(Timer);
			
			if(name == total_images)
			{
				current_img_name = 1;
			}
			else
			{
				current_img_name = parseInt(name);	
			}
		 	
			autoplay();
		}
    });
	
	// close gallery
	$('#hide').click(function(){
		
		$('#top_boxes').hide();
		
		$('#imagePlacer').hide('fast');
		
		left_bar.fadeOut('fast');
		top_bar.fadeOut('fast');
		right_bar.fadeOut('fast');
		
		left_bar.css('height','0px');
		top_bar.css('width','0px');
		right_bar.css('height','0px');
		
		$('#click').show();
		
		$('#controls').hide();
		$('#border').hide();
		
		AutoPlayOn = false;
		clearTimeout(Timer);
		// start autoplay
	});
	
});  

// auto rotate images
	
function autoplay()
{
	 if(AutoPlayOn)
	 {
		 clearTimeout(Timer);
		 if(parseInt(current_img_name) <= parseInt(total_images))
		 {
			$('#imagePlacer').find('img').hide();
			Timer = setTimeout('func("'+current_img_name+'");', 200);
			
			current_img_name++;
			// increase the count 1
			
			$('#images_count').val('');
			$('#images_count').val(current_img_name);
		 }
		
		 if(current_img_name > total_images)
		 {
			current_img_name = 1;
		 }
		
		 Timer = setTimeout('autoplay();', Interval);
	}
}

// load new image
function func(name){ $("#"+name+"b").fadeIn();}

/*
Fancy Transparent JQuery Image Gallery with CSS3 and JQuery
===========================================================
Created By: Zeeshan Rasool at  http://www.99Points.info 
This is copy righted script and You can use it free but can't publish with your name. Thank You !
Contact Me:
==========
GTalk: zishan.rasool85@gmail.com
Skype: zeeshan-rasool

*/