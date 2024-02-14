<template>
    
  
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    
    <header class="navbar navbar-expand-lg fixed-top bg-light pt-3 pb-3" style="background-color: #E4D9D9 !important;">
     <div class="container-fluid">
        <div class="container text-center">
            <div class="row">
                <div class="col-4">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bolder;">
                    <li>
                      <a class="navbar-brand" href="/">
                        <img src="/logo1.png" alt="" width="80" height="54">
                      </a>
                    </li>
        <li class="nav-item">
          <a class="nav-link active router-link=/zene" aria-current="page" href="/zene" style="font-size: 18px;">Žene</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="font-size: 18px;">Muškarci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/info" style="font-size: 18px;">Djeca</a>
        </li>
        
        
        
      </ul>
                </div>
                <div class="col-4 align-center" >
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline" type="submit" style="font-weight: bold;">Search</button>
                    </form>
                </div>
                <div class="col-4 d-flex">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a href="/korisnik" class="nav-link bi bi-person-fill h3"  style="font-size: 20px; color: black;"></a>
                    </li>
                    <li class="nav-item">
                      <a href="/wishList" class="nav-link bi bi-bag h3"  style="font-size: 20px; color: black;"></a>
                    </li>
                    <li class="nav-item">
                      <a href="/kosarica" class="nav-link bi bi-cart fill h3"  style="font-size: 20px; color: black;"></a>
                    </li>
                
                    </ul>
                  
                </div>
        
      
            </div>
        </div>

     </div>
    
</header>
<component :is="'style'">
    .nav-link{
        text-size:10px
    }
    .form-control:focus {
        border-color: #E03ED8;
        box-shadow: inset 0 1px 1px rgb(224, 62, 216), 0 0 8px rgb(224, 62, 216);
    }
    
</component>
    

<div class="container" style="margin-top: 100px;left: 50%;right: 50%;">
  

   <div class="row justify-content-center align-items-center">
     <!-- card1 -->
      <div class="card card-circle">
         <div class="card-icon">
          <i class="bi bi-shop"></i>
         </div>
         <div class="card-body">
            <h5 class="card-title">Žene</h5>
            <p class="card-text">Otkrijte modu za žene.</p>
            <a href="/zene" class="btn btn-primary" >Više</a>
         </div>
      </div>
      <!-- card2 -->
      <div class="card card-circle">
         <div class="card-icon">
            <i class="bi bi-shop"></i>
         </div>
         <div class="card-body">
            <h5 class="card-title">Djeca</h5>
            <p class="card-text">Otkrijte modu za djecu.</p>
            <a href="#" class="btn btn-primary">Više</a>
         </div>
      </div>
      <!-- card3 -->
      <div class="card card-circle ">
         <div class="card-icon">
            <i class="bi bi-shop"></i>
         </div>
         <div class="card-body">
            <h5 class="card-title">Muškarci</h5>
            <p class="card-text">Otkrijte modu za muškarce.</p>
            <a href="#" class="btn btn-primary">Više</a>
         </div>
      </div>
   </div>
   
</div>
<component :is="'style'">
  
    .card-circle{
    text-align:center;
     margin-top:50px;
     background: #E4D9D9  
     border:10px solid transparent;
     color:#fff;
     Font-family: Montserrat;
     padding:50px;
     border-radius:50%;
}
 .card-circle .card-title{
    font-weight:600;
     font-size:26px;
}
 .card-circle .card-text{
    font-weight:400;
}
 .card-circle .card-icon i{
     font-size:60px;
     display:block;
}
 .card-circle:nth-child(2){
    background-image: url('https://static.kidscasting.com/articles/default/0001/05/3de428e1628e31085c295b4e4feeb8dbde026054.jpg')
}
.card-circle:nth-child(1){
    background-image: url('https://i0.wp.com/joannarahier.com/wp-content/uploads/2022/09/winter-outfit.jpeg?resize=683%2C1024&ssl=1')
}
.card-circle:nth-child(3){
    background-image: url('https://i.pinimg.com/550x/43/49/ec/4349ec5ac09c9ad747acc9b78b1b4c45.jpg')
}
 .card-circle .btn{
    Font-family: Montserrat;
    background:transparent;
     border:1px solid #fff;
     text-transform:uppercase;
     padding:5px 30px;    
     border-radius:0px;
     Font-weight:600;
}
.card-circle .btn,.card-circle .card-icon i,.card-circle{
   transition: all ease-in-out 0.2s;
}
 .card-circle:hover .btn{
    background:#E4D9D9;
     color:#fff;
   border: 1px solid transparent;
}
 .card-circle .btn:hover{
    transform: scale(1.1);
}
 .card-circle:hover{
    border:10px solid #E4D9D9;
}
 .card-circle:hover i {
   text-shadow: 0px -1px 10px #E4D9D9;
    transform:scale(1.2)rotate(20deg);
}
 @media only screen and (min-width: 1200px) {
     .card-circle:nth-child(3){
         margin-left:-40px;
         z-index:0;
    }
     .card-circle{
         width:400px;
         height:400px;
    }
     .card-circle:nth-child(2){
         margin-left:-20px;
         box-shadow: 1px 2px 20px 8px rgba(241, 235, 235, 0.12);
         transform: scale(1.2);
         z-index:1;
    }
   .card-circle .card-icon i{
      margin-top: 20px;
     }
}
@media only screen and (min-width: 991px) and (max-width: 1200px) {
   .card-circle{
         width:340px;
         height:340px;
    }
  .card-circle .card-icon i{
     font-size:50px;
   }
  .card-circle .card-icon i{
      margin-top: -25px;
     }
   .card-circle:nth-child(3){
         margin-left:-50px;
         z-index:0;
    }
   .card-circle:nth-child(2){
         margin-left:-20px;
         z-index:1;
    }
}


</component>






<div class="footer absolute-bottom m-5 ">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #E4D9D9; bottom: static; font-weight: bolder; border-radius: 10%;">
    <!-- Grid container -->
    
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" >
      © 2023
      <!-- <button class="btn"><i class="bi bi-instagram h4" href="https:/instagram.com"></i></button> -->
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>


    

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
