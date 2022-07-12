@extends('layouts.dashboard')
@section('content')
    <div class="grid grid-row-2">
        <div>
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                <i class="bi bi-tags font-bold text-[26px]">

                </i> Nova categoria
            </h2>
        </div>
        <div>
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="grid grid-row-3 gap-5 justify-center align-middle">
                    <div>
                        <label for="description">Descrição</label>
                        <input class="border rounded px-3 py-1 mt-2" type="text" id="description" name="description"
                               placeholder="Descrição" required>
                    </div>
                    <div>
                        <label for="status">Status</label>
                        <input class="border rounded-md px-3 py-1 mt-2" type="checkbox" name="status" id="status"
                              checked >
                    </div>
                    <div>
                        <input class="border rounded-md px-3 py-1 mt-2 bg-blue-600 text-white font-medium" type="submit"
                               >
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
