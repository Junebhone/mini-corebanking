<div class="flex flex-col  w-full h-screen p-5">
    <div class="bg-white w-full flex flex-col rounded-md shadow-md">
        <form action="account_registration.php" method="POST">
            <span
                class="text-green-800 text-2xl font-semibold leading-tight flex p-5 justify-start items-center">Account
                Registration</span>
            <div class="md:flex mb-6 px-5">
                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-first-name">
                        Customer-ID
                    </label>
                    <input name="customerID" value="<?= $customer_id ?>"
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3"
                        id="grid-first-name" type="text" placeholder="Jane">
                </div>

                <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                        for="grid-first-name">
                        Account Type
                    </label>
                    <select class="js-select2 js-states form-control w-full " name="accountType">
                        <option value="" selected>Select Account Type</option>
                        <option value="1">Saving Account</option>
                        <option value="2">Fixed Deposit Account (6 months)</option>
                        <option value="3">Fixed Deposit Acccount (1 year)</option>
                    </select>
                </div>
                <div class="md:w-1/3 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" `
                        for="grid-last-name">
                        Deposit Balance
                    </label>
                    <input name="balance"
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                        id="grid-last-name" type="text" placeholder="Deposit Balance">
                </div>

            </div>
            <div class="bg-gray-50 w-full p-5 px-12 flex justify-end gap-4">
                <button type="submit" name="submit" class="bg-green-600 text-white px-5 py-2 rounded-md">Save</button>
                <button type="reset" class="bg-red-500 text-white px-5 py-2 rounded-md">Cancel</button>
            </div>
        </form>

    </div>


</div>