<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Period') }}
      </h2>
      <a href="{{route('period.index')}}">Back</a>
    </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
          <!-- component -->
          <!-- This is an example component -->
          <div class="w-2/3 mx-auto bg-white p-16 rounded-md shadow-lg">
            <form name="add-course" id="add-course" action="POST">
              @csrf
              <div class="mb-6">
                <label for="course-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Period Name</label>
                <input type="text" id="course-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Year" required>
            </div> 
              <div class="grid gap-6 mb-6 lg:grid-cols-2">
                  <div>
                    <label for="date-start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date start</label>
                  <input type="date" name="date-start" id="date-start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                  </div>
                  <div>
                    <label for="date-end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date end</label>
                  <input type="date" name="date-end" id="date-end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                  </div>
                  
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
          </div>
        </div>
        </div>
      </div>
  </div>
</x-app-layout>
