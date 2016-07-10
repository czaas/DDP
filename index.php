<?php	
	$section = "home";
	$title = "Drafting and Design Plus";
	$desc = "Test";
	$keywords = "test";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php");
?>
		<div class="row">
			<div class="columns small-12">
				<img src="images/hm-banner.jpg" alt="Revit BIM draft"><br />
			</div>
			<div class="columns small-12">
				<div class="row">
					<div class="columns small-12 medium-6">
						<div class="description">
							<h2>Fast, Accurate, &amp; <span class="nobreak">Cost Effective</span></h2>
							<p>Owner, Dave Jones, has been been providing drafting services for the commercial glazing industry since 1991.</p>
							<div class="row" id="showCase">
								<div class="columns small-6"><a href="<?php echo $eweb ?>/images/hm-stadium-lg.jpg" class="fancyImage"><img src="images/hm-stadium.jpg" alt="Revit Render of San Fransisco 49ers Stadium by Dave Jones"></a></div>
                                <div class="columns small-6"><a href="<?php echo $eweb ?>/images/hm-sj-health-center.jpg" class="fancyImage"><img src="images/hm-sjsh.jpg" alt="Revit render of San Jose Health Center by Dave Jones"></a></div>
							</div>
						</div>
					</div>
					<div class="columns small-12 medium-6" id="cta">
						<a href="<?php echo $eweb ?>/about/">Learn More about DDP <i class="fa fa-caret-right"></i></a>
						<a href="<?php echo $eweb ?>/portfolio/">View Our Portfolio <i class="fa fa-caret-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>
	</body>
</html>