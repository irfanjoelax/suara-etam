@extends('layouts.template')

@section('content')
    <div class="bg-gray-50 py-6">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
            <div class="flex flex-row flex-wrap">
                <!-- Left -->
                <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
                    <div class="w-full py-3">
                        <h2 class="text-gray-800 text-2xl font-bold">
                            <span class="inline-block h-5 border-l-3 border-yellow-400 mr-2"></span>
                            Latest Articles
                        </h2>
                    </div>
                    <div class="flex flex-row flex-wrap -mx-3">
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ asset('template/img/dummy/img27.jpg') }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                        card with supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-yellow-400 mr-2"></span>Europe</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ asset('template/img/dummy/img3.jpg') }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                        card with supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-yellow-400 mr-2"></span>Europe</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ asset('template/img/dummy/img4.jpg') }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                        card with supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-yellow-400 mr-2"></span>Europe</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ asset('template/img/dummy/img5.jpg') }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                        card with supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-yellow-400 mr-2"></span>Europe</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ asset('template/img/dummy/img6.jpg') }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                        card with supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-yellow-400 mr-2"></span>Europe</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                            <div class="flex flex-row sm:block hover-img">
                                <a href="">
                                    <img class="max-w-full w-full mx-auto" src="{{ asset('template/img/dummy/img7.jpg') }}"
                                        alt="alt title">
                                </a>
                                <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                                    <h3 class="text-lg font-bold leading-tight mb-2">
                                        <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                                    </h3>
                                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider
                                        card with supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="text-gray-500" href="#"><span
                                            class="inline-block h-3 border-l-2 border-yellow-400 mr-2"></span>Europe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
                    <div class="w-full bg-white">
                        <div class="mb-6">
                            <div class="p-4 bg-gray-100">
                                <h2 class="text-lg font-bold">Most Popular</h2>
                            </div>
                            <ul class="post-number">
                                <li class="border-b border-gray-100 hover:bg-gray-50">
                                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the
                                        world would end without political polls</a>
                                </li>
                                <li class="border-b border-gray-100 hover:bg-gray-50">
                                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet
                                        The Man Who Designed The Ducati Monster</a>
                                </li>
                                <li class="border-b border-gray-100 hover:bg-gray-50">
                                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020
                                        Audi R8 Spyder spy shots release</a>
                                </li>
                                <li class="border-b border-gray-100 hover:bg-gray-50">
                                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center"
                                        href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                                </li>
                                <li class="border-b border-gray-100 hover:bg-gray-50">
                                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF
                                        plans $14 billion autonomous vehicle push, concept
                                        van</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
