<template>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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
<body>
    
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-color: #E4D9D9;
        height: 500px;
        "></div>
  <!-- Background image -->

  <div class="card mx-1 mx-md-5 shadow-5-strong" style="
        margin-top: -370px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Prijava</h2>
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
       <!--     <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">Ime</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Prezime</label>
                </div>
              </div>
            </div>  -->

            <!-- Email input -->
            <div class="form-floating mb-3">
              <input type="text" id="form3Example3" class="form-control" placeholder="Korisničko ime" />
              <label class="form-label" for="form3Example3">Korisničko ime</label>
            </div>

            <!-- llozinka input -->
            <div class="input-group mb-3">
            <div class="form-floating ">
              <input :type="showPassword ? 'text' : 'password'" type="password" id="form3Example4" class="form-control" placeholder="Lozinka" />
              <label class="form-label" for="form3Example4">Lozinka</label>
            </div>
            <span class="input-group-text" @click="showPassword = !showPassword" >
               <i class="bi" :class="[showPassword ? 'bi-eye' : 'bi-eye-slash']" aria-hidden="true" ></i>
            </span>
            </div>

      


          
            <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid">
                        <option selected>Izaberi vrstu korisnika</option>
                        <option value="1">Admin</option>
                        <option value="2">Prijavljen korisnik</option>
                        
                    </select>
                    <label for="floatingSelectGrid">Vrsta korisnika</label>
            </div>
           
            <div class="mt-2">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3 " style="background-color: #E03ED8;border-color: #E03ED8;">
              Prijavi se!
            </button>
            </div>
            <div class="text-center">
                <p>Nemaš račun? <a href="/registracija" class="link" style="color: #E03ED8;">Registriraj se!</a></p>
            </div>
            <!-- Register buttons -->
            <div class="text-center">
              <p>ili se prijavi:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-facebook" style="color: #E03ED8;"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-google" style="color: #E03ED8;"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-twitter"  style="color: #E03ED8;"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="bi bi-github" style="color: #E03ED8;"></i>
              </button>
            </div>
            

          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</body>
<div class="footer absolute-bottom m-5">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #E4D9D9; font-weight: bolder; border-radius: 15%;">
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
  
<component :is="'style'">
    .form-control:focus {
        border-color: #E03ED8;
        box-shadow: inset 0 1px 1px rgb(224, 62, 216), 0 0 8px rgb(224, 62, 216);
    }
    .form-select:focus {
      box-shadow: inset 0 1px 1px rgb(224, 62, 216), 0 0 8px rgb(224, 62, 216);
  border-color: #E03ED8;
}
    
</component>

    
</div>

</template>


<script>
    //import Vue from "vue";

    import axios from 'axios';
    //const app = createApp({});
    //Vue.use(axios)


  export default {
    name: 'RegistracijaComponent',
    data () {
      return {
        result: {},
        korisnik:{
                   id: '',
                   korisničko_ime: '',
                   mail: '',
                   lozinka: ''
                  


        },
        showPassword:false
      }
    },
    created() { 
        this.KorisnikLoad();
    },
    mounted() {
          console.log("mounted() called.......");
         
      },

    methods: {
           KorisnikLoad()
           {
                 var page = "http://127.0.0.1:8000/api/employees";
                 axios.get(page)
                  .then(
                      ({data})=>{
                        console.log(data);
                        this.result = data;
                      }
                  );
           },
           
          
           save()
           {
            if(this.korisnik.id == '')
              {
                this.saveData();
              }
              else
              {
                this.updateData();
              }       

           },
           saveData()
           {
            axios.post("http://127.0.0.1:8000/api/save", this.korisnik)
            .then(
              ({data})=>{
                alert("saveddddd");
                this.KorisnikLoad();
              }
            )

           },
           edit(korisnik)
           {
            this.korisnik = korisnik;
           
           },
           updateData()
           {
              var editrecords = 'http://127.0.0.1:8000/api/update/'+ this.korisnik.id;
              axios.put(editrecords, this.korisnik)
              .then(
                ({data})=>{
                  this.korisnik.korisničko_ime = '';
                  this.korisnik.mail = '',
                  this.korisnik.lozinka = '',
                  this.id = ''
                  alert("Updated!!!");
                  this.KorisnikLoad();
                }
              );

           },

           remove(korisnik){

             var url = `http://127.0.0.1:8000/api/delete/${korisnik.id}`;



             // var url = 'http://127.0.0.1:8000/api/delete/'+ employee.id;
              axios.delete(url);
              alert("Deleteddd");
              this.KorisnikLoad();
            }
      }

  }
 
  </script>