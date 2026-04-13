
<div>
   <div class="max-w-md mx-auto bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-xl shadow-md">
  <div class="p-6 sm:p-8">
    <!-- Header -->
    <div class="text-center mb-6">
      <h3 class="text-2xl font-bold text-gray-800 dark:text-neutral-200">Sign up</h3>
      <p class="mt-2 text-sm text-gray-600 dark:text-neutral-300">
        Already have an account?
        <a href="{{ route('login') }}" class="text-blue-600 dark:text-blue-500 hover:underline font-medium">
          Sign in here
        </a>
      </p>
    </div>

    <!-- Form -->
    <form wire:submit.prevent="register" class="space-y-5">
      <!-- Full Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Full Name</label>
        <input type="text" id="name" wire:model.defer="name"
          class="mt-1 block w-full rounded-lg border-gray-300 dark:border-neutral-700 bg-white dark:bg-neutral-800 text-gray-900 dark:text-neutral-200 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-200 sm:text-sm" required>
        @error('name') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Email address</label>
        <input type="email" id="email" wire:model.defer="email"
          class="mt-1 block w-full rounded-lg border-gray-300 dark:border-neutral-700 bg-white dark:bg-neutral-800 text-gray-900 dark:text-neutral-200 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-200 sm:text-sm" required>
        @error('email') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Password</label>
        <input type="password" id="password" wire:model.defer="password"
          class="mt-1 block w-full rounded-lg border-gray-300 dark:border-neutral-700 bg-white dark:bg-neutral-800 text-gray-900 dark:text-neutral-200 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-200 sm:text-sm"
          placeholder="••••••••" required>
        @error('password') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Confirm Password</label>
        <input type="password" id="password_confirmation" wire:model.defer="password_confirmation"
          class="mt-1 block w-full rounded-lg border-gray-300 dark:border-neutral-700 bg-white dark:bg-neutral-800 text-gray-900 dark:text-neutral-200 placeholder-gray-400 focus:border-blue-500 focus:ring focus:ring-blue-200 sm:text-sm"
          placeholder="••••••••" required>
        @error('password_confirmation') <span class="text-xs text-red-600 mt-1">{{ $message }}</span> @enderror
      </div>

      <!-- Checkbox -->
      <div class="flex items-center">
        <input id="checkbox" type="checkbox"
          class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <label for="checkbox" class="ml-2 block text-sm text-gray-700 dark:text-neutral-300">
          I accept the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Terms and Conditions</a>
        </label>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full py-3 px-4 flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
        Sign up
      </button>
    </form>
    <!-- End Form -->
  </div>
</div>

</div>
