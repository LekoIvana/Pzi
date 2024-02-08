<template>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
</head>
<header class="navbar navbar-expand-lg fixed-top bg-light pt-3 pb-3" style="background-color: #E4D9D9 !important;">
     <div class="container-fluid">
        <div class="container text-center">
            <div class="row">
                <div class="col-4">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bolder;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/zene">Žene</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Muškarci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Djeca</a>
        </li>
        
        
        
      </ul>
                </div>
                <div class="col-4">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-4 d-flex">
                    <li class="nav-item">
                        <button class="btn" href="/korisnik"><i class="bi bi-person-fill h4"></i></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn"><i class="bi bi-bag-heart h4"></i></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn"><i class="bi bi-cart h4" ></i></button>
                    </li>
                </div>
        
      
            </div>
        </div>

     </div>
    </header>
<header>
    <div class="d-flex flex-column flex-shrink-0 sidebar-wrap">
            <a href="/" class="text-decoration-none logo-wrap">
                <div class="icon-wrap"><i class="fab fa-slack"></i></div> <span>slack</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <div class="icon-wrap">
                            <i class="fas fa-home"></i>
                        </div>
                        <span> Početna</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <div class="icon-wrap">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <span>obuća</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <div class="icon-wrap">
                            <i class="fab fa-first-order"></i>
                        </div>
                        <span>Odjeća</span>
                    </a>
                </li>
                <li>
                    
                </li>
                
                
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="text-decoration-none dropdown-toggle  dropdown-wrap" id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="icon-wrap">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">
                    </div>
                    <strong>Customers</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

    </header>
    <component :is="'style'">
        .sidebar-wrap {
  width: 60px;
  height: 100vh;
  background-color: #E4D9D9;
  color: #fff;
  padding: 10px;
  transition: 0.8s;
}
.sidebar-wrap:hover {
  width: 280px;
}
.sidebar-wrap:hover .logo-wrap span {
  display: flex;
}
.sidebar-wrap:hover .nav li .nav-link span {
  display: flex;
}
.sidebar-wrap:hover .dropdown-wrap strong {
  display: flex;
}
.sidebar-wrap:hover .dropdown-wrap::after {
  display: inline-block;
}
.sidebar-wrap:hover .dropdown-wrap {
  justify-content: flex-start;
}
.sidebar-wrap .logo-wrap {
  color: #fff;
  font-size: 35px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.sidebar-wrap .logo-wrap span {
  font-size: 18px;
}
.sidebar-wrap .logo-wrap .icon-wrap {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  min-width: 40px;
}
.sidebar-wrap .nav {
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  flex-wrap: nowrap;
}
.sidebar-wrap .nav::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  border-radius: 5px;
  background-color: #f5f5f5;
}
.sidebar-wrap .nav::-webkit-scrollbar {
  width: 5px;
  background-color: #f5f5f5;
  border-radius: 5px;
}
.sidebar-wrap .nav::-webkit-scrollbar-thumb {
  border-radius: 5px;
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  background-color: #9b9b9b;
}
.sidebar-wrap .nav li {
  margin-top: 5px;
}
.sidebar-wrap .nav li .nav-link {
  color: #fff;
  padding: 0;
  font-size: 20px;
  display: flex;
  align-items: center;
  gap: 5px;
}
.sidebar-wrap .nav li .nav-link .icon-wrap {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  min-width: 40px;
}
.sidebar-wrap .nav li .nav-link span {
  font-size: 16px;
}
.sidebar-wrap .nav li .nav-link.active {
  background-color: #ff26c2;
}
.sidebar-wrap .nav li .nav-link:hover {
  background-color: #ff26c2;
}
.sidebar-wrap .dropdown-wrap {
  display: flex;
  align-items: center;
  color: #fff;
  gap: 15px;
  font-size: 16px;
}
.sidebar-wrap .dropdown-wrap .icon-wrap {
  min-width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

    </component>
<body>
    <component :is="'script'">
         src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'>
         src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'
    </component>
</body>

</template>