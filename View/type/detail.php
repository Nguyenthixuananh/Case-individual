<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Type</div>
    <div class="card-body text-primary">

        <p class="card-text"><?php if (isset($type)) {echo $type["id"];} ?></p>
        <p class="card-text"><?php if (isset($type)) {echo $type["type_name"];} ?></p>
    </div>

</body>
</html>