<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehedi Hasan</title>
    <link rel="shortcut icon" href="assets/img/mehedi_hasan_shis-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<!-- header section start -->

<header>
    <nav>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <a href="" class="navbar-brand logo">mehedihasan<span style="color: #4EE1A0;">.</span></a>
                </div>

                <div class="col-md-6 d-md-flex justify-content-end gap-4">
                    <a href="https://github.com/mehedihasanit12"><img src="assets/img/akar-icons_github-fill.svg" alt=""></a>
                    <a href="https://www.frontendmentor.io/profile/mehedihasanit12"><img src="assets/img/simple-icons_frontendmentor.svg" alt=""></a>
                    <a href="https://www.linkedin.com/in/mehedi-hasan-515b35221/"><img src="assets/img/LinkedIn.svg" alt=""></a>
                    <a href="https://x.com/Mehedihasanit1"><img src="assets/img/akar-icons_twitter-fill.svg" alt=""></a>
                    <a href="web.php?page=admin" class="contact-btn">Admin</a>
                </div>
            </div>
        </div>
    </nav>


</header>


<!-- header section end -->



<!-- hero section start -->


<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 position-relative">
                <img style="height: 125px;position: absolute;top: -63px;left: -223px;" src="assets/img/Group 26.png" width="530px" alt="">
                <h1 class="heading-xl">Nice to meet you!</h1>
                <h1 class="heading-xl">I’m <span class="hero-name position-relative">Mehedi Hasan.</span></h1>
                <p class="body-text">
                    Based in the UK, I’m a front-end developer<br> passionate about building accessible web apps<br> that users love.
                </p>

                <a href="mailto:mehedihasanit242@gmail.com" class="contact-btn">CONTACT ME</a>
            </div>

            <div class="col-md-4 position-relative">
                <img style="position: absolute; top: -86px; width: 100%; max-width: 100%;" src="assets/img/mehedi_hasan_shis-removebg-preview.png" alt="">
                <img src="assets/img/Oval.svg" style="position: absolute;bottom: 0; left: -43px; z-index: -1;" alt="">
            </div>
        </div>
    </div>
</section>




<!-- hero section end -->




<!-- Skill Section Start -->


<section class="skill-section position-relative">

    <div class="container" style="border-top: 1px solid var(--white);">
        <div class="row" style="margin-top: 72px;">
            <div class="col-md-4 skill">
                <h1 class="heading-l">HTML</h1>
                <p class="body-text">
                    4 Years Experience
                </p>
            </div>

            <div class="col-md-4 skill">
                <h1 class="heading-l">CSS</h1>
                <p class="body-text">
                    4 Years Experience
                </p>
            </div>

            <div class="col-md-4 skill">
                <h1 class="heading-l">Javascript</h1>
                <p class="body-text">
                    4 Years Experience
                </p>
            </div>

            <div class="col-md-4 skill">
                <h1 class="heading-l">Accessibility</h1>
                <p class="body-text">
                    4 Years Experience
                </p>
            </div>

            <div class="col-md-4 skill">
                <h1 class="heading-l">React</h1>
                <p class="body-text">
                    3 Years Experience
                </p>
            </div>

            <div class="col-md-4 skill">
                <h1 class="heading-l">Sass</h1>
                <p class="body-text">
                    3 Years Experience
                </p>
            </div>

        </div>
    </div>

    <img src="assets/img/Group 27.png" style="width: 330px; height: 129px; position: absolute; bottom: 0; right: 0;" alt="">

</section>




<!-- Skill Section End -->


<!-- Projects Section Start -->


<section class="project-section">


    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6" style="margin-bottom: 80px;">
                <h1 class="heading-xl">Projects</h1>
            </div>

            <div class="col-md-6 d-flex justify-content-end" style="margin-bottom: 80px;">
                <a href="mailto:mehedihasanit242@gmail.com" class="contact-btn">CONTACT ME</a>
            </div>



            <!-- Projects -->

            <?php foreach ($projects->projects as $project) { ?>

            <div class="col-md-6 position-relative">
                <img src="<?php echo $project['project_image']; ?>" style="margin-bottom: 20px; width: 100%;" alt="">
                <div class="overlay">
                    <div>
                        <a href="<?php echo $project['project_link']; ?>" class="contact-btn">VIEW PROJECT</a>
                    </div>
                    <div>
                        <a href="<?php echo $project['project_code']; ?>" class="contact-btn">VIEW CODE</a>
                    </div>
                </div>
                <h1 class="heading-m"><?php echo $project['project_name']; ?></h1>
                <p class="body-text">
                    <?php echo $project['project_tool']; ?>
                </p>
            </div>

            <?php } ?>

        </div>
    </div>


</section>




<!-- Projects Section end -->



<!-- footer -->


<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 84px;">
                <h1 class="heading-xl" style="margin-bottom: 36px;">Contact</h1>
                <p class="body-text">
                    I would love to hear about your project and how I<br> could help. Please fill in the form, and I’ll get back<br> to you as soon as possible.
                </p>
            </div>

            <div class="col-md-6" style="margin-top: 84px; margin-bottom: 110px;">
                <form action="">
                    <input class="form-control mb-3" type="text" placeholder="NAME">
                    <input class="form-control mb-3" type="email" placeholder="EMAIL">
                    <textarea class="form-control" placeholder="MESSAGE"></textarea>
                    <div class="row mt-3">
                        <label class="col-md-9" for=""></label>
                        <input class="contact-btn col-md-3" style="border-bottom: 1px solid #4EE1A0 !important;" type="submit" value="SEND MESSAGE">
                    </div>

                </form>
            </div>
        </div>
    </div>


    <img class="footer-bg" src="assets/img/Group 26.png" alt="">


    <div class="container py-5" style="border-top: 1px solid #ddd;">
        <div class="row">

            <div class="col-md-6">
                <a href="" class="navbar-brand logo">mehedihasan<span style="color: #4EE1A0;">.</span></a>
            </div>

            <div class="col-md-6 d-md-flex justify-content-end gap-4">
                <a href="https://github.com/mehedihasanit12"><img src="assets/img/akar-icons_github-fill.svg" alt=""></a>
                <a href="https://www.frontendmentor.io/profile/mehedihasanit12"><img src="assets/img/simple-icons_frontendmentor.svg" alt=""></a>
                <a href="https://www.linkedin.com/in/mehedi-hasan-515b35221/"><img src="assets/img/LinkedIn.svg" alt=""></a>
                <a href="https://x.com/Mehedihasanit1"><img src="assets/img/akar-icons_twitter-fill.svg" alt=""></a>
            </div>
        </div>
    </div>

<?php echo '<pre style="color: white">';
var_dump($projects);
echo '<pre>';

?>

    <?php echo "<pre>";
    print_r($projects);
    echo "</pre>";
    ?>

</footer>


<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>