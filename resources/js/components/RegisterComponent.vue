
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header "><span class="text-primary align:center"><h3>Register Here</h3></span></div>

                    <div class="card-body">


        <form action ="./api/user1" @submit.prevent="submit()" method="POST">

          <div class="form-row" >
          

              <div class="form-group col-md-6">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" v-model="fields.first_name" required>
                 
              </div>

              <div class="form-group col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name" placeholder="Last name" v-model="fields.last_name" required>
                  
              </div>
          </div>

          <div class="form-group ">
                  <label for="position">Position</label>
                  <select id="position" class="form-control" v-model="fields.position">
                    <option selected>Choose Position</option>
                    <option>Lectuer</option>
                    <option>Student</option>
                    <option>Non-Acadamic</option>
                  </select>
                
          </div>

          <div class="form-row">

              <div class="form-group col-md-6">
                  <label for="vehicle_no">Vehicle No</label>
                  <input type="text" class="form-control" id="vehicle_no" placeholder="Vehicle Number"  v-model="fields.vehicle_no" required> 
                 
              </div>

              <div class="form-group col-md-6">
                  <label for="contact_no">Contact No</label>
                  <input type="text" class="form-control" id="contact_no" placeholder="Contact number" v-model="fields.contact_no" required>
                  
              </div>
          </div>
                            
          

          

          <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" v-model="fields.email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  
          </div>

          <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" v-model="fields.password" required >
                 
          </div>

         
    
    <button type="submit" class="btn btn-primary">Register</button>
    <input class="btn btn-primary" type="reset" value="Reset">
    
    
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
mounted() {
            console.log('Component mounted.')
        },

 data(){
   return{
       fields:{
            first_name:'',
            last_name:'',
            position:'',
            vehicle_no:'',
            contact_no:'',
            email:'',
            password:''
       }
   }

 },
  methods: {
    submit(){
      axios.post('./api/user1',
       [ first_name=this.first_name,
           last_name= this.last_name,
            position= this.position,
            vehicle_no= this.vehicle_no,
            contact_no= this.contact_no,
            email= this.email,
            password= this.password
       ]);
       
    alert("data added.");

        }
    }

}
</script>
