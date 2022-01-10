<?php

include "userinformation.php";

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $contactno =mysqli_real_escape_string($con,$_POST['contactno']);
    $destination =mysqli_real_escape_string($con,$_POST['destination']);
    $email =mysqli_real_escape_string($con,$_POST['email']);
    $comment =mysqli_real_escape_string($con,$_POST['comment']);

    $sql = "INSERT INTO  `userinfodata`(`name`,`contactno`,`destination`,`email`,`comment`) VALUES ('$name','$contactno','$destination','$email','$comment')";

    $iquery = mysqli_query($con,$sql);

    if($iquery){
        header("location:home.html");
    }
    else{
        echo"ERROR: $sql <br> $con->error";
    }

    $con->close();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSAFIR</title>
    <link rel="stylesheet" href="style/firstpro.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>
    <header class="main">
  <div class="logonav">
        <div >
             <a href="http://" class="logo" target="_blank" rel="noopener noreferrer">
                  <img src="img/onlinelogomaker-072921-2009-2607.png" alt="">
             </a>

      </div>
  <nav class="navbar">
<ul>
    <li><a  class="firstnav"href="http://" target="_blank" rel="noopener noreferrer">home</a></li>
    <li><a href="http://" target="_blank" rel="noopener noreferrer">place</a></li>
    <li><a href="http://" target="_blank" rel="noopener noreferrer">guider </a></li>
    <li><a href="http://" target="_blank" rel="noopener noreferrer">contact us</a></li>
    
</ul>
   

    <div class="icon1"><ion-icon  name="planet"></ion-icon></div>
  </nav>
</div>
     <div class="aboutpage">
         <h1>
             start travelling today
         </h1>
         <p>
             Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos sint fuga corrupti, repellendus labore optio fugit ratione ad nemo iusto quaerat asperiores sit! Veritatis reiciendis vitae placeat reprehenderit ullam id!
         </p>
         <a href="http://" target="_blank" rel="noopener noreferrer">contact us</a>
   </div>
</header> 
     <section>
    <h1 class="slide-heading"> <img src="img/onlinelogomaker2-072921-2243-6277.png" alt="">  plan your trip<img src="img/onlinelogomaker2-072921-2243-6277.png" alt=""></h1>

    <div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>

  <div class="container-box-item1">
        <h1 class="item-heading">rajasthan</h1>

    <p class="item-para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem quis molestiae at unde alias distinctio, accusamus odit quidem aliquid officiis cupiditate mollitia corporis. Cupiditate doloribus eum soluta, delectus blanditiis repellendus. </p>
    <a class="item-button"href="http://" target="_blank" rel="noopener noreferrer">explode</a>   
    </div>


    <div class="container-box-item2">
        <h1 class="item-heading">kerala</h1>
    <p class="item-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit similique laboriosam, sint omnis deserunt atque commodi fugiat cupiditate sapiente, magnam unde aspernatur ratione fuga nemo tempore quibusdam, nostrum aliquam! Reprehenderit.  </p>
    <a class="item-button"href="http://" target="_blank" rel="noopener noreferrer">explore</a>   
    </div>


    <div class="container-box-item3">
        <h1 class="item-heading">himachal</h1>
    
    <p class="item-para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae temporibus, fugiat ratione similique architecto obcaecati consequatur dolorem vel assumenda, itaque optio possimus asperiores, quidem harum reprehenderit! Dolor sapiente nostrum numquam!</p>
    <a class="item-button"href="http://" target="_blank" rel="noopener noreferrer">explore</a>   
    </div>


    <div class="container-box-item4">
        <h1 class="item-heading">banaras</h1>
    
    <p class="item-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid distinctio quod nostrum tenetur aspernatur mollitia quae in neque impedit totam omnis, quia possimus eveniet corporis. Fugit exercitationem non maxime enim.</p>
    <a class="item-button"href="http://" target="_blank" rel="noopener noreferrer">explore</a>   
    </div>
    

    <div class="container-box-item5">
        <h1 class="item-heading">kashamir</h1>
    
    <p class="item-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis totam neque libero numquam reiciendis accusamus exercitationem at quo dolorem nemo! Aut repellat quae quia rerum dignissimos ipsum eveniet nulla quisquam? </p>
    <a class="item-button"href="http://" target="_blank" rel="noopener noreferrer">explore</a>   
    </div>


    <div class="container-box-item6">
        <h1 class="item-heading">see more</h1>
    
    <p class="item-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis totam neque libero numquam reiciendis accusamus exercitationem at quo dolorem nemo! Aut repellat quae quia rerum dignissimos ipsum eveniet nulla quisquam? </p>
    <a class="item-button"href="http://" target="_blank" rel="noopener noreferrer">see more</a>   
    </div>

    
