@extends('layout.app')
@section('header')
    <header class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">Admin</h2>
                </div>
                <div class="mt-4 flex md:mt-0 md:ml-4">
                    <a href="{{ route('admin.create') }}"
                            class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                        Create Resource
                    </a>
                </div>
            </div>

        </div>
    </header>
@endsection
@section('content')
    <div class="bg-white rounded-lg shadow px-5 py-6 sm:px-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="px-4 sm:px-6 lg:px-8">

            <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Plan</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Memory</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">CPU</th>
                        <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Storage</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Select</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm">
                            <div class="font-medium text-gray-900">Hobby</div>
                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                <span>4 GB RAM / 4 CPUs</span>
                                <span class="hidden sm:inline"> · </span>
                                <span>128 GB SSD disk</span>
                            </div>
                        </td>
                        <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">4 GB RAM</td>
                        <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">4 CPUs</td>
                        <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">128 GB SSD disk</td>
                        <td class="px-3 py-3.5 text-sm text-gray-500">
                            <div class="sm:hidden">$40/mo</div>
                            <div class="hidden sm:block">$40/month</div>
                        </td>
                        <td class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right text-sm font-medium">
                            <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Select<span class="sr-only">, Hobby</span></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm border-t border-transparent">
                            <div class="font-medium text-gray-900">
                                Startup

                                <span class="text-indigo-600">(Current Plan)</span>
                            </div>
                            <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                                <span>8 GB RAM / 6 CPUs</span>
                                <span class="hidden sm:inline"> · </span>
                                <span>256 GB SSD disk</span>
                            </div>

                            <div class="absolute right-0 left-6 -top-px h-px bg-gray-200"></div>
                        </td>
                        <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">8 GB RAM</td>
                        <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">6 CPUs</td>
                        <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">256 GB SSD disk</td>
                        <td class="px-3 py-3.5 text-sm text-gray-500 border-t border-gray-200">
                            <div class="sm:hidden">$80/mo</div>
                            <div class="hidden sm:block">$80/month</div>
                        </td>
                        <td class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right text-sm font-medium border-t border-transparent">
                            <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30" disabled>Select<span class="sr-only">, Startup</span></button>

                            <div class="absolute right-6 left-0 -top-px h-px bg-gray-200"></div>
                        </td>
                    </tr>

                    <!-- More plans... -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
