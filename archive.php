<?php
	session_start();
	$_SESSION['subfolder'] = "no"; //put in archive, index, about, social, anything main level
?>

<?php include "header.php" ?>

<img src='contentImgs/archive.jpg'>

            </div>

            <div id="right">
            Weekly entries:</br>
                 <div class="contentTxt halfContent">
                  <?php
				  // sort files by date: http://stackoverflow.com/questions/2667065/sort-files-by-date-in-php
				  // for both weekly and misc archives
					$dir = "weekly/";
					$date = '/\d{6}\.\w{3}/'; // to find file names of 6 digits .php

					foreach(glob($dir.'*.*') as $file) {
							if (preg_match($date, $file)) {
								$path = $file;
								$name = basename($path, ".php"); //sets $name to just the file name

							echo "<a href='weekly/".$name."'>".$name."</a>"; echo "</br>";}
						}

				   ?></div>

                  Misc. entries:</br>
                  <div class="contentTxt halfContent">
			<?php
					$dir = "misc/";
										
					foreach(glob($dir.'*.*') as $file) {

							$path = $file;
							$name = basename($path, ".php"); //sets $name to just the file name

							if ($name != "index") {
							echo "<a href='misc/".$name."'>".$name."</a>"; echo "</br>";}
						}

				   ?>

<?php include "end.php" ?>
