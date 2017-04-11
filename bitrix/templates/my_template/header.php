<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html lang="en-US">
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle(false);?></title>
		<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />

		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/form.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/jquery.datetimepicker.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?=SITE_TEMPLATE_PATH?>/css/preloader.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans%3A400%2C700%7CDancing+Script%3A400%2C700%7CRoboto+Slab%3A400%2C700&#038;' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	</head>
	<body data-spy="scroll">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>

		<div id="wrapper" class="wide-wrap">
			<header class="header-container header-type-below header-navbar-below">

	<div class="navbar-header">
					<div class="container">
						<div class="navbar-header-left">
							<button data-target=".primary-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar bar-top"></span>
								<span class="icon-bar bar-middle"></span>
								<span class="icon-bar bar-bottom"></span>
							</button>
							<a class="cart-icon-mobile" href="#">
								<i class="minicart-icon-svg elegant_icon_cart_alt"></i>
							</a>
							<a class="navbar-brand" href="./">
								<img class="logo" alt="Vicky Restaurant" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png">
								<img class="logo-fixed" alt="Vicky Restaurant" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png">
								<img class="logo-mobile" alt="Vicky Restaurant" src="<?=SITE_TEMPLATE_PATH?>/images/logo-mobile.png">
							</a>
							<div class="navsearch">
								<div class="navsearch-wrap">
									<form id="top-searchform">
										<label for="top-searchform-s" class="sr-only">Search</label>
										<input type="search" id="top-searchform-s" name="s" class="form-control" value="" placeholder="Search something&hellip;"/>
										<i class="top-searchform-icon"></i>
										<input type="submit" class="hidden" name="submit" value="Search"/>
									</form>
								</div>
							</div>
						</div>
						<div class="navbar-header-center">
							<a class="navbar-brand" href="./">
								<img class="logo" alt="Vicky Restaurant" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png">
								<img class="logo-fixed" alt="Vicky Restaurant" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png">
								<img class="logo-mobile" alt="Vicky Restaurant" src="<?=SITE_TEMPLATE_PATH?>/images/logo-mobile.png">
							</a>
						</div>
						<div class="navbar-header-right">
							<div class="navcart">
								<div class="navcart-wrap">
									<div class="navbar-minicart">
										<a class="minicart-link" href="#">
											Shopping cart 
											<span class="minicart-icon ">
												<i class="minicart-icon-svg elegant_icon_bag"></i> 
												<span>0</span>
											</span>
										</a>
										<div class="minicart">
											<div class="minicart-header show">Your shopping bag is empty.</div>
											<div class="minicart-footer">
												<div class="minicart-actions clearfix">
													<a class="button" href="#">
														<span class="text">Go to the shop</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	</div>


		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"my_main_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "my_main_menu",
		"ROOT_MENU_TYPE" => "top",
		"DELAY" => "N"
	),
	false
);?>
			</header>