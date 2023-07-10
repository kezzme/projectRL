@include('admin.layout')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Financing Confirmation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Financing</li>
          <li class="breadcrumb-item active">Confirmation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        
     <!-- Recent Sales -->
     <div class="col-12">
        <div class="card recent-sales overflow-auto rounded-5">

          <div class="card-body table-responsive">
            <h5 class="card-title card-header">Client List</h5>

            <table id="dtHorizontalExample" class="table table-condensed table-hover" cellspacing="0" width="100%" >
              <thead class="table-success">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Year</th>
                  <th scope="col">Make</th>
                  <th scope="col">Model</th>
                  <th scope="col">Variant</th>
                  <th scope="col">Price</th>
                  <th scope="col">Date</th>
                  <th scope="col">Financing Bank</th>
                  <th colspan="2" style="text-align: center;" class="align-middle">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="#">1</a></th>
                  <td>Brandon Jacob</td>
                  <td>2019</td>
                  <td>Honda</td>
                  <td>Civic</td>
                  <td>LX</td>
                  <td>₱920,000</td>
                  <td>APR-11-2023</td>
                  <td><select class="form-select" aria-label="Default select example">
                    <option selected>JACCS</option>
                    <option value="1">Global Domination</option>
                    <option value="2">Primary</option>
                    <option value="3">Asialink</option>
                  </select></td>
                  <td><button type="button" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></button></td>
                  <td><button type="button" class="btn btn-success"><i class="fa-solid fa-user-check"></i></button></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">2</a></th>
                  <td>Bridie Kessler</td>
                  <td>2016</td>
                  <td>Nissan</td>
                  <td>Juke</td>
                  <td>CVT</td>
                  <td>₱650,000</td>
                  <td>APR-11-2023</td>
                  <td><select class="form-select" aria-label="Default select example">
                    <option selected>JACCS</option>
                    <option value="1">Global Domination</option>
                    <option value="2">Primary</option>
                    <option value="3">Asialink</option>
                  </select></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-user-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">3</a></th>
                  <td>Ashleigh Langosh</td>
                  <td>2016</td>
                  <td>Toyota</td>
                  <td>Corolla Altis</td>
                  <td>G</td>
                  <td>₱580,000</td>
                  <td>APR-11-2023</td>
                  <td><select class="form-select" aria-label="Default select example">
                    <option selected>JACCS</option>
                    <option value="1">Global Domination</option>
                    <option value="2">Primary</option>
                    <option value="3">Asialink</option>
                  </select></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-user-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">4</a></th>
                  <td>Angus Grady</td>
                  <td>2015</td>
                  <td>Nissan</td>
                  <td>Almera</td>
                  <td>EL</td>
                  <td>₱980,000</td>
                  <td>APR-11-2023</td>
                  <td><select class="form-select" aria-label="Default select example">
                    <option selected>JACCS</option>
                    <option value="1">Global Domination</option>
                    <option value="2">Primary</option>
                    <option value="3">Asialink</option>
                  </select></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-user-check"></i></span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">5</a></th>
                  <td>Raheem Lehner</td>
                  <td>2016</td>
                  <td>Izusu</td>
                  <td>MU-X</td>
                  <td>LS-A</td>
                  <td>₱835,000</td>
                  <td>APR-11-2023</td>
                  <td><select class="form-select" aria-label="Default select example">
                    <option selected>JACCS</option>
                    <option value="1">Global Domination</option>
                    <option value="2">Primary</option>
                    <option value="3">Asialink</option>
                  </select></td>
                  <td><spantype="button" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></span></td>
                  <td><spantype="button" class="btn btn-success"><i class="fa-solid fa-user-check"></i></span></td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div><!-- End Recent Sales -->
    </section>

  </main><!-- End #main -->