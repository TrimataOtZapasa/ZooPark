<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Animals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styling/animals.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: "../logic/fetch_animals.php",
                method: "GET",
                success: function (data) {
                    let animals = JSON.parse(data);
                    let output = "";
                    animals.forEach(animal => {
                        output += `
                        <div class="col-md-4">
                            <div class="card">
                                <img src="../images/${animal.image}" class="card-img-top" alt="${animal.name}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">${animal.name}</h5>
                                    <p class="card-text">${animal.species}</p>
                                    <a href="animal.php?id=${animal.id}" class="btn btn-success">More Info</a>
                                </div>
                            </div>
                        </div>`;
                    });
                    $("#animal-list").html(output);
                }
            });
        });
    </script>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">🌿 Meet Our Animals 🌿</h1>
    <div class="row" id="animal-list"></div>
</div>

</body>
</html>
