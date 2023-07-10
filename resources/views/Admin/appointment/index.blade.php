@include('admin.layout')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Appointment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="col-12">
        <div class="card recent-sales overflow-auto rounded-5">

        <div class="card-body table-responsive">
            <h5 class="card-title card-header">Client Confirmation</h5>

            <table id="dtHorizontalExample" class="table table-condensed table-hover" cellspacing="0" width="100%" >
              <thead class="table-success">
                <tr>
                  <th scope="col" class="align-middle">ID</th>
                  <th scope="col" class="align-middle">Name</th>
                  <th scope="col" class="align-middle">Phone</th>
                  <th scope="col" class="align-middle">Year</th>
                  <th scope="col" class="align-middle">Make</th>
                  <th scope="col" class="align-middle">Model</th>
                  <th scope="col" class="align-middle">Variant</th>
                  <th scope="col" class="align-middle">Plate No.</th>
                  <th scope="col" class="align-middle">Price</th>
                  <th scope="col" class="align-middle">Date</th>
                  <th colspan="2" style="text-align: center;" class="align-middle">Transaction Type</th>
         
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="#">1</a></th>
                  <td>Brandon Jacob</td>
                  <td>09343356765</td>
                  <td>2019</td>
                  <td>Honda</td>
                  <td>Civic</td>
                  <td>LX</td>
                  <td>ABC 123</td>
                  <td>₱920,000</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-danger">cash</span></td>
                  <td><spantype="button" class="btn btn-success">financing</span></td>

                </tr>
                <tr>
                  <th scope="row"><a href="#">2</a></th>
                  <td>Bridie Kessler</td>
                  <td>09877765876</td>
                  <td>2016</td>
                  <td>Toyota</td>
                  <td>Vios</td>
                  <td>E</td>
                  <td>ABC 124</td>
                  <td>₱380,000</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-danger">cash</span></td>
                  <td><spantype="button" class="btn btn-success">financing</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">3</a></th>
                  <td>Ashleigh Langosh</td>
                  <td>09956542341</td>
                  <td>2013</td>
                  <td>Hyundai</td>
                  <td>Access</td>
                  <td>GL</td>
                  <td>ABC 125</td>
                  <td>₱350,000</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-danger">cash</span></td>
                  <td><spantype="button" class="btn btn-success">financing</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">4</a></th>
                  <td>Angus Grady</td>
                  <td>09865564878</td>
                  <td>2017</td>
                  <td>Toyota</td>
                  <td>HiAce</td>
                  <td>Commuter</td>
                  <td>ABC 124</td>
                  <td>₱750,000</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-danger">cash</span></td>
                  <td><spantype="button" class="btn btn-success">financing</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">5</a></th>
                  <td>Raheem Lehner</td>
                  <td>09912112809</td>
                  <td>2015</td>
                  <td>Nissan</td>
                  <td>Almera</td>
                  <td>EL</td>
                  <td>ABC 125</td>
                  <td>₱980,000</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-danger">cash</span></td>
                  <td><spantype="button" class="btn btn-success">financing</span></td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div><!-- End Recent Sales -->
    </section>

  </main><!-- End #main -->