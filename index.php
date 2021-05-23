<?php require 'header.html'; ?>
<?php require 'navBar.html'; ?>




<div class="myBorder-light" style="border-top: none;">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-tachometer-alt">&nbsp;</i>Dashboard</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="isolation-tab" data-bs-toggle="tab" data-bs-target="#isolation" type="button" role="tab" aria-controls="isolation" aria-selected="false"><i class="fa fa-bed">&nbsp;</i>Isolation</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="vehicle-tab" data-bs-toggle="tab" data-bs-target="#vehicle" type="button" role="tab" aria-controls="vehicle" aria-selected="false"><i class="fa fa-ambulance">&nbsp;</i>Vehicle</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="oxygen-tab" data-bs-toggle="tab" data-bs-target="#oxygen" type="button" role="tab" aria-controls="oxygen" aria-selected="false"><i class="text-info">O<sub>2</sub> &nbsp;</i>Oxygen</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="blood-tab" data-bs-toggle="tab" data-bs-target="#blood" type="button" role="tab" aria-controls="blood" aria-selected="false"><i class="fa fa-blood">&nbsp;</i>Blood</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="plasma-tab" data-bs-toggle="tab" data-bs-target="#plasma" type="button" role="tab" aria-controls="plasma" aria-selected="false"><i class="fa fa-plasma">&nbsp;</i>Plasma</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="medicine-tab" data-bs-toggle="tab" data-bs-target="#medicine" type="button" role="tab" aria-controls="medicine" aria-selected="false"><i class="fa fa-capsules">&nbsp;</i>Medicine</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="doctors-tab" data-bs-toggle="tab" data-bs-target="#doctors" type="button" role="tab" aria-controls="doctors" aria-selected="false"><i class="fa fa-user-md">&nbsp;</i>Doctors</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="false"><i class="fa fa-burger-soda">&nbsp;</i>Foods</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="false"><i class="fa fa-question-circle">&nbsp;</i>Others</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">This content is for home</div>

    <!-- -------For Isolation Centers----- -->
    <div class="tab-pane fade" id="isolation" role="tabpanel" aria-labelledby="isolation-tab">
      <section class="gallery">
         <div class="container-lg px-3">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
             <?php 
             // if (mysqli_num_rows($selecting_blog_res)>0) {
             //  while ($selecting_blog_rows=mysqli_fetch_assoc($selecting_blog_res)) {
                ?>
                <div class="col">
                  <div class="card-header">
                    <div class="card-title text-center">
                      <h4>
                        Teaching Hospital Co...
                      </h4>
                      <p class="fst-italic">Address</p>
                    </div>
                  </div>
                  <div class="card-body myBorder-light rounded">
                    <table class="table table-hover">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Beds</th>
                          <td>Qty</td>
                          <td>action</td>
                        </tr>
                        <tr>
                          <th scope="row">ICU</th>
                          <td>Qty</td>
                          <td>action</td>
                        </tr>
                        <tr>
                          <th scope="row">Ventilators</th>
                          <td>Qty</td>
                          <td>action</td>
                        </tr>
                        <tr>
                          <th scope="row">Oxygen</th>
                          <td>Qty</td>
                          <td>action</td>
                        </tr>
                        <tr>
                          <th scope="row">Others</th>
                          <td>Qty</td>
                          <td>action</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-secondary">Location</button>
                    <button class="btn btn-primary float-end">Contacts</button>
                  </div>
                </div>
              <?php //} ?>
            </div>
         </div>
      </section>
    </div>

    <!-- For Ambulance center -->
    <div class="tab-pane fade" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab">
      <section class="vehicle">
         <div class="container-lg px-3">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
             <?php 
             // if (mysqli_num_rows($selecting_blog_res)>0) {
             //  while ($selecting_blog_rows=mysqli_fetch_assoc($selecting_blog_res)) {
                ?>
                <div class="col">
                  <div class="card-header">
                    <div class="card-title text-justify">
                      <h4>
                        Ambulance Service Provider
                      </h4>
                      <p class="fst-italic">Address</p>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Type</th>
                          <td>Qty</td>
                          <td>Status</td>
                          <td>Request</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <button>Location</button>
                    <button>Contacts</button>
                  </div>
                </div>
              <?php //} ?>
            </div>
         </div>
      </section>
    </div>

    <!-- // For Oxygen Suppliers------ -->
    <div class="tab-pane fade" id="oxygen" role="tabpanel" aria-labelledby="oxygen-tab">
      <section class="vehicle">
         <div class="container-lg px-3">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
             <?php 
             // if (mysqli_num_rows($selecting_blog_res)>0) {
             //  while ($selecting_blog_rows=mysqli_fetch_assoc($selecting_blog_res)) {
                ?>
                <div class="col">
                  <div class="card-header">
                    <div class="card-title text-justify">
                      <h4>
                        Oxygen Service Provider
                      </h4>
                      <p class="fst-italic">Address</p>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Type</th>
                          <td>Qty</td>
                          <td>Status</td>
                          <td>Request</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <button>Location</button>
                    <button>Contacts</button>
                  </div>
                </div>
              <?php //} ?>
            </div>
         </div>
      </section>
    </div>
  <!-- // For Login Tab------ -->
    <div class="tab-pane fade" id="blood" role="tabpanel" aria-labelledby="blood-tab">
      <section class="blood">
         <div class="container-lg px-3">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
             <?php 
             // if (mysqli_num_rows($selecting_blog_res)>0) {
             //  while ($selecting_blog_rows=mysqli_fetch_assoc($selecting_blog_res)) {
                ?>
                <div class="col">
                  <div class="card-header">
                    <div class="card-title text-justify">
                      <h4>
                        Blood Service Provider
                      </h4>
                      <p class="fst-italic">Address</p>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Type</th>
                          <td>Qty</td>
                          <td>Status</td>
                          <td>Request</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <button>Location</button>
                    <button>Contacts</button>
                  </div>
                </div>
              <?php //} ?>
            </div>
         </div>
      </section>
    </div>
  <!-- // For Login Tab------ -->
    <div class="tab-pane fade" id="plasma" role="tabpanel" aria-labelledby="plasma-tab">
      <section class="plasma">
         <div class="container-lg px-3">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
             <?php 
             // if (mysqli_num_rows($selecting_blog_res)>0) {
             //  while ($selecting_blog_rows=mysqli_fetch_assoc($selecting_blog_res)) {
                ?>
                <div class="col">
                  <div class="card-header">
                    <div class="card-title text-justify">
                      <h4>
                        Oxygen Service Provider
                      </h4>
                      <p class="fst-italic">Address</p>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Type</th>
                          <td>Qty</td>
                          <td>Status</td>
                          <td>Request</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <button>Location</button>
                    <button>Contacts</button>
                  </div>
                </div>
              <?php //} ?>
            </div>
         </div>
      </section>
    </div>

    <div class="tab-pane fade" id="medicine" role="tabpanel" aria-labelledby="medicine-tab"></div>

    <div class="tab-pane fade" id="foods" role="tabpanel" aria-labelledby="foods-tab"></div>

    <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab"></div>
  </div>
</div>




<?php require 'footer.html'; ?>