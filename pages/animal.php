<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styling/animal.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            let params = new URLSearchParams(window.location.search);
            let id = params.get("id");
            
            $.ajax({
                url: "../logic/fetch_animal.php?id=" + id,
                method: "GET",
                success: function (data) {
                    let animal = JSON.parse(data);
                    $("#animal-info").html(`
                        <div class="container text-center">
                            <h1 class="display-4">${animal.name}</h1>
                            <img src='../images/${animal.image}' class="img-fluid rounded" alt='${animal.name}'>
                            <h3 class="mt-3">${animal.species}</h3>
                            <p class="lead">${animal.description}</p>
                            <a href="animals.php" class="btn btn-outline-success">Back to Animals</a>
                        </div>
                    `);
                }
            });
        });
    </script>
</head>
<body>
<?php include 'navbar.php'; ?>

<div id="animal-info" class="mt-5"></div>

</body>
</html>
