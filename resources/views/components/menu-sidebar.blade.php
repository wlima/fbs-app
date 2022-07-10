<!-- Sidebar -->
<div>
    <span class="absolute text-white text-2xl top-5 left-4 cursor-pointer" onclick="OpenMenu()">
        <i class="bi bi-list px-2 py-2 bg-gray-900 rounded-full"></i>
    </span>
    <div
        class="sidebar fixed top-0 bottom-0 left-[-300px] w-[300px] overflow-y-auto bg-blue-900 p-2 text-center lg:left-0 ">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center justify-between">
                <i class="bi bi-wallet2 px-2 py-1 bg-blue-600 rounded-md"></i>
                <h1 class="font-bold text-gray-200 text-[15px] ml-3 ">FBS</h1>
                <h1 class="font-bold text-gray-200 text-[15px] hidden lg:block ">- &nbsp; Finacial Budget System</h1>
                <span></span>
                <i class="bi bi-x cursor-pointer lg:hidden" onclick="OpenMenu()"></i>
            </div>
        </div>
        <hr class="my-2 bg-blue-300">
        <div class="grid grid-row-2 justify-items-center mt-3 p-2.5 ">
            <img class="h-24 w-24 rounded-full "
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWG4owtykvtMuHZllZ7Uvka6JYeFjPEoRHWQ&usqp=CAU"
                alt="" srcset="">
            <a href="http://"
                class=" no-underline hover:underline text-gray-200 text-center text-[15px] text-bold mt-2">
                <i class="bi bi-person-square mr-1 px-1 py-2"></i>{{auth()->user()->name}}
            </a>
            <div class="mt-0 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">

                <div class="mt-2 flex items-center text-sm text-gray-500 text-[12px]">
                    <!-- Heroicon name: solid/currency-dollar -->
                    <i class="bi bi-bank py-2 px-1 mr-1 justify-items-center"></i>
                    R$ 120k
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500 text-[12px]">
                    <!-- Heroicon name: solid/calendar -->
                    <i class="bi bi-calendar-date py-2 px-1 mr-1"></i>
                    January 9, 2020
                </div>
            </div>
        </div>
        <div class="bg-gray-800 rounded-md">
            <div
                class="p-2.5 mt-3 mb-2  flex items-center rouded-md mx-4 duration-300 cursor-pointer hover:bg-blue-600 text-white rounded-md border-gray-900 border-b-2">
                <i class="bi bi-speedometer2"></i>
                <span class="text-[15px] ml-4 text-gray-200">Dashboard</span>
            </div>
            <div
                class="p-2.5 mt-3 mb-2  flex items-center rouded-md mx-4 duration-300 cursor-pointer hover:bg-blue-600 text-white rounded-md border-gray-900 border-b-2">
                <i class="bi bi-tags"></i>
                <span class="text-[15px] ml-4 text-gray-200">Categoria</span>
            </div>
            <div
                class="p-2.5 mt-3 mb-2  flex items-center rouded-md mx-4 duration-300 cursor-pointer hover:bg-blue-600 text-white rounded-md border-gray-900 border-b-2">
                <i class="bi bi-bank2"></i>
                <span class="text-[15px] ml-4 text-gray-200">Conta</span>
            </div>
            <div class="p-2.5 mt-3 mb-2  flex items-center rouded-md mx-4 duration-300 cursor-pointer hover:bg-blue-600 text-white rounded-md border-gray-900 border-b-2"
                onclick="dropdown()">
                <i class="bi bi-receipt"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200">Duplicatas</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>

            </div>
            <div class="text-left text sm font-thin mt-2 w-4/5 mx-auto text-gray-200 hidden" id="submenu">
                <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">À receber</h1>
                <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">À pagar</h1>
                <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">Social</h1>
            </div>
            <div
                class="p-2.5 mt-3 mb-2  flex items-center rouded-md mx-4 duration-300 cursor-pointer hover:bg-blue-600 text-white rounded-md border-gray-900 border-b-2">
                <i class="bi bi-piggy-bank"></i>
                <span class="text-[15px] ml-4 text-gray-200">Receitas</span>
            </div>
            <div
                class="p-2.5 mt-3 mb-2  flex items-center rouded-md mx-4 duration-300 cursor-pointer hover:bg-blue-600 text-white rounded-md border-gray-900 border-b-2">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                        
                <i class="bi bi-door-open"></i>
                <span class="text-[15px] ml-4 text-gray-200">Sair</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
        </div>
    </div>
</div>