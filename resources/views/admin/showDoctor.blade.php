<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | All Doctors</title>
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
                        <li class="breadcrumb-item">All Doctors</li>
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
  <h2 class="mb-4 text-success">Doctors</h2>

  
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
          <th scope="col">Doctor Name</th>
          <th scope="col">Specialty</th>
          <th scope="col">Phone</th>
          <th scope="col">Room No.</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
      
          
        </tr>
      </thead>
      <tbody>

      @foreach($data as $doctor)
        <tr>
          <td>{{$doctor->name}}</td>
          <td>{{$doctor->specialty}}</td>
          <td>{{$doctor->phone}}</td>
          <td>{{$doctor->room}}</td>
          <td><img height="100"  width="100" src="/doctorimage/{{$doctor->image}}" alt=""></td>
          <td>
          <a class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure to delete this doctor?')" href="{{route('doctor.delete',$doctor->id)}}">
          <i class="fa-solid fa-trash"></i>
          </a>
          </td>
          
        
          
        @endforeach

        <span style="padding-top: 20px;">
{!!$data->withQueryString()->links('pagination::bootstrap-5')!!}
</span>
        
      </tbody>
    </table>
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

