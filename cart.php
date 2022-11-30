<?php
//include header
include('header.php');
?>


<?php
//include cart template
//and include empty cart 
count($product->getData('cart')) ? include('template/_cart-template.php') : include('template/notFound/_cart-notFound.php');
?>



<?php
//include footer
include('footer.php');
?>