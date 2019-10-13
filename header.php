<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Blog</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?php echo site_url('')?>">Blog <span><i class="fas fa-blog"></i></span></a>
            <button class="navbar-toggler navbar-toggle" type="button" data-toggle="collapse" data-target="#navigationBar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navigationBar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-5" data-aos="fade-left">
                  <a class="nav-link active" href="<?php echo site_url('')?>">Home</a>
                </li>
                <li class="nav-item mx-5" data-aos="fade-right">
                  <a class="nav-link" href="<?php echo site_url('/blog')?>">Blog</a>
                </li>
                <li class="nav-item mx-5" data-aos="fade-left">
                  <a class="nav-link" href="<?php echo site_url('/projects')?>">Projects</a>
                </li>
                <li class="nav-item mx-5" data-aos="fade-right">
                  <a class="nav-link" href="<?php echo site_url('/about')?>">About</a>
                </li>
                <li class="nav-item mx-5" data-aos="fade-up">
                  <div class="dropdown">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <i class="fas fa-search"></i>
                    </a>
                    <div class="dropdown-menu shadow">
                      <form class="form-inline" method="get" action="<?php echo home_url() ?>">
                            <input class="form-control" type="search" name="s" placeholder="Search here..." aria-label="Search" value="<?php echo get_search_query(); ?>">
                            <button class="btn btn-success" type="submit" id="search-btn" value="">Search</button>
                      </form>
                    </div>
                  </div>
                </li> 
              </ul>
              
            </div>
        </nav>
        
        
        
    </header>