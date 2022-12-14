<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo 
il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM 
in un rettangolo verde. -->

<?php
 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$arrayChiavi = array_keys( $db );

$db['teachers'] //array di due elementi



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <?php for( $i=0; $i < count($arrayChiavi); $i++ ){ ?>

       <?php if( $arrayChiavi[$i] == 'teachers' ){ ?>
        <!-- stampo i valori dei teachers in un box grigio -->
        <div class="bg-secondary">
           <?php for( $k=0; $k < count($db['teachers']); $k++ ){ ?>
            <ul>
                <li>
                    <?php echo $db['teachers'][$k]['name'] . '-' . $db['teachers'][$k]['lastname'] ?>
                </li>
            </ul>
          <?php } ?>
        </div>
       <?php } else { ?>
        <!-- stampo i valori dei teachers in un box verde -->
        <div class="bg-success">
            <?php for($k=0; $k < count($db['pm']); $k++){ ?>
                <ul>
                    <li>
                       <?php echo $db['pm'][$k]['name'] . '-' . $db['pm'][$k]['lastname'] ?>
                    </li>
                </ul>
           <?php } ?>
        </div>
      <?php } ?>

      <?php } ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>