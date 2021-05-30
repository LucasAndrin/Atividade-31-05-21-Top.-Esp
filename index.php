<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('recolhedor.php');
    $action=isset($_GET['action'])? $_GET['action']:false;
    $espelho=isset($_GET['espelho'])? $_GET['espelho']:1;
    $calculo=isset($_GET['calculo'])? $_GET['calculo']:"A";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Responsive -->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- CSS adicional -->
    <link rel="stylesheet" href="css-adicional/estilo-adicional.css">
</head>
<body>
    <div class="conteiner-fluid">
        <?php
        include('menu.html');
        ?>
        <div class="col-md-10 mx-auto">
            <form action="" method="get">
                <?php
                include("form-calculo.php");
                if ($action!=false) {
                    if ($calculo=='A') {
                        include('A-form.php');
                    } elseif ($calculo=='Hi') {
                        include('Hi-form.php');
                    } elseif ($calculo=='Ho') {
                        include('Ho-form.php');
                    } elseif ($calculo=='Di') {
                        include('Di-form.php');
                    } elseif ($calculo=='Do') {
                        include('Do-form.php');
                    } elseif ($calculo=='f') {
                        include('f-form.php');
                    }
                    echo '<input type="submit" name="action" value="Calcular" class="btn btn-outline-light btn-perigo-adicional col"><hr>';
                    if ($action=='Calcular') {
                        echo '<h3>';
                        if ($calculo=='A') {
                            if ($_GET['Di']!=0 and $_GET['Do']!=0) {
                                $Di=$_GET['Di'];
                                $Do=$_GET['Do'];
                                $result=$Di/$Do;
                                echo "$Di/$Do = $result";
                            } elseif ($_GET['Hi']!=0 and $_GET['Ho']!=0) {
                                $Hi=$_GET['Hi'];
                                $Ho=$_GET['Ho'];
                                $result=$Hi/$Ho;
                                echo "$Hi/$Ho = $result";
                            } else {errado();}
                        } elseif ($calculo=='Hi') {
                            recolhedor($_GET['Ho'],$_GET['Di'],$_GET['Do']);
                        } elseif ($calculo=='Ho') {
                            recolhedor($_GET['Hi'],$_GET['Do'],$_GET['Di']);
                        } elseif ($calculo=='Di') {
                            recolhedor($_GET['Hi'],$_GET['Do'],$_GET['Ho']);
                        } elseif ($calculo=='Do') {
                            recolhedor($_GET['Di'],$_GET['Ho'],$_GET['Hi']);
                        } elseif ($calculo=='f') {
                            
                        }
                        echo '</h3>';
                    }
                }
                ?>
            </form>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>