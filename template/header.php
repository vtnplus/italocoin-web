<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Italocoin (ITA) - is an anonymous and secure cryptocurrency based on CryptoNote And Monero Technology!</title>
        <meta name="description" content="Italocoin is an anonymous and secure cryptocurrency  with egalitarian CPU and GPU mining." />
        <meta name="keywords" content="Italocoin, ITA, CryptoNote, Technology, CryptoNote And Monero Technology" />

        <!-- stylesheets -->
        <link href="<?php echo template_url("bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
        <link href="<?php echo template_url("css/font-awesome.css");?>" rel="stylesheet">
        <link href="<?php echo template_url("css/ionicons.css");?>" rel="stylesheet">
        <link href="<?php echo template_url("css/owl.carousel.css");?>" rel="stylesheet">
        <link href="<?php echo template_url("css/style.css");?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200i,300,300i,400,600,700,700i,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">

    </head>
    <body>
        <!-- navbar -->
		<header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="<?php echo template_url("images/ita_h_white@2x.png");?>" style="width:210px!important;margin-top:-23px;"></img></a>

                    </div>
                    <div id="navbar" class="navbar-collapse collapse nav-top">
                        <ul class="nav navbar-nav navbar-right">
                            <?php foreach($menu as $k => $v){ ?>
                            <li><a href="<?php echo router($v->url);?>"><?php echo $v->name;?></a></li>
                            <?php } ?>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="blog-fullwidth.html">Blog</a></li>
                            <li><a href="single-post.html">Post</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><button type="button" class="btn btn-default navbar-btn">Download Wallets</button></li>
                        </ul>
                    </div>
                </div>
            </nav>
		</header>