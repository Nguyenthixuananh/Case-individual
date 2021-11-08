<div class="container-fluid">
    <a type="button" class="btn btn-primary mt-3 mb-3 ps-5 pe-5 p-3" href="index.php?page=type-create">ADD NEW TYPE</a>
    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name of type</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($types)) : ?>
            <?php foreach ($types as $key => $type): ?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $type["type_name"] ?></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"
                           href="index.php?page=type-delete&id=<?php echo $type["id"] ?>">Delete</a></td>
                    <td><a class="btn btn-warning" href="index.php?page=type-update&id=<?php echo $type["id"] ?>">Edit</a></td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

</div>