<?php 
include('config.php');
$pageName = 'showcase';
$pageTitle = 'Showcase';
include('./includes/header.php');
?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-10 gallery">
		<?php
            if($_GET['gallery'] == 'new'){
				// Path to directories to scan
				$new_directory = "./uploads/new/";

				// Only .pdf files allowed!
				$allowed_types = array('pdf');

				if( $allowed_types )
				{
					// Get all files with a .pdf extension.
					$pdflink = glob($new_directory . "*.pdf");

					// Print each file name
					foreach($pdflink as $link) {
						echo "<a href='".$link."'><img src='assets/img/adobe-pdf-logo.png' width='100' /></a>";
					}
				}
			}
			
			if($_GET['gallery'] == 'verified'){
				// Path to directories to scan
				$new_directory = "./uploads/verified/";

				// Only .pdf files allowed!
				$allowed_types = array('pdf');

				if( $allowed_types )
				{
					// Get all files with a .pdf extension.
					$pdflink = glob($new_directory . "*.pdf");

					// Print each file name
					foreach($pdflink as $link) {
						echo "<a href='".$link."'><img src='assets/img/adobe-pdf-logo.png' width='100' /></a>";
					}
				}
			}
        ?>
      </div>
    </div>
  </div>
</body>
</html>
