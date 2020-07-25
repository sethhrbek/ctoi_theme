<?php get_template_part( 'templates/partials/document-open' ); ?>

<div class="w-full flex items-center text-white font-bold uppercase justify-around bg-black menu">
    <a href="<?php echo home_url(); ?>" class="inline-block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
    </a>
    <ul class="list-none text-sm text-white flex justify-between md:text-center">
        <li class="md:mx-3 xl:mx-8"><a href="#">For Retailers</a></li>
        <li class="md:mx-3 xl:mx-8"><a href="#">For Consumers</a></li>
        <li class="md:mx-3 xl:mx-8"><a href="#">For Installers</a></li>
        <li class="md:mx-3 xl:mx-8"><a href="#">About Us</a></li>
        <li class="md:mx-3 xl:mx-8"><a href="#">Contact</a></li>
    </ul>
    <div class="button border-2 text-blue border-blue px-2 py-1">Installer Portal Login</div>
</div>
