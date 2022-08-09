<div class="w-full p-5 mb-5">
    <div class="my-5">
        <h2 class="text-2xl font-semibold leading-tight">Report</h2>
    </div>

    <form class=" grid grid-cols-1 2xl:grid-cols-5 w-full bg-white items-center mb-10 rounded-md overflow-hidden"
        method="POST" autocomplete="off" action="report.php">
        <div class="relative">


            <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input name="startDate" datepicker="" datepicker-buttons="" datepicker-autohide="" type="text"
                datepicker-format="yyyy-mm-dd"
                value="<?php if (isset($_POST['startDate'])) {
                                                                                                                                                        echo $_POST['startDate'];
                                                                                                                                                    } else {
                                                                                                                                                        echo $da = date("Y-m-d");
                                                                                                                                                    } ?>"
                class=" appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-300  py-3 pl-10 rounded-t-md 2xl:rounded-t-none  2xl:rounded-l-md datepicker-input"
                placeholder="Start Date">
        </div>
        <div class="relative">

            <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input name="endDate" datepicker="" datepicker-buttons="" datepicker-autohide="" type="text"
                datepicker-format="yyyy-mm-dd"
                value="<?php if (isset($_POST['endDate'])) {
                                                                                                                                                    echo $_POST['endDate'];
                                                                                                                                                } else {
                                                                                                                                                    echo $da = date("Y-m-d");
                                                                                                                                                } ?>"
                class=" appearance-none block w-full bg-grey-lighter text-grey-darker border
            border-gray-300 py-3 pl-10 datepicker-input" placeholder="End Date">
        </div>
        <div class=" border border-gray-300">
            <select class="js-select2 js-states form-control w-full" name="accountType">
                <option value="" selected>Select Account Type</option>
                <option value="1" <?php


                                    if (isset($_POST['accountType'])) {
                                        if ($_POST['accountType'] == "1") {
                                            echo "selected";
                                        }
                                    }


                                    ?>>Saving Account</option>
                <option value="2" <?php
                                    if (isset($_POST['accountType'])) {
                                        if ($_POST['accountType'] == "2") {
                                            echo "selected";
                                        }
                                    }

                                    ?>>Fixed Deposit Account (6 months)</option>
                <option value="3" <?php
                                    if (isset($_POST['accountType'])) {
                                        if ($_POST['accountType'] == "3") {
                                            echo "selected";
                                        }
                                    }

                                    ?>>Fixed Deposit Acccount (1 year)</option>
            </select>
        </div>
        <div>
            <input type="text" id="simple-search" name="accountID" value="<?= condition($_POST['accountID']) ?>"
                class="bg-white border border-gray-300 text-gray-900   block w-full  py-3 px-4  "
                placeholder="Search By AccountID">
        </div>
        <div class="flex justify-center w-full">
            <button type="submit" name="submit"
                class="bg-gray-600 w-full text-gray-200 py-3 flex justify-center items-center  hover:bg-gray-800">
                Filter
            </button>
            <button type="submit" name="reset"
                class="bg-red-500 w-full text-white py-3 flex justify-center items-center 2xl:rounded-r-md hover:bg-red-600">
                Clear
            </button>
        </div>

    </form>


    <div class="overflow-x-auto  bg-white p-4 rounded-md border border-gray-300">
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
                            Account Type
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
                    <td class="p-4 flex justify-center  whitespace-nowrap">
                        <strong class=" w-32 py-2  bg-gray-500 text-gray-100  rounded-md">

                            <?php


                                if (isset($result['accountType'])) {
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
                                }

                                ?>


                        </strong>

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
                                                                echo "bg-green-100 text-green-600";
                                                                break;
                                                            case "withdraw":
                                                                echo "bg-red-100 text-red-600";
                                                                break;
                                                            default:
                                                                echo "bg-gray-100 text-gray-600";
                                                        }
                                                        ?>

                                                            text-white rounded-md">


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