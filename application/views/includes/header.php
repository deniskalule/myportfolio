<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/myportfolio/assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>Jot-Ham Technologies</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-light fixed-top">
    <a class="navbar-brand" href="#"><h5 class="slide-in">Jot-Ham Technologies</h5></a>
        <button style="color:#fff;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color: "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>"><i class="fas fa-home     mr-2"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('about');?>"><i class="fas fa-book     mr-2"></i> About</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo base_url('projects');?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('projects');?>">Wordpress</a>
                <a class="dropdown-item" href="<?php echo base_url('projects');?>">Web applications</a>
                
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('projects');?>"> <i class="fa fa-product-hunt" aria-hidden="true"></i> Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('services');?>"><i class="fas fa-servicestack    "></i> Services</a>
            </li>

            <li class="nav-item">
                <a href="https://api.whatsapp.com/send?phone=256776481096" class="btn text-danger" style="border: 1px solid #fff;">Hire me</a>
            </li>
            </ul>
            
        </div>
    </nav>
    
    