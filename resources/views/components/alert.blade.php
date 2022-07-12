@if($errors->any())
    @foreach($errors->all() as $error)
        <div
            class="float-right bg-white border border-slate-300 w-max h-20 shadow-lg rounded-md gap-4 p-4 flex flex-row items-center justify-center">
            <section class="w-6 h-full flex flex-col items-center justify-start">
                <i class="bi bi-emoji-frown text-red-500 text-xl align-text-top"></i>
            </section>
            <section class="h-full flex flex-col items-start justify-end gap-1">
                <h1 class="text-base font-semibold antialiased text-red-500">Erro</h1>
                <p class="text-sm font-medium text-zinc-400 antialiased">{{$error}}</p>
            </section>
            <section class="w-5 h-full flex flex-col items-center justify-start">
            </section>
        </div>

    @endforeach
@endif

@if(session('success'))
    <div
        class="float-right bg-white border border-slate-300 w-max h-20 shadow-lg rounded-md gap-4 p-4 flex flex-row items-center justify-center">
        <section class="w-6 h-full flex flex-col items-center justify-start">
            <i class="bi bi-emoji-laughing text-green-500 text-xl align-text-top"></i>
        </section>
        <section class="h-full flex flex-col items-start justify-end gap-1">
            <h1 class="text-base font-semibold antialiased text-green-500">Sucesso !</h1>
            <p class="text-sm font-medium text-zinc-400 antialiased">session('success')</p>
        </section>
        <section class="w-5 h-full flex flex-col items-center justify-start">
        </section>
    </div>

@endif

