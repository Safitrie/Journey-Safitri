<!DOCTYPE html>
<html>
<head>
    <title>Search Places</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Search Places</h1>
        <input type="text" id="search" placeholder="Search for places..." class="form-control">
        <div id="results" class="mt-3"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: '/api/places/search',
                        type: 'GET',
                        data: { query: query },
                        success: function(data) {
                            var results = $('#results');
                            results.empty();
                            if (data.length > 0) {
                                $.each(data, function(index, place) {
                                    // Tambahkan data tempat ke dalam hasil pencarian
                                    results.append('<div><strong>' + place.nama_tempat + '</strong> - ' + place.alamat + '</div>');
                                });
                            } else {
                                results.append('<div>No results found</div>');
                            }
                        },
                        error: function() {
                            $('#results').html('<div>An error occurred</div>');
                        }
                    });
                } else {
                    $('#results').empty();
                }
            });
        });
    </script>
</body>
</html>
