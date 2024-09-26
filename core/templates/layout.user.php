<?php
/**
 * SPDX-FileCopyrightText: 2016-2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-FileCopyrightText: 2011-2016 ownCloud, Inc.
 * SPDX-License-Identifier: AGPL-3.0-only
 */

/**
 * @var \OC_Defaults $theme
 * @var array $_
 */

$getUserAvatar = static function (int $size) use ($_): string {
	return \OC::$server->getURLGenerator()->linkToRoute('core.avatar.getAvatar', [
		'userId' => $_['user_uid'],
		'size' => $size,
		'v' => $_['userAvatarVersion']
	]);
}

?><!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" data-locale="<?php p($_['locale']); ?>" translate="no" >
	<head data-user="<?php p($_['user_uid']); ?>" data-user-displayname="<?php p($_['user_displayname']); ?>" data-requesttoken="<?php p($_['requesttoken']); ?>">
		<meta charset="utf-8">
		<title>

			<?php
				p(!empty($_['pageTitle']) && $_['pageTitle'] !== $_['application'] ? $_['pageTitle'].' - ' : '');
p(!empty($_['application']) ? $_['application'].' - ' : '');
p($theme->getTitle());
?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php if ($theme->getiTunesAppId() !== '') { ?>
		<meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
		<?php } ?>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="<?php p((!empty($_['application']) && $_['appid'] != 'files')? $_['application']:$theme->getTitle()); ?>">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="<?php p($theme->getColorPrimary()); ?>">
		<link rel="icon" href="<?php print_unescaped(image_path($_['appid'], 'favicon.ico')); /* IE11+ supports png */ ?>">
		<link rel="apple-touch-icon" href="<?php print_unescaped(image_path($_['appid'], 'favicon-touch.png')); ?>">
		<link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path($_['appid'], 'favicon-touch.png')); ?>">
		<link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path($_['appid'], 'favicon-mask.svg')); ?>" color="<?php p($theme->getColorPrimary()); ?>">
		<link rel="manifest" href="<?php print_unescaped(image_path($_['appid'], 'manifest.json')); ?>" crossorigin="use-credentials">
		<?php emit_css_loading_tags($_); ?>
		<?php emit_script_loading_tags($_); ?>
		<?php print_unescaped($_['headers']); ?>
		<!-- App Navigation over ride -->
	
		
		<link href='/themes/cloudfloat/core/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="/themes/cloudfloat/core/css/icons.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>"></script>
		<script type="text/javascript" nonce="<?php p(\OC::$server->getContentSecurityPolicyNonceManager()->getNonce()) ?>">
			function responsive_script()
			{
				var theWindowSize =$(window).width(); 
				console.log(theWindowSize);
   					if(theWindowSize<1200){
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
								$('.app-navigation').addClass('app-navigation-hover-1200');								
								$('.app-navigation').addClass('app-navigation--close');						
								//$(".app-navigation-toggle-wrapper").addClass('app-navigation-toggle-wrapper-removed-toggle');
								$(".app-navigation-toggle-wrapper-new").addClass('app-navigation-toggle-wrapper-removed-toggle');
								 $('.app-navigation').hide();
							});
   					}
					else {
						$('.app-navigation').show();
						$('.file-app-res-menu').hide();
					} 
			}
			$(document).ready(function() {				
			
				$(".app-navigation-entry-link").on('click', function(event){
					window.location.reload();
				});
				$(document).on('click','.nc-chip', function(){
					var $target = $('.file-list-filters');
					if($target.find("ul").length==1)
					{
						$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
					}
					
				});
				$(document).on('click','.files-list-filter__clear-button', function(){
					var $target = $('.file-list-filters');
					if($target.find("ul").length==1)
					{
						$(".breadcrumb__crumbs").attr('style' , 'margin-top:0px'); 					
					 $(".files-list__header-upload-button").attr('style' , 'margin-top:0px');	
					}
				});

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
				$(".v-popper--theme-dropdown").on('click',function (event){
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
				 		mouseover: function() {
				 			if ($(this).hasClass('app-navigation-mini')) {
				 				$('.app-navigation').toggleClass('app-navigation-hover', true);
				 				$('.app-navigation').toggleClass('app-navigation--close', false);
				 				$(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle', false);
				 			}
				 		},
				 		mouseout: function() {
				 			if ($(this).hasClass('app-navigation-mini')) {
				 				$('.app-navigation').toggleClass('app-navigation-hover', false);
				 				$('.app-navigation').toggleClass('app-navigation--close', true);
				 				$('#nav-cf-searchbar').toggleClass('app-navigation--close', false);
				 				$(".app-navigation-toggle-wrapper-new").toggleClass('app-navigation-toggle-wrapper-removed-toggle', true);
				 			}
				 		}
				 	});

			
			// Responsive Menu
			// $('.file-app-res-menu').hide();
			$(window).resize(function () {   
				responsive_script() 				
			}); // Responsive menu closed

		
		}); //Document Ready function closed
		</script>
			<!-- End -->
	</head>
	<body id="<?php p($_['bodyid']);?>" <?php foreach ($_['enabledThemes'] as $themeId) {
		p("data-theme-$themeId ");
	}?> data-themes=<?php p(join(',', $_['enabledThemes'])) ?>>
	<?php include 'layout.noscript.warning.php'; ?>

		<?php foreach ($_['initialStates'] as $app => $initialState) { ?>
			<input type="hidden" id="initial-state-<?php p($app); ?>" value="<?php p(base64_encode($initialState)); ?>">
		<?php }?>

		<div id="skip-actions">
			<?php if ($_['id-app-content'] !== null) { ?><a href="<?php p($_['id-app-content']); ?>" class="button primary skip-navigation skip-content"><?php p($l->t('Skip to main content')); ?></a><?php } ?>
			<?php if ($_['id-app-navigation'] !== null) { ?><a href="<?php p($_['id-app-navigation']); ?>" class="button primary skip-navigation"><?php p($l->t('Skip to navigation of app')); ?></a><?php } ?>
		</div>

		<header id="header">
			<div class="header-left">
				<a href="<?php print_unescaped($_['logoUrl'] ?: link_to('', 'index.php')); ?>"
					aria-label="<?php p($l->t('Go to %s', [$_['logoUrl'] ?: $_['defaultAppName']])); ?>"
					id="nextcloud">
					<div class="logo logo-icon"></div>
				</a>

				<nav id="header-left__appmenu"></nav>
			</div>

			<div class="header-right">
				<div id="unified-search"></div>
				<div id="notifications"></div>
				<div id="contactsmenu"></div>
				<div id="user-menu"></div>
			</div>
		</header>

		<main id="content" class="app-<?php p($_['appid']) ?>">
			<h1 class="hidden-visually" id="page-heading-level-1">
				<?php p((!empty($_['application']) && !empty($_['pageTitle']) && $_['application'] != $_['pageTitle'])
					? $_['application'].': '.$_['pageTitle']
					: (!empty($_['pageTitle']) ? $_['pageTitle'] : $theme->getName())
				); ?>
			</h1>
			<?php print_unescaped($_['content']); ?>
		</main>
		<div id="profiler-toolbar"></div>
	</body>
</html>
