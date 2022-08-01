<?php

// //Call Session User Function every page
loggedIn($_SESSION['username']);


?>


<div class="bg-gray-800 z-10 md:hidden p-4 sticky top-0 w-full  flex justify-between items-center">
    <img src="./image/uab.png" class="w-32">
    <div class="relative">
        <button id="toggle" class=" hamburger">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </button>
    </div>
</div>
<div id="nav"
    class="bg-gray-800 z-10 text-blue-100 w-60  space-y-6 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full md:sticky h-screen  md:translate-x-0 transition duration-500 ease-in-out">

    <!--     logo -->
    <a href="./index.php" class="text-white w-full flex justify-center items-center space-x-2 px-4">
        <img src="./image/uab.png" class="w-32">
    </a>
    <!--     nav -->
    <nav>
        <a href="./index.php"
            class="block py-2.5 px-4 hover:bg-gray-600 rounded transition duration-500 hover:text-white">
            Dashboard
        </a>
        <div class="btn">
            <button
                class="dropdown flex w-full justify-between items-center gap-2 rounded py-2.5 px-4 capitalize transition duration-500 hover:bg-gray-600 hover:text-white">
                <span> Transaction </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-200" id="arrow"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="my-2 hidden rounded bg-white py-2.5 px-4 text-black" id="drop">
                <div class="flex flex-col w-full divide-y">
                    <a class="py-3 cursor-pointer" href="./transaction.php">Transaction list</a>
                    <a href="./deposit.php" class="py-3 cursor-pointer">Deposit</a>
                    <a href="./withdraw.php" class="py-3 cursor-pointer">Withdrawal</a>

                </div>
            </div>
        </div>
        <div class="btn">
            <button
                class="dropdown flex w-full justify-between items-center gap-2 rounded py-2.5 px-4 capitalize transition duration-500 hover:bg-gray-600 hover:text-white">
                <span> Customer </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-200" id="arrow"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="my-2 hidden rounded bg-white py-2.5 px-4 text-black" id="drop">
                <div class="flex flex-col w-full divide-y">
                    <a class="py-3 cursor-pointer" href="./customer_registration.php">Customer
                        Registration</a>
                    <a href="./customer_list.php" class="py-3 cursor-pointer">Customer List</a>
                </div>
            </div>
        </div>
        <div class="btn">
            <button
                class="dropdown flex w-full justify-between items-center gap-2 rounded py-2.5 px-4 capitalize transition duration-500 hover:bg-gray-600 hover:text-white">
                <span> Account </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-200" id="arrow"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="my-2 hidden rounded bg-white py-2.5 px-4 text-black" id="drop">
                <div class="flex flex-col w-full divide-y">
                    <a class="py-3 cursor-pointer" href="./account_registration.php">Account
                        Registration</a>
                    <a href="./account_list.php" class="py-3 cursor-pointer">Account List</a>
                </div>
            </div>
        </div>
        <div class="btn">
            <button
                class="dropdown flex w-full  justify-between items-center gap-2 rounded py-2.5 px-4 capitalize transition duration-500 hover:bg-gray-600 hover:text-white">
                <span><?php condition($name) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-200" id="arrow"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="my-2 hidden rounded bg-white py-2.5 px-4 text-black" id="drop">
                <div class="flex flex-col gap-4">
                    <span>Profile</span>
                    <span><a href="./logout.php">Logout</a></span>
                </div>
            </div>
        </div>

    </nav>
</div>