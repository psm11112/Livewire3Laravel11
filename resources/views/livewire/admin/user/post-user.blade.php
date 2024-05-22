<div>
    <div class="p-10  sm:ml-64">
        <div class="text-2xl font-bold">Add New User</div>

        <livewire:admin.display-message />
        <div class="p-5">

            <form wire:submit="postSave">
                <div class="flex gap-4  mb-6 md:grid-cols-2">

                        @if($photo)
                            <div wire:transition>
                                <img  src="{{$photo->temporaryUrl()}}"
                                      class="rounded-full w-20 h-20 border-2 border-gray-300">
                            </div>
                       @endif
                    <div class="w-1/2"><input wire:model="photo" accept="image/png,image/jpeg,image/jpg"
                            class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <small class="flex font-extralight">SVG, PNG, JPG or GIF (MAX. 800x400px).
                            <div wire:loading  wire:target="photo">
                                <div class=" items-center justify-center  dark:bg-gray-800 dark:border-gray-700 rounded-full w-20 h-20 ">
                                    <div role="status">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>

                                    </div>
                                </div>
                            </div>
                        </small>

                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>
                </div>
                <div class="grid gap-3 grid-cols-2 space-x-4 mb-6 md:grid-cols-2">
                    <div>
                        <x-input-label for="name" :value="__('First Name')"/>
                        <x-text-input wire:model.live="first_name"
                                      id="first_name"
                                      class="block mt-1 w-full"
                                      type="text"
                                      name="first_name"
                                      placeholder="John"
                                      />


                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

                    </div>

                    <div>
                        <x-input-label for="last_name" :value="__('Last Name')"/>
                        <x-text-input wire:model="last_name"
                                      id="last_name"
                                      class="block mt-1 w-full"
                                      type="text"
                                      name="last_name"
                                      placeholder="John"
                                      />


                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

                    </div>


                </div>
                <div class=" grid gap-3 grid-cols-2 space-x-4 mb-6 md:grid-cols-2">
                    <div>
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input wire:model="email"
                                      class="block mt-1 w-full"
                                      type="text"


                                      placeholder="John@gmail.com"
                                      />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="phone" :value="__('Phone')"/>
                        <x-text-input wire:model="phone"
                                      id="phone"
                                      class="block mt-1 w-full"
                                      type="number"
                                      name="phone"
                                      />

                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />


                    </div>


                </div>
                <div class=" grid gap-3 grid-cols-3 space-x-2 mb-6 md:grid-cols-3">
                    <div>
                        <x-input-label for="bod" :value="__('Date Of Birth')"/>
                        <div class="relative max-w-sm">

                            <input  wire:model="bod"  type="date"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Select date">
                        </div>
                    </div>

                    <div wire:ignore>
                        <x-input-label for="name" :value="__('Gender')"/>



                        <select wire:model="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Password')"/>
                        <x-text-input wire:model="password"
                                      id="password"
                                      class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                </div>


                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  wire:loading.attr="disabled" wire:target="postSave">

                    <div wire:loading wire:target="postSave"   role="status">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>

                    </div>
                    <span  wire:target="postSave"  wire:loading.class="hidden" >Submit</span>
                </button>


            </form>

        </div>
    </div>


</div>

<script>
    $(document).ready(function () {
        $("#e1").select2();
    });
</script>
