<h1>Lista de Productos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>descripcion</th>
            <th>codigo</th>
            <th>Precio</th>

        </tr>
        <?php 
        foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id_pruduct'];?></td>
                <td><?php echo $product['name_pro'];?></td>
                <td><?php echo $product['description_pro'];?></td>
                <td><?php echo $product['code_pro'];?></td>
                <td><?php echo $product['price_pro'];?></td> 
            </tr>
        <?php endforeach; ?>
    </table>