<!-- component -->
<div class="w-full min-h-screen bg-gray-50 flex flex-col justify-center items-center pt-6 sm:pt-0">
    <div class="w-full sm:max-w-md p-5 mx-auto">
        <h2 class="mb-20 text-center text-5xl font-extrabold">Sign Up</h2>
        <?php if ($loginError) {
            echo "<span class='text-white rounded-md bg-red-500 flex justify-center items-center py-2 my-4'>$loginError</span>";
        } ?>
        <form autocomplete="off" method="POST" action="signup.php">
            <div class="mb-4">
                <label class="block mb-1" for="username">UserName <?php

                                                                    condition($username_error)
                                                                    ?></label>

                <input id="username" type="text" name="username"
                    class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="password">Password<?php

                                                                    condition($password_error)

                                                                    ?></label>
                <input id="password" type="password" name="password"
                    class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
            </div>
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded-md border-gray-300 accent-red-500  shadow-sm
focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50" />

                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me
                    </label>
                </div>
                <a href="#" class="text-sm"> Forgot your password? </a>
            </div>
            <div class="mt-6">
                <button type="submit" name="submit"
                    class="w-full inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-red-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">Sign
                    Up</button>
            </div>
            <div class="mt-6 text-center">
                <a href="./login.php" class="underline">Do you already have an account?</a>
            </div>
        </form>
    </div>
</div>