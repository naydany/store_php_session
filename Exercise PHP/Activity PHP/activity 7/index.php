<!-- HEADER -----------------------------------------  -->
<?php
require_once('templates/header.php');
?>

<!-- MAIN -----------------------------------------  -->
<div class="main-content">
    <main>
        <?php

        // 0 - We set the  path by default to home
        $path = 'pages/contacts.php';

        // 1 - Check if a page parameter is defined in the URL  
        if (isset($_GET['page'])) {

            // 2 If yes : compute the PATH of the page  (example :  pages/students.php)
            $pageFile = $_GET['page'];

            // 3 Check if the file exists, you can use file_exists() with the path computed above
            if (file_exists($pageFile)) {
                $path = $pageFile;
            }
        }

        // 4 Require the PATH of the page
       
        require_once($path)
        ?>

    </main>
</div>

<!-- FOOTER -----------------------------------------  -->
<?php
require_once('templates/footer.php');
?>