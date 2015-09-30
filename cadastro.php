<html>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "phpproject2");
    $result = $mysqli->query("SELECT id, nome, usuario FROM usuarios");
    ?>

    <body>

        <div class = "container">
            <div class = "row">

                <div id = "header" title = "SITE" class = "col-lg-12" >
                    <div class = "jumbotron">
                        <h1 style = "color:yellowgreen">SOLUÇÕES EM TECNOLOGIA DA INFORMAÇÃO</h1>
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class = "alert alert-success" role = "alert" style = "text-align:center " > <h1 style = "color:red" >ATENDIMENTO 24 HORAS</h1> </div>

            </div>


            <?php include 'inc/menu.php'
            ?>


            <div id="form">
                <h3>
                    <center><b> Cadastrado:</b></center>
                </h3>
                <div class="list-group">
                    <ul>

                        <?php
                        while ($linha = $result->fetch_assoc()) {

                            echo '<li>';
                            echo '<a href="remove_funcionario.php?id_funcionario=' . $linha['id'] . '" class="btn btn-danger btn-xs">Remover</a> ';
                            echo $linha['nome'] . ' - ' . $linha['usuario'];

                            echo '<br>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <?php include 'inc/barra.php' ?>

            <?php include 'inc/rodape.php' ?>



        </div>
    </body>
</html>
