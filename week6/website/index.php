<?php include('includes/header.php'); ?>
<!-- ^^^ Header Include -->

    <h1 class="<?php echo $center; ?>"><?php echo $main_headline; ?></h1>

    <!-- <img src="images/photo1.PNG" alt="photo1" /> -->
    <?php
        echo rand_images($photos);
    ?>

    <blockquote>
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sollicitudin velit in erat ornare consectetur. Pellentesque nibh ex, elementum sed iaculis nec, sollicitudin sed ante. Curabitur porta laoreet urna, nec hendrerit neque lacinia nec. Maecenas at mauris ac quam venenatis dictum. Suspendisse commodo libero at urna vulputate ultricies. Integer tincidunt ipsum nec arcu placerat porta. Praesent ut arcu id risus aliquet ultrices. Pellentesque tincidunt enim eget erat aliquam euismod. Nulla auctor sapien quis nibh sodales, vel consequat dui commodo. Vestibulum placerat massa lorem, ac venenatis orci rhoncus ac. Aenean finibus euismod aliquam. Mauris maximus accumsan velit in rutrum. Etiam iaculis eleifend leo, nec aliquet orci convallis vel. Etiam mi dui, cursus porta accumsan eu, eleifend id quam. Praesent vel imperdiet nibh. Sed tristique porta lectus et eleifend."
    </blockquote>
    <p class="center"><a href="">Here is my <strong>EXTRA CREDIT LINK</strong> to my GitHub account showing you my rand_images function (index.php and config.php)</a></p>
    
<!-- vvv Footer Include -->
<?php include('includes/footer.php'); ?>