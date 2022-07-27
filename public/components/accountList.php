<div class="w-full p-5">
    <div class="my-5">
        <h2 class="text-2xl font-semibold leading-tight">Account List</h2>
    </div>
    <div class="overflow-x-auto bg-white p-4 rounded-md shadow-md">
        <table class="min-w-full text-sm divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Customer ID
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Account ID
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Status
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Account Type
                        </div>
                    </th>
                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                        <div class="flex items-center justify-center">
                            Balance
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
                        <?= $result['customerID'] ?> </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= $result['accountID'] ?>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <strong class=" <?php switch ($result['status']) {
                                                case "opened":
                                                    echo "bg-green-100 text-green-700";
                                                    break;
                                                case "closed":
                                                    echo "bg-red-100 text-red-700";
                                                    break;
                                                default:
                                                    echo "bg-gray-500";
                                            } ?> px-3 py-1.5 rounded text-xs font-medium capitalize">
                            <?= $result['status'] ?>
                        </strong>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <strong class="bg-gray-500 text-white px-3 py-1.5 rounded text-xs font-medium">
                            <?php
                                $type = $result['accountType'];
                                switch ($type) {
                                    case "1":
                                        echo "Saving Account";
                                        break;
                                    case "2":
                                        echo "Fixed Account (6 months)";
                                        break;
                                    case "3":
                                        echo "Fixed Acccount (1 year)";
                                }
                                ?>
                        </strong>
                    </td>
                    <td class="p-4 text-gray-700 whitespace-nowrap">
                        <?= "$" . $result['balance']  ?>
                    </td>
                    <td class="py-4 flex justify-center relative gap-5">
                        <a href="./account_opened.php?id=<?= $result['accountID'] ?>"
                            class="bg-green-500 text-white px-3 py-1.5 rounded text-xs font-medium btn-opened">
                            Opened
                        </a>
                        <a href="./account_closed.php?id=<?= $result['accountID'] ?>"
                            class="bg-red-100 text-red-700 px-3 py-1.5 rounded text-xs font-medium btn-closed">
                            Closed </a>
                    </td>
                </tr>
                <?php
                }
                ?>



            </tbody>
        </table>
    </div>
</div>