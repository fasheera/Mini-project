<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><span class="text-primary align:center"><h3>Log in</h3></span></div>

                    <div class="card-body">
            <form>

                <div class="form-group ">
                  <label for="position">Position</label>
                  <select id="position" class="form-control" >
                    <option selected>Choose Position</option>
                    <option>Lectuer</option>
                    <option>Student</option>
                    <option>Non-Acadamic</option>
                  </select>
                
          </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required >
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me </label>
  </div>
  <button type="button" class="btn btn-primary btn-lg btn-block">Log in</button>
</form>

 <div class="row" >
    <div class="col-auto mr-auto">
      <a href="#" class="badge badge-light">Forgot Password?</a>
    </div>
    <div class="col-auto">
      <a href="#" class="badge badge-light">Create new account</a>
    </div>
  </div>
           

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
        }
    }
</script>
