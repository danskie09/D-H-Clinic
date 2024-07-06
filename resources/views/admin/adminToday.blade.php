<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | View Appointments</title>
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
            <div class="p-4">
                <nav style="--bs-breadcrumb-divider:'>';font-size:14px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><i class="fa-solid fa-house"></i></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item">Today Appointments</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h5 id="currentDate" class="text-success">Today - </h5>
                    
                    
                </div>

               




                <hr>
            <!-- breadcrumb -->

               
               
<main>
    <div class="container my-2">
   
    <div class="d-flex justify-content-between align-items-center">
  <h2 class="mb-4 text-success">Today Appointments</h2>

  <form action="{{ route('appointments.search') }}" method="GET" class="d-flex align-items-center">
    @csrf
    <input type="text" class="form-control" name="search" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
    <button class="btn btn-success btn-sm" type="submit" id="button-addon2">
      <i class="fa-solid fa-search"></i>
    </button>
  </form>
</div>
    
    
<!-- message -->
    @if(session()->has('message'))



<div class="alert alert-success d-flex justify-content-between align-items-center">

{{session()->get('message')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>

       @endif
    <!-- message -->

    <div class="container mt-3">
    <table class="table table-sm table-hover table-responsive">
      <thead class="bg-secondary text-white">
        <tr>
          <th scope="col">Client Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Doctor Name</th>
          <th scope="col">Date</th>
          <th scope="col">Purpose</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

      @foreach($data as $datas)
        <tr>
          <td>{{$datas->name}}</td>
          <td>{{$datas->email}}</td>
          <td>{{$datas->phone}}</td>
          <td>{{$datas->doctor}}</td>
          <td>{{$datas->date}}</td>
          <td>{{$datas->message}}</td>
          <td>{{$datas->status}}</td>
          <td>
          
            
          
          <a class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure to cancel this appointment')" href="{{route('appointment.cancel',$datas->id)}}">
          <i class="fa-regular fa-rectangle-xmark"></i>
          </a>
          
        </td>
        @endforeach

        
        
      </tbody>
    </table>
    <span style="padding-top: 20px;">
{!!$data->withQueryString()->links('pagination::bootstrap-5')!!}
</span>
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

