<div class="container-login">
    <nav>
        <?php include('../src/components/nav.php'); ?>
    </nav>
    <div class="box">
        <div class="one">
            <div class="in">
                <p>Log In to</p>
                <p>CICT Research</p>
                <p>Repository System</p>
                <p>If you don’t have an account register</p>
                <div class="div">
                    <p>You can</p> &nbsp;
                    <a href="signup.php">Register here !</a>
                </div>
            </div>

        </div>

        <div class="two">
            <div class="inn">
                <img src="../src/img/pana.png" alt="pic">
            </div>
        </div>
        
        <div class="three">
            <div class="innn">
                <form method="POST" class="form max-w-sm mx-auto">
                    <h2>Login</h2>
                <div class="mb-5">
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    placeholder="Enter Student no." required />
                </div>
                <div class="mb-5">
                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    placeholder="Password" required />
                </div>
                <div class="flex justify-end mb-5">
                    <a href="">Forgot Password?</a>
                </div>
                <br>
                <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>