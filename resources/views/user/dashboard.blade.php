<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D&H | Dashboard</title>
    <link rel="icon" type="image/png" href="{{asset('/assets/images/djvinard.jpg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>

.background-image-container {
  background-image: url('{{ asset("/assets/images/Doctor.png") }}');
  width: 250px;  /* Adjust width and height as needed */
  height: 200px;
  background-size: cover;
  background-repeat: no-repeat;
  margin: 0 auto;  /* Centers the element horizontally */

    }

    .total-users-card {
    background-color: #ff9933; /* Light red */
}

.recipes-added-card {
    background-color: #74ec74; /* Light green */
}

.groceries-added-card {
    background-color:#5c5cd6; /* Light blue */
}

.customer-feedbacks-card {
    background-color: #b3b3b3; /* Light orange */
}

</style>

</head>
<body>
    
    <div class="container-fluid p-0 d-flex h-100">
        <!-- sidebar -->
@include('user.layouts.sidebar')
        <!-- sidebar -->

       <!-- collapsible -->
       @include('user.layouts.collapseSide')
       <!-- collapsible -->

            <!-- breadcrumb -->
            @include('user.layouts.breadcrumb')
            <!-- breadcrumb -->

               
               
<main>
    <div class="container my-2">
   
        <div class="row">
            <div class="col-md-6">
                
            <div class="analytics">
                    <div class="row">

                  
                        <!-- First Analytics Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card total-users-card">
                                <div class="card-body">
                                    <h5 class="card-title">Today's Appointment</h5>
                                    <p class="card-text">{{$todayCount}}</p>
                                </div>
                            </div>
                        </div>
    
                        <!-- Second Analytics Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card recipes-added-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Appointments</h5>
                                    <p class="card-text">{{$totalAppointments}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <!-- Third Analytics Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card groceries-added-card">
                                <div class="card-body">
                                    <h5 class="card-title">Available Doctors</h5>
                                    <p class="card-text">{{$availDocs}}</p>
                                </div>
                            </div>
                        </div>
    
                        <!-- Fourth Analytics Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card customer-feedbacks-card">
                                <div class="card-body">
                                    <h5 class="card-title">Cancelled Appointments</h5>
                                    <p class="card-text">{{$cancelled}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

            
               
                </div>
            </div>
            <div class="col-md-6 me-6">
                <div class="calendarContainer">
                
                <h2 class="text-success text-center">Todays Appointment</h2>
    <table class="table table-striped">
      <thead class="table-background">

      
        <tr>
          <th scope="col" class="table-font">Appoint. Number</th>
          
          <th scope="col" class="table-font">Doctor</th>
          <th scope="col" class="table-font">Status</th>

          <th scope="col"class="table-font" >Scheduled Date & Time</th>
        </tr>

        
      </thead>
      <tbody>
      @foreach($appoint as $appoints)
        <tr>
            <td>{{$appoints->id}}</td>
            <td>{{$appoints->doctor}}</td>
            <td>{{$appoints->status}}</td>
            <td>{{$appoints->date}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <div class="background-image-container"></div>
            </div>
            </div>

           
        </div>
    </div>
   
      
</main>
        
    
</body>
<script>
    // Get the current date
var currentDate = new Date();

// Format the date as desired
var formattedDate = currentDate.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });

// Update the text of the h5 element with the current date
document.getElementById('currentDate').textContent += formattedDate;

</script>
</html>

