<!-- component -->


<div class=" p-5 w-full">
    <form autocomplete="off" action="customer_registration.php" method="POST" enctype="multipart/form-data">
        <div class="bg-white rounded-md shadow-md  overflow-hidden">
            <div class="p-10">
                <div class="flex justify-center items-center mb-5">
                    <span class="text-green-800 text-2xl font-semibold leading-tight">Cutomer Registration</span>
                </div>

                <div class="grid grid-col-1 md:grid-cols-6">
                    <div class="col-span-full ">
                        <div class="flex my-5">
                            <div class="font-bold">Contact Information</div>
                        </div>
                        <div class="md:flex mb-6">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    First Name
                                </label>
                                <input name="FirstName" value=""
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3"
                                    id="grid-first-name" type="text" placeholder="Jane">
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Last Name
                                </label>
                                <input name="LastName"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                    id="grid-last-name" type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="md:flex mb-6">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Gender
                                </label>
                                <select class="js-select2 js-states form-control w-full " name="Gender">
                                    <option value="" selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="nothing">Prefer Not To Say</option>
                                </select>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Date of Birth
                                </label>
                                <div class="relative">
                                    <div class=" absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="DOB" datepicker="" datepicker-buttons="" datepicker-autohide=""
                                        type="text" datepicker-format="yyyy/mm/dd"
                                        class=" appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-10 mb-3 datepicker-input"
                                        placeholder="Select date">
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-password">
                                NRC Number
                            </label>
                            <div class="grid grid-cols-1  md:grid-cols-3 gap-5">
                                <div class="">
                                    <select name="state" id="stateNumber" class="js-select ">
                                        <option value="" selected>Select State Number</option>
                                        <?php

                                        foreach ($query as $key => $value) {

                                        ?>
                                        <option value="<?= $value['state_number_en'] ?>">
                                            <?= $value['state_number_en'] ?></option>

                                        <?php

                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="">
                                    <select name="district" id="district" class="js-select">
                                        <option value="" selected>Select Distrct</option>

                                    </select>
                                </div>
                                <div class="">



                                    <input name="NRC"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="text" placeholder="Enter NRC Number">



                                </div>
                            </div>

                        </div>
                        <div class=" md:flex">

                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-password">
                                    Customer Type
                                </label>
                                <select name="Type" class="js-select2 w-full" id="customerSelect">
                                    <option value="" selected>Select Customer Type</option>
                                    <option value="individual">Individual</option>
                                    <option value="enterprise">Enterprise</option>
                                </select>
                            </div>
                        </div>
                        <div id="Company" class="hidden overflow-hidden">
                            <div class="flex my-10">
                                <div class="font-bold">Company Information</div>
                            </div>
                            <div class=" md:flex mb-2">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-city">
                                        Company Name
                                    </label>
                                    <input name="CompanyName"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="text" placeholder="Albuquerque">
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-state">
                                        Company NRC
                                    </label>
                                    <input name="CompanyNRC"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-city" type="text" placeholder="Albuquerque">
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-zip">
                                        Company Address
                                    </label>
                                    <input name="CompanyAddress"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                        id="grid-zip" type="text" placeholder="90210">
                                </div>
                            </div>
                        </div>
                        <div class="flex my-10">
                            <div class="font-bold">Contact Information</div>
                        </div>
                        <div class=" md:flex mb-2">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-city">
                                    Phone Number
                                </label>
                                <input name="PhNumber"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                    id="grid-city" type="text" placeholder="09421768835">
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-state">
                                    City
                                </label>
                                <select class="js-select2 w-full " name="City">
                                    <option value="" selected>Select City</option>
                                    <option value="ygn">Yangon</option>
                                    <option value="mdy">Mandalay</option>
                                    <option value="npt">NayPyiTaw</option>
                                </select>
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-zip">
                                    Address
                                </label>
                                <input name="Address"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                    id="grid-zip" type="text" placeholder="41/17 (B) Golden Hill Villa">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-gray-50 w-full p-5 px-12 flex justify-end gap-4">
                <button type="submit" name="submit" class="bg-green-600 text-white px-5 py-2 rounded-md">Save</button>
                <button type="reset" class="bg-red-500 text-white px-5 py-2 rounded-md">Cancel</button>
            </div>
    </form>
</div>