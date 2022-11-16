the view is the home/home or home/home_user


<?php
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    if (isset($_GET["submit"])) {

        $str = $_POST["search"];
        $sth = $conexion->prepare("SELECT * FROM web_grupo_alex_foro WHERE title = $str");
        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth->execute();
        if ($row = $sth->fetch()) {
            ?>
            <br><br><br>
            <table>
                <tr>
                    <th>
                        tittle
                    </th>
                </tr>
                <tr>
                    <td><?php echo $row->title ?> </td>
                </tr>
            </table>
            <?php
        } else {
            echo "No existe";
        }
    }
    ?>