<?php
$fileName = $_POST['fileName'];
$extension = strrchr(basename($_FILES['file']['name']), '.');
if ($_FILES) {
    if(!str_ends_with($fileName, $extension))
    {
        $fileName .= $extension;
    }
    $uploadFile = __DIR__ . '/' . $fileName;
    $result = move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>File</title>
</head>
<body>
<div class="container">
    <form enctype="multipart/form-data" action="" method="POST">
        <div class="form-group">
            <label>Document</label>
            <input type="file" name="file" class="form-control-file">
            <label>Name File</label>
            <input type="text" name="fileName" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>

    <?php if ($result) : ?>
        <h3>File uploaded successfully</h3>
    <?php endif; ?>
</div>

</body>
</html>