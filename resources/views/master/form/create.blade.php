<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Student') }}
      </h2>
      <a href="{{route('form.index')}}">Back</a>
    </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
          <div class="w-2/3 mx-auto bg-white p-16 rounded-md shadow-lg">
            <form name="add-course" id="add-course" action="POST">
              @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required>
                </div>
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                        <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Birdate</label>
                      <input type="date" name="birthdate" id="date-start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                      </div>
                    <div class="mb-6">
                        <label for="birthplace" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Birthplace</label>
                        <input type="text" id="birthplace" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jakarta" required>
                    </div>
                    </div>
                    <div class="mb-6">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">City</label>
                        <input type="text" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jakarta" required>
                    </div>
                    <div class="mb-6">
                        <label for="education" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Education</label>
                        <select id="education" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Education</option>
                            <option value="SMA/SMK">SMA / SMK</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="job" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Job</label>
                        <input type="text" id="job" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Student" required>
                    </div>
                    <div class="mb-6">
                        <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone Number</label>
                        <input type="number" id="phoneNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0812 1232 1321" required>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  </div>
            </form>
          </div>
        </div>
        </div>
      </div>
  </div>
</x-app-layout>
