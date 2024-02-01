<?php
$title = 'Welcome';
include 'header.php';
?>

<div class="body-container">
    <div class="home-banner-container">
        <img src="images/hamk-banner.avif" alt="banner" draggable="false">
    </div>
    <div class="article">
        <?php
        $fnimi = $_POST["fnimi"];
        $lnimi = $_POST["lnimi"];

        echo "Hello " . $fnimi . " " . $lnimi . ". Welcome to my site.";
        ?>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>