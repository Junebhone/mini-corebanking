<div class="w-full p-5">
    <div class="my-5">
        <h2 class="text-2xl font-semibold leading-tight">Customer List</h2>
    </div>
    <div class="overflow-x-auto bg-white p-4 rounded-md shadow-md">
        <table class="min-w-full text-sm divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Name
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Address
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Status
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Type
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            NRC

                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
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

                    <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $result['FirstName'] . " " . $result['LastName']  ?> </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= $result['Address'] ?>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <strong class=" px-3 py-1.5 rounded <?php

                                                                switch ($result['status']) {
                                                                    case "active":
                                                                        echo "bg-green-200 text-green-600";
                                                                        break;
                                                                    case "blocked":
                                                                        echo "bg-red-200 text-red-600";
                                                                        break;
                                                                    default:
                                                                        echo "bg-gray-500";
                                                                } ?> text-xs font-medium">
                            <?= $result['status'] ?>
                        </strong>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <strong class="bg-gray-500 text-white px-3 py-1.5 rounded text-xs font-medium">
                            <?= $result['Type'] ?>
                        </strong>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= $result['NRC'] ?>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap flex gap-5 justify-center items-center">
                        <a href="./customer_list_edit.php?id=<?= $result['customerID'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                        <a href="./customer_list_delete.php?id=<?= $result['customerID'] ?>"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="red" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg></a>
                        <a href="./customer_detail.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                        <a href="./account_registration.php?id=<?= $result['customerID'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>



            </tbody>
        </table>
    </div>
</div>