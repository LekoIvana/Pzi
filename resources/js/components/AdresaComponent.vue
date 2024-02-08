<template>
    
  
    <head>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
<body style="padding-top: 70px;">
    

    <header class="navbar navbar-expand-lg fixed-top bg-light pt-3 pb-3" style="background-color: #E4D9D9 !important; top: 0;" >
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
</component>
<div class="row mt-4">
  <div class="col-md-8 mb-4">
    <div class="card mb-4">
      <div class="card-header py-3" style="background-color:#E4D9D9;">
        <h5 class="mb-0">Adresa</h5>
      </div>
      <div class="card-body">
        <form>
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="ime">
                    <label for="floatingInput">Ime</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="prezime">
                    <label for="floatingInput">Prezime</label>
                </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Posušje, 88240">
                    <label for="floatingInput">Grad i poštanski broj</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid">
                        <option selected>Izaberi državu</option>
                        <option value="1">Hrvatska</option>
                        <option value="2">BiH</option>
                        <option value="3">Srbija</option>
                    </select>
                    <label for="floatingSelectGrid">Država</label>
                </div>
            </div>
          </div>

          

          <!-- Text input -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Adresa</label>
        </div>

          <!-- Email input -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>

          <!-- Number input -->
          
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="00387...">
            <label for="floatingInput">Kontakt broj</label>
        </div>

        </form>
      </div>
    </div>
  </div>

  <div class="col-md-4 mb-4">
    <div class="card mb-4">
      <div class="card-header py-3" style="background-color: #E4D9D9;">
        <h5 class="mb-0">Sažetak</h5>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
            Proizvodi
            <span>$53.98</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            Shipping
            <span>-</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
            <div>
              <strong>Ukupna cijena</strong>
              <strong>
                <p class="mb-0">(uključuje porez)</p>
              </strong>
            </div>
            <span><strong>$53.98</strong></span>
          </li>
        </ul>

        <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #E03ED8 !important;border-color: #E03ED8;">
          Kupi!
        </button>
      </div>
    </div>
  </div>
</div>

<component :is="'style'">
    
.form-floating input:focus {
  box-shadow: 0 0 0.30rem #E03ED8;
  border-color: #E03ED8; 
}
.form-select:focus {
  box-shadow: 0 0 0.30rem #E03ED8;
  border-color: #E03ED8;
}


</component>
<div class="footer absolute-bottom m-4 ">
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
</body>
</template>