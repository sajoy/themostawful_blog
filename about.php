<?php 
	session_start();
	$_SESSION['subfolder'] = "no"; //put in archive, index, about, social, anything main level
?> 
    
<?php include "header.php" ?>

<img src='contentImgs/about.jpg'>
        
            </div>
            
            <div id="right"> 
            10 Truths and 1 Lie
                 <div class="contentTxt fullContent">
                 
                  <?php include "contentTxt/about.txt" ?>
				  
<?php include "end.php" ?>   