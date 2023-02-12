<?php

$peoples = file("peoples.csv");

$data = [];
foreach ($peoples as $line) {
    $data[] = str_getcsv($line);
}

$name = $_POST['name'];
$fullName = $_POST['fullName'] ?? null;
$country = $_POST['country'];

$searchPeoples = $data;

if ($name) {
    $temp = $searchPeoples;
    $searchPeoples = [];
    if ($fullName) {
        foreach ($temp as $people) {
            if ($people[0] == $name) {
                $searchPeoples[] = $people;
            }
        }
    } else {
        foreach ($temp as $people) {
            if (str_contains($people[0], $name)) {
                $searchPeoples[] = $people;
            }
        }
    }
}

if ($country) {
    $temp = $searchPeoples;
    $searchPeoples = [];
    foreach ($temp as $people) {
        if ($people[4] == $country) {
            $searchPeoples[] = $people;
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Codes</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label>Enter course</label>
            <select class="form-control" name="country">
                <?php foreach ($data as $people) : ?>
                    <?php if ($people[4] == $country) : ?>
                        <option selected value="<?= $people[4] ?>"><?= $people[4] ?> </option>
                    <?php else: ?>
                        <option value="<?= $people[4] ?>"><?= $people[4] ?> </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <label>Enter name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name"
                <?php if ($name) : ?>
                    echo value="<?php echo $name ?>"
                <?php endif; ?>
            >
            <input type="checkbox" name="fullName" id="checkbox"
                <?php if ($fullName) : ?>
                    echo checked
                <?php endif; ?>
            >
            <label for="checkbox_id">Do you need a full name match?</label>


        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">Region</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchPeoples as $people) : ?>
            <tr>
                <th scope="row"><?= $people[0] ?></th>
                <td><?= $people[1] ?></td>
                <td><?= $people[2] ?></td>
                <td><?= $people[3] ?></td>
                <td><?= $people[4] ?></td>
                <td><?= $people[5] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>