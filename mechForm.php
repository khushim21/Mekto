<div class="container">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col">
      <div class="card card-registration my-4">
        <div class="row g-0">
          <div class="col-xl-6 d-none d-xl-block">
            <img
              src="https://media.istockphoto.com/id/165818977/vector/mechanic-thumb-up.jpg?b=1&s=612x612&w=0&k=20&c=E8uh0xQWsgs60PbRTK7x-Q7KQzZm9jgAyja69YbhtSg="
              alt="Sample photo" class="img-fluid" style="
                border-top-left-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
                height:70%;
                margin:60px;
                margin-top:130px;
                
              " />
          </div>
          <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
              <form method="post" action="" enctype="multipart/form-data">
                <h3 class="mb-5 text-uppercase">Mechanic Registration</h3>

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="text" id="" name="name" class="form-control form-control-lg" placeholder="Enter Name"
                        required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="text" id="" pattern="[0-9]*" name="cnic" class="form-control form-control-lg"
                        placeholder="Aadhar Number" required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="text" id="" name="address" class="form-control form-control-lg" placeholder="Address"
                        required />
                    </div>
                  </div>
                </div>

                <!-- All ok till here -->

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <select id="distt" name="city" onchange="loadarea()" required>
                        <option selected disabled>Select City</option>
                        <?php

                        $query = "SELECT * FROM cities ";
                        $results = mysqli_query($connection, $query);
                        if ($results) {
                          if (mysqli_num_rows($results) > 0) {
                            while ($row = mysqli_fetch_object($results)) {
                              $cityid = $row->city_id;
                              $cityname = $row->city_name;

                        ?>
                        <option value="<?php echo $cityid; ?>">
                          <?php echo $cityname; ?>
                        </option>
                        <?php }
                          }
                        } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <select id="area" name="area" onchange="loadarea()" required>
                        <option selected disabled>Select Area</option>
                        <?php

                        $query = "SELECT * FROM city_area";
                        $results = mysqli_query($connection, $query);
                        if ($results) {
                          if (mysqli_num_rows($results) > 0) {
                            while ($row = mysqli_fetch_object($results)) {
                              $areaname = $row->area_name;

                        ?>
                        <option value="<?php echo $cityid; ?>">
                          <?php echo $areaname; ?>
                        </option>
                        <?php }
                          }
                        } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="text" id="" pattern="[0-9]*" name="mobile" class="form-control form-control-lg"
                        placeholder="Mobile Number" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="text" id="" pattern="[0-9]*" name="experience" class="form-control form-control-lg"
                        placeholder="Experience" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="text" id="" pattern="[0-9]*" name="rate" class="form-control form-control-lg"
                        placeholder="Per Hour Rate" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="password" id="" name="password" class="form-control form-control-lg"
                        placeholder="Password" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="for-outline">
                      <input type="password" id="" name="confirmpassword" class="form-control form-control-lg"
                        placeholder="Confirm Password" required />
                    </div>
                  </div>
                </div>
                <input type="submit" value="Sign Up" name="register" id="loginbutton" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>