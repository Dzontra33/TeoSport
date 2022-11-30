<?php
//include header
include('header.php');
?>


<?php
//include wishlist template
count($product->getData('wishlist')) ? include('template/_wishlist-template.php') : include('template/notFound/_wishlist-notFound.php');

?>

<?php
//include footer
include('footer.php');
?>