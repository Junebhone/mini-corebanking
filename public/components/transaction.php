<div class="w-full p-5 mb-5">
    <div class="my-5">
        <h2 class="text-2xl font-semibold leading-tight">Transaction List</h2>
    </div>
    <div class="overflow-x-auto  bg-white p-4 rounded-md shadow-md">
        <table class="min-w-full  text-sm divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Transaction ID
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Account ID
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Amount
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Date
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Description
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
                        <?= $result['transactionID'] ?> </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= $result['accountID'] ?>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= $result['amount'] ?>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= $result['date'] ?>
                    </td>
                    <td class="p-4 flex justify-center  whitespace-nowrap">
                        <strong class=" w-32 py-2   <?php

                                                        switch ($result['description']) {
                                                            case "deposit":
                                                                echo "bg-green-100 text-green-700";
                                                                break;
                                                            case "withdraw":
                                                                echo "bg-red-100 text-red-700";
                                                                break;
                                                            default:
                                                                echo "bg-gray-100 text-gray-700";
                                                        } ?> text-white rounded-md">




                            <?= $result['description']  ?></strong>

                    </td>

                </tr>
                <?php
                }
                ?>



            </tbody>
        </table>
    </div>
</div>