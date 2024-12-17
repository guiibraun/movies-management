<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/stylesheets/output.css">
  <title><?= $pageTitle ?? '' ?> Gerenciador de Filme</title>
</head>

<body>

  <div class="text-black">
    1123 <h2 class="text-4xl">teste</h2>
  </div>
  <?php require("../app/views/{$view}.view.php") ?>
  <script type="module" src="/javascript/main.js"></script>
</body>

</html>