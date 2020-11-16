<div class="box dark-bg contactInfo" style="background-color:#14171a;">
    <h1>Contact Us</h1>
    <p>Below are some info on how to reach out to us. <br>
    </p>
    <p class="small contact-address-info">
        <i class="fa fa-map-marker"></i>
        <a href="https://maps.google.com/maps?q=9+haddon+road, BR54BU" target="_blank">
	        <?php echo block_field('address');?>
        </a>

    </p>
    <p class="small contact-address-info">
        <i class="fa fa-envelope"></i>
        <a target="_blank" href="mailto: <?php echo block_field('email');?>" class=""><?php echo block_field('email');?></a>
    </p>
    <p class="small contact-address-info">
        <i class="fa fa-phone"></i>
        <a target="_blank" href="tel:<?php echo block_field('phone');?>"><?php echo block_field('phone');?></a>
    </p>
</div>
