<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JobLister</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-sm border border-2 border-top-0 rounded-bottom mb-5">
      <div class="container-fluid">
        <a class="navbar-brand fs-3 text-muted" href="index.php"><?= SITE_TITLE ?></a>
        <div class=" justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link fs-5" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="Create.php">Create listing</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php displayMessage() ?>
