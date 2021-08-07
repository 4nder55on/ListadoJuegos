<?php

$listado = ControllerGames::ObtenerJuegos('pc');

//echo var_dump($listado);

?>

<div class="container-fluid py-4">

    <h1 style="text-align: center;">Listado de Juegos Gratuitos</h1>
    <div class="py-4">

        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Publicacion</th>
                    <th>Tipo de Acceso</th>
                    <th>Plataforma</th>
                    <th>Giveway1</th>
                    <th>Giveway2</th>
                    <th>Giveway3</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($listado as $key => $value) {

                    echo '
                    <tr>
                        <td width="20%">' . $value['title'] . '</td>
                        <td width="20%"><img src="' . $value['image'] . '" style="width: 100%; height: auto;"></td>
                        <td width="20%">' . $value['description'] . '</td>
                        <td>' . $value['published_date'] . '</td>
                        <td>' . $value['type'] . '</td>
                        <td>' . $value['platforms'] . '</td>
                        <td width="3%"><a href="' . $value['open_giveaway_url'] . '" target="_blank"><i class="material-icons" style="font-size:36px">pageview</i></a></td>
                        <td width="3%"><a href="' . $value['gamerpower_url'] . '" target="_blank"><i class="material-icons" style="font-size:36px">pageview</i></a></td>
                        <td width="3%"><a href="' . $value['open_giveaway'] . '" target="_blank"><i class="material-icons" style="font-size:36px">pageview</i></a></td>
                    </tr>
                    ';
                }

                ?>



            </tbody>
        </table>

    </div>


</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Qfrtip'
        });
    });
</script>