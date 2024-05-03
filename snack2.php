
<?php
$message = '';
$class = '';

if ((!empty($_GET['email'])) && !empty($_GET['nome']) && !empty($_GET['age'])) {
  $email = $_GET['email'];
  $nome = $_GET['nome'];
  $age = $_GET['age'];
  if (strlen($_GET['nome']) > 3 && strpos($_GET['email'], '@') && strpos($_GET['email'], '.') && is_numeric($_GET['age'])) {
    $message = 'Accesso riuscito';
    $class = 'bg-success-subtle';
  } else {
    $message = 'Accesso negato';
    $class = 'bg-danger-subtle';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Snack 2</title>
</head>
<body>
<h1 class="text-center mt-5">Snack 2</h1>
    <form action="snack2.php" method="get">
      <div class="mb-3 shadow">
        <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      </div>
      <div class="mb-3 shadow">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
      </div>
      <div class="mb-3 shadow">
        <label for="age" class="form-label">Età</label>
        <input type="text" class="form-control" id="age" aria-describedby="emailHelp" name="age">
      </div>
      <button type="submit" class="btn btn-warning mb-3">Invia</button>
    </form>
<?php
    if (!empty($message)) { ?>
      <h3><?php echo $message ?></h3>
    <?php
    }
?>

</body>
</html>