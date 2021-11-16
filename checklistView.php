<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
  <h1>Appointments</h1>
    <section class='row justify-content-center'>
        <?php
        require_once 'AppointmentModel.php';
        $appointments = (new AppointmentModel())->all();

foreach ($appointments as $appointment) {
    echo "
    
    <div class='card' style='width: 18rem;'>
      <div class='card-body'>
        <h5 class='card-title'>{$appointmet->name}</h5>
        <h6 class='card-subtitle mb-2 text-muted'>{$appointmet->querytitle}</h6>
        <p class='card-text'> {$appointment->datetime}</p>
        <a href='#' class='card-link'>Edit</a>
        <a href='#' class='card-link'>Delete</a>
      </div>
    </div>    
    ";
  }
    ?>
    </section>
  </body>
</html>
