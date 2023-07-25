@include('admin.layout')

<main id="main" class="main">

    <div class="pagetitle">
     
      <h1>Trade Requests</h1>
      
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Trade-in</li>
          <li class="breadcrumb-item active">Trade Requests</li>
        </ol>
      </nav>
      
    </div><!-- End Page Title -->

    

    <section class="section">
      <div class="col-12">
        <div class="card recent-sales overflow-auto rounded-5">
          <div class="card-body table-responsive">
            <h5 class="card-title">Client List</h5>
            <table id="dtHorizontalExample" class="table table-condensed table-hover" cellspacing="0" width="100%" >
              <thead class="table-success">
                <tr>
                  <th scope="col" class="align-middle">No.</th>
                  <th scope="col" class="align-middle">Name</th>
                  <th scope="col" class="align-middle">Phone</th>
                  <th scope="col" class="align-middle">Year</th>
                  <th scope="col" class="align-middle">Make</th>
                  <th scope="col" class="align-middle">Model</th>
                  <th scope="col" class="align-middle">Variant</th>
                  <th scope="col" class="align-middle">Plate No.</th>
                  <th scope="col" class="align-middle">Client's Offer</th>
                  <th scope="col" class="align-middle">Appointed Date</th>
                  <th scope="col" class="align-middle">Images</th>
                  <th scope="col" class="align-middle">Reject</th>
                  <th scope="col" class="align-middle">Accept</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="#">1</a></th>
                  <td>Riley Smith</td>
                  <td>09546372789</td>
                  <td>2019</td>
                  <td>Mitsubishi</td>
                  <td>Strada</td>
                  <td>GLX Plus</td>
                  <td>ABC 123</td>
                  <td>2010 Raptor F150</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-primary"><i class="fa-solid fa-image"></i></span></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">2</a></th>
                  <td>Juan Rodriguez</td>
                  <td>09675566453</td>
                  <td>2019</td>
                  <td>Mitsubishi</td>
                  <td>Strada</td>
                  <td>GLX Plus</td>
                  <td>ABC 123</td>
                  <td>2010 Raptor F150</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-primary"><i class="fa-solid fa-image"></i></span></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">3</a></th>
                  <td>Ava Johnson</td>
                  <td>09988773411</td>
                  <td>2019</td>
                  <td>Mitsubishi</td>
                  <td>Strada</td>
                  <td>GLX Plus</td>
                  <td>ABC 123</td>
                  <td>2010 Raptor F150</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-primary"><i class="fa-solid fa-image"></i></span></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">4</a></th>
                  <td>Max Williams</td>
                  <td>09133266755</td>
                  <td>2019</td>
                  <td>Mitsubishi</td>
                  <td>Strada</td>
                  <td>GLX Plus</td>
                  <td>ABC 123</td>
                  <td>2010 Raptor F150</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-primary"><i class="fa-solid fa-image"></i></span></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">5</a></th>
                  <td>Chloe Adams</td>
                  <td>09887866321</td>
                  <td>2019</td>
                  <td>Mitsubishi</td>
                  <td>Strada</td>
                  <td>GLX Plus</td>
                  <td>ABC 123</td>
                  <td>2010 Raptor F150</td>
                  <td>APR-11-2023</td>
                  <td><spantype="button" class="btn btn-primary"><i class="fa-solid fa-image"></i></span></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-check"></i></span></td>
                </tr>
              </tbody>
            </table>
       
          </div>

        </div>
      </div><!-- End Recent Sales -->
    </section>

  </main><!-- End #main -->
