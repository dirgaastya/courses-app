<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Student Detail') }}
            </h2>
            <a href="{{ route('form.index') }}">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-center">
                <div class="w-2/3 mx-auto bg-white p-16 rounded-md shadow-lg">
                    <div>
                        <div class="mb-6">
                            <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Form ID</p>
                            <div
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                SI02312
                            </div>
                        </div>
                        <div class="mb-6">
                            <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</p>
                            <div
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                Dirga Astya
                            </div>
                        </div>
                        <div class="grid mb-6 gap-6 lg:grid-cols-2" >
                            <div>
                                <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Birthdate</p>
                                <div
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    23-08-2001
                                </div>
                            </div>
                            <div>
                                <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Birthplace</p>
                                <div
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    Bandung
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">City</p>
                            <div
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                Bandung
                            </div>
                        </div>
                        <div class="mb-6">
                            <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Education</p>
                            <div
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                SMA/SMK
                            </div>
                        </div>
                        <div class="mb-6">
                            <p  class="mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone Number</p>
                            <div
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                0878xxxxxxx
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
