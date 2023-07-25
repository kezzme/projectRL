<x-landing-layout>

  @include('home.nav-bar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url({{ asset('img/carousel-bg-10.jpg')}});">
  <div class="container-fluid page-header-inner py-5">
    <div class="container text-center">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Trade Your Car</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">Trade-in</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- Page Header End -->



<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 pt-4" style="min-height: 400px;">
        <div class="h-100 wow fadeIn" data-wow-delay="0.1s">
          <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_1) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_2) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_3) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_4) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_5) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_6) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_7) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_8) }}" class="d-block w-100" />
              </div>
              <div class="carousel-item">
                <img src="{{ url('storage/images/'.$units->car_model.'/'.$units->display_image_9) }}" class="d-block w-100" />
              </div>
              <!-- 9 IMAGES -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h6>&nbsp;</h6>
        <h1 class="mb-4">
          <span class="text-primary">{{ $units->car_year }}</span> {{ $units->car_make }} {{ $units->car_model }} {{ $units->car_variant }}
        </h1>
        <p class="mb-4">{{ $units->description }} </p>
        <div class="row g-4 mb-3 pb-3">
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-microchip"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Engine</h6>
                <span>{{ $units->engine }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-gauge"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Transmission</h6>
                <span text-transform:uppercase;>{{ $units->transmission }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-gas-pump"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Fuel Type</h6>
                <span>{{ $units->fuel }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-gauge-simple-high"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Odometer</h6>
                <span>{{ $units->odometer }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-palette"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Interior Color</h6>
                <span>{{ $units->interior_color }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-fill-drip"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Exterior Color</h6>
                <span>{{ $units->exterior_color }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.7s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-record-vinyl"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Drive Train</h6>
                <span>{{ $units->drive_train }}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.8s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-car-side"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>Body Type</h6>
                <span>{{ $units->body_type}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.9s">
            <div class="d-flex">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 45px; height: 45px;">
                <span>
                  <i class="fa-solid fa-user-plus"></i>
                </span>
              </div>
              <div class="ps-3">
                <h6>No. of Owners</h6>
                <span>{{ $units->no_of_owners }}</span>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Booking Start -->
<div class="container-fluid bg-secondary tradeIn my-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-5 py-5">
        <div class="py-5">
          <h1 class="text-white mb-4">Requirements</h1>
          <p class="text-white mb-0">
            <li class="text-white">Take and upload High-quality pictures of your car.</li>
            <li class="text-white">Ensure that your car is in good running condition.</li>
            <li class="text-white">Prepare all the necessary Documents.</li>
          <ul class="text-white">
            <li>ORCR of your vehicle.</li>
            <li>Deed of Sale.</li>
            <li>Insurance (if any).</li>
            <li>Photocopy of your valid ID.</li>
          </ul>
          </p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="bg-primary h-100 d-flex flex-column  p-5 wow zoomIn" data-wow-delay="0.6s">
          <h1 class="text-white mb-4 justify-content-center text-center">Trade-in Form</h1>
          <form action="/vehicles/trade-in/done" method="POST" enctype="multipart/form-data">
            @csrf
            @auth
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <div class=" input-group">
                  <div class="col-md-4 input-group-text justify-content-center btn-rounded">First Name</div>
                  <input type="text" name="first_name" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" value="{{auth()->user()->first_name}}" readonly>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class=" input-group">
                  <div class="col-md-4 input-group-text justify-content-center btn-rounded">Last Name</div>
                  <input type="text" name="last_name" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" value="{{auth()->user()->last_name}}" readonly>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class=" input-group">
                  <div class="col-md-4 input-group-text justify-content-center btn-rounded">Contact</div>
                  <input type="text" name="phone" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" value="{{auth()->user()->phone}}" readonly>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class=" input-group">
                  <div class="col-md-5 input-group-text justify-content-center btn-rounded">Year</div>
                  <input type="text" name="year" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" required>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class=" input-group">
                  <div class="col-md-5 input-group-text justify-content-center btn-rounded">Make</div>
                  <input type="text" name="make"  class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" required>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class=" input-group">
                  <div class="col-md-5 input-group-text justify-content-center btn-rounded">Model</div>
                  <input type="text" name="model" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" required>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class=" input-group">
                  <div class="col-md-5 input-group-text justify-content-center btn-rounded">Variant</div>
                  <input type="text" name="variant" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" required>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class=" input-group">
                  <div class="col-md-5 input-group-text justify-content-center btn-rounded">Plate No.</div>
                  <input type="text" name="plate_no" class="form-control btn-rounded" style="height: 50px; text-transform:uppercase;" required>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class=" input-group">
                  <div class="col-md-5 input-group-text justify-content-center btn-rounded">Unit Price</div>
                  <input type="text" name="unit_price" class="form-control btn-rounded" step="0.10" style="height: 40px; text-transform:uppercase;" required>
                </div>
              </div>
              @endauth
              <div class="col-12 col-sm-6 d-grid gap-2 d-md-flex">
                <input type="file" name="image" class="form-control btn-rounded" id="inputGroupFile01" required>
              </div>
              <div class="col-lg-6">
                <div class="col-md-12">
                  <input type="text" class="form-control btn-rounded hidden" id="datepicker" name="date" required>
                </div>
              </div>              
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <button id="btn7AM" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('7:00 AM')" type="button" disabled>7:00 AM</button>
                  </div>
                  <div class="col-md-6 mb-3">
                    <button id="btn9AM" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('9:00 AM')" type="button" disabled>9:00 AM</button>
                  </div>
                  <div class="col-md-6 mb-3">
                    <button id="btn11AM" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('11:00 AM')" type="button" disabled>11:00 AM</button>
                  </div>
                  <div class="col-md-6 mb-3">
                    <button id="btn1PM" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('1:00 PM')" type="button" disabled>1:00 PM</button>
                  </div>
                  <div class="col-md-6 mb-3">
                    <button id="btn3PM" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('3:00 PM')" type="button" disabled>3:00 PM</button>
                  </div>
                  <div class="col-md-6 mb-3">
                    <button id="btn5PM" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('5:00 PM')" type="button" disabled>5:00 PM</button>
                  </div>
                </div>
              </div>
              <div class="col-12 hidden" id="selectedDateTime">
                  <div class="row">
                    <div class="col-md-12">
                      
                        <div class="input-group"> 
                          <span class="input-group-text btn-rounded">You've selected</span>
                          <input type="text" class="form-control btn-rounded text-center" id="selectedTime" name="time"  readonly required>
                          <span class="input-group-text">on</span>
                          <input type="text" class="form-control btn-rounded text-center" id="selectedDate" name="date" readonly required>
                          <button class="input-group-text btn btn-light btn-rounded" type="button" onclick="closeDateTime()"><i class="fa-solid fa-xmark"></i></button>
                        </div>

                        {{-- <i class="fa-regular fa-calendar-days"></i> You've selected <label ></label> on <label ></label> --}}
                     
                    </div>
                   
                  </div>
    
              </div>
              <input type="text" class="hidden" name="user_id" value="{{auth()->user()->id}}" readonly>
              <input type="text" class="hidden" name="car_year" value="{{$units->car_year}}" readonly>
              <input type="text" class="hidden" name="car_make" value="{{$units->car_make}}" readonly>
              <input type="text" class="hidden" name="car_model" value="{{$units->car_model}}" readonly>
              <input type="text" class="hidden" name="car_variant" value="{{$units->car_variant}}" readonly>
              
              <div class="col-12">
                <button class="btn btn-secondary w-100 py-3 btn-rounded" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Booking End -->

@include('home.footer')
</x-landing-layout>

<script>
  var selectedDate = ""; // Global variable to store the selected date
  var selectedButton = null; // Global variable to store the selected button
  var datePickerInstance = null; // Reference to the Flatpickr instance
  
  function selectDate(selectedDates, dateStr) {
    selectedDate = dateStr;
    enableTimeButtons();
    updateSelectedDateTime();
  }
  var selectedDate = document.getElementById("selectedDate").innerHTML;
  var selectedTime = document.getElementById("selectedTime").innerHTML;

  function selectTime(time) {
  if (selectedDate !== "") {
    var selectedTime = time;
    document.getElementById("selectedDate").value = selectedDate;
    document.getElementById("selectedTime").value = selectedTime;
    document.getElementById("selectedDateTime").style.display = "block";
    if (selectedButton !== null) {
      selectedButton.classList.remove("selected");
    }
    // Set the clicked button as selected
    selectedButton = document.getElementById("btn" + time.replace(/:/g, ""));
    selectedButton.classList.add("selected");
  }
}

  function updateSelectedDateTime() {
    if (selectedDate !== "") {
      var time = document.getElementById("timepicker").value;
      var selectedTime = time;
      document.getElementById("selectedDate").textContent = formatSelectedDate(selectedDate);
      document.getElementById("selectedTime").textContent = selectedTime;
      document.getElementById("selectedDateTime").style.display = "block";
      if (selectedButton !== null) {
        selectedButton.classList.remove("selected");
      }
    }
  }


  function formatSelectedDate(date) {
    var options = {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    };
    var formattedDate = new Date(date).toLocaleDateString('en-US', options);
    return formattedDate;
  }

  function enableTimeButtons() {
    document.getElementById("btn7AM").removeAttribute("disabled");
    document.getElementById("btn9AM").removeAttribute("disabled");
    document.getElementById("btn11AM").removeAttribute("disabled");
    document.getElementById("btn1PM").removeAttribute("disabled");
    document.getElementById("btn3PM").removeAttribute("disabled");
    document.getElementById("btn5PM").removeAttribute("disabled");
  }
  flatpickr("#datepicker", {
    inline: true,
    defaultDate: new Date().fp_incr(1),
    minDate: "today",
    maxDate: new Date().fp_incr(30),
    disable: [
      function(date) {
        // Disable Sundays
        return date.getDay() === 0;
      }
    ],
    onChange: selectDate,
    onOpen: function(selectedDates, dateStr, instance) {
      datePickerInstance = instance;
      resizeCalendar();
    }
  });

  function resizeCalendar() {
    if (datePickerInstance !== null) {
      var calendarElement = datePickerInstance.calendarContainer;
      calendarElement.classList.add("custom-calendar");
    }
  }

  function closeDateTime() {
    document.getElementById("selectedDateTime").style.display = "none";
    if (selectedButton !== null) {
      selectedButton.classList.remove("selected");
      selectedButton = null;
    }
    selectedDate = "";
    disableTimeButtons();
  }

  function disableTimeButtons() {
    document.getElementById("btn7AM").setAttribute("disabled", "disabled");
    document.getElementById("btn9AM").setAttribute("disabled", "disabled");
    document.getElementById("btn11AM").setAttribute("disabled", "disabled");
    document.getElementById("btn1PM").setAttribute("disabled", "disabled");
    document.getElementById("btn3PM").setAttribute("disabled", "disabled");
    document.getElementById("btn5PM").setAttribute("disabled", "disabled");
  }

 

</script>