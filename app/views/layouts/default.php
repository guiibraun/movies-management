<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? '' ?> Gerenciador de Filme</title>
  <link rel="stylesheet" href="/assets/stylesheets/output.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.22/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="antialiased text-white">
  <header class="border-b border-gray-700 h-20 flex justify-between items-center px-20">
    <a href="/">
      <svg width="46" height="30" viewBox="0 0 46 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.333252 19.4115C0.333252 13.5638 5.07375 8.82323 10.9215 8.82323C16.7692 8.82323 21.5097 13.5638 21.5097 19.4115V25.2938C21.5097 27.8928 19.4028 29.9997 16.8039 29.9997H10.9215C5.07375 29.9997 0.333252 25.2592 0.333252 19.4115Z" fill="url(#paint0_linear_5136_329)" />
        <path d="M24.1555 5.29413C24.1555 2.37026 26.5258 0 29.4496 0C32.3735 0 34.7439 2.37025 34.7439 5.2941V6.0069C34.7439 7.40723 35.6379 8.65123 36.9653 9.09763L38.4693 9.60353C42.5699 10.9827 45.3319 14.826 45.3319 19.1523V19.4757C45.3319 25.2881 40.6203 30 34.8076 30H28.8614C26.2624 30 24.1555 27.8931 24.1555 25.2941V5.29413Z" fill="url(#paint1_linear_5136_329)" />
        <path d="M43.7023 3.81817C43.3423 3.81817 43.0153 3.73597 42.7206 3.57153C42.4326 3.40053 42.2036 3.17031 42.0336 2.8809C41.8699 2.5915 41.7883 2.26592 41.7883 1.90416C41.7883 1.5424 41.8733 1.22011 42.0433 0.93728C42.2136 0.647873 42.4426 0.420953 42.7306 0.256519C43.0183 0.0855063 43.3423 0 43.7023 0C44.0619 0 44.3859 0.0855063 44.6739 0.256519C44.9619 0.420953 45.1876 0.647873 45.3513 0.93728C45.5213 1.22011 45.6063 1.5424 45.6063 1.90416C45.6063 2.26592 45.5213 2.5915 45.3513 2.8809C45.1876 3.17031 44.9619 3.40053 44.6739 3.57153C44.3926 3.73597 44.0686 3.81817 43.7023 3.81817ZM43.7023 3.54193C44.0096 3.54193 44.2846 3.47287 44.5266 3.33473C44.7753 3.19004 44.9683 2.99272 45.1059 2.74278C45.2496 2.49284 45.3216 2.2133 45.3216 1.90416C45.3216 1.59502 45.2496 1.31877 45.1059 1.07541C44.9683 0.825463 44.7753 0.63143 44.5266 0.493307C44.2846 0.348603 44.0096 0.276251 43.7023 0.276251C43.3946 0.276251 43.1166 0.348603 42.8679 0.493307C42.6256 0.63143 42.4326 0.825463 42.2886 1.07541C42.1513 1.31877 42.0826 1.59502 42.0826 1.90416C42.0826 2.2133 42.1513 2.49284 42.2886 2.74278C42.4326 2.99272 42.6256 3.19004 42.8679 3.33473C43.1166 3.47287 43.3946 3.54193 43.7023 3.54193ZM43.2996 2.94996H42.9956V0.818887H43.7609C43.9899 0.818887 44.1733 0.878083 44.3106 0.996477C44.4483 1.10829 44.5169 1.26615 44.5169 1.47005C44.5169 1.60817 44.4809 1.72986 44.4089 1.8351C44.3369 1.94033 44.2256 2.01926 44.0753 2.07188L44.5563 2.94996H44.2126L43.7806 2.14094H43.2996V2.94996ZM44.1929 1.47992C44.1929 1.22997 44.0456 1.105 43.7513 1.105H43.2996V1.85483H43.7513C43.8886 1.85483 43.9966 1.82523 44.0753 1.76603C44.1536 1.70026 44.1929 1.60489 44.1929 1.47992Z" fill="url(#paint2_linear_5136_329)" />
        <defs>
          <linearGradient id="paint0_linear_5136_329" x1="22.9999" y1="0" x2="22.9999" y2="30" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D743C8" />
            <stop offset="1" stop-color="#7435DB" />
          </linearGradient>
          <linearGradient id="paint1_linear_5136_329" x1="22.9999" y1="0" x2="22.9999" y2="30" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D743C8" />
            <stop offset="1" stop-color="#7435DB" />
          </linearGradient>
          <linearGradient id="paint2_linear_5136_329" x1="22.9999" y1="0" x2="22.9999" y2="30" gradientUnits="userSpaceOnUse">
            <stop stop-color="#D743C8" />
            <stop offset="1" stop-color="#7435DB" />
          </linearGradient>
        </defs>
      </svg>
    </a>

    <nav>
      <ul class="flex items-center gap-x-4">
        <li>
          <a href="/">
            Explorar
          </a>
        </li>

        <?php if (auth()) : ?>
          <li>
            <a href="/user/movies">
              Meus filmes
            </a>
          </li>
        <?php endif ?>
      </ul>
    </nav>

    <nav>
      <ul>
        <?php if (auth()) : ?>
          Olá, <?= auth()->name ?>
        <?php else : ?>
          <a href="/session">Login</a>
        <?php endif ?>
      </ul>
    </nav>
  </header>
  <?php require_once("../app/views/partials/_alert.php") ?>
  <?php require("../app/views/{$view}.view.php") ?>

  <script type="module" src="/assets/javascript/main.js"></script>
</body>

</html>