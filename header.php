<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="#" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Beauty Parlour</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="Index.php" class="mr-5 hover:text-gray-900">Home</a>
      <a href="About.php" class="mr-5 hover:text-gray-900">About</a>
      <a href="Services.php" class="mr-5 hover:text-gray-900">Services</a>
      <a href="Contact.php" class="mr-5 hover:text-gray-900">Contact</a>
    </nav>
    <?php
    session_start();
      if (!isset($_SESSION['user_id'])) {
        echo '<a href="Login.php">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login    
        </button>
      </a>';
      }
      else{
        echo'<a href="php/Logout.php">
        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"> ', $_SESSION['username'],'
        </button>
      </a>';
      }

      // The user is logged in, so display the home page
    ?>
    <a href="Contact.php">
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 ml-3 md:mt-0">Request a call
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </a>

  </div>
</header>
