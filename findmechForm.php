<script>
    function loadarea() {
        var disttrict = $('#distt').val();
        $.ajax({
            type: "POST",
            url: "selectarea_ajax.php",
            data: {
                'distt': disttrict
            },
            success: function (data) {
                console.log(data);
                $('#area').append(data);
            }
        });
    }
</script>
<div class="container ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="card card-registration my-4">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                        <img src="https://media.baamboozle.com/uploads/images/44375/1601286211_31568" alt="Sample photo"
                            class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;
                margin:50px;
                margin-top:30px;" />
                    </div>
                    <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                            <form method="post" action="" enctype="multipart/form-data">
                                <h3 class="mb-5 text-uppercase">Find Mechanic In Your Area</h3>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="for-outline">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <select id="distt" name="disstrict" onchange="loadarea()">
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
                                            <select id="area" name="area" onchange="">
                                                <option selected disabled>Select Area</option>
                                                <?php

                                                $query = "SELECT * FROM city_area ";
                                                $results = mysqli_query($connection, $query);
                                                if ($results) {
                                                    if (mysqli_num_rows($results) > 0) {
                                                        while ($row = mysqli_fetch_object($results)) {
                                                            $areaid = $row->area_id;
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
                                <input type="submit" value="Search" name="searchmechanic" style="width:100%; margin:0;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>