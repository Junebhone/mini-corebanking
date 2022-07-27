<!-- component -->
<div class=" p-5 w-full">
    <form autocomplete="off" action="./withdraw_form.php" method="POST" enctype="multipart/form-data">
        <div class="bg-white rounded-md shadow-md  overflow-hidden">
            <div class="p-10">
                <div class="flex justify-start items-center mb-5">
                    <span class="text-green-800 text-4xl font-semibold leading-tight">WithDraw Form</span>
                </div>
                <div class="grid grid-col-1 md:grid-cols-6">
                    <div class="col-span-full ">
                        <div class="md:flex mb-6">
                            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Account ID
                                </label>
                                <input name="accountID" value="<?= condition($query['accountID']) ?>"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3"
                                    id="grid-first-name" type="text" placeholder="Jane">
                            </div>
                            <div class="md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    amount
                                </label>
                                <input name="amount"
                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                    id="grid-last-name" type="text" placeholder="Enter Amount">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 w-full p-5 px-12 flex justify-end gap-4">
                <button type="submit" name="submit" class="bg-green-600 text-white px-5 py-2 rounded-md">Save</button>
                <button type="reset" class="bg-red-500 text-white px-5 py-2 rounded-md">Cancel</button>
            </div>
        </div>
    </form>
</div>