<?php require_once __DIR__ . "/../layouts/headbydefault.php" ?>

<body>
    <h1>Appointments</h1>
    <section class='row justify-content-center'>
        <?php
        
foreach ($appointments as $appointment) {
    echo "
    <div class='card' style='width: 18rem;'>
      <div class='card-body'>
        <h5 class='card-title'>{$appointment->name}</h5>
        <h6 class='card-subtitle mb-2 text-muted'>{$appointment->email}</h6>
        <p class='card-text'> {$appointment->message}</p>
      </div>
    </div>    
    ";
  }
    ?>
    </section>
</body>

</html>