<?php


  function getRequest($view) {

    switch ($view) {

      case 1: 
        return 'langRegister.php';
      break;

      case 2:
        return 'classRegister.php';
      break;

      case 3:
        return 'exerRegister.php';
      break;

      case 4:
        return 'alterRegister.php';
      break;

      case 5:
        return 'langUpdate.php';
      break;

      case 6:
        return 'classUpdate.php';
      break;

      case 7:
        return 'exerUpdate.php';
      break;

      case 8:
        return 'alterUpdate.php';
      break;

    }

  }


?>