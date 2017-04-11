<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
				<div class="navbar-container">
					<div class="navbar navbar-default navbar-scroll-fixed">
						<div class="navbar-primary-nav">
							<div class="container">
								<div class="navbar-wrap">
									<nav class="collapse navbar-collapse primary-navbar-collapse">
										<ul class="nav navbar-nav primary-nav">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="menu-item-has-children active">
			<a href="./">
				<span class="underline"><?=$arItem["TEXT"]?></span> 
				<span class="caret"></span>
			</a>
		</li>
	<?else:?>
		<li class="menu-item-has-children">
			<a href="<?=$arItem["LINK"]?>">
				<span class="underline"><?=$arItem["TEXT"]?></span> 
				<span class="caret"></span>
			</a>
		</li>
	<?endif?>
	
<?endforeach?>
									<li class="navbar-search">
										<a class="navbar-search-button" href="#">
										<i class="fa fa-search"></i>
									</a>
									<div class="search-form-wrap show-popup hide">
										<form>
											<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
											<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
										</form>
									</div>
								</li>

							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
<?endif?>