<div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-success  text-white offcanvas-md offcanvas-start" style="width: 280px;">
            <a href="#" class="navbar-brand">
                <h5><i class="fa-solid fa-stethoscope" style="font-size: 28px; margin-right: 5px;"></i>D&H Clinic</h5>
            </a>
            
            <hr>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="{{route('admin.dashboard')}}" class="">
                        <i class="fa-solid fa-table-columns"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{route('add_Doctor_View')}}" class="">
                    <i class="fa-solid fa-plus"></i>
                        Add Doctor
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{route('show.doctor')}}" class="">
                    <i class="fa-solid fa-user-doctor"></i>
                        All Doctors
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{route('admin.today')}}" class="">
                    <i class="fa-solid fa-calendar-day"></i>
                        Today Appointments
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{route('view.appointments')}}" class="">
                    <i class="fa-solid fa-bookmark"></i>
                        View Appointments
                    </a>
                </li>

                <li class="nav-item mb-1">
                    <a href="{{route('patient.record')}}" class="">
                    <i class="fa-solid fa-file-medical"></i>
                        Patient Records
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