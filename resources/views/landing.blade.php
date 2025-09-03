<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow fixed w-full z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
      <div class="font-bold text-lg md:text-xl">LOGO HERE</div>
      <a href="#contact" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm md:text-base">
        Contact
      </a>
    </div>
  </header>

  <!-- Hero -->
  <section class="pt-20 relative">
    <img 
      src="{{ asset('images/image (1).png') }}" 
      class="w-full h-64 md:h-[400px] object-cover" 
      alt="Hero Image"
    >
    <div class="text-center px-6 py-8 md:py-12">
      <h1 class="text-2xl md:text-4xl font-bold mb-6 md:mb-8 max-w-3xl mx-auto leading-snug">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
      </h1>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="#contact" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 text-sm md:text-base">
          Contact
        </a>
        <a href="#" class="border border-gray-400 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100 text-sm md:text-base">
          Download PDF
        </a>
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section id="services" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-start gap-6 mb-10">
        <h2 class="text-2xl font-bold">Our Services</h2>
        <p class="text-gray-600 max-w-md text-sm">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
      </div>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach([1,2,3] as $s)
          <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
            <img 
              src="{{ asset('images/image (2).png') }}" 
              class="rounded mb-4 w-full object-cover"
              alt="Service {{ $s }}"
            >
            <h3 class="font-semibold text-lg">Service {{ $s }}</h3>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Case Studies -->
  <section id="case" class="py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
      <div>
        <h2 class="text-2xl font-bold mb-4">Case Studies</h2>
        <p class="text-gray-600 mb-6 text-sm leading-relaxed"> 
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut        </p>
        <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow hover:bg-blue-700 text-sm md:text-base">
          Read More
        </a>
      </div>
      <div>
        <img 
          src="{{ asset('images/image (3).png') }}" 
          class="rounded-lg shadow w-full object-cover"
          alt="Case study image"
        >
      </div>
    </div>
  </section>

  <!-- More Services -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="mb-10 text-center md:text-left">
        <h2 class="text-2xl font-bold mb-2">Our Services</h2>
        <p class="text-gray-600 max-w-2xl text-sm mx-auto md:mx-0">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
      </div>
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach([1,2,3] as $s)
          <div class="bg-white rounded-lg shadow p-6 hover:shadow-md transition text-left">
            <div class="text-blue-600 text-3xl md:text-4xl mb-4">⚙️</div>
            <h3 class="font-semibold text-lg mb-2">Service {{ $s }}</h3>
            <p class="text-gray-600 text-sm">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad            </p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Client Testimonials -->
  <section id="client-testimonials" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-2xl font-bold mb-4">Client Testimonials</h2>
      <p class="text-gray-600 max-w-2xl mx-auto mb-10 text-sm">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.
      </p>
      <div class="bg-white rounded-xl shadow p-6 flex flex-col md:flex-row items-center gap-6 text-left">
        <img 
          src="{{ asset('images/image (2).png') }}" 
          alt="Client" 
          class="w-24 h-24 md:w-32 md:h-32 object-cover rounded-lg"
        >
        <div>
          <h3 class="font-semibold text-lg">John Doe</h3>
          <p class="text-gray-600 text-sm mt-2 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Dark Testimonials -->
  <section id="testimonials" class="bg-gray-900 text-white py-16">
    <div class="max-w-4xl mx-auto text-center px-6">
      <h2 class="text-2xl font-bold mb-8">Testimonials</h2>
      <div class="flex flex-col items-center">
        <img 
          src="{{ asset('images/Ellipse 1.png') }}" 
          alt="John Doe" 
          class="w-20 h-20 rounded-full border-4 border-white shadow-lg"
        >
        <p class="font-semibold mt-4">John Doe</p>
        <p class="text-gray-300 max-w-2xl mt-4 italic leading-relaxed">
          <span class="text-blue-400 text-2xl font-bold">“</span>  
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
          <span class="text-blue-400 text-2xl font-bold">”</span>
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 text-center py-6 text-gray-600 text-sm">
    © Website 2024 All Rights Reserved.
  </footer>

</body>
</html>
