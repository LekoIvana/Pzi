<template>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
<body>
    

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
          <a class="nav-link active" aria-current="page" href="#" style="font-size: 18px;">Djeca</a>
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
                      <a href="/listaZelja" class="nav-link bi bi-bag h3"  style="font-size: 20px; color: black;"></a>
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
</component>
<div class="collapse bd-toc-collapse">
  <nav id="TableofContent">
    <ul>
      <li><a href="/korisnik">korisnik</a></li>
    </ul>
  </nav>
</div>



</body>







</template>