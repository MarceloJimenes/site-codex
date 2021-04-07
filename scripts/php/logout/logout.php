<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SweetAlert DarkTheme -->
  <link rel="stylesheet" href="../../../node_modules/@sweetalert2/theme-dark/dark.css">
	<script src="../../../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

  <title>Document</title>
</head>
<body>
  <?php
  
  session_start();

  session_destroy();
  echo "
  
    <script>
    
      setTimeout(function(){ location.href = '../../../index.php'; }, 3000);

      Swal.fire({
        icon: 'success',
        title: 'Adeus...&#128532;',
        footer: 'A comunidade já está sentindo sua falta, volte assim que possível',
        showConfirmButton: false,
        timer: 3000
      })

    </script>

  ";

  ?>
</body>
</html>