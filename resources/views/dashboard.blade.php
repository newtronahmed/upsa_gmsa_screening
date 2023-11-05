<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->


    <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
        Personal Information
    </h2>
    <div class="p-4 sm:ml-64 ">
        {{-- {{ dd(session())}} --}}
        {{-- @if ($example)
        <div> {{$example}}</div>
        @endif --}}
        <form class="w-3/4 mx-auto" method="POST" action="{{ route('dashboard.submit')}}">
            @if(session('success'))
            <div class="px-4 text-red-500 rounded-md text-center my-2">success</div>
            @endif
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                <input type="name" id="name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Ahmed Zubairu">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
            <div class="flex gap-8">
                <div class="flex items-center px-4 border border-gray-200 rounded dark:border-gray-700">
                    <input checked id="sex" type="radio" value="Male" name="sex"
                        class="w-4 h-4 text-blue-600 cursor-pointer bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2"
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male
                    </label>
                </div>
                <div class="flex items-center px-4 border border-gray-200 rounded dark:border-gray-700">
                    <input checked id="sex" type="radio" value="Female" name="sex"
                        class="w-4 h-4 text-blue-600 cursor-pointer bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2"
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                </div>

            </div>

            <div class="mb-6">
                <label for="student_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student
                    ID</label>
                <input type="number" id="student_id" name="student_id"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
            </div>
            <div class="mb-6">
                <label for="department"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                <input type="text" id="department" name="department"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
            </div>
            <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select 
                Level</label>
            <select id="level" name="level"
                class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="level_100">Level 100</option>
                <option value="level_200">Level 200</option>
                <option value="level_300">Level 300</option>
                <option value="level_400">Level 400</option>
            </select>


            <div class="mb-6">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Path
                    No</label>
                <input type="text" name="path_no" id="path_no"  value="{{ $path_no }}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                </div>
                <label for="" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500"> and conditions</a></label>
            </div> -->
            <button type="submit"
                class="text-white my-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                Patient</button>
        </form>
    </div>

</x-app-layout>