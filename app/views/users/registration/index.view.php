<main>
  <section class="grid grid-cols-2 p-4 h-dvh">
    <div class="relative h-full overflow-hidden rounded-lg">
      <img src="<?= image('login.png') ?>" alt="Login" class="object-cover absolute inset-0 w-full h-full z-0 user-none">
    </div>

    <div class="flex flex-col items-center justify-center p-4">
      <div class="max-w-80 w-full">
        <h1 class="font-black text-4xl mb-5">Crie sua conta</h1>
        <form action="/registration" class="space-y-4" method="POST">
          <div>
            <input type="text" name="name" id="name" placeholder="Nome">
            <?php if ($validation = flash()->get('name_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
          </div>
          <div>
            <input type="text" name="email" id="email" placeholder="E-mail">
            <?php if ($validation = flash()->get('email_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
          </div>
          <div>
            <input type="password" name="password" id="password" placeholder="Senha">
            <?php if ($validation = flash()->get('password_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
          </div>
          <button class="btn btn-primary w-full">Criar</button>
        </form>
      </div>
    </div>
  </section>
</main>