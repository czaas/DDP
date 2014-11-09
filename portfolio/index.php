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
            <p>Below is a partial list of DDP’s recent projects:</p>
		</div>
	</div>
	<div class="row" id="portfolioList">
        <a href="<?php echo $eweb ?>/images/portfolio-sjcc-1.jpg" class="fancyImage"><div class="columns small-6">San Jose Convention Center <i class="fa fa-picture-o"></i></div></a>
        <a href="<?php echo $eweb ?>/images/portfolio-levi-center-1.jpg" class="fancyImage"><div class="columns small-6">SF 49ers Levi Stadium <i class="fa fa-picture-o"></i></div></a>
        <a href="<?php echo $eweb ?>/images/portfolio-sj-student-health-center-1.jpg" class="fancyImage"><div class="columns small-6">San Jose Student Health Center <i class="fa fa-picture-o"></i></div></a>
         <a href="<?php echo $eweb ?>/images/portfolio-monolithic-power-systems.jpg" class="fancyImage"><div class="columns small-6">Monolithic Power Systems <i class="fa fa-picture-o"></i></div></a>
        <div class="columns small-6">Echelon San Jose</div>
		<div class="columns small-6">Pacific Shores Redwood City</div>
		<div class="columns small-6">Milpitas City Hall</div>
		<div class="columns small-6">Hilton Executive Tower, Portland, OR</div>
		<div class="columns small-6">Monarch at Scripps Ranch, San Diego, CA</div>
		<div class="columns small-6">National Semiconductor, Santa Clara, CA</div>
		<div class="columns small-6">VA Hospital, Sacramento, CA</div>
		<div class="columns small-6">ADOA, Phoenix, AZ</div>
		<div class="columns small-6">Stratosphere Tower, Las Vegas, NV</div>
		<div class="columns small-6">Gilead NLB1 and NB355, Foster City, CA</div>
		<div class="columns small-6">McMurtry Building, Stanford (under construction)</div>
		
		<div class="columns small-6">Intel CF0401, Hillsboro, OR</div>
		<div class="columns small-6">Kaiser San Jose Medical Center</div>
		<div class="columns small-6">Google Plymouth Buildings, Mountain View, CA</div>
		<div class="columns small-6">Henderson Biobehavioral Health Bldg, Penn State</div>
		<div class="columns small-6">San Jose City College</div>
		<div class="columns small-6">CHOMP (Community Hospital of the Monterey Peninsula)</div>
		
		<div class="columns small-6">Sequoia Hospital, Redwood City</div>
		<div class="columns small-6">Pixar Animation, Emeryville, CA</div>
		<div class="columns small-6">City Creek, Salt Lake City, UT</div>
		<div class="columns small-6">Santa Clara Valley Medical Center</div>
		<div class="columns small-6">Apple IL5, Cupertino, CA</div>
		<div class="columns small-6">Kaiser MOB, Oakland, CA</div>
		
		
		<div class="columns small-6">Genentech, So. San Francisco, CA</div>
		<div class="columns small-6">Key Bank Tower, Salt Lake City, UT</div>
		<div class="columns small-6">Jordan Valley Patient Center, West Jordan, UT</div>
		<div class="columns small-6">John Muir Med Center, Concord, CA</div>
		<div class="columns small-6">VMWare, Palo Alto, CA</div>
		<div class="columns small-6">Kaiser Vallejo Medical Center</div>
		<div class="columns small-6">Autodesk, San Rafael, CA</div>
		<div class="columns small-6">Salt Palace, Salt Lake City, UT</div>
</div>
    
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>
	</body>
</html>