</div>
</section>

 <h1  margin-top=" 10px" class="slide-heading"> travlling tips & information</h1>
      
 <section class="card">
       <div class="information-container">

         <div class="information">
         <div class="content">
           <img src="img/onlinelogomaker2-072921-2243-6277.png" alt="">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laborum odit qui id, magnam nemo repellendus nobis voluptatum praesentium modi?</p>
        <a href="http://" target="_blank" rel="noopener noreferrer">read more</a>
        </div>
</div>

        <div class="information">
            <div class="content">
           <img src="img/onlinelogomaker2-072921-2243-6277.png" alt="">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laborum odit qui id, magnam nemo repellendus nobis voluptatum praesentium modi?</p>
           <a href="http://" target="_blank" rel="noopener noreferrer">read more</a>
        </div>
     </div>

        <div class="information">
        <div class="content">
           <img src="img/onlinelogomaker2-072921-2243-6277.png" alt="">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laborum odit qui id, magnam nemo repellendus nobis voluptatum praesentium modi?</p>
           <a href="http://" target="_blank" rel="noopener noreferrer">read more</a>
        </div>
</div>


        <div class="information">
        <div class="content">
           <img src="img/onlinelogomaker2-072921-2243-6277.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laborum odit qui id, magnam nemo repellendus nobis voluptatum praesentium modi?</p>
          <a href="http://" target="_blank" rel="noopener noreferrer">read more</a>
        </div>
</div>
       
     </div>

</section>



<section>
<div class="founder">
    
    <img src="img\IMG_7210.JPG" alt="">
      <div class="insidefounder">
     <h2>NIRAJ KUMAR</h2>
    <P>we are here to help you to find best countries,cities and states for travelling and you can also hire guider from here . you can also book hotel from here .</div>
    </P>
     </div>
    </div>
</section>




     <section class="aboutus">
        
            <div class="aboutus-one" >
            <h1>aboutus</h1> 
             <img src="img\sunrise-1014712__340.webp" alt="">

           </div>
           
           <div class="aboutus-two">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas id temporibus cumque eligendi, iure error assumenda atque saepe consectetur, magnam molestiae ratione repellendus a cupiditate. Distinctio temporibus deleniti recusandae impedit!</p>
                  
           </div>    

     </section>

     <section>
         <div class="travelform">
                <form method="post" action="">
                 <input type="text" name="name" id="name" placeholder="enter your name" require />
                 <input type="number" maxlenght="10" name="contactno" id="contactno" placeholder="enter your contact no." require/>
                 <input type="text" name="destination" id="destination" placeholder=" enter your destination" require/>
                 <input type="email" name="email" id="email" placeholder="enter your email id" require/>
                <textarea id="comment" name="comment" placeholder="enter the msg" row="10" col="80"></textarea>

                 <input  name="submit" type="submit" value="submit" placeholder="submit" required/>
                </form>
         </div>

     </section>
     <section>
     <div class="suscribe">
    
        <input type="email" name="email" id="email " placeholder="EMAIL ID">
        <button> SUBSCRIBE</button>
        
    </div>
</section>
     <section class="contshortcut">
        
           

          <div class="contp" >
          <h1 id="conth1">QUICK LINKS</h1>
            <ul>
             <li><a href="http://" target="_blank" rel="noopener noreferrer">Home</a></li>
             <li><a href="http://" target="_blank" rel="noopener noreferrer">Places</a></li>
             <li><a href="http://" target="_blank" rel="noopener noreferrer">guider</a></li>
             <li><a href="http://" target="_blank" rel="noopener noreferrer">HotelS</a></li>
             <li><a href="http://" target="_blank" rel="noopener noreferrer">contact us</a></li>
           </ul>
          </div>
          <div class="contp2">
          <h1  id="conth2">CONTACT US</h1>
             <a class="site" href="#" target="_blank" rel="noopener noreferrer">info@travelworld.com</a>
            <div class="tel">+91 9876543210</div>
            <a  class="contlogo1" href="http://" target="_blank" rel="noopener noreferrer"><img src="img/insta3.jpg" alt=""></a>
            <a class="contlogo2" href="http://" target="_blank" rel="noopener noreferrer"><img src="img/facebook.jpg" alt=""></a>
            <a class="contlogo3" href="http://" target="_blank" rel="noopener noreferrer"><img src="img/twi.jpg" alt=""></a>
         </div>
    </section>
     <footer>
        <div>Coyright &copy; 2018 code and design all right received</div>
    </footer>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
     <script>
         VanillaTilt.init(document.querySelectorAll(".information"), {
		max: 25,
		speed: 400,
        glare: true,
        "max-glare": 1,
	});
     </script>
     <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
     
</body>
</html>