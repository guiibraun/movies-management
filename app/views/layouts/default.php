<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

  <title><?= $pageTitle ?? '' ?> Gerenciador de Filme</title>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            border: "hsl(var(--border))",
            input: "hsl(var(--input))",
            ring: "hsl(var(--ring))",
            background: "hsl(var(--background))",
            foreground: "hsl(var(--foreground))",
            primary: {
              DEFAULT: "hsl(var(--primary))",
              light: "hsl(var(--primary-light))",
              foreground: "hsl(var(--primary-foreground))",
            },
            secondary: {
              DEFAULT: "hsl(var(--secondary))",
              light: "hsl(var(--secondary-light))",
              foreground: "hsl(var(--secondary-foreground))",
            },
            destructive: {
              DEFAULT: "hsl(var(--destructive))",
              light: "hsl(var(--destructive-light))",
              foreground: "hsl(var(--destructive-foreground))",
            },
            gray: {
              100: "hsl(var(--gray-100))",
              200: "hsl(var(--gray-200))",
              300: "hsl(var(--gray-300))",
              400: "hsl(var(--gray-400))",
              500: "hsl(var(--gray-500))",
              600: "hsl(var(--gray-600))",
              700: "hsl(var(--gray-700))",
            },
            white: "hsl(var(--white))",
          },
        }
      }
    }
  </script>
  <style>
    :root {
      /* Primary */
      --primary: 272, 66%, 50%;
      --primary-light: 282, 66%, 70%;
      --primary-foreground: 0, 0%, 100%;

      /* Secondary */
      --secondary: 240, 15%, 34%;
      --secondary-light: 240, 15%, 55%;
      --secondary-foreground: 0, 0%, 100%;

      /* Grayscale */
      --gray-100: 240, 10%, 9%;
      --gray-200: 240, 10%, 11%;
      --gray-300: 240, 10%, 14%;
      --gray-400: 240, 15%, 34%;
      --gray-500: 240, 15%, 55%;
      --gray-600: 240, 15%, 75%;
      --gray-700: 240, 15%, 90%;
      --white: 0, 0%, 100%;

      --background: var(--gray-100);

      /* Error */
      --destructive: 0, 66%, 54%;
      --destructive-light: 0, 89%, 74%;
      --destructive-foreground: 0, 0%, 100%;
    }
  </style>
  <style type="text/tailwindcss">

  </style>
</head>

<body>
  <?php require("../app/views/{$view}.view.php") ?>
  <script type="module" src="javascript/main.js"></script>
</body>

</html>