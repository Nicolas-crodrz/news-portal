<nav class="w-full bg-white py-2 px-6 shadow-md fixed top-0 z-10">
  <div class="container mx-auto flex justify-between items-center">
    <!-- Logo a la izquierda -->
    <div class="flex items-center">
      <img
        src="{{ asset('img/logoBlanco.png') }}"
        alt="Logo"
        class="h-16 mr-4"
      />
    </div>

    <!-- Bocadillo para dispositivos móviles y tablets -->
    <div class="block lg:hidden">
      <button
        id="menu-toggle"
        class="flex items-center px-3 py-2 border rounded text-gray-600 border-gray-600"
      >
        <svg
          class="w-6 h-6"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M4 6H20M4 12H20M4 18H20"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
    </div>

    <!-- Enlaces a la derecha (visible en tablets y escritorio) -->
    <div class="hidden lg:flex items-center space-x-4 text-lg text-[#6e6e6c]">
      <a href="#">Sobre nosotros</a>
      <a href="#">Patronato</a>
      <a href="#">Área de actuación</a>
      <a href="#">Transparencia</a>
      <a href="#">Contacto</a>
    </div>
  </div>

  <!-- Menú desplegable para móviles y tablets -->
  <div
    id="menu"
    class="lg:hidden absolute top-0 left-0 w-full bg-white shadow-md mt-20 px-6 py-3 transform scale-y-0 origin-top transition duration-300 ease-in-out"
  >
    <a href="#" class="block py-2">Sobre nosotros</a>
    <a href="#" class="block py-2">Patronato</a>
    <a href="#" class="block py-2">Área de actuación</a>
    <a href="#" class="block py-2">Transparencia</a>
    <a href="#" class="block py-2">Contacto</a>
  </div>
</nav>

<script>
  // JavaScript para manejar el toggle del menú
  document.getElementById("menu-toggle").addEventListener("click", function () {
    document.getElementById("menu").classList.toggle("scale-y-0")
    document.getElementById("menu").classList.toggle("scale-y-100")
  })
</script>
