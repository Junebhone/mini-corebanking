<div class="flex flex-col  w-full h-screen p-5">
    <div class="bg-white w-full flex flex-col rounded-md shadow-md">
        <form action="account_registration.php" method="POST" autocomplete="off">
            <span class="text-green-800 text-2xl font-semibold leading-tight flex p-5 justify-start items-center">
                Transfer</span>
            <div class="xl:flex mb-6 px-5">
                <div class="xl:w-1/3 px-3 mb-6 xl:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-first-name">
                        Transfer To
                    </label>
                    <div class="relative">
                        <input name="customerID" id="accountID"
                            class="cursor show-modal  appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3"
                            type="text" placeholder="Select Account">
                        <div
                            class="absolute inset-y-0 right-5 top-0 flex justify-end  items-center   pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#AEAEAE" height="20" width="20">
                                <path d="M10 12.667 4.854 7.521h10.292Z" />
                            </svg>
                        </div>

                    </div>

                </div>

                <div class="xl:w-1/3 px-3 mb-6 xl:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-first-name">
                        Ammount
                    </label>
                    <input name="customerID"
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3"
                        id="grid-first-name" type="number" placeholder="Enter Amount to Transfer">
                </div>
                <div class="xl:w-1/3 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" `
                        for="grid-last-name">
                        Transfer From
                    </label>
                    <div class="relative">
                        <input name="customerID"
                            class="cursor show-modal1 appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3"
                            type="text" placeholder="Select Account">
                        <div
                            class="absolute inset-y-0 right-5 top-0 flex justify-end  items-center   pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#AEAEAE" height="20" width="20">
                                <path d="M10 12.667 4.854 7.521h10.292Z" />
                            </svg>
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


</div>

<div class="bg-black bg-opacity-50 absolute inset-0 hidden   justify-center items-center modal">
    <div class="bg-slate-100 max-w-2xl w-full h-3/4 p-5 overflow-hidden  rounded-md shadow-xl text-gray-800">
        <div class=" flex justify-between items-center" id="content">
        </div>
        <div class="flex border-grey-light mt-5 bg-white border rounded-md">
            <input class="w-full rounded ml-1 p-2" type="text" id="search" name="accountID"
                placeholder="Search with AccountID" autocomplete="off">
            <button name="search" id="ss" class="bg-grey-lightest border-grey border-l shadow hover:bg-grey-lightest">
                <span class="w-auto flex justify-end items-center text-grey p-2 hover:text-grey-darkest">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>
            </button>
        </div>
        <div class="overflow-hidden mt-5 overflow-y-auto h-5/6">
            <div class="flex flex-col w-full gap-4 relative" id="table">


            </div>
        </div>

    </div>

</div>