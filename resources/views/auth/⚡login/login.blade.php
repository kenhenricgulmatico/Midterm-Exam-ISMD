
<div>
    <div class="dark:bg-neutral-800 bg-card border dark:border-b-gray-600 border-card-line rounded-xl shadow-2xs w-xl m-12">
        <!-- Sign In -->
        <div class="p-4 sm:p-7 lg:p-12">
            <div class="text-center">
                <h3 class="block text-2xl font-bold dark:text-white text-foreground">Sign in</h3>
                <p class="mt-2 text-sm dark:text-white text-muted-foreground-2">
                    Don't have an account yet?
                    <a class="text-blue-600 decoration-2 hover:underline font-medium" href="#">
                        Sign up here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <!-- Social login button -->
                <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover"
                    href="#!">
                    <!-- Google SVG -->
                    Sign in with Google
                </a>

                <div class="py-3 flex items-center text-xs text-muted-foreground uppercase before:flex-1 before:border-t before:border-line-2 before:me-6 after:flex-1 after:border-t after:border-line-2 after:ms-6 dark:text-neutral-500">
                    Or
                </div>

                <!-- Livewire Form -->
                <form wire:submit.prevent="login">
                    <div class="grid gap-y-4">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm mb-2 dark:text-neutral-500 text-foreground">Email address</label>
                            <input type="email" id="email" wire:model.defer="email"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-layer-line bg-layer rounded-lg sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring focus:ring-primary-focus"
                                required>
                            @error('email') <span class="text-xs text-red-600 mt-2">{{ $message }}</span> @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm mb-2 dark:text-neutral-500 text-foreground">Password</label>
                            <input type="password" id="password" wire:model.defer="password"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-layer-line bg-layer rounded-lg sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring focus:ring-primary-focus"
                                required>
                            @error('password') <span class="text-xs text-red-600 mt-2">{{ $message }}</span> @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" wire:model="remember"
                                class="shrink-0 size-4 border-line-3 rounded-sm text-primary focus:ring-0">
                            <label for="remember" class="ms-3 text-sm text-foreground">Remember me</label>
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:bg-layer-focus">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Sign In -->
    </div>

</div>
