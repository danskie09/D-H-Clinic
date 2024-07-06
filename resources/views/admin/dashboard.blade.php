<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <link rel="icon" type="image/png" href="{{asset('/assets/images/djvinard.jpg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</head>
<body>
    
    <div class="container-fluid p-0 d-flex h-100">
        <!-- sidebar -->
@include('admin.layouts.sidebar')
        <!-- sidebar -->

       <!-- collapsible -->
       @include('admin.layouts.collapseSide')
       <!-- collapsible -->

            <!-- breadcrumb -->
            @include('admin.layouts.breadcrumb')
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
                                    <h5 class="card-title">Patients</h5>
                                    <p class="card-text">{{$users}}</p>
                                </div>
                            </div>
                        </div>
    
                        <!-- Second Analytics Card -->
                        <div class="col-md-6 mb-3">
                            <div class="card recipes-added-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Appointments</h5>
                                    <p class="card-text">{{ $totalAppointments }}</p>
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
                                    <p class="card-text">{{$doctors}}</p>
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
                <h2 class="text-success text-center mt-3">Calendar</h2>
                <iframe src="https://calendar.google.com/calendar/embed?src=en.philippines%23holiday%40group.v.calendar.google.com&ctz=Asia%2FManila" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
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

