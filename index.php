<?php
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hotels</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="parking">Parcheggio incluso?</label>
        <input type="radio" id="parking" name="checkParking">
        <button>Cerca</button>
    </form>
    <br>
    <?php
    if (isset($_GET['checkParking'])) : /*SE IL RADIO BUTTON E SELEZIONATO */
    ?>
        <table class="table table-dark table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Km dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $key => $hotel) :
                    if ($hotel['parking'] === true) : /* CONTROLLO SE IL VALORE DELL' ARRAY E TRUE*/
                ?>
                        <tr>
                            <th scope="row"><?php echo $key; ?></th>
                            <?php
                            foreach ($hotel as $valore) :
                            ?>
                                <td><?php echo $valore; ?></td>
                            <?php
                            endforeach;
                            ?>
                        </tr>
                <?php
                    endif;
                endforeach;
                ?>
            </tbody>
        </table>
        <!-- SE IL RADIO BUTTON NON E SELEZIONATO STAMPO TUTTI I RISULTATI-->
    <?php else : ?>
        <table class="table table-dark table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Km dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($hotels as $key => $hotel) :
                ?>
                    <tr>
                        <th scope="row"><?php echo $key; ?></th>
                        <?php
                        foreach ($hotel as $valore) :
                        ?>
                            <td><?php echo $valore; ?></td>
                        <?php
                        endforeach;
                        ?>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    <?php
    endif;
    ?>
</body>

</html>