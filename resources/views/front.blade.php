<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Tower House Studio Test</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <h2>Tower House Studio Test</h2>
        </div>
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Value 1</label>
                            <input type="number" class="form-control" id="value1" name="value1" placeholder="Write a number" value="" required>
                            <div></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Value 2</label>
                            <input type="number" class="form-control" id="value2" name="value2" placeholder="Write a number" value="" required>
                            <div></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-6">
                            <label for="operation">Operation</label>
                            <select class="custom-select d-block w-100" id="operation" name="operation" required>
                                <option value="">Choose an operation...</option>
                                <option value="sum">Sum</option>
                                <option value="subtraction">Subtraction</option>
                                <option value="division">Division</option>
                                <option value="multiplication">Multiplication</option>
                            </select>
                            <div></div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="button" id="calculate">Calculate<span style="display: none;">...<span></button>
                </form>
            </div>
        </div>
        <hr class="mb-4">
        <div class="card-deck mb-1 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal" id="result-title">Result</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title" id="result"></h1>
                </div>
            </div>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 David Concepcion</p>
    </footer>

    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/utils.js"></script>
</body>
</html>
