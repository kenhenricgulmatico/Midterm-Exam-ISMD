
<div>
    <div class="bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-xl shadow-2xs">
  <!-- Sign Up -->
  <div class="p-4 sm:p-7">
    <div class="text-center">
      <h3 id="hs-modal-signup-label" class="block text-2xl font-bold text-gray-800 dark:text-neutral-200">Sign up</h3>
      <p class="mt-2 text-sm text-gray-600 dark:text-neutral-300">
        Already have an account?
        <a class="text-blue-600 dark:text-blue-500 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium" href="#">
          Sign in here
        </a>
      </p>
    </div>

    <div class="mt-5">
      <!-- Social Login -->
      <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 text-gray-800 dark:text-white shadow-2xs hover:bg-gray-50 dark:hover:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:focus:bg-neutral-700" href="#">
        <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
          <!-- Google SVG -->
        </svg>
        Sign up with Google
      </a>

      <!-- Divider -->
      <div class="py-3 flex items-center text-xs text-gray-400 dark:text-neutral-500 uppercase before:flex-1 before:border-t before:border-gray-200 dark:before:border-neutral-700 before:me-6 after:flex-1 after:border-t after:border-gray-200 dark:after:border-neutral-700 after:ms-6">Or</div>

      <!-- Form -->
      <form>
        <div class="grid gap-y-4">
          <!-- Full Name -->
          <div>
            <label for="full-name" class="block text-sm mb-2 text-gray-800 dark:text-neutral-200">Full Name</label>
            <div class="relative">
              <input type="text" id="full-name" name="full-name" placeholder="John Doe"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                required aria-describedby="full-name-error">
              <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
              </div>
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="full-name-error">Please enter your full name</p>
          </div>
          <!-- End Full Name -->

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm mb-2 text-gray-800 dark:text-neutral-200">Email address</label>
            <div class="relative">
              <input type="email" id="email" name="email"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                required aria-describedby="email-error">
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address</p>
          </div>
          <!-- End Email -->

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm mb-2 text-gray-800 dark:text-neutral-200">Password</label>
            <div class="relative">
              <input type="password" id="password" name="password"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                required aria-describedby="password-error">
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
          </div>
          <!-- End Password -->

          <!-- Confirm Password -->
          <div>
            <label for="confirm-password" class="block text-sm mb-2 text-gray-800 dark:text-neutral-200">Confirm Password</label>
            <div class="relative">
              <input type="password" id="confirm-password" name="confirm-password"
                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                required aria-describedby="confirm-password-error">
            </div>
            <p class="hidden text-xs text-red-600 mt-2" id="confirm-password-error">Password does not match</p>
          </div>
          <!-- End Confirm Password -->

          <!-- Checkbox -->
          <div class="flex items-center">
            <input id="checkbox" name="checkbox" type="checkbox"
              class="shrink-0 size-4 bg-transparent border-gray-300 dark:border-neutral-600 rounded-sm shadow-2xs text-blue-600 dark:text-blue-500 focus:ring-0 focus:ring-offset-0 checked:bg-blue-600 dark:checked:bg-blue-500 checked:border-blue-600 dark:checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none">
            <label for="checkbox" class="ms-3 text-sm text-gray-800 dark:text-neutral-200">
              I accept the <a class="text-blue-600 dark:text-blue-500 decoration-2 hover:underline font-medium" href="#">Terms and Conditions</a>
            </label>
          </div>
          <!-- End Checkbox -->

          <!-- Submit -->
          <button type="submit"
            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 dark:bg-blue-500 border border-transparent text-white hover:bg-blue-700 dark:hover:bg-blue-600 focus:outline-hidden focus:bg-blue-700 dark:focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
            Sign up
          </button>
        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>
  <!-- End Sign Up -->
</div>
</div>
