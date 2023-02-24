<div class="side-area fixed w-full h-full inset-0 z-50">
    <!-- bg open -->
    <div class="back-menu fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0">
        <div class="cursor-pointer text-white absolute right-64 p-2">
            <svg class="bi bi-x" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                    clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>

    <!-- Mobile navbar -->
    <nav id="mobile-nav"
        class="side-menu flex flex-col right-0 w-64 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40">
        <div class="mb-auto">
            <!--navigation-->
            <nav class="relative flex flex-wrap">
                <div class="text-center py-4 w-full font-bold border-b border-gray-100">{{ env('APP_NAME') }}</div>
                <ul id="side-menu" class="w-full float-none flex flex-col">
                    <li class="relative">
                        <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Home</a>
                    </li>

                    @foreach ($categories as $item)
                        <li class="relative">
                            <a href="{{ url('/articles') }}"
                                class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">{{ $item }}</a>
                        </li>
                    @endforeach

                </ul>
            </nav>
        </div>
        <!-- copyright -->
        <div class="py-4 px-6 text-sm mt-6 text-center">
            <p>Copyright - {{ env('APP_NAME') . ' ' . date('Y') }}</p>
        </div>
    </nav>
</div>
