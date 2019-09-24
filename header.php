
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"> <!--for レスポンシブルデザイン-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title('|' , true , 'right'); bloginfo('name'); ?></title>
</head>
<body class="bg1">
  <div id="wrapper">
    <!-- header -->

    <header class="header">
        <div>
            <ul>
            <li class="logo-text"><a href="<?php echo home_url('/'); ?>index.php"><img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/fuji.png" alt="logo"><?php bloginfo('name'); ?></a></li>
            </ul>
        </div>
        <div id="menu">
            <?php wp_head(); ?>
            <nav>

            <?php wp_nav_menu(); ?>
            </nav>
        </div>
      
        <!-- hero -->
  
    </header>
  
         