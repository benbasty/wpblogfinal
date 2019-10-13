<?php get_header(); ?>
<section id="page404">
<div class="container">
    <div class="row my-5">
        <div class="col-3 col-sm-3 col-md-3"></div>
        <div class="col-6 col-sm-6 col-md-6 error-page text-center align-items-center justify-content-center">
            <h1 class="mt-5 pb-1">Ooops</h1>
            <h2 class="pb-5">Page Not Found !</h2>
            <p class="">The page you are looking for might have been removed or has it's name changed or is temporarily unavailable.</p>
            <button class="btn btn-primary"><a class="text-white" href="<?php echo site_url('')?>">Go to Homepage</a></button>
        </div>
        <div class="col-3 col-sm-3 col-md-3"></div>
    </div>
</div>
</section>

<?php get_footer() ?> 