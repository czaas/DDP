<?php	
	$section = "contact";
	$title = "Contact Drafting and Design Plus";
	$desc = "Send a message to DDP";
	$keywords = "commercial drafting, commercial glazing, contact commercial drafter";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php");
?>    
   <div class="row">
       <div class="columns small-12">
           <h1>Contact Us</h1>
       </div>
       <form id="theForm" method="post" action="mailer.php">
           <div class="columns small-12 medium-10 large-8">
                <div class="row">
                    <div class="columns small-12 medium-6">
                        <input type="text" class="formName" id="fName" name="name" required  placeholder="Name:">
                        <input type="email" class="formEmail" name="email" required  placeholder="Email:">
                        <input type="text" class="formPhone" id="fPhone" name="phone" required placeholder="Phone:">
                    </div>
                    <div class="columns small-12 medium-6">
                        <textarea name="message" id="fMessege" cols="40" rows="10" required  placeholder="Your Message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="columns small-6 medium-4 large-3">
                        <input type="submit" name="submit" value="Submit" class="submitButton">
                    </div>
                </div>
           </div>
       </form>
       <div class="columns small-12 medium-4">
         
       </div>
   </div>
           
  
    
	<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>
	</body>
</html>