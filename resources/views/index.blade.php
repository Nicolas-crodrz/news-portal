@extends('layouts.app') @section('content')
<main class="">
  <!-- Carousel -->
  <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-96 md:h-96 overflow-hidden">
      <!-- Item 1 -->
      <div
        class="absolute inset-0 flex transition-opacity duration-1000 ease-in-out opacity-100"
        data-carousel-item
      >
        <img
          src="{{ asset('img/slide1.png') }}"
          class="block w-full h-full object-cover"
          alt="Slide 1"
        />
      </div>
      <!-- Item 2 -->
      <div
        class="absolute inset-0 flex transition-opacity duration-1000 ease-in-out opacity-0 hidden"
        data-carousel-item
      >
        <img
          src="{{ asset('img/slide2.jpg') }}"
          class="block w-full h-full object-cover"
          alt="Slide 2"
        />
      </div>
      <!-- Item 3 -->
      <div
        class="absolute inset-0 flex transition-opacity duration-1000 ease-in-out opacity-0 hidden"
        data-carousel-item
      >
        <img
          src="{{ asset('img/slide3.jpg') }}"
          class="block w-full h-full object-cover"
          alt="Slide 3"
        />
      </div>
    </div>
    <!-- Slider indicators -->
    <div
      class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3"
    >
      <button
        type="button"
        class="w-3 h-3 rounded-full bg-white focus:outline-none"
        aria-current="true"
        aria-label="Slide 1"
        data-carousel-slide-to="0"
      ></button>
      <button
        type="button"
        class="w-3 h-3 rounded-full bg-white focus:outline-none"
        aria-current="false"
        aria-label="Slide 2"
        data-carousel-slide-to="1"
      ></button>
      <button
        type="button"
        class="w-3 h-3 rounded-full bg-white focus:outline-none"
        aria-current="false"
        aria-label="Slide 3"
        data-carousel-slide-to="2"
      ></button>
    </div>
  </div>

  <!-- Four Divs -->
  <div class="container mx-auto flex flex-col px-4">
    <div class="container mx-auto flex flex-col px-4">
      <!-- Bloque 1 -->
      <div class="flex justify-between items-start bg-white">
        <!-- Div izquierda -->
        <div class="w-1/2">
          <img src="{{ asset("/img/niñaCorazon.png") }}" alt="">
        </div>
        <!-- Div derecha -->
        <div class="w-1/2 mt-10 ml-7">
          <h1 class="font-bold text-[#dc2626] text-4xl mb-4 font-bebas">
            LA FUNDACIÓN
          </h1>
          <p class="font-semibold text-[#4b4846] text-2xl">
            La Fundación Newport fue establecida en 2024 con el propósito
            fundamental de fomentar y promover diversas áreas vitales para la
            sociedad. Sus objetivos principales incluyen el impulso del
            conocimiento científico y técnico, la promoción de la formación, la
            difusión de la cultura y el arte, el cuidado de la salud, así como
            la acción social y medioambiental. Además, la fundación colabora
            estrechamente con los principales actores de la sociedad en sus
            proyectos de responsabilidad social corporativa, buscando así
            contribuir de manera significativa al desarrollo sostenible y al
            bienestar de la comunidad canaria.
          </p>
        </div>
      </div>

      <!-- Bloque 2 -->
      <div class="flex flex-col items-center bg-[#ebebeb] p-8">
        <!-- Título y flecha hacia abajo -->
        <h1 class="font-bold text-[#4b4846] text-4xl text-center mb-4">
          ÁREAS DE ACTUACIÓN
        </h1>
        <img
          src="{{ asset('/img/flechaAbajo.png') }}"
          alt="FlechaAbajo"
          class="mb-4"
        />

        <!-- Contenido principal -->
        <div class="flex justify-between items-start w-full">
          <!-- Div izquierda -->
          <div class="w-1/2 flex flex-col justify-center items-center">
            <h1
              class="font-bold text-[#dc2626] text-4xl mb-4 font-bebas text-center"
            >
              BIENESTAR DE LA INFANCIA
            </h1>
            <p class="text-2xl text-center">
              Garantizar el desarrollo integral, la salud y la protección de los
              derechos de los niños y niñas en Canarias.
            </p>
            <button
              class="mt-4 text-white py-2 px-4 rounded-full border-2 text-[#4f4f4f] font-bold border-[#dc2626] flex items-center justify-center"
            >
              Saber más
              <img
                src="{{ asset('/img/flecha.png') }}"
                alt="Flecha"
                class="ml-2 w-4 h-4"
              />
            </button>
          </div>

          <!-- Div derecha -->
          <div class="w-1/2 flex justify-center items-center">
            <img src="{{ asset('/img/niños.png') }}" alt="niños" />
          </div>
        </div>
      </div>
    </div>

    <!-- Bloque 3  -->
    <div class="flex justify-between items-start bg-white p-8 mb-4">
      <!-- Div izquierda -->
      <div class="w-1/2">
        <div class="mb-4">Izquierda</div>
        <div>Contenido de la izquierda</div>
      </div>
      <!-- Div derecha -->
      <div class="w-1/2 text-right">
        <div class="mb-4">Derecha</div>
        <div>Contenido de la derecha</div>
      </div>
    </div>

    <!-- Bloque 4  -->
    <div class="flex justify-between items-start bg-[#ebebeb] p-8">
      <!-- Div izquierda -->
      <div class="w-1/2">
        <div class="mb-4">Izquierda</div>
        <div>Contenido de la izquierda</div>
      </div>
      <!-- Div derecha -->
      <div class="w-1/2 text-right">
        <div class="mb-4">Derecha</div>
        <div>Contenido de la derecha</div>
      </div>
    </div>
  </div>
</main>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("default-carousel")
    const slides = carousel.querySelectorAll("[data-carousel-item]")
    const indicators = carousel.querySelectorAll("[data-carousel-slide-to]")
    let currentSlide = 0
    const slideCount = slides.length

    function showSlide(index) {
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.classList.remove("hidden")
          slide.style.opacity = 1
        } else {
          slide.classList.add("hidden")
          slide.style.opacity = 0
        }
      })
      indicators.forEach((indicator, i) => {
        if (i === index) {
          indicator.setAttribute("aria-current", "true")
          indicator.classList.add("bg-red-500") // Cambiar el fondo del indicador activo a rojo
          indicator.classList.remove("bg-white") // Eliminar el fondo blanco del indicador activo
        } else {
          indicator.setAttribute("aria-current", "false")
          indicator.classList.remove("bg-red-500") // Asegurarse de que los indicadores inactivos no tengan fondo rojo
          indicator.classList.add("bg-white") // Asignar fondo blanco a los indicadores inactivos
        }
      })
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slideCount
      showSlide(currentSlide)
    }

    indicators.forEach((indicator, i) => {
      indicator.addEventListener("click", function () {
        showSlide(i)
        currentSlide = i
      })
    })

    setInterval(nextSlide, 5000) // Cambiar de diapositiva cada 5 segundos (5000 milisegundos)

    // Mostrar el primer slide por defecto
    showSlide(0)
  })
</script>

@endsection
