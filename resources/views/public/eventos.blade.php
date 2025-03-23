@extends('layouts.public')

@section('titulo', 'Eventos - Robótica Móvil')

@section('contenido')
<!-- Hero Section with Clean Design -->
<div class="relative bg-[#001233] py-20 sm:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950 to-blue-900 opacity-80"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-6">Eventos Institucionales</h1>
            <p class="mt-6 text-lg leading-8 text-blue-100">Centro de excelencia en investigación y desarrollo de robótica móvil.</p>
        </div>
    </div>
</div>


<!-- Upcoming Events Section -->
<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Calendario Institucional</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Próximos Eventos</p>
        </div>

        <!-- Event Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:border-blue-500 transition-all duration-300 hover:shadow-xl">
                <div class="relative">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-2 rounded-bl-lg">
                        <div class="text-sm font-bold">ENE</div>
                        <div class="text-xl font-bold">15</div>
                    </div>
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-robot text-6xl text-gray-400"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded">Conferencia</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Simposio Internacional de Robótica 2024</h3>
                    <p class="text-gray-600 mb-4">Únete a expertos internacionales en una jornada de conferencias sobre los últimos avances en robótica móvil.</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-clock mr-2 text-blue-600"></i> 09:00 AM - 06:00 PM
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Centro de Convenciones, CDMX
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-users mr-2 text-blue-600"></i> Cupo limitado
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                            Más información <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:border-blue-500 transition-all duration-300 hover:shadow-xl">
                <div class="relative">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-2 rounded-bl-lg">
                        <div class="text-sm font-bold">MAR</div>
                        <div class="text-xl font-bold">20</div>
                    </div>
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-cogs text-6xl text-gray-400"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded">Taller</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Taller de Programación de Robots</h3>
                    <p class="text-gray-600 mb-4">Aprende las bases de la programación de robots móviles en este taller práctico con expertos del campo.</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-clock mr-2 text-blue-600"></i> 10:00 AM - 02:00 PM
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Laboratorio de Robótica
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-users mr-2 text-blue-600"></i> 20 participantes máximo
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                            Más información <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:border-blue-500 transition-all duration-300 hover:shadow-xl">
                <div class="relative">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-2 rounded-bl-lg">
                        <div class="text-sm font-bold">ABR</div>
                        <div class="text-xl font-bold">05</div>
                    </div>
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-6xl text-gray-400"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded">Hackathon</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Hackathon de Robótica 2024</h3>
                    <p class="text-gray-600 mb-4">Compite en equipos para desarrollar soluciones innovadoras en robótica móvil durante 48 horas intensivas.</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-clock mr-2 text-blue-600"></i> 48 horas continuas
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Campus Principal
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-users mr-2 text-blue-600"></i> 15 equipos máximo
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                            Más información <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Past Events Section -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Historia Institucional</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Eventos Destacados</p>
        </div>

        <!-- Past Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <!-- Event 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-blue-600 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-blue-500">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded mb-2 inline-block">Conferencia</span>
                        <h3 class="text-xl font-semibold text-gray-900">Congreso Nacional de Robótica 2023</h3>
                    </div>
                    <span class="text-sm text-blue-600 font-medium">Nov 2023</span>
                </div>
                <p class="text-gray-600 mb-4">Reunión anual de investigadores y profesionales en el campo de la robótica, presentando los últimos avances y desarrollos en robótica móvil.</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Universidad Nacional Autónoma de México
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-users mr-2 text-blue-600"></i> 200+ asistentes
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        Más información <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-blue-600 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-blue-500">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded mb-2 inline-block">Workshop</span>
                        <h3 class="text-xl font-semibold text-gray-900">Workshop de Inteligencia Artificial en Robótica</h3>
                    </div>
                    <span class="text-sm text-blue-600 font-medium">Sep 2023</span>
                </div>
                <p class="text-gray-600 mb-4">Sesión práctica sobre la implementación de algoritmos de IA en sistemas robóticos, con demostraciones en vivo y casos de estudio.</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i> Instituto Tecnológico de Monterrey
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-users mr-2 text-blue-600"></i> 50 participantes
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        Más información <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection