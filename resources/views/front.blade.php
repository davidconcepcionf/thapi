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
            <h2>The Tower Studio Test</h2>
        </div>
        <form>
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
        </form>
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
</body>
<script type="text/javascript">
    $(document).ready(function () {


        $('#calculate').on( "click", function() {
            $('#result').html('');
            $(this).removeClass('btn-primary').addClass('btn-info');
            $('#calculate span').show();
            $('#result-title').removeClass('alert alert-danger');

            if ($("form").valid()) {
                $.ajax({
                    type: "POST",
                    url: "/api/calculator",
                    dataType: "json",
                    data: {
                        values:[$('#value1').val(),$('#value2').val()],
                        operation:$('#operation').val()
                    },
                    success: function (data) {
                        $('#result').html(data.result);
                        console.log(data);
                    },
                    error: function (data) {
                        $('#result-title').addClass('alert alert-danger');
                        if ($.type(data.responseJSON.result) === 'object'){
                            $('#result').html('Unexpected Error. Try later');
                        }else{
                            $('#result').html(data.responseJSON.result);
                        }
                        console.log(data.responseJSON);
                    },
                    complete: function () {
                        $('#calculate  span').hide();
                        $('#calculate').removeClass('btn-info').addClass('btn-primary');
                    }
                });
            }
        })

        $("form").validate({
            rules: {
                value1: {number: true,required: true},
                value2: {number: true,required: true},
                operation: {required: true}
            },
            errorElement: "div",
            errorPlacement: function ( error, element ) {
                error.addClass( "text-danger");
                error.insertAfter( element.next() );
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "text-danger" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).removeClass( "text-danger" );
            }
        });
    });
</script>
</html>
