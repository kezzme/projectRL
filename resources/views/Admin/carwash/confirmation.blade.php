@include('admin.layout')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Car Wash</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">Car Wash</li>
      <li class="breadcrumb-item active">Confirmation</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="col-12">
    <div class="card recent-sales overflow-auto rounded-5">

      <div class="card-body table-responsive">
        <h5 class="card-title card-header">Client List</h5>
       
        <table id="dtHorizontalExample" class="table table-condensed table-hover" cellspacing="0" width="100%" >
          <thead class="table-success">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Make</th>
              <th scope="col">Model</th>
              <th scope="col">Vehicle Type</th>
              <th scope="col">Plate No.</th>
              <th scope="col">Amount</th>
              <th scope="col">Appointed Date</th>
              <th scope="col">Time</th>
              <th scope="col">Void</th>
              <th scope="col">Checkout</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><a href="#">1</a></th>
              <td>Riley Smith</td>
              <td>09546372789</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>Pickup Truck</td>
              <td>AAA 123</td>
              <td>₱120.00</td>
              <td>APR-30-2023</td>
              <td>2:00PM</td>
              <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
              <td style="text-align: center;"><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
            </tr>
            <tr>
              <th scope="row"><a href="#">2</a></th>
              <td>Juan Rodriguez</td>
              <td>09675566453</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>Pickup Truck</td>
              <td>AAA 123</td>
              <td>₱120.00</td>
              <td>APR-30-2023</td>
              <td>2:00PM</td>
              <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
              <td style="text-align: center;"><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
            
            </tr>
            <tr>
              <th scope="row"><a href="#">3</a></th>
              <td>Ava Johnson</td>
              <td>09988773411</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>Pickup Truck</td>
              <td>AAA 123</td>
              <td>₱120.00</td>
              <td>APR-30-2023</td>
              <td>2:00PM</td>
              <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
              <td style="text-align: center;"><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
            
            </tr>
            <tr>
              <th scope="row"><a href="#">4</a></th>
              <td>Max Williams</td>
              <td>09133266755</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>Pickup Truck</td>
              <td>AAA 123</td>
              <td>₱120.00</td>
              <td>APR-30-2023</td>
              <td>2:00PM</td>
              <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
              <td style="text-align: center;"><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
            
            </tr>
            <tr>
              <th scope="row"><a href="#">5</a></th>
              <td>Chloe Adams</td>
              <td>09887866321</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>Pickup Truck</td>
              <td>AAA 123</td>
              <td>₱120.00</td>
              <td>APR-30-2023</td>
              <td>2:00PM</td>
              <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
              <td style="text-align: center;"><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
            
            </tr>
          </tbody>
        </table>
   
      </div>

    </div>
  </div><!-- End Recent Sales -->
</section>

</main><!-- End #main -->