<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehedi Hasan</title>
    <link rel="shortcut icon" href="assets/img/mehedi_hasan_shis-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Project Data Insert Program
                    </div>
                    <div class="card-body">
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold">Project Name</label>

                                <div class="col-md-9">
                                    <input type="text" name="project_name" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold">Project Tool</label>

                                <div class="col-md-9">
                                    <input type="text" name="project_tool" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold">Project Image</label>

                                <div class="col-md-9">
                                    <input type="text" name="project_image" class="form-control"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold">Project Live Link</label>

                                <div class="col-md-9">
                                    <input type="text" name="project_link" class="form-control"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold">Project Code Link</label>

                                <div class="col-md-9">
                                    <input type="text" name="project_code" class="form-control"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold"></label>

                                <div class="col-md-9">
                                    <input type="submit" name="project_btn" class="btn btn-success"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        Database Query
                    </div>
                    <div class="card-body">
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold">Write id</label>

                                <div class="col-md-9">
                                    <input type="text" name="project_id" class="form-control"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold"></label>

                                <div class="col-md-9">
                                    <input type="submit" name="data_delete_btn" class="btn btn-danger" value="Delete"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mx-auto mt-5">
                <h1 class="card-header">Result</h1>
                <div class="card card-body">
                    <?php echo "<pre>";
                    print_r($projects);
                    echo  "<pre>";
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>


<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>