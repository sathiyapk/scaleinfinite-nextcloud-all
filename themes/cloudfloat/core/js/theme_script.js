			function responsive_script()
			{
				var theWindowSize =$(window).width(); 
			//	console.log(theWindowSize);
			// Below mobile -Max tab
				if (theWindowSize >= 768 && theWindowSize < 1024) {
					$('.search-textbox-position').addClass('search-textbox-position-addmargin');
				}else{
					$('.search-textbox-position').removeClass('search-textbox-position-addmargin');
				}
   					if(theWindowSize<1200){
						$('.app-navigation__content').removeAttr("inert");
						$('.app-navigation__search').attr('style', 'padding-left: 25px;');
						$('#search_files').attr('style','width:90%');
						
						// ***** 
					//Navigation closed after click the menu 
					// $(".app-navigation-entry").on('click',function (event){
					// 	alert('navigation clicked!');
					// });
					//************ */
						// slider menu hover overlay
					$('.app-navigation').addClass('app-navigation-hover-1200');
						$('.app-navigation').hide();
						$('.file-app-res-menu').show();
						console.log("show menu");
						// Show search bar
						$('#nav-cf-searchbar').removeAttr('style');
						$('#nav-cf-searchbar').removeAttr('class');
								//Open Menu
							$(".file-app-res-menu").on('click', function(event){
								$('.app-navigation').show();
								$('.app-navigation').removeClass('app-navigation--close');						
							//	$(".app-navigation-toggle-wrapper").removeClass('app-navigation-toggle-wrapper-removed-toggle');
								$(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');
							});
							// Close Menu
							$('.app-navigation-toggle').on('click', function(event){
								var theWindowSize1 =$(window).width();
								if(theWindowSize1<1200){
								$('.app-navigation').addClass('app-navigation-hover-1200');								
								// $('.app-navigation').addClass('app-navigation--close');						
								//$(".app-navigation-toggle-wrapper").addClass('app-navigation-toggle-wrapper-removed-toggle');
								$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');
								 $('.app-navigation').hide();
								}
							});
   					}
					else {
						$('.app-navigation').show();
						$('.file-app-res-menu').hide();
						$('.app-navigation').removeClass('app-navigation-hover-1200');
						$('.app-navigation').removeClass('app-navigation--close');
						$(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');	
						
					} 
			}
	$(document).ready(function() {	

	//iOS bottom Space
	 function isiOS() {
	    return /iP(ad|hone|od)/.test(navigator.userAgent);
	  }

	  if (isiOS()) {
	    function setVh() {
	      let vh = window.innerHeight * 0.01;
	      document.documentElement.style.setProperty('--vh', `${vh}px`);
	    }
	    window.addEventListener('resize', setVh);
	    setVh();
	    document.body.classList.add("ios-device");
	  }
	//iOS bottom Sapce End

			// console.clear();

			$('#jstree-install-app').on("select_node.jstree", function (e, data) {
				//selectedNode = data.node;
				console.log("Jstree Clicked"+data.node);
				let rawPath = data.instance.get_path(data.node, '/'); // "js /jquery.js"
				// Trim each segment
				let cleanPath = rawPath.split('/').map(p => p.trim()).join('/');
				//console.log("Selected path:", cleanPath);
				var id=$('#activeIndex').val();
				$('#file-path-'+id).val(cleanPath);
    		});

			$('#jstree-install-app-pv').on("select_node.jstree", function (e, data) {
				//selectedNode = data.node;
				console.log("Jstree Clicked"+data.node);
				let rawPath = data.instance.get_path(data.node, '/'); // "js /jquery.js"
				// Trim each segment
				let cleanPath = rawPath.split('/').map(p => p.trim()).join('/');
				//console.log("Selected path:", cleanPath);
				//var id=$('#activeIndex').val();
				$('#pv-path').val(cleanPath);
    		});


				$('.search-textbox-position').removeClass('search-textbox-position-addmargin');
				$('#search_files').attr('style','width:90%');
				$(".app-navigation-entry-link").on('click', function(event){
					// window.location.reload();
					var theWindowSize =$(window).width(); 
					if(theWindowSize<1200){
						$('.app-navigation').hide();	
						 $('.app-navigation').addClass('app-navigation--close');	
						//  $('.app-navigation').addClass('app-navigation-hover');
					}
					
				});
				$("body").mouseup(function(){ 
        			var theWindowSize_new =$(window).width(); 
					if(theWindowSize_new<1200){
						if ($('.app-navigation').css('display') != 'none') {
 						   $('.app-navigation').hide();
						}
					}
					var $target = $('.file-list-filters');
					console.log($target.find("ul").length);
					console.log($target.find("ul").children().length);
					if( $target.find("ul").children().length==1)
					{
						$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
					}
				});
				$(document).on('click', '.nc-chip, .files-list-filter_clear-button, .input-field_trailing-button, .button-vue__wrapper', function(){
					console.log("remove margin");
					var $target = $('.file-list-filters');
					console.log($target.find("ul").length);
					console.log($target.find("ul").children().length);
					if( $target.find("ul").children().length==0)
					{
						$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
					}
					$(".search-card-container").removeClass("active");
					$(".search-textbox-position").removeClass("search-textbox-position-active");
				});

				// Main Navigation Menu
						$(document).on('click','.layout-menu-toggle',function(){
						console.log("sdfasd");
							if (!$('html').hasClass('layout-menu-collapsed')) 
							{
							$('html').addClass('layout-menu-collapsed');
							$('.layout-menu-toggle').addClass('d-block');
							}else
							{
								$('html').removeClass('layout-menu-collapsed');
								$('.layout-menu-toggle').removeClass('d-block');
							}

							if (window.innerWidth < 1200) { // ✅ Check if screen width is below 1200px
								console.log("Toggle triggered below 1200px");
								
								if (!$('html').hasClass('layout-menu-expanded')) {
									$('html').addClass('layout-menu-expanded');								
									
								} else {
									$('html').removeClass('layout-menu-expanded');
								}
								 // ✅ Remove 'd-block' from '.layout-overlay.layout-menu-toggle'
								  $('.layout-overlay.layout-menu-toggle').removeClass('d-block');
								// $('.layout-menu-toggle.menu-link').removeClass('d-block');
							}
						});

				// $(document).on('click','.nc-chip', function(){
				// 	var $target = $('.file-list-filters');
				// 	if($target.find("ul").length==1)
				// 	{
				// 		$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
				// 	 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
				// 	}
					
				// });
				// $(document).on('click','.files-list-filter__clear-button', function(){
				// 	var $target = $('.file-list-filters');
				// 	if($target.find("ul").length==1)
				// 	{
				// 		$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
				// 	 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
				// 	}
				// });

				// $('body,html').click(function(e){
				// 	console.log("click page redirects");
				// 	window.location.reload();
				// });
				// Menu Responsive function
				responsive_script();
				// Sticky Topbar 
				// remove serach bar toggle icon
				$("#nav-cf-searchbar").removeClass('app-navigation');				
				// $('.app-navigation-toggle').html('<i class="bx bx-chevron-left bx-sm align-middle"></i>');
				$('.app-navigation-toggle-wrapper').hide();
				// file filter button 
		//		$(".v-popper--theme-dropdown").on('click',function (event){
					$(document).on('click', '.file-list-filters .v-popper--theme-dropdown', function(){
				console.log("margin 30px placed");
					 $(".breadcrumb__crumbs").attr('style' , 'margin-top:30px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:30px');					
				})
				// Serch fileter function
				$('#search_files').on('input', function() {
					 $(".breadcrumb__crumbs").attr('style' , 'margin-top:30px'); 
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:30px');		
				});
			
				$('.app-navigation__content').removeAttr("inert");

				// ************ ON CLICK

				$(".app-navigation-toggle").on('click', function(event){
									

					// Toggle icon Removed
					//$(".app-navigation-toggle-wrapper").addClass('app-navigation-toggle-wrapper-removed-toggle');	
					$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');				
					$('.app-navigation__content').removeAttr("inert");
					$('#nav-cf-searchbar').removeClass('app-navigation--close');
					
					
					  if (!$('#app-navigation-vue').hasClass('app-navigation-mini')) 
					  {
						$('#app-content-vue').addClass('main-expanded');					
						// **
						// $('#app-content-vue').attr('style','position:absolute !important');

						// right top breadcrumbs position						
						$('.files-list__header').attr('style','margin-left:100px');
						// right files table						
						// $('.files-list__table').attr('style','margin-left:70px');
						//right side file list filters
						// $('.files-list__filters').attr('style','margin-left:40px');
						$('#app-navigation-vue').addClass('app-navigation-mini');
						$('.app-navigation').addClass('app-navigation--close');
						$('.app-navigation').addClass('app-navigation-hover');
				      }else{
						  $('#app-content-vue').removeClass('main-expanded');
						  $('#app-content-vue').removeAttr('style');
						  $('.files-list__header').removeAttr('style');
						  $('.files-list__table').removeAttr('style');
						  $('.files-list__filters').removeAttr('style');
						  $('#app-navigation-vue').removeClass('app-navigation-mini');
						  $('.app-navigation').removeClass('app-navigation--close');
						  $('.app-navigation').removeClass('app-navigation-hover');
						//  $(".app-navigation-toggle-wrapper").removeClass('app-navigation-toggle-wrapper-removed-toggle');
						  $(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');
						
					  }
					  
					// var theWindowSize =$(window).width(); 
					// console.log(theWindowSize)
					// if(theWindowSize<1200){
					// 	console.log("remove close class");
					// 	$('.app-navigation').removeClass('app-navigation--close');
					// 	$('.app-navigation').removeClass('app-navigation-hover');
					// }
					var theWindowSize =$(window).width(); 
					console.log(theWindowSize)
					$('.app-navigation').removeClass('app-navigation-hover');
					if(theWindowSize<1200){
						console.log("remove close class");
						$('.app-navigation').removeClass('app-navigation--close');						
					}else{					
						// $('.app-navigation').addClass('app-navigation--close');
						// $('.app-navigation').removeClass('app-navigation-hover-1200');
						// $('.app-navigation').show();
						// $('#app-navigation-vue').addClass('app-navigation-mini');	
					}
				});
				
				// ***************** OLD CODE ********/
				//Remove the 'app-navigation--close' class from the hovered element
				// $('#app-navigation-vue').on({					
				// 	mouseover: function() {	
				// 	// Check if the element currently has the 'app-navigation--close' class
				// 	if ($(this).hasClass('app-navigation-mini')) {
				// 		// slider menu hover overlay
				// 		$('.app-navigation').addClass('app-navigation-hover');
				// 		// Remove the 'app-navigation--close' class if it exists
				// 		$('.app-navigation').removeClass('app-navigation--close');						
				// 		//$(".app-navigation-toggle-wrapper").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 		$(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 	}
				// 	},
				// 	mouseout: function() {	
				// 	// Check if the element does not have the 'app-navigation--close' class
				// 	if ($(this).hasClass('app-navigation-mini')) {
				// 			// slider menu hover overlay
				// 		$('.app-navigation').removeClass('app-navigation-hover');
				// 		// Add the 'app-navigation--close' class if it does not exist
				// 		$('.app-navigation').addClass('app-navigation--close');
				// 		$('#nav-cf-searchbar').removeClass('app-navigation--close');
				// 	//	$(".app-navigation-toggle-wrapper").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 		$(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle');
				// 	}
				// 	}
				// });
				// ***************** OLD CODE END********/
				 $('#app-navigation-vue').on({
				 		mouseenter: function() {
				 			if ($(this).hasClass('app-navigation-mini')) {
								console.log("working");
				 				$('.app-navigation').toggleClass('app-navigation-hover', true);
				 				$('.app-navigation').toggleClass('app-navigation--close', false);
				 				// $(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle', false);
								 setTimeout(function() {
									$(".app-navigation-toggle-wrapper-new").removeClass('app-navigation-toggle-wrapper-removed-toggle');
								}, 500);
				 			}
				 		},
				 		mouseleave: function() {
				 			if ($(this).hasClass('app-navigation-mini')) {
				 				$('.app-navigation').toggleClass('app-navigation-hover', false);
				 				$('.app-navigation').toggleClass('app-navigation--close', true);
				 				$('#nav-cf-searchbar').toggleClass('app-navigation--close', false);
				 				$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');
				 			}
				 		}
				 	});

			
			// Responsive Menu
			// $('.file-app-res-menu').hide();
			$(window).resize(function () {   
				$(".search-card-container").removeClass("active");
				$(".search-textbox-position").removeClass("search-textbox-position-active");
				responsive_script() 				
			}); // Responsive menu closed
		
		// Search
			$(".input-field__main-wrapper").addClass("search-textbox-position");
			$(".search-icon").on("click", function() {
				$(".search-card-container").addClass("active");
				$(".search-textbox-position").addClass("search-textbox-position-active");
			});
			$('#search_files').on('input', function() {
				$(".search-card-container").addClass("active");
				$(".search-textbox-position").addClass("search-textbox-position-active");
			});
		// let search = document.querySelector(".search");
        //  search.onclick = function(){
        //     document.querySelector(".search-card-container").classList.toggle('active');

		$(document).on('click','.back-button',function(){

			window.history.go(-1); return false;
         });
		 $(document).on('click','.scroll-top-btn',function(){
			console.log("Go To Top");
		 	window.scrollTo({ top: 0, behavior: 'smooth' });
			
		 });
		$(document).on('click','.menu-toggle',function(){
			 	if(jQuery(this).parent('li').hasClass('open'))
					jQuery(this).parent('li').removeClass('open')
				else
					jQuery(this).parent('li').addClass('open')
				// jQuery(this).parents('li').addClass('open');

		  });

		}); //Document Ready function closed
		
		
		
