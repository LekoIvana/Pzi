<template>
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
    
    <section style="background-color: #eee;">
    <div class="container py-5">
  
      <div class="row">
  
        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
  
          <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>
  
          <div class="card">
            <div class="card-body">
  
              <ul class="list-unstyled mb-0">
                <li class="p-2 border-bottom" style="background-color: #eee;">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">John Doe</p>
                        <p class="small text-muted">Hello, Are you there?</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">Just now</p>
                      <span class="badge bg-danger float-end">1</span>
                    </div>
                  </a>
                </li>
                <li class="p-2 border-bottom">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Danny Smith</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">5 mins ago</p>
                    </div>
                  </a>
                </li>
                <li class="p-2 border-bottom">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Alex Steward</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">Yesterday</p>
                    </div>
                  </a>
                </li>
                <li class="p-2 border-bottom">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Ashley Olsen</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">Yesterday</p>
                    </div>
                  </a>
                </li>
                <li class="p-2 border-bottom">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Kate Moss</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">Yesterday</p>
                    </div>
                  </a>
                </li>
                <li class="p-2 border-bottom">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Lara Croft</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">Yesterday</p>
                    </div>
                  </a>
                </li>
                <li class="p-2">
                  <a href="#!" class="d-flex justify-content-between">
                    <div class="d-flex flex-row">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                        class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                      <div class="pt-1">
                        <p class="fw-bold mb-0">Brad Pitt</p>
                        <p class="small text-muted">Lorem ipsum dolor sit.</p>
                      </div>
                    </div>
                    <div class="pt-1">
                      <p class="small text-muted mb-1">5 mins ago</p>
                      <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                    </div>
                  </a>
                </li>
              </ul>
  
            </div>
          </div>
  
        </div>
  
        <div class="col-md-6 col-lg-7 col-xl-8">
  
          <ul class="list-unstyled">
            <li class="d-flex justify-content-between mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
              <div class="card">
                <div class="card-header d-flex justify-content-between p-3">
                  <p class="fw-bold mb-0">Brad Pitt</p>
                  <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </li>
            <li class="d-flex justify-content-between mb-4">
              <div class="card w-100">
                <div class="card-header d-flex justify-content-between p-3">
                  <p class="fw-bold mb-0">Lara Croft</p>
                  <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium.
                  </p>
                </div>
              </div>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
            </li>
            <li class="d-flex justify-content-between mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
              <div class="card">
                <div class="card-header d-flex justify-content-between p-3">
                  <p class="fw-bold mb-0">Brad Pitt</p>
                  <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </li>
            <li class="bg-white mb-3">
              <div class="form-outline">
                <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                <label class="form-label" for="textAreaExample2">Message</label>
              </div>
            </li>
            <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
          </ul>
  
        </div>
  
      </div>
  
    </div>
  </section>
  </body>
</template>