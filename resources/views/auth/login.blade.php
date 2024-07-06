<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="{{asset('/css/login.css')}}">
   <title>D&H Clinic</title>
</head>
<body>
  




<!----------------------- Main Container -------------------------->
<div class="container d-flex justify-content-center align-items-center">
        <!----------------------- Login Container -------------------------->
           <div class="row border rounded-5 p-3 my-4 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
           <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: white;">
               <div class="featured-image mb-3">
                <img src="{{asset('assets/images/login.gif')}}" class="img-fluid logo" style="width: 250px;">
               </div>
               <p class="kaorntext text-green fs-1 mb-0" style="font-family: 'Poppins', Courier, monospace; font-weight: 600;"><i class="fa-solid fa-stethoscope" style="font-size: 17 rem; margin-right: 8px;"></i>D&H Clinic</p>
               <small class="text-green text-wrap text-center mt-0" style="width: 17rem;font-family: 'Poppins', Courier, monospace;">Your health, our priority </small>
           </div> 
        <!-------------------- ------ Right Box ---------------------------->
            
           <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-2">
                         <p>Compassionate care, expertly delivered</p>
                         
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="ms-auto me-auto mt-0">
        @csrf
                    

 <div class="input-group mb-3">
 <span class="input-group-text"><i class='bx bx-envelope'></i></span>
    <input type="text" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="Email address">
    
</div>

                    <div class="input-group mb-1">
                        <span class="input-group-text"><i class='bx bx-lock-alt' ></i></span>
                        <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password">
                    </div>

                    @if ($errors->any())
            <div style="color:red;">
             <p>
               @foreach ($errors->all() as $error)
               {{ $error }}<br>
               @endforeach
            </p>
         </div>
         @endif
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn loginBtn btn-lg btn-success w-100 fs-6" >Login</button>
                    </div>
                    </form>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{asset('assets/images/google.png')}}" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="{{route('register')}}">Sign Up</a></small>
                    </div>
              </div>
           </div> 
          </div>
        </div>

</body>
</html>