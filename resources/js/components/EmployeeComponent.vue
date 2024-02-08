<template>
    <div>
      <h2>Employee Registation</h2>
 <form @submit.prevent="save">
  <div class="form-group">
    <label>Naziv</label>
    <input type="text" v-model="employee.naziv" class="form-control"  placeholder="naziv">
   
  </div>
  <div class="form-group">
    <label>Cijena</label>
    <input type="text" v-model="employee.cijena" class="form-control"  placeholder="cijena">
   
  </div>

  <div class="form-group">
    <label>Opis</label>
    <input type="text" v-model="employee.opis" class="form-control"  placeholder="opis">
   
  </div>
  <div class="form-group">
    <label>Veličina</label>
    <input type="text" v-model="employee.veličina" class="form-control"  placeholder="veličina">
   
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>


      <h2>Employee View</h2>
      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">naziv</th>
      <th scope="col">cijena</th>
      <th scope="col">opis</th>
      <th scope="col">veličina</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="employee in result" v-bind:key="employee.id">
          
          <td>{{ employee.id }}</td>
          <td>{{ employee.naziv }}</td>
          <td>{{ employee.cijena }}</td>
          <td>{{ employee.opis }}</td>
          <td>{{ employee.veličina }}</td>
          <td>
            <button type="button" class="btn btn-warning" @click="edit(employee)">Edit</button>
            <button type="button" class="btn btn-danger"  @click="remove(employee)">Delete</button>
          </td>
        </tr>
    
  </tbody>
</table>
     
    </div>
  </template>
  
  <script>
    //import Vue from "vue";

    import axios from 'axios';
    //const app = createApp({});
    //Vue.use(axios)


  export default {
    name: 'EmployeeComponent',
    data () {
      return {
        result: {},
        employee:{
                   id: '',
                   naziv: '',
                   cijena: '',
                   opis: '',
                   veličina: ''


        }
      }
    },
    created() { 
        this.EmployeeLoad();
    },
    mounted() {
          console.log("mounted() called.......");
         
      },

    methods: {
           EmployeeLoad()
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
            if(this.employee.id == '')
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
            axios.post("http://127.0.0.1:8000/api/save", this.employee)
            .then(
              ({data})=>{
                alert("saveddddd");
                this.EmployeeLoad();
              }
            )

           },
           edit(employee)
           {
            this.employee = employee;
           
           },
           updateData()
           {
              var editrecords = 'http://127.0.0.1:8000/api/update/'+ this.employee.id;
              axios.put(editrecords, this.employee)
              .then(
                ({data})=>{
                  this.employee.naziv = '';
                  this.employee.cijena = '',
                  this.employee.opis = '',
                  this.employee.veličina = '',
                  this.id = ''
                  alert("Updated!!!");
                  this.EmployeeLoad();
                }
              );

           },

           remove(employee){

             var url = `http://127.0.0.1:8000/api/delete/${employee.id}`;



             // var url = 'http://127.0.0.1:8000/api/delete/'+ employee.id;
              axios.delete(url);
              alert("Deleteddd");
              this.EmployeeLoad();
            }
      }

  }
 
  </script>
  