@section('title', 'Dashboard')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        
        </h2>
    </x-slot>
    @extends('dashboard.menu')
    <div class="p-4 sm:ml-64">
        @yield('content')
    </div>


</x-app-layout>
