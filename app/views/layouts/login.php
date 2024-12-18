<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? '' ?> Gerenciador de Filme</title>
  <link rel="stylesheet" href="/assets/stylesheets/output.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-gray-950 text-white">
  <?php require("../app/views/{$view}.view.php") ?>

  <script type="module" src="/assets/javascript/main.js"></script>
</body>

</html>