@extends('layouts.dashboard')
@section('content')
    <x-alert></x-alert>
    <a href="{{route('category.create')}}" class="no-underline hover:underline ...">Nova</a>
    <!-- component -->
    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Categoria</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">{{$category->description}}</td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <a href="#{{$category->id}}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-yellow-500 hover:bg-green-dark">Edit</a>
                        <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue-500 hover:bg-blue-dark">View</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
