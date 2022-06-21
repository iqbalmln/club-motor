<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php BASEURL; ?>css/style.css">
  <title><?= $data['title']; ?></title>
</head>
<body>
<nav class="bg-zinc-900 flex items-center h-[10vh]">
  <div class="w-full sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button
          type="button"
          class="inline-flex items-center justify-center p-2 rounded-md
          text-gray-400 hover:text-white hover:bg-gray-700
          focus:outline-none focus:ring-2 focus:ring-inset
          focus:ring-white" aria-controls="mobile-menu"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="block h-6 w-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>

          <svg
            class="hidden h-6 w-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 flex items-center justify-center
        sm:items-stretch sm:justify-start"
      >
        <div class="flex-shrink-0 flex items-center text-orange-400 text-2xl">
          Brave.
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a
              href="<?= BASEURL; ?>"
              class="bg-gray-900 text-white px-3 py-2 rounded-md
              text-sm font-medium"
              aria-current="page"
            >
              Home
            </a>
            <a
              href="<?= BASEURL; ?>about"
              class="text-gray-300 hover:bg-gray-700 hover:text-white
              px-3 py-2 rounded-md text-sm font-medium"
            >
              About Us
            </a>
            <a
              href="<?= BASEURL; ?>product"
              class="text-gray-300 hover:bg-gray-700 hover:text-white
              px-3 py-2 rounded-md text-sm font-medium"
            >
              Product
            </a>
            <a
              href="#"
              class="text-gray-300 hover:bg-gray-700 hover:text-white
              px-3 py-2 rounded-md text-sm font-medium"
            >
              Gallery
            </a>
            <a
              href="<?php BASEURL; ?>contact"
              class="text-gray-300 hover:bg-gray-700 hover:text-white
              px-3 py-2 rounded-md text-sm font-medium"
            >
              Contact Us
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a
        href="#"
        class="bg-gray-900 text-white block px-3 py-2 rounded-md
        text-base font-medium" aria-current="page"
      >
        Dashboard
      </a>

      <a
        href="#"
        class="text-gray-300 hover:bg-gray-700 hover:text-white
        block px-3 py-2 rounded-md text-base font-medium"
      >
        Team
      </a>

      <a
        href="#"
        class="text-gray-300 hover:bg-gray-700 hover:text-white
        block px-3 py-2 rounded-md text-base font-medium"
      >
        Projects
      </a>

      <a
        href="#"
        class="text-gray-300 hover:bg-gray-700 hover:text-white
        block px-3 py-2 rounded-md text-base font-medium"
      >
        Calendar
      </a>
    </div>
  </div>
</nav>