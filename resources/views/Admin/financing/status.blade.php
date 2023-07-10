@include('admin.layout')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Financing Status</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Financing</li>
          <li class="breadcrumb-item active">Status</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

     <!-- Recent Sales -->
     <div class="col-12">
        <div class="card recent-sales overflow-auto rounded-5">

          <div class="card-body table-responsive">
            <h5 class="card-title card-header">Client Status</h5>

            <table class="table table-hover">
              <thead class="table-success">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Year</th>
                  <th scope="col">Make</th>
                  <th scope="col">Model</th>
                  <th scope="col">Variant</th>
                  <th scope="col">Plate No.</th>
                  <th scope="col">Price</th>
                  <th scope="col">Date</th>
                  <th scope="col">Bank</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="#">1</a></th>
                  <td>Sofia Patel</td>
                  <td>2014</td>
                  <td>Mitsubishi</td>
                  <td>Montero</td>
                  <td>GLS</td>
                  <td>ABC 110</td>
                  <td>₱650,000</td>
                  <td>APR-11-2023</td>
                  <td>JACCS</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">2</a></th>
                  <td>Tyler Nguyen</td>
                  <td>2018</td>
                  <td>Toyota</td>
                  <td>Fortuner</td>
                  <td>G</td>
                  <td>ABC 111</td>
                  <td>₱985,000</td>
                  <td>APR-11-2023</td>
                  <td>Primary</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">3</a></th>
                  <td>Isabella Jones</td>
                  <td>2017</td>
                  <td>Nissan</td>
                  <td>Navarra</td>
                  <td>EL</td>
                  <td>ABC 112</td>
                  <td>₱800,000</td>
                  <td>APR-11-2023</td>
                  <td>Asialink</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">4</a></th>
                  <td>Cameron Lee</td>
                  <td>2015</td>
                  <td>Honda</td>
                  <td>Jazz</td>
                  <td>VX</td>
                  <td>ABC 113</td>
                  <td>₱980,000</td>
                  <td>APR-11-2023</td>
                  <td>JACCS</td>
                  <td><span class="badge bg-danger">Rejected</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">5</a></th>
                  <td>Nathan Stewart</td>
                  <td>2014</td>
                  <td>Honda</td>
                  <td>City</td>
                  <td>E</td>
                  <td>ABC 114</td>
                  <td>₱480,000</td>
                  <td>APR-11-2023</td>
                  <td>JACCS</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div><!-- End Recent Sales -->
    </section>

  </main><!-- End #main -->