<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Courses') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <!-- component -->
                  <div class="flex items-center justify-center">
                    <div class="container">
                      <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                        <thead class="text-white">
                          <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                            <th class="p-3 text-left">No</th>
                            <th class="p-3 text-left">Course Name</th>
                            <th class="p-3 text-left">Mentor Name</th>
                            <th class="p-3 text-left">Actions</th>
                          </tr>
                      
                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                          <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                            <td class="border-grey-light border p-3">1</td>
                            <td class="border-grey-light border p-3">John Covv</td>
                            <td class="border-grey-light border p-3">John Covv</td>
                            <td class="border-grey-light border p-3 text-white hover:font-medium cursor-pointer">
                              <a href="#" class="px-4 py-2 border rounded-md bg-sky-500">Edit</a>
                              <a href="#" class="px-4 py-2 border rounded-md bg-red-500">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
