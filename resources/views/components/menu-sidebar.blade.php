<div
    class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-800 dark:bg-gray-800 h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">
            <li>
                <a href="{{route('home')}}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-speedometer2"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-tags"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Categoria</span>
                </a>
            </li>
            <li>
                <a href="{{route('account.index')}}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-bank"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Conta</span>
                </a>
            </li>
            <li>
                <a href="{{route('creditor.index')}}"
                   class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-people"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Credor</span>
                    {{-- <span
                        class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span> --}}
                </a>
            </li>
            <li>
                <a href="{{route('expense.index')}}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Despesa</span>
                    {{-- <span
                        class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span> --}}
                </a>
            </li>
            <li>
                <a href="{{route('renvue.index')}}"
                   class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-cash"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Receitas</span>
                    {{-- <span
                        class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span> --}}
                </a>
            </li>

            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                </div>
            </li>
            <li>
                <a href="{{ route('user.show',auth()->id())  }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-person-square"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                </a>
            </li>
        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
    </div>
</div>
