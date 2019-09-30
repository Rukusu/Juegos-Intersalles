<?php
	header("Content-Type: text/html; charset=utf8");
	session_start();
	include('../core.php');
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="theme-color" content="#001e61">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
		<link type="image/x-icon" href="../favicon.ico" rel="icon">
		<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon">
		<title>XXV Juegos Deportivos Universitarios Lasallistas 2018</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/photoswipe.css">
		<link rel="stylesheet" href="../css/default-skin.css">
		<link rel="stylesheet" type="text/css" href="css/juegos.css?<?php echo date('YmdHis'); ?>">
		<link rel="stylesheet" type="text/css" href="css/interior.css?<?php echo date('YmdHis'); ?>">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/photoswipe.min.js"></script>
		<script type="text/javascript" src="../js/photoswipe-ui-default.min.js"></script>
		<script type="text/javascript" src="../js/photoswipe_ini.js"></script>
		<script type="text/javascript" src="js/juegos.js?<?php echo date('YmdHis'); ?>"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-21294178-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-21294178-1');
		</script>
	</head>
	<body>
		<?php include('header_int.php'); ?>
		<div id="titulo">
			<div class="wrapper">GALERÍA</div>
		</div>
		<section class="wrapper">
			<div class="text">
				<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
				<?php
					for($x = 1; $x <= 1; $x++){
						$photo = substr('00'.$x, -3, 3);
						$image = 'images/galeria/'.$photo.'.jpg';
						$size = getimagesize($image);
				?>
					<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?php echo $image; ?>" itemprop="contentUrl" data-size="<?php echo $size[0].'x'.$size[1]; ?>">
							<img src="<?php echo $image; ?>" itemprop="thumbnail" />
						</a>
						<figcaption itemprop="caption description"></figcaption>
					</figure>
				<?php
					}
				?>
				</div>
				<div class="clearfix"></div>
				<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="pswp__bg"></div>
					<div class="pswp__scroll-wrap">
						<div class="pswp__container">
							<div class="pswp__item"></div>
							<div class="pswp__item"></div>
							<div class="pswp__item"></div>
						</div>
						<div class="pswp__ui pswp__ui--hidden">
							<div class="pswp__top-bar">
								<div class="pswp__counter"></div>
								<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
								<button class="pswp__button pswp__button--share" title="Share"></button>
								<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
								<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
								<div class="pswp__preloader">
									<div class="pswp__preloader__icn">
										<div class="pswp__preloader__cut">
											<div class="pswp__preloader__donut"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
								<div class="pswp__share-tooltip"></div> 
							</div>
							<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
							</button>
							<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
							</button>
							<div class="pswp__caption">
								<div class="pswp__caption__center"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('footer.php'); ?>
	</body>
</html>