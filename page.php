<html>


<!-- begin the page and load styles/scripts common to all pages -->
<!-- leave the HEAD tag open so each page can use a different title. HEAD tag is closed in header2.html -->

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="<?php bloginfo('template_directory'); ?>/rdcc.js" type="text/javascript"></script>
	<?php wp_head(); ?>
	
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<!-- end the headers and start the page -->
</head>


<body>
	
	<!-- make the various borders -->
	<div style="margin-left:auto;margin-right:auto;width:830px;height:100%;position:relative;top:-8px;">
		<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/success.png" style="position:absolute;right:0px;top:65px;border:none;"></a>
		<div style="position:relative;top:100px;background:#d1c7ac;padding-top:11px;padding-bottom:10px;">
			<div style="position:relative;left:10px;background:#f0f2e7;width:810px;">
				
				<!-- links across the top of the header -->
				<div id="header" style="height:244px;;position:relative;">
					<?php get_header(); ?>
				</div>

				<!-- use a table to divide the middle section into sidebar and main content areas -->
				<table border="0" cellspacing="5" cellpadding="5">
					
					<tr><td>
						<div id="sidebar" style="width:172px;">
							<?php get_sidebar(); ?>
						</div>
					</td><td>
						
					<!-- MAIN CONTENT BODY BEGINS -->
					<div id="main" style="position:relative;left:10px;">
						<?php 
						$page_id = get_the_ID();
						$page_data = get_page( $page_id );

						$title = $page_data->post_title; // Get title
						$content = $page_data->post_content; // Get Content
						echo $page_data->post_content; // Output Content, echo $page_data->[Page data field] (see above)
						?>
					</div>
					<!-- MAIN CONTENT BODY ENDS -->
					</td></tr>
				</table>

				<div id="footer" style="position:relative;padding-top:10px;">
					<?php get_footer(); ?>
				</div>
			</div>
		</div>

		<!-- main logo. put this last so its z-index is highest (ie, so it'll be on top of everything else) -->
		<!-- always use border=none on image links -->
		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logoRDCC.png" style="position:absolute;top:0px;left:10px;border:none;"></a>

		<br><br>
		<br><br>
		<br><br>
	</div>

	<!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-9591150-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>


