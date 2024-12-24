<main>
  <section class="max-w-4xl mx-auto px-3 w-full my-20">
    <h1 class="text-2xl font-bold mb-4">Novo filme</h1>
    <form class="flex flex-col gap-4" action="/user/movies" method="POST" enctype="multipart/form-data">
      <div>
        <input type="text" name="title" id="title" placeholder="Título" class="input input-bordered w-full">
        <?php if ($validation = flash()->get('title_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
      </div>
      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <select class="select select-bordered w-full" name="release_year" id="release_year">
            <option value="">
              Ano
            </option>
            <?php foreach (range(1988, date('Y')) as $year) : ?>
              <option value="<?= $year ?>"><?= $year ?></option>
            <?php endforeach ?>
          </select>
          <?php if ($validation = flash()->get('release_year_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
        </div>

        <div>
          <select class="select select-bordered w-full" name="category" id="category">
            <option value="">
              Categoria
            </option>
            <?php foreach ($categories as $category) : ?>
              <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach ?>
          </select>
          <?php if ($validation = flash()->get('category_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
        </div>
      </div>

      <div>
        <textarea class="textarea textarea-bordered w-full" name="description" id="description" rows="5" placeholder="Descrição"></textarea>
        <?php if ($validation = flash()->get('description_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
      </div>

      <div>
        <label for="cover" class="block mb-2">Capa do filme</label>
        <input type="file" name="cover" id="cover" class="file-input file-input-bordered w-full">
        <?php if ($validation = flash()->get('category_error')) : ?><p class="text-xs mt-1 text-red-500"><?= $validation['message'] ?></p><?php endif ?>
      </div>

      <div class="flex gap-2 self-end">
        <a class="btn btn-link" href="/">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </section>
</main>