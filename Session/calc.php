<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <main>
  <?php
        session_start();

        if (isset($_GET['ses'])) {
            unset($_SESSION['history']);
            session_destroy();
        }

        if (!isset($_SESSION['iter'])) $_SESSION['iter'] = 1;
        if (isset($_POST['eval']) && $_POST['iter'] == $_SESSION['iter']){
            eval('$res='.$_POST['eval'].';');
            $_SESSION['history'][] = $_POST['eval'].'='.$res;
            $_SESSION['iter']++;
        }
   ?>

        <div class="text-center mt-7">
        <form action="calc.php" method="post">
            <input type="hidden" name="iter" value="<?=$_SESSION['iter'];?>">
            <input type="text" name="eval" id="">
            <button type="submit">Calculate</button>
            <a class="btn btn-primary" href="calc.php?ses=destroy">Session destroy</a>

        </form>

        <?php   
        if (isset($_SESSION['history']))
            foreach($_SESSION['history'] as $elem){
                echo $elem.'<br>';
            }
        ?>
        </div>
  </main>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>