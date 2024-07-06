
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="{{asset('css/signup.css')}}">
   <title>D&H Clinic</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center">
        <!----------------------- Login Container -------------------------->
           <div class="row border rounded-5 p-3 my-4 bg-white shadow box-area">
        <!--------------------------- Left Box ----------------------------->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: white;">
        <p class="signupText fs-2 mb-0" style="font-family: 'Poppins', Courier, monospace; font-weight: 600; margin-bottom: -10px;">SIGN UP</p> 
        
        <div class="featured-image mt-0 mb-1">
               
                <img src="{{asset('assets/images/signup.gif')}}" class="img-fluid logo" style="width: 400px;">
               </div>
               
              
           </div> 


           <div class="col-md-6 right-box">
              <div class="row align-items-center">

              <div class="header-text mb-2">
                         
                         <h6>Welcome to our caring clinic family</h6>
                    </div>

                    
         <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="input-group mb-3">
            <span class="input-group-text"><i class='bx bxs-user-circle'></i></span>
            <input type="text"  name="name" id="name" value="{{old('name')}}" placeholder="Name" class="form-control form-control-sm bg-light fs-6">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text"><i class='bx bx-envelope'></i></span>
            <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" class="form-control form-control-sm bg-light fs-6">
            </div>

           
           
          


          
            

            <div class="input-group mb-3">
            <span class="input-group-text"><i class='bx bx-location-plus'></i></span>
            <input type="text" name="address" id="address" placeholder="Address" value="{{old('address')}}" class="form-control form-control-sm bg-light fs-6">
            </div>
            

            <div class="input-group mb-3">
            <span class="input-group-text"><i class='bx bx-phone-call'></i></span>
            <input type="text" name="phone" id="phone" placeholder="Phone Number" value="{{old('phone')}}" class="form-control form-control-sm bg-light fs-6">
            </div>
            

           
            
            <div class="input-group mb-3">
            <span class="input-group-text"><i class='bx bx-lock-alt'></i></span>
            <input type="password"  name="password" id="password" value="{{old('password')}}" placeholder="Password" class="form-control form-control-sm bg-light fs-6">
            </div>
            
            <div class="input-group mb-3">
            <span class="input-group-text"><i class='bx bx-lock'></i></span>
            <input type="password"  name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirm Password" class="form-control form-control-sm bg-light fs-6">
            @if ($errors->any())
            <div style="color:red;">
             <p>
               @foreach ($errors->all() as $error)
               {{ $error }}<br>
               @endforeach
            </p>
         </div>
         @endif
         </div>
         <div class="input-group mb-3">
                        <button type="submit" class="btn loginBtn btn-lg btn-success w-100 fs-6" >Signup</button>
                    </div>
         
         </form>
         <div class="row">
                        <small>Already have an account?? <a href="{{route('login')}}">Sign In</a></small>
                    </div>
         </div>
         </div>

         </div>
</div>

   
</body>
</html>
