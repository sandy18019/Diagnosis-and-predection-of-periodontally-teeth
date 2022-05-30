<?php
require_once('../controller/RegisterController.php');
require_once('../model/RegisterModel.php');

 
if(isset($_POST['signup'])) {
    $model = new Register();
    $controller=new RegisterController($model);
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $Fname =$_POST['Fname'];
    $Lname = $_POST['Lname'];
    $PhoneNo = $_POST['PhoneNo'];

    $controller->signup($Email,$password,$type,$Fname,$Lname,$PhoneNo);
}


?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Your account</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="../assets/img/create-account-office.jpeg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Create Your Account? 
              </h1>
              <form method="POST">                  
              <label class="block mt-4 text-sm">
                <!-- <span class="text-gray-700 dark:text-gray-400">First Name</span> -->
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="First Name"
                  type="First Name"
                  name="Fname"
                  required
                />
              </label>
              <label class="block mt-4 text-sm">
                <!-- <span class="text-gray-700 dark:text-gray-400">Last Name</span> -->
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Last Name"
                  type="Last Name"
                  name="Lname"
                  required
                />
              </label>
              <label class="block text-sm">
                <!-- <span class="text-gray-700 dark:text-gray-400">Email</span> -->
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Email"
                  type="Email"
                  name="Email"
                  required
                />
              </label>
              <label class="block mt-4 text-sm">
                <!-- <span class="text-gray-700 dark:text-gray-400">Password</span> -->
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Enter Your Password"
                  type="password"
                  name="password"
                  required
                />
              </label>
              <label class="block mt-4 text-sm">
                <!-- <span class="text-gray-700 dark:text-gray-400">Confirm password</span> -->
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Confirm Your Password"
                  type="password"
                  required
                />
              </label>
              <label class="block mt-4 text-sm">
                <!-- <span class="text-gray-700 dark:text-gray-400">Password</span> -->
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Enter Phone Number"
                  type="PhoneNo"
                  name="PhoneNo"
                  required
                />
              </label>
                  <button type="submit" name="signup">
                  <label for="TypeID">Create your account as a:</label>
                  <select name="type" id="type" required>
                      <option value="1">Dentist</option>
                      <option value="2">Patient</option>
                  </select>
                  <button type="submit" name="signup"><div
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add Profile</div>
            </button>
              </form>
              <!-- You should use a button here, as the anchor is only used for the example  -->
              
              <hr class="my-8" />
              <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="./LoginView.php"
                >
                  Already have an account? Login
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>