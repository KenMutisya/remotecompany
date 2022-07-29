@extends('layout.app')
@section('header')
    <header class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">Create Resource</h2>
                </div>

            </div>

        </div>
    </header>
@endsection
@section('content')
    <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
        <create-resource></create-resource>

    </div>
@endsection
