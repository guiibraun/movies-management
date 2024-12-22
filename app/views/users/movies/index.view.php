<main class="mb-14">
  <section class="container mt-14 flex items-center justify-between">
    <h1 class="font-bold text-5xl">Explorar</h1>
    <?php $path = '/user/movies' ?>
    <?php require '../app/views/partials/_search.php' ?>
  </section>
  <section class="container">
    <?php if (count($movies) > 0) : ?>
      <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($movies as $movie) : ?>
          <div class="h-[480px] w-full relative rounded-xl overflow-hidden flex items-end">
            <div class="bg-custom-gradient inset-0  absolute w-full h-full z-10"></div>
            <img src="<?= image('/movie-card.png') ?>" alt="" class="absolute w-full h-full z-0 pointer-events-none object-cover" />
            <div class="absolute top-5 right-5 z-20 bg-[#0f0f1a]/80 rounded-fil flex items-center gap-1.5 px-2.5 py-1.5 rounded-full">
              <div class="text-xs font-medium text-gray-300">
                <span class="text-xl font-bold">4,5</span> / 5
              </div>
              <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.6431 7.17812L11.8306 9.60499L12.6875 13.2344C12.7347 13.4314 12.7226 13.638 12.6525 13.8281C12.5824 14.0182 12.4575 14.1833 12.2937 14.3025C12.1298 14.4216 11.9343 14.4896 11.7319 14.4977C11.5294 14.5058 11.3291 14.4538 11.1562 14.3481L7.99996 12.4056L4.84184 14.3481C4.66898 14.4532 4.4689 14.5047 4.2668 14.4963C4.06469 14.4879 3.8696 14.4199 3.70609 14.3008C3.54257 14.1817 3.41795 14.0169 3.3479 13.8271C3.27786 13.6374 3.26553 13.4311 3.31246 13.2344L4.17246 9.60499L1.35996 7.17812C1.20702 7.04593 1.09641 6.87163 1.04195 6.67696C0.987486 6.48229 0.99158 6.27589 1.05372 6.08353C1.11586 5.89118 1.23329 5.72139 1.39135 5.59538C1.54941 5.46937 1.7411 5.39271 1.94246 5.37499L5.62996 5.07749L7.05246 1.63499C7.12946 1.44738 7.2605 1.2869 7.42894 1.17395C7.59738 1.06101 7.7956 1.0007 7.9984 1.0007C8.2012 1.0007 8.39942 1.06101 8.56785 1.17395C8.73629 1.2869 8.86734 1.44738 8.94434 1.63499L10.3662 5.07749L14.0537 5.37499C14.2555 5.39205 14.4477 5.46828 14.6064 5.59412C14.765 5.71996 14.883 5.88981 14.9455 6.0824C15.008 6.27499 15.0123 6.48175 14.9579 6.67677C14.9034 6.87179 14.7926 7.04641 14.6393 7.17874L14.6431 7.17812Z" fill="#E4E5EC" />
              </svg>

            </div>
            <div class="relative z-20 p-6">
              <h3 class="text-xl font-bold text-gray-300 text-balance"><?= $movie->title ?></h3>
              <div class="text-gray-400 text-sm font-bold">
                <span>Drama</span> -
                <time datetime=""><?= $movie->release_year ?></time>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    <?php elseif ($search) : ?>
      <div class="flex flex-col items-center justify-between mt-12">
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M37.125 17.875H17.5467L36.0937 12.9783C36.2693 12.932 36.4339 12.8515 36.5782 12.7412C36.7225 12.631 36.8435 12.4933 36.9342 12.3361C37.025 12.1788 37.0837 12.0052 37.107 11.8251C37.1303 11.6451 37.1177 11.4622 37.07 11.287L35.6675 6.13079C35.4744 5.43708 35.0159 4.84734 34.3912 4.48929C33.7664 4.13124 33.0258 4.03371 32.3297 4.21782L6.15482 11.1272C5.80631 11.2177 5.47934 11.3767 5.19307 11.5951C4.9068 11.8135 4.66697 12.0868 4.48763 12.3991C4.30729 12.7075 4.19078 13.049 4.14501 13.4033C4.09925 13.7576 4.12516 14.1175 4.22123 14.4616L5.49998 19.1744C5.49998 19.1984 5.49998 19.2242 5.49998 19.25V34.375C5.49998 35.1043 5.78971 35.8038 6.30543 36.3195C6.82116 36.8353 7.52063 37.125 8.24998 37.125H35.75C36.4793 37.125 37.1788 36.8353 37.6945 36.3195C38.2102 35.8038 38.5 35.1043 38.5 34.375V19.25C38.5 18.8853 38.3551 18.5356 38.0973 18.2777C37.8394 18.0199 37.4897 17.875 37.125 17.875ZM33.0275 6.87501L34.0587 10.6683L30.1709 11.6995L25.3378 8.90829L33.0275 6.87501ZM21.5651 9.90001L26.3983 12.6913L20.0492 14.367L15.2161 11.5792L21.5651 9.90001ZM7.91826 17.5691L6.88701 13.7741L11.4417 12.5709L16.2748 15.3656L7.91826 17.5691ZM35.75 34.375H8.24998V20.625H35.75V34.375Z" fill="#45455F" />
        </svg>

        <h4 class="text-[#7a7b9f] mt-6 text-center max-w-80">
          Nenhum filme encontrado com “<?= $search ?>”
          Que tal tentar outra busca?
        </h4>

        <a href="/user/movies" class="mt-6 flex items-center gap-x-2 text-[#7a7b9f]"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.067 15.1828C16.1251 15.2409 16.1712 15.3098 16.2026 15.3857C16.234 15.4615 16.2502 15.5429 16.2502 15.625C16.2502 15.7071 16.234 15.7884 16.2026 15.8643C16.1712 15.9402 16.1251 16.0091 16.067 16.0672C16.009 16.1252 15.94 16.1713 15.8642 16.2027C15.7883 16.2342 15.707 16.2503 15.6249 16.2503C15.5427 16.2503 15.4614 16.2342 15.3855 16.2027C15.3097 16.1713 15.2407 16.1252 15.1827 16.0672L9.99986 10.8836L4.81705 16.0672C4.69977 16.1844 4.54071 16.2503 4.37486 16.2503C4.20901 16.2503 4.04995 16.1844 3.93267 16.0672C3.8154 15.9499 3.74951 15.7908 3.74951 15.625C3.74951 15.4591 3.8154 15.3001 3.93267 15.1828L9.11627 9.99998L3.93267 4.81717C3.8154 4.69989 3.74951 4.54083 3.74951 4.37498C3.74951 4.20913 3.8154 4.05007 3.93267 3.93279C4.04995 3.81552 4.20901 3.74963 4.37486 3.74963C4.54071 3.74963 4.69977 3.81552 4.81705 3.93279L9.99986 9.11639L15.1827 3.93279C15.2999 3.81552 15.459 3.74963 15.6249 3.74963C15.7907 3.74963 15.9498 3.81552 16.067 3.93279C16.1843 4.05007 16.2502 4.20913 16.2502 4.37498C16.2502 4.54083 16.1843 4.69989 16.067 4.81717L10.8835 9.99998L16.067 15.1828Z" fill="#7A7B9F" />
          </svg>
          Limpar filtro
        </a>
      </div>
    <?php else : ?>
      <div class="flex flex-col items-center justify-between mt-12">
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M37.125 17.875H17.5467L36.0937 12.9783C36.2693 12.932 36.4339 12.8515 36.5782 12.7412C36.7225 12.631 36.8435 12.4933 36.9342 12.3361C37.025 12.1788 37.0837 12.0052 37.107 11.8251C37.1303 11.6451 37.1177 11.4622 37.07 11.287L35.6675 6.13079C35.4744 5.43708 35.0159 4.84734 34.3912 4.48929C33.7664 4.13124 33.0258 4.03371 32.3297 4.21782L6.15482 11.1272C5.80631 11.2177 5.47934 11.3767 5.19307 11.5951C4.9068 11.8135 4.66697 12.0868 4.48763 12.3991C4.30729 12.7075 4.19078 13.049 4.14501 13.4033C4.09925 13.7576 4.12516 14.1175 4.22123 14.4616L5.49998 19.1744C5.49998 19.1984 5.49998 19.2242 5.49998 19.25V34.375C5.49998 35.1043 5.78971 35.8038 6.30543 36.3195C6.82116 36.8353 7.52063 37.125 8.24998 37.125H35.75C36.4793 37.125 37.1788 36.8353 37.6945 36.3195C38.2102 35.8038 38.5 35.1043 38.5 34.375V19.25C38.5 18.8853 38.3551 18.5356 38.0973 18.2777C37.8394 18.0199 37.4897 17.875 37.125 17.875ZM33.0275 6.87501L34.0587 10.6683L30.1709 11.6995L25.3378 8.90829L33.0275 6.87501ZM21.5651 9.90001L26.3983 12.6913L20.0492 14.367L15.2161 11.5792L21.5651 9.90001ZM7.91826 17.5691L6.88701 13.7741L11.4417 12.5709L16.2748 15.3656L7.91826 17.5691ZM35.75 34.375H8.24998V20.625H35.75V34.375Z" fill="#45455F" />
        </svg>

        <h4 class="text-[#7a7b9f] mt-6 text-center max-w-80">
          Nenhum filme encontrado
        </h4>
      </div>
    <?php endif ?>

  </section>
</main>