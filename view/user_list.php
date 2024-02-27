<h1>Lista de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
        </tr>
        <?php 
        foreach ($users as $user): ?>
            <tr>
            <td><?php echo $user['iduser_ket']; ?></td>
            <td><?php echo $user['surname_ket']; ?></td>
            <td><?php echo $user['idnumber_ket']; ?></td>
            <td><?php echo $user['registerdate_ket']; ?></td>
            <td><?php echo $user['state_ket']; ?></td>  
            </tr>
        <?php endforeach; ?>
    </table>