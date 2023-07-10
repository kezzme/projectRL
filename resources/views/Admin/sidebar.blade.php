<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('dashboard') }}" > <!-- href -->
    <i class="fa-solid fa-chart-simple"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-box-open"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a class="@if(Route::currentRouteName() == 'add-unit') active @endif" href="{{ route('add-unit') }}">
          <i class="fa-regular fa-circle"></i><span>Add Unit</span>
        </a>
      </li>
      <li>
      <li>
        <a class="@if(Route::currentRouteName() == 'showroom') active @endif" href="{{ route('showroom') }}">
          <i class="fa-regular fa-circle"></i><span>Showroom</span>
        </a>
      </li>
      <li>
        <a class="@if(Route::currentRouteName() == 'sold-units') active @endif" href="{{ route('sold-units') }}">
          <i class="fa-regular fa-circle"></i><span>Sold Units</span>
        </a>
      </li>
    </ul>
  </li><!-- End Inventory Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('calendar') }}">
    <i class="fa-solid fa-calendar-days"></i>
      <span>Calendar</span>
    </a>
  </li><!-- End Calendar Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('appointment') }}">
    <i class="fa-solid fa-calendar-check"></i>
      <span>Appointment</span>
    </a>
  </li><!-- End Appointment Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#financing-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-credit-card"></i><span>Financing</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="financing-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('financing-confirmation') }}">
          <i class="fa-regular fa-circle"></i><span>Confirmation</span>
        </a>
      </li>
      <li>
        <a href="{{ route('financing-status') }}">
          <i class="fa-regular fa-circle"></i><span>Status</span>
        </a>
      </li>
    </ul>
  </li><!-- End Financing Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#trade-in-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-handshake-simple"></i><span>Trade-in</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="trade-in-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('trade-requests') }}">
          <i class="fa-regular fa-circle"></i><span>Trade Requests</span>
        </a>
      </li>
      <li>
        <a href="{{ route('trade-in-status') }}">
          <i class="fa-regular fa-circle"></i><span>Trade-in Status</span>
        </a>
      </li>
      <li>
        <a href="{{ route('traded-units') }}">
          <i class="fa-regular fa-circle"></i><span>Traded Units</span>
        </a>
      </li>
    </ul>
  </li><!-- End Trade-in Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#receipts-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-file-pen"></i><span>Receipts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="receipts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('acknowledgment-receipt') }}">
          <i class="fa-regular fa-circle"></i><span>Acknowledgment Receipt</span>
        </a>
      </li>
      <li>
        <a href="{{ route('receipt-records') }}">
          <i class="fa-regular fa-circle"></i><span>Records</span>
        </a>
      </li>
    </ul>
  </li><!-- End Receipts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#walkin-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-shoe-prints"></i><span>Walk-in</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="walkin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('walk-in-unit') }}">
          <i class="fa-regular fa-circle"></i><span>Unit</span>
        </a>
      </li>
      <li>
        <a href="{{ route('walk-in-financing') }}">
          <i class="fa-regular fa-circle"></i><span>Financing</span>
        </a>
      </li>
      <li>
        <a href="{{ route('walk-in-trade-in') }}">
          <i class="fa-regular fa-circle"></i><span>Trade-in</span>
        </a>
      </li>
      <li>
        <a href="{{ route('walk-in-carwash') }}">
          <i class="fa-regular fa-circle"></i><span>Car Wash</span>
        </a>
      </li>
      <li>
        <a href="{{ route('walk-in-detailing') }}">
          <i class="fa-regular fa-circle"></i><span>Auto Detailing</span>
        </a>
      </li>
      <li>
      <a href="{{ route('walk-in-paintjob') }}">
          <i class="fa-regular fa-circle"></i><span>Paint Job</span>
        </a>
      </li>
    </ul>
  </li><!-- End Walk-in Nav -->


  <li class="nav-heading">Services</li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#car-wash-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-droplet-fill"></i><span>Car Wash</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="car-wash-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
      <a href="{{ route('car-wash-confirmation') }}">
          <i class="fa-regular fa-circle"></i><span>Confirmation</span>
        </a>
      </li>
      <li>
      <a href="{{ route('car-wash-records') }}">
          <i class="fa-regular fa-circle"></i><span>Records</span>
        </a>
      </li>
    </ul>
  </li><!-- End Car Wash Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#auto-detailing-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-screwdriver-wrench"></i><span>Auto Detailing</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="auto-detailing-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('auto-detailing-confirmation') }}">
          <i class="fa-regular fa-circle"></i><span>Confirmation</span>
        </a>
      </li>
      <li>
        <a href="{{ route('auto-detailing-payment') }}">
          <i class="fa-regular fa-circle"></i><span>Payment</span>
        </a>
      </li>
      <li>
        <a href="{{ route('auto-detailing-records') }}">
          <i class="fa-regular fa-circle"></i><span>Records</span>
        </a>
      </li>
    </ul>
  </li><!-- End Auto Detailing Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#paint-job-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-spray-can"></i><span>Paint Job</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="paint-job-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('paint-job-confirmation') }}">
          <i class="fa-regular fa-circle"></i><span>Confirmation</span>
        </a>
      </li>
      <li>
        <a href="{{ route('paint-job-payment') }}">
          <i class="fa-regular fa-circle"></i><span>Payment</span>
        </a>
      </li>
      <li>
        <a href="{{ route('paint-job-records') }}">
          <i class="fa-regular fa-circle"></i><span>Records</span>
        </a>
      </li>
    </ul>
  </li><!-- End Paint Job Nav -->

</ul>

</aside><!-- End Sidebar-->