<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautify-you</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3726250977468249"
     crossorigin="anonymous"></script>
</head>
<body>

    <?php include('header.php'); ?>

      <div class="flex justify-center" style="
      height: 100vh;">
        <div class="flex flex-col justify-center items-center md:flex-row shadow rounded-xl max-w-7xl w-[90%]  m-2">
            <div class=" w-full md:w-3/4">
                <div class="text-xl cursor-pointer flex flex-col justify-center items-center mt-5 md:mt-0 py-4">

                    <h1 class="font-semibold text-xl md:text-5xl text-gray-600 m-2">Create your account</h1>
                    <h1 class="text-sm font-medium text-gray-600 m-2">Sign-in using Social accounts</h1>
                    <div class="text-lg lg:text-xl text-center space-x-5 m-2">

                        <a href="#">
                            <i
                                class="fa-brands fa-facebook-f text-white  bg-blue-500 rounded-full px-[14px] py-[10px] "></i>
                        </a>
                        <a href="#">
                            <i
                                class="fa-brands fa-twitter text-white bg-cyan-400  rounded-full px-[10px] py-[10px] "></i>
                        </a>
                        <a href="#">
                            <i
                                class="fa-brands fa-google-plus-g text-white bg-red-500 rounded-full px-[10px] py-[10px] "></i>
                        </a>
                    </div>
                    <h1 class="text-sm font-medium text-gray-600 m-2">OR</h1>

                </div>

<!-- Form -->


                <form method="post" action="php/Signup.php">
                    <div class="flex flex-col justify-center items-center m-2 space-y-6 md:space-y-8">
                        <div class="">
                            <input type="text" placeholder="User Name" id="username" name="username" required
                                class=" bg-gray-100 rounded-lg px-5 py-2 focus:border border-blue-600 focus:outline-none text-black placeholder:text-gray-600 placeholder:opacity-50 font-semibold md:w-72 lg:w-[340px]">
                        </div>
                        <div class="">
                            <input type="email" placeholder="Email" id="email" name="email" required
                                class=" bg-gray-100 rounded-lg px-5 py-2 focus:border border-blue-600 focus:outline-none text-black placeholder:text-gray-600 placeholder:opacity-50 font-semibold md:w-72 lg:w-[340px]">
                        </div>
                        <div class="">
                            <input type="password" placeholder="Password" id="password" name="password" required
                                class=" bg-gray-100 rounded-lg px-5 py-2 focus:border border-blue-600 focus:outline-none text-black placeholder:text-gray-600 placeholder:opacity-50 font-semibold md:w-72 lg:w-[340px]">
                        </div>

                    </div>
                    <div class="text-center mt-7">
                        <button
                        type="submit"
                            class=" px-24 md:px-[118px] lg:px-[140px] py-2 rounded-md text-white bg-gradient-to-r from-pink-400 to-indigo-500  font-medium m-2 mb-6 ">Sign
                            In</button>
                    </div>
                </form>
                
            </div>
            <div
                class="h-[100%] w-full md:w-1/3  bg-gradient-to-r from-pink-400 to-indigo-500  items-center flex justify-center">

                <div class="text-white text-base font-semibold text-center my-10 space-y-2 m-2">
                    <h1 class="text-5xl">Wait !</h1>
                    <h1 class="">Already have an account?</h1>
                    <a href="Login.php">
                    <button class="bg-white rounded-2xl px-4 mt-2 text-indigo-500 py-1">Login</button></a>
                </div>

            </div>

        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/290d4f0eb4.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Beauty Parlour</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 —Beauty Parlour
            <a href="https://www.instagram.com/shashank_bhatt_" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@ShashankBhatt</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="https://www.facebook.com" class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a href="https://www.twitter.com" class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a href="https://www.instagram.com/shashank_bhatt_"  class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a href="https://www.linkedin.com" class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>

      <?php if ($userExists) { ?>
    <script>
        $(document).ready(function() {
            $('#userExistsModal').modal('show');
        });
    </script>
<?php } ?>

</body>
</html>