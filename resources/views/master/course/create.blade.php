<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Course') }}
      </h2>
      <a href="{{route('course.index')}}">Back</a>
    </div>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
          <!-- component -->
          <div class="w-2/3 mx-auto bg-white p-16 rounded-md shadow-lg">
            <form class="w-full" name="add-course" id="add-course" action="POST">
              @csrf
                <div class="mb-6">
                    <label for="course-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Course Name</label>
                    <input type="text" id="course-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Data Structure & Algorithm" required>
                </div> 
                <div class="mb-6">
                    <label for="mentor-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mentor Name</label>
                    <input type="text" id="mentor-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jane Doe" required>
                </div> 
                <div class="mb-6">
                    <label for="period" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Period</label>
                    <select id="period" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Choose a period</option>
                      <option value="FY">1 - First Year</option>
                      <option value="MY">2 - Middle Year</option>
                      <option value="EY">3 - End Year</option>
                  </select>
                </div> 
                
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  Create Course
                </button>
            </form>

          </div>
        </div>
        </div>
      </div>
  </div>
</x-app-layout>
