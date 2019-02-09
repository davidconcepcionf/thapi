$(document).ready(function () {
    $('#calculate').on( "click", function() {
        $('#result').html('');
        if ($("form").valid()) {
            $('#result-title').removeClass('alert alert-danger');
            $(this).removeClass('btn-primary').addClass('btn-info');
            $('#calculate span').show();

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

    $("form").change(function () {
        $('#result').html('');
        $('#result-title').removeClass('alert alert-danger');
    });
});