$document.ready(function () {

    $('#search-produk').keydown(function (e) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="scrf-token]').attr('content')
            },
            url: "http://localhost:8080//produk/daging/search-produk",
            type: "POST",
            data: {
                'keyword': $(this).val()
            },
            success: function (response) {
                console.log(response)

                $theme = "";
                $.each(response, function (key, val) {
                    $theme += "<div class='col-md-3'>" +
                        "<div class='card'>" +
                        "<div class='card-body text-center'>" +

                        "</div>" +
                        "</div>" +
                        "</div>"



                    "<span class='card-body text-center'></span>"


                });

                $('#list-produk').html(
                    $theme
                );
            }

        })
    })


})
