<div>
    <div class="w-full p-6 mx-auto">
        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0">
            <form wire:submit.prevent="submit" enctype="multipart/form-data">
                <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                    <div class="p-6 mb-0 rounded-t-2xl">
                        <h5 class="dark:text-white">Client Info</h5>
                    </div>
                    <div class="flex-auto p-6 pt-0">
                        <div class="flex space-x-4">
                            <div class="relative inline-flex items-center justify-center w-3/12 text-white transition-all duration-200 w-19 text-size-base ease-soft-in-out rounded-xl">
                                <span class="relative inline-block">
                                    <img class="w-full h-full rounded-xl" src="/storage/profile/avatar.jpg" alt="">
                                    <label for="file-input" class="inline-block w-6 h-6 p-1.2 right-0 bottom-0 absolute -mb-2 -mr-2 font-bold text-center uppercase align-middle transition-all bg-gradient-gray text-slate-800 border-0 border-transparent border-solid rounded-lg cursor-pointer leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 active:opacity-85">
                                        <i class="top-0 fa fa-pen text-size-3xs" aria-hidden="true"></i>
                                    </label>
                                    <input wire:model.defer="logo" type="file" id="file-input" style="display: none">
                                    @error('logo') <span class="text-red-500">{{ $message }}</span> @enderror
                                </span>
                            </div>

                            <div class="w-full pl-6">
                                <label class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80" for="Client's Code">Code</label>
                                <div class="mb-4">
                                    <input wire:model.defer="code" type="text" name="Client's Code" placeholder="Client's Code" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                    @error('code') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <label class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80" for="Client's Name">Name</label>
                                <div class="mb-4">
                                    <input wire:model.defer="name" type="text" name="Client's Name" placeholder="Client's Name" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <label class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80" for="Client's Address">Address</label>
                                <div class="mb-4">
                                    <input wire:model.defer="address" type="text" name="Client's Address" placeholder="Client's Address" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                    @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <label class="inline-block mb-2 ml-1 font-bold text-size-xs text-slate-700 dark:text-white/80" for="Client's Contact No">Contact No</label>
                                <div class="mb-4">
                                    <input wire:model.defer="contact_no" type="text" name="Client's Contact No" placeholder="Client's Contact No" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required="">
                                    @error('contact_no') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs bg-gradient-lime leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
