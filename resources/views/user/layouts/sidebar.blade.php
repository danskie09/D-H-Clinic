<div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-success  text-white offcanvas-md offcanvas-start" style="width: 280px;">
            <a href="#" class="navbar-brand">
                <h5><i class="fa-solid fa-stethoscope" style="font-size: 28px; margin-right: 5px;"></i>D&H Clinic</h5>
            </a>
            
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="{{route('dashboard')}}" class="">
                        <i class="fa-solid fa-table-columns"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-1">             
                    <a href="{{route('appointment')}}" class="">
                        <i class="fa-solid fa-plus"></i>
                        Add Appointment
                    </a>
                </li>

                <li class="nav-item mb-1">                 
                    <a href="{{route('user.appointment')}}" class="">
                        <i class="fa-solid fa-bookmark"></i>
                        My Appointments
                    </a>
                </li>

                <li class="nav-item mb-1">                 
                    <a href="{{route('today.appointment')}}" class="">
                    <i class="fa-solid fa-calendar-day"></i>
                        Today Appointments
                    </a>
                </li>

                <li class="nav-item mb-1">                 
                    <a href="{{route('doctor')}}" class="">
                    <i class="fa-solid fa-user-doctor"></i>
                        Available Doctors
                    </a>
                </li>

               

                
              
            </ul>

            <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            
              
            <hr>
            <a class="profile" href="#">
                <div class="d-flex">
                    <img src="{{asset('/assets/images/user.jpg')}}" class="img-fluid rounded me-2" width="50px" alt="">
                    <span>
                    <h6 class="mt-1 mb-0">{{ Auth::user()->name }}</h6>
                        <small>{{ Auth::user()->email }}</small>
                    </span>
                </div>
            </a>
        </div>