
<div>
    <div class="max-w-md mx-auto bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-xl shadow-sm">
  <div class="p-6 sm:p-8">
    <!-- Header -->
    <div class="text-center mb-6">
      <h2 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">Sign in</h2>
      <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
        Don't have an account?
        <a class="text-blue-600 hover:underline font-medium" href="#">Sign up here</a>
      </p>
    </div>

    <!-- Social Login -->
    <a href="#!"
       class="w-full inline-flex justify-center items-center gap-x-2 py-3 px-4 text-sm font-medium rounded-lg border border-gray-200 dark:border-neutral-700 bg-gray-50 dark:bg-neutral-700 text-gray-700 dark:text-neutral-200 hover:bg-gray-100 dark:hover:bg-neutral-600 transition">
      <!-- Google Icon -->
      <svg class="w-5 h-5" viewBox="0 0 24 24"><!-- Google SVG --></svg>
      Sign in with Google
    </a>

    <!-- Divider -->
    <div class="flex items-center my-6 text-xs text-gray-400 uppercase">
      <span class="flex-1 border-t border-gray-200 dark:border-neutral-700"></span>
      <span class="px-3">Or</span>
      <span class="flex-1 border-t border-gray-200 dark:border-neutral-700"></span>
    </div>

    <!-- Form -->
    <form wire:submit.prevent="login" class="space-y-5">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Email address</label>
        <input type="email" id="email" wire:model.defer="email"
          class="hs-input mt-2 block w-full rounded-lg border-gray-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 text-gray-800 dark:text-neutral-200 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-200 sm:text-sm"
          placeholder="you@example.com" required>
        @error('email') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Password</label>
        <input type="password" id="password" wire:model.defer="password"
          class="hs-input mt-2 block w-full rounded-lg border-gray-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 text-gray-800 dark:text-neutral-200 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-200 sm:text-sm"
          placeholder="••••••••" required>
        @error('password') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror

        <!-- Forgot Password -->
        <div class="mt-2">
          <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
        </div>
      </div>

      <!-- Remember Me -->
      <div class="flex items-center">
        <input id="remember" type="checkbox" wire:model="remember"
          class="hs-checkbox shrink-0 rounded text-blue-600 border-gray-300 focus:ring-blue-500">
        <label for="remember" class="ml-2 text-sm text-gray-700 dark:text-neutral-300">Remember me</label>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="hs-button w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
        Sign in
      </button>
    </form>
  </div>
</div>

</div>
