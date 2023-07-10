<x-landing-layout>

    @include('home.nav-bar')
<!-- Page Header Start -->
<div class="container-fluid page-header  p-0" style="background-image: url(img/carousel-bg-16.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h6 class="text-primary text-uppercase">// Our Services //</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa-solid fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Car Wash</h4>
                        </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa-solid fa-screwdriver-wrench fa-2x me-3"></i>
                            <h4 class="m-0">Auto Detailing</h4>
                        </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa-solid fa-fill-drip fa-2x me-3"></i>
                            <h4 class="m-0">Paint Job</h4>
                        </button>

                </div>
            </div>
            <div class="col-lg-7">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="bg-primary h-100 d-flex flex-column  p-5 ">
                                <h1 class="text-white mb-4 justify-content-center text-center">Car Wash Form</h1>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control btn-rounded" placeholder="First Name" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control btn-rounded" placeholder="Last Name" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <input type="text" class="form-control btn-rounded" placeholder="Phone No." style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <input type="text" class="form-control btn-rounded" placeholder="Make" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <input type="text" class="form-control btn-rounded" placeholder="Model" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Plate No.</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Body Type</div>
                                                <select class="form-select btn-rounded" style="height: 55px;" id="vehicle">
                                                    <option selected>Sedan</option>
                                                    <option value="1">Hatchback</option>
                                                    <option value="2">SUV</option>
                                                    <option value="3">MPV</option>
                                                    <option value="3">AUV</option>
                                                    <option value="3">Coupe</option>
                                                    <option value="3">Crossover</option>
                                                    <option value="3">Pick-Up Truck</option>
                                                    <option value="3">Van</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Amount</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px;" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="col-md-12" id="datepicker1"></div>
                                            </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn7AM_1" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('7:00 AM', 1)" type="button" disabled>7:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn9AM_1" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('9:00 AM', 1)" type="button" disabled>9:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn11AM_1" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('11:00 AM', 1)" type="button" disabled>11:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn1PM_1" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('1:00 PM', 1)" type="button" disabled>1:00 PM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn3PM_1" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('3:00 PM', 1)" type="button" disabled>3:00 PM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn5PM_1" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('5:00 PM', 1)" type="button" disabled>5:00 PM</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 hidden" id="selectedDateTime_1">
                                            <div class="card bg-blue btn-rounded justify-content-center text-white" style="height: 35px;">
                                                <div class="card-body row ">
                                                    <div class="col-md-11">
                                                        <span><i class="fa-regular fa-calendar-days"></i> You've selected <label id="selectedTime_1"></label> on <label id="selectedDate_1"></label><span>
                                                      </div>
                                                    <div class="col-md-1 justify-content-end">
                                                        <i class="fa-solid fa-circle-xmark" type="button" onclick="closeDateTime(1)"></i>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control btn-rounded" placeholder="Special Request"></textarea>
                                            </div>
                                            

                                            <div class="col-12">
                                                <button class="btn btn-secondary w-100 py-3 btn-rounded" type="submit">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                             </div>
                          </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                            <div class="bg-primary h-100 d-flex flex-column  p-5 " data-wow-delay="0.6s">
                                    <h1 class="text-white mb-4 justify-content-center text-center">Auto Detailing Form</h1>
                                    <form>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control btn-rounded" placeholder="First Name" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control btn-rounded" placeholder="Last Name" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <input type="text" class="form-control btn-rounded" placeholder="Phone No." style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Year</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Make</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Model</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Variant</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Plate No.</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="col-md-12" id="datepicker2"></div>
                                            </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn7AM_2" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('7:00 AM', 2)" type="button" disabled>7:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn9AM_2" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('9:00 AM', 2)" type="button" disabled>9:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn11AM_2" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('11:00 AM', 2)" type="button" disabled>11:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn1PM_2" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('1:00 PM', 2)" type="button" disabled>1:00 PM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn3PM_2" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('3:00 PM', 2)" type="button" disabled>3:00 PM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn5PM_2" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('5:00 PM', 2)" type="button" disabled>5:00 PM</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 hidden" id="selectedDateTime_2">
                                            <div class="card bg-blue btn-rounded justify-content-center text-white" style="height: 35px;">
                                                <div class="card-body row ">
                                                    <div class="col-md-11">
                                                    <span><i class="fa-regular fa-calendar-days"></i> You've selected <label id="selectedTime_2"></label> on <label  id="selectedDate_2"></label><span>
                                                    </div>
                                                    <div class="col-md-1 justify-content-end">
                                                    <i class="fa-solid fa-circle-xmark" type="button" onclick="closeDateTime(2)"></i>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control btn-rounded" placeholder="Special Request"></textarea>
                                            </div>
                                            <div class="col-12 col-sm-12 d-grid gap-2 d-md-flex">
                                                <input type="file" class="form-control btn-rounded" id="inputGroupFile02">
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-secondary w-100 py-3 btn-rounded" type="submit">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3" >
                            <div class="row g-4">
                            <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5">
                                    <h1 class="text-white mb-4">Paint Job Form</h1>
                                    <form>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control btn-rounded" placeholder="First Name" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input type="text" class="form-control btn-rounded" placeholder="Last Name" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <input type="text" class="form-control btn-rounded" placeholder="Phone No." style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Year</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Make</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Model</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Variant</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class=" input-group">
                                                <div class="col-md-5 input-group-text justify-content-center btn-rounded">Plate No.</div>
                                                <input type="text" class="form-control btn-rounded" style="height: 55px; text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="col-md-12" id="datepicker3"></div>
                                            </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn7AM_3" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('7:00 AM', 3)" type="button" disabled>7:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn9AM_3" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('9:00 AM', 3)" type="button" disabled>9:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn11AM_3" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('11:00 AM', 3)" type="button" disabled>11:00 AM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn1PM_3" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('1:00 PM', 3)" type="button" disabled>1:00 PM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn3PM_3" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('3:00 PM', 3)" type="button" disabled>3:00 PM</button>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <button id="btn5PM_3" class="btn btn-secondary btn-rounded w-100" onclick="selectTime('5:00 PM', 3)" type="button" disabled>5:00 PM</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 hidden" id="selectedDateTime_3">
                                            <div class="card bg-blue btn-rounded justify-content-center text-white" style="height: 35px;">
                                                <div class="card-body row ">
                                                    <div class="col-md-11">
                                                    <span><i class="fa-regular fa-calendar-days"></i> You've selected <label id="selectedTime_3"></label> on <label  id="selectedDate_3"></label><span>
                                                    </div>
                                                    <div class="col-md-1 justify-content-end">
                                                    <i class="fa-solid fa-circle-xmark" type="button" onclick="closeDateTime(3)"></i>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control btn-rounded" placeholder="Special Request"></textarea>
                                            </div>
                                            <div class="col-12 col-sm-12 d-grid gap-2 d-md-flex">
                                                <input type="file" class="form-control btn-rounded" id="inputGroupFile02">
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-secondary w-100 py-3 btn-rounded" type="submit">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking wow fadeInUp" id="tab-pane-1" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Lorem</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                <div class="row g-4 text-white">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/carousel-bg-8.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 py-5 text-white">
                                    <h3 class="mb-3 text-white">5 Years Of Experience In Auto Servicing</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    </div>
                            </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- Booking End -->

    @include('home.footer')

