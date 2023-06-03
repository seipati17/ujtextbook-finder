<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/blog-1.jpg" alt="">
      </div>

      <div class="content">

         <h3>why choose us?</h3>
         <p>At UJTEXTBOOK Finder, we understand the financial burden that textbooks can impose on students. That's why we have created a marketplace that connects buyers and sellers, making it easy to find the textbooks you need at prices that won't break the bank. By opting for second-hand textbooks, you can save a significant amount of money while still accessing the resources necessary for academic success.
            <br><strong>Why choose us ?</strong><br>

            1. Vast Selection.<br>
            2. Quality Assurance. <br>
            3. Competitive Pricing.<br>
            4. Easy Buying Process.
<br> <strong>and so much more..</strong><br>

At <strong>UJTEXTBOOK FINDER</strong>, we believe that education should be accessible to everyone, and affordability should never be a barrier. We are here to simplify the process of buying and selling second-hand textbooks, making it a win-win for students, educators, and the environment. Start exploring our collection today and unlock the power of affordable education!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p> "I had a great experience shopping on this website. The selection of second-hand textbooks was impressive, and I found exactly what I needed for my courses. The textbook was in excellent condition, and the price was unbeatable. Highly recommended!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David L.</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>: "I was initially hesitant to buy used textbooks, but this website exceeded my expectations. The process was easy, and the customer support was helpful in answering my questions. The textbook I received was in good condition and saved me a significant amount of money. I will definitely be using this website for future textbook purchases."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah M.</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"Selling my old textbooks on this platform was a breeze. The listing process was straightforward, and I quickly connected with interested buyers. The website provided shipping labels and handled the logistics seamlessly. I sold my textbooks at a fair price, and the entire experience was hassle-free."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Deo.</h3>
      </div>

      <div class="box">
         <img src="images/picture5.2.jpeg" alt="">
         <p>"I couldn't find the specific textbook I needed initially, but I contacted customer support, and they went above and beyond to assist me. They kept me updated and informed me when the book became available. I appreciate their dedication to customer satisfaction. Thank you for helping me get the textbook I needed for my studies!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lerato Thabane.</h3>
      </div>

      <div class="box">
         <img src="images/Rev6.jpg" alt="">
         <p>"I recently purchased a used textbook from this website, and I'm extremely satisfied. The quality of the book was better than I expected, and the delivery was prompt. The pricing was significantly lower compared to buying new, which made a huge difference for my budget as a student. I will definitely be recommending this platform to my classmates.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Thabo Senko</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I had a fantastic experience shopping on this website. The variety of second-hand textbooks available was impressive, and I found all the books I needed for my semester. The prices were affordable, and the books were in great condition. Highly recommended for students on a budget!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emma Hu</h3>
      </div>

   </div>

</section>
<!--comment out
<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>
      -->

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>