<?php include("path.php");
include(ROOT_PATH . "/apps/database/db.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8ef1de9f50.js" crossorigin="anonymous"></script>
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital@0;1&display=swap" rel="stylesheet">
<!-- custom styling -->
<link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
    <meta name="viewport"
    content="width=device-width,initial-scale = 1.0">
</head>
<body>
    <!-- header was removed -->
     <?php include(ROOT_PATH."/apps/includes/header.php"); ?>
     <?php include(ROOT_PATH."/apps/includes/messages.php"); ?>

   
    <div class="page-wrapper">
        <!--post slider-->
        <div class="post-slider">
            <h1 class="slider-title">trending post</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/20230907_225306.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day your life will flash before your eyes</a></h4>
                        
                    </div>
                </div>
                
                
        
                <div class="post">
                    <img src="assets/images/20230907_225306.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day your life will flash before your eyes</a></h4>
                        

                    
                    </div>
                </div>
                
                <div class="post">
                    <img src="assets/images/20230907_225306.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day your life will flash before your eyes</a></h4>
                    </div>
                </div>
                
                <div class="post">
                    <img src="assets/images/20230907_225306.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">one day your life will flash before your eyes</a></h4>
                    </div>
                </div>

        </div>

    </div>
    <!--content-->
    <div class="content clearfix">
        <!--main content-->
        <div class="main-content">
            <h1 class="recent-post-title">Recent posts</h1>
            <div class="post">
                <img src="assets/images/20230923_085235.jpg" alt= "" class="post-image">
                <div class="post-preview">
<h2><a href="single.html">the strongest and sweetest songs are yet to be sung</a></h2>
<i class="far fa-user">Brandews</i>
&nbsp;
<i class="far calendar">september 26th</i>
            <p class="preview-text">
                sometimes we look into our lives and say to ourselves that we are perhaps late.
                time has already passed we are late we didn't do our things early enough.but i tell you you aren't late
                you are just to quick and pressuring yourself everyone is given a specific timeline and that timeline has specific sections
            </p>
            <br>
            <a href="single.html" class="btn read-more">Read More</a>

            

                </div>

            </div>
            
            <div class="post">
                <img src="assets/images/20230923_085235.jpg" alt= "" class="post-image">
                <div class="post-preview">
<h2><a href="single.html">the beautiful and gorgeous are yet to be born</a></h2>
<i class="far fa-user">Brandews</i>
&nbsp;
<i class="far calendar">september 26th</i>
            <p class="preview-text">
                we should'nt worry whom we should marry or whom we should pay our dowry to.
                sometimes we think that perhaps time has passed and we are very late in our preparations hence we hurry up and this lead to wrong partner being 
                chosen. thas  we should not hurry up since the beautiful are yet to be born.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>

            

                </div>

            </div>
            
            <div class="post">
                <img src="assets/images/20230923_085235.jpg" alt= "" class="post-image">
                <div class="post-preview">
<h2><a href="single.html">live your life to the fullest explore all opportunities life has to offer</a></h2>
<i class="far fa-user">Brandews</i>
&nbsp;
<i class="far calendar">september 26th</i>
            <p class="preview-text">
                The lord himself said we should not worry about what we will eat or dress
                but we should live our lives to the fullest and explore all opportunities life has to offer.
                this doesn't mean that we should live extravagant lives and forget our principles but we should
                explore it in our limits.
            </p>
            <a href="<?php echo BASE_URL.'/single.php'?>" class="btn read-more">Read More</a>

            

                </div>
                
            </div>
        </div>
        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">search</h2>
                <form action="index.html"method="post">
                    <input type ="text" name ="search-term" class="text-input" placeholder="search..">

                </form>
            </div>
            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="#">poems</a></li>
                    <li><a href="#">quotes</a></li>
                    <li><a href="#">fictions</a></li>
                    <li><a href="#">biography</a></li>
                    <li><a href="#">motivation</a></li>
                    <li><a href="#">inspiration</a></li>
                    <li><a href="#">life lessons</a></li>


                </ul>

            </div>
        </div>
         </div> 
    </div>
    <!--footer-->
    <!-- footer was removed -->
    <?php include(ROOT_PATH."/apps/includes/footer.php"); ?>
     
    <!--jquery-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!--slick carousel-->
 <script type="text/javascript" src = "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <!-- custom script -->
   <script src = "assets/js/script.js"></script>
   </body>
</html>