<!-- component -->
<div class=" p-5 w-full">

    <div class="grid gap-5">
        <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">

            <img src=" ./image/bg.jpeg" class="object-cover object-center  h-64 w-full">


            <div class="p-10 flex flex-col">
                <span class="text-gray-800 text-2xl font-semibold leading-tight mb-10">Customer Detail</span>
                <div class="px-4 grid grid-cols-2 lg:grid-cols-4 gap-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Customer ID</label>
                        <span><?= $result['customerID'] ?></span>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500"> Full Name</label>
                        <span><?= $result['FirstName'] . ' ' . $result['LastName'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">First Name</label>
                        <span><?= $result['FirstName'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Last Name</label>
                        <span><?= $result['LastName'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Gender</label>
                        <span><?= $result['Gender'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Date of Birth</label>
                        <span><?= $result['DOB'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Type</label>
                        <span><?= $result['Type'] ?></span>
                    </div>

                    <?php

                    if ($result['Type'] == "enterprise") {

                    ?>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Company Name</label>
                        <span><?= $result['CompanyName'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Company NRC</label>
                        <span><?= $result['CompanyNRC'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Company Address</label>
                        <span><?= $result['CompanyNRC'] ?></span>
                    </div>
                    <?php

                    }

                    ?>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Phone Number</label>
                        <span><?= $result['PhNumber'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">City</label>
                        <span class="capitalize"><?= $result['City'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Address</label>
                        <span><?= $result['Address'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">NRC</label>
                        <span><?php $NRC = $result['NRC'];
                                $state = $result['state_number_en'];
                                $IDtype = $result['IDtype'];
                                $district = $result['long_district'];
                                $back = "/";
                                echo $number = $state . $back . $district . $IDtype . $NRC; ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Status</label>
                        <span><?= $result['status'] ?></span>
                    </div>
                </div>

            </div>

        </div>





        <?php

        $select = "select * from account where customerID = $id";
        $query = mysqli_query($con, $select);

        while ($result = mysqli_fetch_array($query)) {

        ?>
        <div class="grid xl:grid-cols-3 ">
            <div class="bg-white border border-gray-300 rounded-lg p-10">
                <span class="text-gray-800 text-2xl font-semibold leading-tight mb-10">Account Detail</span>
                <div class="px-4 grid grid-cols-2  gap-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Account ID</label>
                        <span><?= $result['accountID'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Account Type</label>
                        <span>
                            <?php
                                switch ($result['accountType']) {
                                    case "1":
                                        echo "Saving Account";
                                        break;
                                    case "2":
                                        echo "Fixed Deposit Account (3 Months)";
                                        break;
                                    case "3":
                                        echo "Fixed Deposit Account (4 Months)";
                                    default:
                                        echo "No account";
                                }

                                ?>
                        </span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Balance</label>
                        <span><?= $result['balance'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Status</label>
                        <span><?= $result['status'] ?></span>
                    </div>
                </div>

            </div>
        </div>

        <?php
        }
        ?>
    </div>
</div>