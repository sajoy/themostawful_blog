<?php 
	session_start();
	$_SESSION['subfolder'] = "no"; //put in archive, index, about, social, anything main level
?> 
    
<?php include "header.php" ?>

<?php include "contentTxt/instagram.txt" ?>


<!---- add instagram feed eventually yo --->          </div>
            
            <div id="right"> 
            
                 <div class="contentTxt">
                 <?php include "contentTxt/social.txt" ?>
				  
<?php include "end.php" ?>   