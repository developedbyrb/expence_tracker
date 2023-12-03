<x-app-layout>
    <x-slot name="header" class="gap-y-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-center items-center">
            {{ __('Cash Flow') }}
        </h2>
        <div class="pl-6 flex gap-x-8 justify-center items-center border-s">
            <a href="javascript:void(0)" class="font-semibold text-sm text-gray-800 dark:text-gray-200">Last 7 Days</a>
            <a href="javascript:void(0)" class="font-semibold text-sm text-gray-800 dark:text-gray-200">Last 30 Days</a>
            <a href="javascript:void(0)" class="font-semibold text-sm text-gray-800 dark:text-gray-200">All Time</a>
        </div>
        <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ml-auto flex gap-x-1">
            <x-plus></x-plus> Add Transactions
        </button>
    </x-slot>

    <div class="bg-white dark:bg-gray-800">
        <div class="container mx-auto flex py-6 px-4 sm:px-6 lg:px-8 gap-6 w-full">
        <x-information-box></x-information-box>
        <x-information-box></x-information-box>
        <x-information-box></x-information-box>
        <x-information-box></x-information-box>
        </div>
    </div>
</x-app-layout>
