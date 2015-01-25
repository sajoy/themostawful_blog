<?php 
	session_start();
	$_SESSION['subfolder'] = "no"; //put in archive, index, about, social, anything main level
?> 
    
<?php include "header.php" ?>

<img src='contentImgs/index.jpg'>
        
            </div>
            
            <div id="right"> 
            
                 <div class="contentTxt fullContent">
                  <?php include "contentTxt/index.txt" ?>
				  
<?php include "end.php" ?>   