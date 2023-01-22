<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";

   mysqli_query($conn, $insert);

   header('location:contact.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="contact">

   <h1 class="heading">Pilih Pesananmu</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>Nama</span>
            <input type="text" placeholder="masukan nama" name="name" required>
         </div>

         <div class="inputBox">
            <span>E-mail</span>
            <input type="email" placeholder="masukan email mu (jika ada)" name="email" required>
         </div>

         <div class="inputBox">
            <span>Nomor Handphone</span>
            <input type="number" placeholder="Masukan nomor handphone mu" name="number" required>
         </div>

         <div class="inputBox">
            <span>Pilih Paket</span>
            <select name="plan">
               <option value="basic">PAKET BRONZE</option>
               <option value="premium">PAKET SILVER</option>
               <option value="ultimate">PAKET GOLD</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Alamat</span>            
            <textarea name="address" placeholder="Masukan Alamat" required cols="30" rows="10"></textarea>
         </div>

         <div class="inputBox">
            <span>Pesan</span>            
            <textarea name="message" placeholder="Contoh : sewa jas pernikahan saja" required cols="30" rows="10"></textarea>
         </div>

      </div>

      <input type="submit" value="send message" name="send" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>