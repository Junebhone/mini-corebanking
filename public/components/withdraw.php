<div class="w-full p-5">
    <div class="my-5">
        <h2 class="text-4xl font-semibold leading-tight">Withdraw</h2>
    </div>
    <form class="flex items-center mb-10" method="POST" action="./deposit.php">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="simple-search" name="search"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  "
                placeholder="Search By AccountID, Name, NRC">
        </div>
        <button type="submit" name="submit"
            class="p-2.5 ml-2 text-sm font-medium text-white bg-gray-400 hover:bg-gray-600 transition-all ease-in-out duration-300 rounded-lg border border-gray-300  focus:ring-4 focus:outline-none focus:ring-gray-300 "><svg
                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg></button>
    </form>
    <div class="overflow-x- auto  col-span-1 border border-gray-300 bg-white p-4 rounded-lg ">
        <table class="min-w-full   text-sm divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="py-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Account ID
                        </div>
                    </th>
                    <th class="py-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Name
                        </div>
                    </th>
                    <th class="py-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            NRC

                        </div>
                    </th>
                    <th class="py-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Action

                        </div>
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100 text-center">
                <?php

                while ($result = mysqli_fetch_array($query)) {
                ?>
                <tr>

                    <td class="py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $result['accountID']  ?> </td>
                    <td class="py-4 text-gray-700 whitespace-nowrap">
                        <?= $result['FirstName'] . ' ' . $result['LastName'] ?>
                    </td>


                    <td class="py-4 text-gray-700 whitespace-nowrap">
                        <?= $result['NRC'] ?>
                    </td>
                    <td class="py-4 text-gray-700 whitespace-nowrap flex gap-5 justify-center  items-center">
                        <a href="./withdraw_form.php?accountID=<?= $result['accountID'] ?>"
                            class="bg-red-400 text-white px-4 py-2 rounded-md cursor-pointer">Withdraw</a>
                    </td>
                </tr>
                <?php
                }
                ?>



            </tbody>
        </table>
    </div>

</div>