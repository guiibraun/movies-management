<main>
  <section class="grid grid-cols-2 p-4 h-dvh">
    <div class="relative h-full overflow-hidden rounded-lg">
      <img src="<?= image('login.png') ?>" alt="Login" class="object-cover absolute inset-0 w-full h-full z-0 user-none">
    </div>
    <div class="flex items-center justify-center p-4">
      <div class="max-w-80 w-full">
        <h1 class="font-black text-4xl mb-5">Acesse sua conta</h1>
        <form action="/session" class="space-y-4" method="POST">
          <input type="text" name="email" id="email" placeholder="E-mail">
          <input type="password" name="password" id="password" placeholder="Senha">
          <button class="btn btn-primary w-full">Entrar</button>
        </form>
      </div>
    </div>
  </section>
</main>