</x-landing-layout>
    <script>
    var selectedDate = []; // Global variable to store the selected date for each form
    var selectedButton = []; // Global variable to store the selected button for each form
    var datePickerInstance = []; // Array of references to the Flatpickr instances

    function selectDate(selectedDates, dateStr, formIndex) {
      selectedDate[formIndex] = dateStr;
      enableTimeButtons(formIndex);
      updateSelectedDateTime(formIndex);
    }

    function selectTime(time, formIndex) {
      if (selectedDate[formIndex] !== undefined) {
        var selectedTime = time;
        document.getElementById("selectedDate_" + formIndex).textContent = formatSelectedDate(selectedDate[formIndex]);
        document.getElementById("selectedTime_" + formIndex).textContent = selectedTime;
        document.getElementById("selectedDateTime_" + formIndex).style.display = "block";
        
        if (selectedButton[formIndex] !== null) {
          selectedButton[formIndex].classList.remove("selected");
        }
        
        // Set the clicked button as selected
        selectedButton[formIndex] = document.getElementById("btn" + time.replace(/:/g, "") + "_" + formIndex);
        selectedButton[formIndex].classList.add("selected");
      }
    }

    function updateSelectedDateTime(formIndex) {
      if (selectedDate[formIndex] !== undefined) {
        var time = document.getElementById("timepicker" + formIndex).value;
        var selectedTime = time;
        document.getElementById("selectedDate_" + formIndex).textContent = formatSelectedDate(selectedDate[formIndex]);
        document.getElementById("selectedTime_" + formIndex).textContent = selectedTime;
        document.getElementById("selectedDateTime_" + formIndex).style.display = "block";
        
        if (selectedButton[formIndex] !== null) {
          selectedButton[formIndex].classList.remove("selected");
        }
      }
    }

    function formatSelectedDate(date) {
      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      var formattedDate = new Date(date).toLocaleDateString('en-US', options);
      return formattedDate;
    }
    
    function enableTimeButtons(formIndex) {
      document.getElementById("btn7AM_" + formIndex).removeAttribute("disabled");
      document.getElementById("btn9AM_" + formIndex).removeAttribute("disabled");
      document.getElementById("btn11AM_" + formIndex).removeAttribute("disabled");
      document.getElementById("btn1PM_" + formIndex).removeAttribute("disabled");
      document.getElementById("btn3PM_" + formIndex).removeAttribute("disabled");
      document.getElementById("btn5PM_" + formIndex).removeAttribute("disabled");
    }

    function closeDateTime(formIndex) {
      document.getElementById("selectedDateTime_" + formIndex).style.display = "none";
      if (selectedButton[formIndex] !== null) {
        selectedButton[formIndex].classList.remove("selected");
        selectedButton[formIndex] = null;
      }
      selectedDate[formIndex] = undefined;
      disableTimeButtons(formIndex);
    }

    function disableTimeButtons(formIndex) {
      document.getElementById("btn7AM_" + formIndex).setAttribute("disabled", "disabled");
      document.getElementById("btn9AM_" + formIndex).setAttribute("disabled", "disabled");
      document.getElementById("btn11AM_" + formIndex).setAttribute("disabled", "disabled");
      document.getElementById("btn1PM_" + formIndex).setAttribute("disabled", "disabled");
      document.getElementById("btn3PM_" + formIndex).setAttribute("disabled", "disabled");
      document.getElementById("btn5PM_" + formIndex).setAttribute("disabled", "disabled");
    }

    flatpickr("#datepicker1", {
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
      onChange: function(selectedDates, dateStr) {
        selectDate(selectedDates, dateStr, 1);
      },
      onOpen: function(selectedDates, dateStr, instance) {
        datePickerInstance[1] = instance;
        resizeCalendar(1);
      }
    });

    flatpickr("#datepicker2", {
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
      onChange: function(selectedDates, dateStr) {
        selectDate(selectedDates, dateStr, 2);
      },
      onOpen: function(selectedDates, dateStr, instance) {
        datePickerInstance[2] = instance;
        resizeCalendar(2);
      }
    });

    flatpickr("#datepicker3", {
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
      onChange: function(selectedDates, dateStr) {
        selectDate(selectedDates, dateStr, 3);
      },
      onOpen: function(selectedDates, dateStr, instance) {
        datePickerInstance[3] = instance;
        resizeCalendar(3);
      }
    });

    function resizeCalendar(formIndex) {
      if (datePickerInstance[formIndex] !== undefined) {
        var calendarElement = datePickerInstance[formIndex].calendarContainer;
        var formElement = document.getElementsByClassName("form-container")[formIndex - 1];
        calendarElement.style.maxWidth = formElement.offsetWidth + "px";
      }
    }
  </script>
    
    
