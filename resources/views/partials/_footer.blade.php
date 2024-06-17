<footer class="w-full bg-[#4b4846] text-white py-8">
  <div class="container mx-auto">
    <div class="flex flex-col lg:flex-row justify-between">
      <!-- Primera columna -->
      <div
        class="w-full lg:w-1/3 px-4 mb-6 lg:mb-0 flex justify-center lg:justify-start"
      >
        <img
          src="{{ asset('img/logoGris.png') }}"
          alt="Imagen"
          class="w-[200px] lg:w-[279px] h-auto lg:h-[146px]"
        />
      </div>

      <!-- Segunda columna -->
      <div
        class="w-full lg:w-1/3 px-4 mb-6 lg:mb-0 flex justify-center lg:justify-end"
      >
        <img
          src="{{ asset('img/logoGris2.png') }}"
          alt="Imagen"
          class="w-[250px] lg:w-[376px] h-auto lg:h-[174px]"
        />
      </div>

      <!-- Tercera columna -->
      <div class="w-full lg:w-1/3 px-4">
        <div
          class="flex flex-col lg:flex-row justify-between lg:justify-start lg:flex-wrap"
        >
          <!-- Enlaces -->
          <div class="w-full lg:w-2/3 mb-4 lg:mb-0 sm: text-center">
            <a href="#" class="font-bold mb-2 mt-4 lg:mt-0 lg:mr-4 block"
              >Aviso Legal</a
            >
            <a href="#" class="font-bold mb-2 lg:mr-4 block"
              >Política de Privacidad</a
            >
            <a href="#" class="font-bold mb-2 lg:mr-4 block"
              >Política de Cookies</a
            >
          </div>

          <!-- Redes sociales -->
          <div class="w-full lg:w-1/3 flex justify-center lg:justify-end">
            <a href="#" class="ml-2"
              ><img
                src="{{ asset('img/instagram.png') }}"
                alt="Instagram"
                class="h-8"
            /></a>
            <a href="#" class="ml-2"
              ><img
                src="{{ asset('img/linkedin.png') }}"
                alt="LinkedIn"
                class="h-8"
            /></a>
          </div>
        </div>
      </div>
    </div>
    <hr class="border-white my-4" />
    <div class="py-2">© 2024 Fundación Newport</div>
  </div>
</footer>
