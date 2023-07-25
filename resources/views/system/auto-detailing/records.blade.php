@include('admin.layout')

<main id="main" class="main">

<div class="pagetitle">
 
  <h1>Auto Detailing Records</h1>
  
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">Auto Detailing</li>
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
              <th scope="col" class="align-middle">TXN No.</th>
              <th scope="col" class="align-middle">Name</th>
              <th scope="col" class="align-middle">Phone</th>
              <th scope="col" class="align-middle">Year</th>
              <th scope="col" class="align-middle">Make</th>
              <th scope="col" class="align-middle">Model</th>
              <th scope="col" class="align-middle">Variant</th>
              <th scope="col" class="align-middle">Appointed Date</th>
              <th scope="col" class="align-middle">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10100100</th>
              <td>Riley Smith</td>
              <td>09546372789</td>
              <td>2019</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>GLX Plus</td>
              <td>APR-11-2023</td>
              <td>₱10,500</td>
            </tr>
            <tr>
              <th scope="row">10100101</th>
              <td>Riley Smith</td>
              <td>09546372789</td>
              <td>2019</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>GLX Plus</td>
              <td>APR-11-2023</td>
              <td>₱10,500</td>
            </tr>
            <tr>
              <th scope="row">10100102</th>
              <td>Riley Smith</td>
              <td>09546372789</td>
              <td>2019</td>
              <td>Mitsubishi</td>
              <td>Strada</td>
              <td>GLX Plus</td>
              <td>APR-11-2023</td>
              <td>₱10,500</td>
            </tr>
            <tr>
              <th scope="row">10100103</th>
                <td>Riley Smith</td>
                <td>09546372789</td>
                <td>2019</td>
                <td>Mitsubishi</td>
                <td>Strada</td>
                <td>GLX Plus</td>
                <td>APR-11-2023</td>
                <td>₱10,500</td>
              </tr>
            <tr>
              <th scope="row">10100104</th>
                <td>Riley Smith</td>
                <td>09546372789</td>
                <td>2019</td>
                <td>Mitsubishi</td>
                <td>Strada</td>
                <td>GLX Plus</td>
                <td>APR-11-2023</td>
                <td>₱10,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- End Recent Sales -->

</section>

</main><!-- End #main -->
