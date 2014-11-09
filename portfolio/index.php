<?php	
	$section = "portfolio";
	$title = "DDP drawings portfolio";
	$desc = "See some of the work done by DDP";
	$keywords = "commercial drafting portfolio, BIM drawings, comercial glazing";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php");
?>

	<div class="row">
		<div class="columns small-12">
			<h1>Drafting &amp; Design Plus's Drawings</h1>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns">
			<img src="<?php echo $eweb ?>/images/portfolio-levi-center-2.jpg" alt="San Jose Health Center BIM render">
		</div>
	</div>
	<div class="row">
		<div class="columns small-12">
            <p>Below is a small sample of what work DDP has provided their clients.</p>
		</div>
	</div>
	<div class="row" id="portfolioList">
        <a href="<?php echo $eweb ?>/images/portfolio-sjcc-1.jpg" class="fancyImage"><div class="columns small-6 medium-4">San Jose Convention Center <i class="fa fa-picture-o"></i></div></a>
        <a href="<?php echo $eweb ?>/images/portfolio-levi-center-1.jpg" class="fancyImage"><div class="columns small-6 medium-4 fix">SF 49ers Levi Stadium <i class="fa fa-picture-o"></i></div></a>
        <a href="<?php echo $eweb ?>/images/portfolio-sj-student-health-center-1.jpg" class="fancyImage"><div class="columns small-6 medium-4 fix2">San Jose Student Health Center <i class="fa fa-picture-o"></i></div></a>
         <a href="<?php echo $eweb ?>/images/portfolio-monolithic-power-systems.jpg" class="fancyImage"><div class="columns small-6 medium-4">Monolithic Power Systems <i class="fa fa-picture-o"></i></div></a>
        <div class="columns small-6 medium-4">Pacific Shores Redwood City</div>
		<div class="columns small-6 medium-4">Milpitas City Hall</div>
		<div class="columns small-6 medium-4">Stratosphere Tower</div>
		<div class="columns small-6 medium-4">Gilead NLB1 and NB355</div>
		<div class="columns small-6 medium-4">Apple IL5</div>
		<div class="columns small-6 medium-4">Pixar Animation</div>
		<div class="columns small-6 medium-4">Jordan Valley Patient Center</div>
		<div class="columns small-6 medium-4">Key Bank Tower</div>
		<div class="columns small-6 medium-4">Genentech</div>
		<div class="columns small-6 medium-4">Salt Palace</div>
		<div class="columns small-6 medium-4">John Muir Med Center</div>
</div>
    
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>
	</body>
</html>