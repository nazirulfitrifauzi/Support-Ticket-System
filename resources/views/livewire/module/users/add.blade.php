<div>
    <div class="w-full max-w-full px-3 lg:flex-0 shrink-0">
        <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
            <div class="pt-6 pl-6 pr-6 mb-0 rounded-t-2xl">
                <h5 class="dark:text-white">Add User</h5>
                <p class="dark:text-white">Create a new user</p>
                <div class="my-auto ml-auto lg:mt-0">
                    <div class="my-auto ml-auto">
                        <a href="{{ route('users:index') }}" class="inline-block float-right px-8 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-fuchsia shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Back to list</a>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-6 pt-0">
                <form wire:submit.prevent="submit" enctype="multipart/form-data">
                    <div class="-mx-3">
                        <div class="flex">
                            <div class="w-6/12 max-w-full px-3 flex-0">
                                <div class="flex w-full max-w-full">
                                    <div class="relative inline-flex items-center justify-center w-3/12 text-white transition-all duration-200 w-19 text-size-base ease-soft-in-out rounded-xl">
                                        <span class="relative inline-block">
                                            @if($avatar)
                                                <img class="w-full h-full rounded-xl" src="{{ $avatar->temporaryUrl() }}" alt="">
                                            @else
                                                <img class="w-full h-full rounded-xl" src="/storage/profile/avatar.jpg" alt="">
                                            @endif
                                            <label for="file-input" class="inline-block w-6 h-6 p-1.2 right-0 bottom-0 absolute -mb-2 -mr-2 font-bold text-center uppercase align-middle transition-all bg-gradient-gray text-slate-800 border-0 border-transparent border-solid rounded-lg cursor-pointer leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 active:opacity-85">
                                                <i class="top-0 fa fa-pen text-size-3xs" aria-hidden="true"></i>
                                            </label>
                                            <input wire:model.defer="avatar" type="file" id="file-input" style="display: none">
                                            @error('avatar') <span class="text-red-500">{{ $message }}</span> @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-6/12 max-w-full px-3 flex-0">
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <div class="w-1/2 px-3 flex-0">
                                <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Full name @error('name') <span class="inline-block mb-2 ml-1 font-bold text-red-500 text-size-xs">({{ $message }})</span> @enderror</label>
                                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                    <input wire:model.defer="name" type="text" placeholder="Enter name" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 flex-0">
                                <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Email  @error('email') <span class="inline-block mb-2 ml-1 font-bold text-red-500 text-size-xs">({{ $message }})</span> @enderror</label>
                                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                    <input wire:model.defer="email" type="email" placeholder="Enter email" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 px-3 flex-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Password @error('password') <span class="inline-block mb-2 ml-1 font-bold text-red-500 text-size-xs">({{ $message }})</span> @enderror</label>
                                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                    <input wire:model.defer="password" type="password" placeholder="Enter password" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 flex-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80">Confirm Password</label>
                                <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                    <input wire:model.defer="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="Confirm password" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto p-4 pt-0 mt-4">
                            <button type="submit" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-neutral bg-gradient-dark-gray leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Add User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
