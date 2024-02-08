<template>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>
<div class="main">
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

<component :is="'script'">

  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('password_c').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Lozinke se podudaraju!';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Lozinke se ne podudaraju!';
  }
} 




</component>
<body>
    
    <section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-color: #E4D9D9;
        height: 500px;
        border-bottom-left-radius: 2%;
        border-bottom-right-radius: 2%;
        "></div>
  
  <div class="card mx-1 mx-md-5 shadow-5-strong" style="
        margin-top: -370px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-1 px-md-5">

      <div class="row d-flex justify-content-center m-4">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Registracija</h2>
          
          <form @submit.prevent="save" >

<div class="form-floating mb-3">
  <input type="text" id="form3Example1cg" class="form-control form-control-lg" v-model="korisnik.korisničko_ime" placeholder="Korisničko ime"/>
  <label class="form-label" for="form3Example1cg">Korisničko ime</label>
</div>

<div class="form-floating mb-3">
  <input type="email" id="form3Example3cg" class="form-control form-control-lg" v-model="korisnik.mail" placeholder="Email" />
  <label class="form-label" for="form3Example3cg">Mail adresa</label>
</div>



<div class="input-group mb-3">
<div class="form-floating  ">
  <input :type="showPassword ? 'text' : 'password'"  type="password" id="password" class="form-control form-control-lg" v-model="korisnik.lozinka" placeholder="Lozinka" name="password1" onkeyup="check();" />
  <label class="form-label" for="form3Example4cg">Lozinka</label>
</div>

<span class="input-group-text" @click="showPassword = !showPassword" >
  <i class="bi" :class="[showPassword ? 'bi-eye' : 'bi-eye-slash']" aria-hidden="true" ></i>
</span>
</div>








<div class="valid-feedback">Good</div>
<div class="invalid-feedback">Wrong</div>
    


  <div class="col-6 mt-4 mt-xxl-0 w-auto h-auto">

    <div
      class="alert px-4 py-3 mb-0 d-none"
      role="alert"
      data-mdb-color="warning"
      id="password-alert"
      >
      <ul class="list-unstyled mb-0">
        <li class="requirements leng">
          <i class="bi bi-check text-success me-2"></i>
          <i class="bi bi-x text-danger me-3"></i>
          Lozinka treba imati najmanje 8 znakova. </li>
        <li class="requirements big-letter">
          <i class="bi bi-check text-success me-2"></i>
          <i class="bi bi-x text-danger me-3"></i>
          Lozinka treba sadržavati barem jedno veliko slovo.</li>
        <li class="requirements num">
          <i class="bi bi-check text-success me-2"></i>
          <i class="bi bi-x text-danger me-3"></i>
          Lozinka treba sadržavati barem jedan broj.</li>
        <li class="requirements special-char">
          <i class="bi bi-check text-success me-2"></i>
          <i class="bi bi-x text-danger me-3"></i>
          Lozinka treba sadržavati barem jedan specifičan znak.</li>
      </ul>
    </div>
  </div>
  





<div class="input-group mb-3 ">
  <div class="form-floating ">
  <input :type="showPassword_c ? 'text' : 'password'"  type="password" id="password_c" class="form-control form-control-lg" placeholder="Ponovi lozinku" name="password2" onkeyup='check();' />
  
  <label class="form-label" for="form3Example4cdg">Ponovi lozinku</label>
  </div>
  <span class="input-group-text"  @click="showPassword_c = !showPassword_c">
    <i class="bi" :class="[showPassword_c ? 'bi-eye' : 'bi-eye-slash']" aria-hidden="true"></i>
  </span>
</div>





<span id="message"></span>
<div class="form-check d-flex justify-content-center mb-5">
  <input  class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
  <label class="form-check-label" for="form2Example3g">
    I agree all statements in <a href="#!" class="link" style="color: #E03ED8;"><u>Terms of service</u></a>
  </label>
</div>





<div class="d-flex justify-content-center">
  <button type="submit"
    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"  style="border-color: #E03ED8;background-color: #E03ED8;color: white !important;">Registriraj se!</button>
</div>

<p class="text-center text-muted mt-5 mb-0">Već imaš račun? <a href="/korisnik"
    class="link" style="color: #E03ED8; font-weight: bold;" ><u>Prijavi se ovdje!</u></a></p>

</form>
        </div>
      </div>
    </div>
    </div>
     
  </section>
<component :is="'style'">
  .wrong .bi-check {
    display: none;
}
.good .bi-x {
    display: none;
}
.valid-feedback,
.invalid-feedback {
  margin-left: calc(2em + 0.25rem + 1.5rem);
}






</component>

<div class="footer absolute-bottom m-4" >
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #E4D9D9; font-weight: bolder; border-radius: 10%;">
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

  
<component :is="'style'">
    .form-control:focus {
        border-color: #E03ED8;
        box-shadow: inset 0 1px 1px rgb(224, 62, 216), 0 0 8px rgb(224, 62, 216);
    }
    .form-check-input:checked {
    background-color: #E03ED8;
}
.form-check-input:checked {
  box-shadow:  0 0 5px #E03ED8 !important;
  border-color: #E03ED8;
  opacity: 0.5;
}
.form-check-input{
    box-shadow:  0 0 5px #E03ED8 !important;
    border-color: #E03ED8 !important;

}


</component>

    

</div>

</template>

<script>



addEventListener("DOMContentLoaded", (event) => {
  const password = document.getElementById("password");
  const passwordAlert = document.getElementById("password-alert");
  const requirements = document.querySelectorAll(".requirements");
  const leng = document.querySelector(".leng");
  const bigLetter = document.querySelector(".big-letter");
  const num = document.querySelector(".num");
  const specialChar = document.querySelector(".special-char");

  requirements.forEach((element) => element.classList.add("wrong"));

  password.addEventListener("focus", () => {
      passwordAlert.classList.remove("d-none");
      if (!password.classList.contains("is-valid")) {
          password.classList.add("is-invalid");
      }
  });

  password.addEventListener("input", () => {
      const value = password.value;
      const isLengthValid = value.length >= 8;
      const hasUpperCase = /[A-Z]/.test(value);
      const hasNumber = /\d/.test(value);
      const hasSpecialChar = /[!@#$%^&*()\[\]{}\\|;:'",<.>/?`~]/.test(value);

      leng.classList.toggle("good", isLengthValid);
      leng.classList.toggle("wrong", !isLengthValid);
      bigLetter.classList.toggle("good", hasUpperCase);
      bigLetter.classList.toggle("wrong", !hasUpperCase);
      num.classList.toggle("good", hasNumber);
      num.classList.toggle("wrong", !hasNumber);
      specialChar.classList.toggle("good", hasSpecialChar);
      specialChar.classList.toggle("wrong", !hasSpecialChar);

      const isPasswordValid = isLengthValid && hasUpperCase && hasNumber && hasSpecialChar;

      if (isPasswordValid) {
          password.classList.remove("is-invalid");
          password.classList.add("is-valid");

          requirements.forEach((element) => {
              element.classList.remove("wrong");
              element.classList.add("good");
          });

          passwordAlert.classList.remove("alert-warning");
          passwordAlert.classList.add("alert-success");
      } else {
          password.classList.remove("is-valid");
          password.classList.add("is-invalid");

          passwordAlert.classList.add("alert-warning");
          passwordAlert.classList.remove("alert-success");
      }
  });

  password.addEventListener("blur", () => {
      passwordAlert.classList.add("d-none");
  });
});











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
        showPassword: false,
        showPassword_c: false
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
                  this.korisnik.id = ''
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