<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Alumnos</title>
</head>
<body>
    <h1>Alumnos del IES RUIZ GIJÓN</h1>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th>Matrícula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Curso</th>
            <th></th>
        </tr>
        <?php
        foreach ($data['alumnos'] as $alumno) {
            ?>
            <tr>
            <td>
                <form action="../Controller/eliminaAlumno.php" method="post">
                    <input type="hidden" name="matricula" value="<?=$alumno->getMatricula()?>">
                    <input type="submit" value="Eliminar" name="eliminar">
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="matricula" value="<?=$alumno->getMatricula()?>">
                    <input type="submit" value="Modificar" name="modificar">
                </form>
            </td>
            <td><?= $alumno->getMatricula() ?></td>
            <td><?= $alumno->getNombre() ?></td>
            <td><?= $alumno->getApellidos() ?></td>
            <td><?= $alumno->getCurso() ?></td>
            <td><input type="submit" value="Ver Asignaturas" name="ver"></td>
        </tr>
        <?php 
        } 
        ?>
        <tr>
            
            <td colspan="4"><form action="../Controller/nuevoAlumno.php" method="post">
                <input type="submit" value="Nuevo Alumno" name="nuevoAlumno"></form></td>
            <td colspan="3"><form action="" method="post">
                <input type="submit" value="Asignaturas" name="listadoAsignaturas"></form></td>
        </tr>
    </table>
</body>
</html>