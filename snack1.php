<?php
$matches = [
  [
    'homeTeam' => 'Atlanta Hawks',
    'hostTeam' => 'Oklahoma City Thunder',
    'homeScore' => 75,
    'hostScore' => 80,
  ],
  [
    'homeTeam' => 'Chicago Bulls',
    'hostTeam' => 'Cleveland Cavaliers',
    'homeScore' => 50,
    'hostScore' => 30,
  ],
  [
    'homeTeam' => 'Denver Nuggets',
    'hostTeam' => 'Washington Wizards',
    'homeScore' => 40,
    'hostScore' => 75,
  ],
]
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Snack 1</title>
</head>
<body>
    <h1 class="text-center mt-5"></h1>
    <div>
        <?php foreach ($matches as $match) { ?>
        <p class="fw-bold bg-primary-subtle"><?php echo $match['homeTeam']; ?> vs <?php echo $match['hostTeam']; ?> | <?php echo $match['homeScore']; ?> - <?php echo $match['hostScore']; ?></p>
        <?php } ?>
    </div>
    
</body>
</html>