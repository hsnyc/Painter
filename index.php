<?php include 'form/processform.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Professional Painters of Largo, Clearwater, Tampa">
        <meta name="keywords" content="Professional Painters, local, Largo, Clearwater, Tampa Fl"/>

        <!-- styles -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet" default-stylesheet="true" type="text/css">

        <!-- fonts & icons -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:regular,700" rel="stylesheet" type="text/css" data-familyname="Montserrat" data-cssintegration="font-family:Montserrat,serif;">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <title>Professional Painters</title>
    </head>
    <body>
        <section class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="/" id="logo">
                            <div class="logo">
                                <p>
                                    <span class="logo-span">pro</span>fessional
                                    <span class="logo-p-span">painters</span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="phone">call <a href="tel:1-555-123-4567">555-123-4567</a></p>
                    </div>
                </div>
            </div>
        </section><!-- header-section end -->
        <section class="main-section">
            <div class="container home-cta">
                <h1><span>Professional </span>Painters</h1>
                <h2>of largo, clearwater, tampa</h2>
                <h3>We Care About More Than Paint!</h3>
                <div class="coupon">
                    <p>Schedule Your free Estimate</p>
                    <p>to redeem promo code for</p>
                    <p class="discount">$150 off</p>
                    <p><span>any job of $3000 or more!</span></p>
                </div><!-- coupon end -->

                <div class="form-wrap">
                    <form action="" method="POST" class="form-horizontal form-group" data-widget-class="form-group">

                        <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail']))) { ?>
                        <div class="well well-sm" id="form-error">
                            <h2>Oops!</h2>
                            <h3>Something went wrong :(</h3>
                            <p>Your form was not submitted.</p>
                            <p>You may need to re-summit your form.</p>
                            <p>I am very sorry for the inconvenience this may have caused.</p>
                        </div> <!--#form-error end -->

                        <?php } elseif ($missing || $errors) { ?>
                        <div id="form-error-heading"><h2>Please fix the item(s) indicated.</h2></div>
                        <?php } else { ?>
                        <!-- all is good, do nothing for now -->
                        <?php } ?>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <input type="text" name="name" pattern="[a-zA-Z\s]{1,}" title="Please only use letters" id="name" class="form-control" <?php if ($missing || $errors) { echo 'value="'.htmlentities($name, ENT_COMPAT,'UTF-8').'"'; } ?>>
                            <!-- show if name is missing -->
                            <?php if ($missing && in_array('name', $missing)) { ?><div class="form-error">Please enter your name.</div><?php } ?>

                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="user@mail.com" id="email" class="form-control" <?php if ($missing || $errors) { echo 'value="'.htmlentities($email, ENT_COMPAT,'UTF-8').'"'; } ?>>
                            <!-- show if email is missing -->
                            <?php if ($missing && in_array('email', $missing)) { ?><div class="form-error">Please enter your email.</div><?php } ?>

                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-sm-2 control-label">Phone</label>
                            <input type="tel" name="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="123-456-7890" id="tel" class="form-control" <?php if ($missing || $errors) { echo 'value="'.htmlentities($tel, ENT_COMPAT,'UTF-8').'"'; } ?>>
                            <!-- show if phone is missing -->
                            <?php if ($missing && in_array('tel', $missing)) { ?><div class="form-error">Please enter your phone.</div><?php } ?>
                        </div>
                        <div class="form-group">
                            <div class="red-btn">
                                <button type="submit" id="submit" name="go" value="submit" class="btn btn-default btn-lg">Save $150</button>
                            </div>
                        </div>
                    </form><!-- form ends -->
                </div><!-- form wrap end -->
                <div class="features-bar">
                    <p><i class="fa fa-check-circle"></i>Quality Work</p>
                    <p><i class="fa fa-check-circle"></i>Professional Painters</p>
                    <p><i class="fa fa-check-circle"></i>Flexible Schedules</p>
                </div>
            </div><!-- home-cta end -->
        </section><!-- main-section end -->
        <section class="service-info">
            <div class="container">
                <h2>Professional Painters</h2>
                <h3>Tackling Residential &amp; Commercial Painting Projects</h3>
                <p class="p1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida massa pharetra, tempor ligula ut, aliquet nulla. Quisque eu quam turpis. Sed porttitor mauris nec quam
                    dignissim, et placerat odio scelerisque. In hac habitasse platea dictumst.Proin et accumsan nunc, sit amet bibendum purus. Proin at euismod ante. Phasellus ipsum orci, feugiat
                    tristique mollis vitae, sagittis sollicitudin libero. In tempus ex non ipsum pretium, ac consequat justo fringilla.
                </p>
                <h3>Why Clients Choose to Hire Our Team:</h3>
                <ul>
                    <li>Mauris sit amet urna et leo pulvinar tristique.</li>
                    <li>Nam eu eros mollis, interdum sapien tincidunt, accumsan erat.</li>
                    <li>Maecenas rutrum libero ac diam volutpat, eu vehicula risus molestie.</li>
                    <li>Mauris at tellus in lacus efficitur fringilla.</li>
                    <li>Nullam lacinia nulla eget quam ornare blandit.</li>
                    <li>Sed mollis magna eu mi aliquet scelerisque.</li>
                </ul>
                <p class="p2">Donec aliquam sit amet nisi sed consequat. Etiam non gravida nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean feugiat lacinia velit non lacinia. Proineget tristique leo.</p>
            </div><!-- .container end -->
        </section><!-- .service-info end -->
        <footer>
            <p>Schedule your free estimate!</p>&nbsp;<a href="tel:1-555-123-4567">555-123-4567</a>
        </footer>

        <!-- scripts -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </body>
    <!-- Hi Maniacs. You have reached the end of the site. Hope you guys like it :) -->
</html>
