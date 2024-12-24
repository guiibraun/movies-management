<main>
  <section class="my-20 container flex gap-12">
    <div class="h-[480px] max-w-96 w-full relative rounded-xl overflow-hidden">
      <div class="bg-custom-gradient inset-0  absolute w-full h-full z-10"></div>
      <img src="/<?= $movie->cover ?>" alt="" class="absolute w-full h-full z-0 pointer-events-none object-cover" />
    </div>
    <div class="flex flex-col justify-evenly">
      <div>
        <h1 class="text-3xl font-bold">
          <?= $movie->title ?>
        </h1>
        <p class="text-gray-100 mt-4"><strong>Categoria: </strong><?= $movie->category ?></p>
        <p class="text-gray-100"><strong>Ano:</strong> <?= $movie->release_year ?></p>
      </div>

      <div>
        <p>
          <?= $movie->description ?>
        </p>
      </div>
    </div>
  </section>
</main>