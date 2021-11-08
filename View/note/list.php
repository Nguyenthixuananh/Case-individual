<div class="container-fluid">
    <a type="button" class="btn btn-primary mt-3 mb-3 ps-5 pe-5 p-3" href="index.php?page=note-create">ADD NEW NOTE</a>
    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Title</th>
            <th>Content</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($notes)) : ?>
        <?php foreach ($notes as $key => $note): ?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $note["type_name"] ?></td>
                <td><?php echo $note["note_name"] ?></td>
                <td><?php echo $note["note_content"] ?></td>
                <td><a class="btn btn-success" href="index.php?page=note-detail&id=<?php echo $note["id"] ?>">Detail</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure??')"
                       href="index.php?page=note-delete&id=<?php echo $note["id"] ?>">Delete</a></td>
                <td><a class="btn btn-warning" href="index.php?page=note-update&id=<?php echo $note["id"] ?>">Edit</a></td>

            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

</div>