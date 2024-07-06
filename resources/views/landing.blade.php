<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>D&H Clinic | LandingPage</title>
    <link rel="icon" type="image/png" href="{{asset('assets/images/D&H.png')}}" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />


    <style>
      header {
    background-image: linear-gradient(rgba(41, 41, 41, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset("/assets/images/clinic.jpg")}}');
 background-size: cover;
    background-position: 50%;
    height: 90vh;
}
    </style>
  </head>
  <body>
    <header class="position-relative">
      <nav class="navbar navbar-expand">
        <div class="container">
          <img src="{{asset('assets/images/D&H.png')}}" alt="logo" />
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarSupportedContent"
          >

          @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-white transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-white transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
            <!-- <button id="signInButton" type="button" class="red-btn fw-semibold">
              Sign In
            </button> -->
          </div>
        </div>
      </nav>

      <div
        class="hero container mt-0 h-75 d-flex flex-column align-items-center justify-content-center"
      >
        <h1 class="hero-title text-white text-center">
          Welcome to D&H Clinic , Invest in your health, schedule your appointment today!
        </h1>
        <p class="hero-first-p text-white text-center">
        We're here to revolutionize the way you navigate healthcare.

        </p>
        <p class="hero-second-p text-white text-center">
        Our clinic makes appointments, consultations, and follow-up care easier and more convenient than ever before.
        </p>

        <form
          class="row g-3 d-flex align-items-center justify-content-center w-100 w-lg-75"
        >
          <div class="form-floating col-auto">
            <input
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
            />
            <label for="floatingInput">Email address</label>
          </div>
          <div class="col-auto">
            <button type="submit" class="get-started-btn red-btn fw-bold">
              Get Started
            </button>
          </div>
        </form>
      </div>
    </header>

    <section class="watch-section py-5 bg-white text-success">
      <div class="container d-flex row m-auto">
        <div class="col-12 col-lg-6">
          <img class="img-fluid" src="{{asset('assets/images/Works.jpg')}}" alt="mobile" />
        </div>
        <div
          class="d-flex flex-column justify-content-center col-12 col-lg-6 order-first order-lg-last"
        >
          <h2 class="section-title text-center text-lg-start">
          Seamless Care
          </h2>
          <p class="section-paragraph text-center text-lg-start">
          Our clinic provides a comfortable, compassionate experience that makes managing your health less stressful and more positive.
          </p>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer">
        <div class="roww">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>

          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>

        <div class="roww">
          <ul>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>

        <div class="roww">© 2024 D&H Clinic - All rights reserved</div>
      </div>
    </footer>
    <!-- end of code sa footer -->

    <script>
    //   document
    //     .getElementById("signInButton")
    //     .addEventListener("click", function () {
    //       window.location.href = "./Users/login.html";
    //     });
    </script>
    <script src="" async defer></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
