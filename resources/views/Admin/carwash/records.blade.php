@include('admin.layout')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Car Wash</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Car Wash</li>
          <li class="breadcrumb-item active">Records</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="col-12">
        <div class="card recent-sales overflow-auto rounded-5">

          <div class="card-body table-responsive">
            <h5 class="card-title card-header">Client Records</h5>
           
            <table id="dtHorizontalExample" class="table table-condensed table-hover" cellspacing="0" width="100%" >
              <thead class="table-success">
                <tr>
                    <th scope="col">TXN No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Vehicle Type</th>
                    <th scope="col">Plate No.</th>
                    <th scope="col">Booking Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">100500001</th>
                    <td>Riley Smith</td>
                    <td>09546372789</td>
                    <td>Mitsubishi</td>
                    <td>Strada</td>
                    <td>Pickup Truck</td>
                    <td>ABC 123</td>
                    <td>Walk-in</td>
                    <td>APR-30-2023</td>
                    <td>7:00AM</td>
                    <td>₱120.00</td>
                  </tr>
                <tr>
                  <th scope="row">100500002</th>
                  <td>Juan Rodriguez</td>
                  <td>09675566453</td>
                  <td>Toyota</td>
                  <td>Vios</td>
                  <td>Sedan</td>
                  <td>ABC 124</td>
                  <td>Via Online</td>
                  <td>APR-30-2023</td>
                  <td>9:00AM</td>
                  <td>₱90.00</td>
                </tr>
                <tr>
                  <th scope="row">100500003</th>
                  <td>Ava Johnson</td>
                  <td>09988773411</td>
                  <td>Mitsubishi</td>
                  <td>Mirage</td>
                  <td>Hatchback</td>
                  <td>ABC 125</td>
                  <td>Via Online</td>
                  <td>APR-30-2023</td>
                  <td>11:00AM</td>
                  <td>₱90.00</td>
                </tr>
                <tr>
                  <th scope="row">100500004</th>
                  <td>Max Williams</td>
                  <td>09133266755</td>
                  <td>Mitsubishi</td>
                    <td>Strada</td>
                    <td>Pickup Truck</td>
                    <td>ABC 126</td>
                    <td>Walk-in</td>
                    <td>APR-30-2023</td>
                    <td>1:00PM</td>
                    <td>₱120.00</td>
                </tr>
                <tr>
                  <th scope="row">100500005</th>
                  <td>Chloe Adams</td>
                  <td>09887866321</td>
                  <td>Mitsubishi</td>
                  <td>Strada</td>
                  <td>Pickup Truck</td>
                  <td>ABC 127</td>
                  <td>Via Online</td>
                  <td>APR-30-2023</td>
                  <td>3:00PM</td>
                  <td>₱120.00</td>
                </tr>
              </tbody>
            </table>
       
          </div>

        </div>
      </div><!-- End Recent Sales -->
    </section>

  </main><!-- End #main -->
