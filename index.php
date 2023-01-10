<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- style css -->
    <style>
        .ms_container {
            width: fit-content;
            padding-bottom: 20px;
            border-bottom: solid 1px #000000;
        }
    </style>
    <!-- php data -->
    <?php
    // array contenente le varie info sugli Hotel
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>
</head>

<body>
    <?php
    /* 
    // creo il ciclo foreach per stampare le info sugli hotel
    foreach ($hotels as $hotel) {
        // creo le variabili che avranno come varole la stringa contenuta nella proprietà dell'array $hotel
        $name = $hotel['name'];
        $description = $hotel['description'];
        $parking = $hotel['parking'] === true ? "Si" : "No";
        $vote = $hotel['vote'];
        $distanceToCenter = $hotel['distance_to_center'];

        // stampo in pagina le informazioni
        echo "<div class='ms_container'>" . "<h3>" . $name . "</h3>"
            . "<p>" . $description . "</p>"
            . "<span>" . "Parcheggio: " . $parking . "</span>" . "<br>"
            . "<span>" . "Voto: " . $vote . "</span>" . "<br>"
            . "<span>" . "Distanza dal Centro: " . $distanceToCenter . "</span>" . "<br>" . "</div>";
    };*/
    ?>
    <!-- tabella in cui stampare i dati degli hotel -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hotels as $hotel) {
                $name = $hotel['name'];
                $description = $hotel['description'];
                $parking = $hotel['parking'] === true ? "Si" : "No";
                $vote = $hotel['vote'];
                $distanceToCenter = $hotel['distance_to_center'];

                echo "<tr>" . "<th scopre='row'>" . $name . "</th>"
                    . "<td>" . $description . "</td>"
                    . "<td>" . $parking . "</td>"
                    . "<td>" . $vote . "</td>"
                    . "<td>" . $distanceToCenter . "Km" . "</td>" . "</tr>";
            };
            ?>
        </tbody>
    </table>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>