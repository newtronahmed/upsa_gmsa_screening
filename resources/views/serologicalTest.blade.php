<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 text-center leading-tight">
        Test Results for {{ $id->name}}
    </h2>
    <div class="p-4 sm:ml-64 h-full justify-center flex flex-col">
        <form class="w-3/4 mx-auto">
            CheckId
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hepatitis B</label>
            <div class="flex gap-8">
                <div class="flex items-center px-4 border border-gray-200 rounded dark:border-gray-700">
                    <input  id="sex" type="radio" value="Reactive" @checked($id->hepatitis_b == "Reactive") value="Reactive"  name="hepatitis_b"
                        class="w-4 h-4 text-blue-600 cursor-pointer bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2"
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Reactive
                    </label>
                </div>
                <div class="flex items-center px-4 border border-gray-200 rounded dark:border-gray-700">
                    <input  id="hepatitis_b" type="radio" value="Non-reactive" @checked($id->hepatitis_b == "Non-reactive") name="hepatitis_b"
                        class="w-4 h-4 text-blue-600 cursor-pointer bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2"
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Not Reactive</label>
                </div>

            </div>
            <div class="mb-6">
                <label for="sex" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">H. pylori</label>
                <input type="sex" id="sex" value="{{ $id->h_pylori}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
            </div>
            <div class="mb-6">
                <label for="sex" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">VDRL</label>
                <input type="sex" id="sex" value="{{ $id->vdrl}}"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required>
            </div>


            <button type="submit"
                class="text-white my-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                new account</button>

        </form>

    </div>
</x-app-layout>