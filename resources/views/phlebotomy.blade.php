<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
        Phlebotomy for {{ $id->name}}
    </h2>
    <div class="p-4 sm:ml-64 h-full justify-center flex flex-col">
        <form class="w-3/4 mx-auto" method="POST" action="{{ route('phlebotomy.submit', ['path_no' => $id->path_no])}}">
            @csrf
            <div class="mb-6"> 
                <label for="bp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">phlebotomist</label>
                <input type="sex" id="bp" name="phlebotomist" value="{{ $id->phlebotomist }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            </div>
            <div class="mb-6"> 
                <label for="bp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phlebotomy time</label>
                <input type="datetime-local" id="bp" name="phlebotomy_time" value="{{ $id->phlebotomy_time }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            </div>
            
          
            <button type="submit" class="text-white my-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

        </form>

    </div>
</x-app-layout>