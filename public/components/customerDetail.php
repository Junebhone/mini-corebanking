<!-- component -->
<div class=" p-5 w-full">


    <div class="grid gap-10">
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
                        <span><?= $result['PhNumber'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Address</label>
                        <span><?= $result['PhNumber'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Status</label>
                        <span><?= $result['status'] ?></span>
                    </div>
                </div>

            </div>

        </div>



        <div class="gird grid-cols-3">

            <?php

            $select = "select * from account where customerID = $id";
            $query = mysqli_query($con, $select);

            while ($result = mysqli_fetch_array($query)) {

            ?>
            <div class="bg-white border border-gray-300 rounded-lg p-5 ">
                <span class="text-gray-800 text-2xl font-semibold leading-tight mb-10">Account Detail</span>
                <div class="px-4 grid grid-cols-2  gap-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Account ID</label>
                        <span><?= $result['accountID'] ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-500">Customer ID</label>
                        <span><?= $result['accountID'] ?></span>
                    </div>
                </div>

            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>