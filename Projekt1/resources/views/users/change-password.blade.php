<x-layout>

    <x-card
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Change password
                        </h2>
                        
                    </header>

                    <form method="POST" action="/change-password">
                        @csrf
                       
                        <div class="mb-6 mt-6">
                            <label
                                for="old_password"
                                class="inline-block text-lg mb-2"
                            >
                                Old Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="old_password"
                            />


                            @error('old_password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-6 mt-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                            >
                                New Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password"
                            />


                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password2"
                                class="inline-block text-lg mb-2"
                            >
                                Confirm Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password_confirmation"
                            />

                            @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Update Password
                            </button>
                        </div>

                        
                    </form>
                </x-card>
</x-layout>