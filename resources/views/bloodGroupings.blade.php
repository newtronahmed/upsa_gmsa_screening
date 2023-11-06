<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
        Blood Groupings for {{ $id->name}}
    </h2>
    <div class="p-4 sm:ml-64 h-full justify-center flex flex-col">
        <form class="w-3/4 mx-auto" method="POST" action="{{ route('bloodGroupings.submit', ['path_no' => $id->path_no])}}">
            @csrf
            <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                Blood Group</label>
            <select  name="blood_group" 
                class="bg-gray-50 mb-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="A" @selected($id->blood_group == "A")>Blood Group A</option>
                <option value="B" @selected($id->blood_group== "B")>Blood Group B</option>
                <option value="AB" @selected($id->blood_group == "AB")>Blood Group AB</option>
                <option value="O" @selected($id->blood_group == "O")>Blood Group O</option>
            </select>

            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RH typing</label>
            <div class="flex gap-8">
                <div class="flex items-center px-4 border border-gray-200 rounded dark:border-gray-700">
                    <input id="rh" type="radio" value="Positive" name="rh_typing" @checked($id->rh_typing == "Positive")
                        class="w-4 h-4 text-blue-600 cursor-pointer bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2"
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Positive
                    </label>
                </div>
                <div class="flex items-center px-4 border border-gray-200 rounded dark:border-gray-700">
                    <input  id="sex" type="radio" value="Negative" name="rh_typing" @checked($id->rh_typing == "Negative")
                        class="w-4 h-4 text-blue-600 cursor-pointer bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2"
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Negative</label>
                </div>

            </div>


            <button type="submit"
                class="text-white my-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        </form>

    </div>
</x-app-layout>