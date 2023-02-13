<div>
    <section class="py-4">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mr-auto md:flex-0 shrink-0 md:w-8/12">
                <h5 class="dark:text-white">Clients List</h5>
                <p>This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</p>
            </div>
        </div>
        <div class="flex flex-wrap mt-2 -mx-3 lg:mt-6">
            {{-- start card --}}
            @foreach ($data as $list)
                <div class="w-full max-w-full px-3 mb-6 md:flex-0 shrink-0 md:w-6/12 lg:w-4/12">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex">
                                <div class="inline-flex items-center justify-center p-2 text-white transition-all duration-200 rounded-lg w-19 h-19 text-size-base ease-soft-in-out bg-gradient-dark-gray dark:bg-gradient-neutral">
                                    <img class="w-full" src="storage/{{ $list->logo }}" alt="{{ $list->name }}">
                                </div>
                                <div class="my-auto ml-4">
                                    <h6 class="dark:text-white">{{ $list->name }}</h6>
                                    <div>
                                        <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-target="tooltip_trigger">
                                            <img class="w-full rounded-circle" alt="Image placeholder" src="../../../assets/img/team-3.jpg">
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm" id="tooltip" role="tooltip" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(416px, 680px);">
                                            Elena Morison
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(0px);"></div>
                                        </div>
                                        <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-target="tooltip_trigger">
                                            <img class="w-full rounded-circle" alt="Image placeholder" src="../../../assets/img/team-4.jpg">
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm" id="tooltip" role="tooltip" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(428px, 680px);">
                                            Ryan Milly
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(0px);"></div>
                                        </div>
                                        <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-target="tooltip_trigger">
                                            <img class="w-full rounded-circle" alt="Image placeholder" src="../../../assets/img/team-2.jpg">
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm" id="tooltip" role="tooltip" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(440px, 355px);" data-popper-placement="bottom">
                                            Nick Daniel
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(0px);"></div>
                                        </div>
                                        <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-target="tooltip_trigger">
                                            <img class="w-full rounded-circle" alt="Image placeholder" src="../../../assets/img/team-3.jpg">
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm" id="tooltip" role="tooltip" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(452px, 680px);">
                                            Peterson
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(0px);"></div>
                                        </div>
                                        <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-size-xs rounded-circle hover:z-30" data-target="tooltip_trigger">
                                            <img class="w-full rounded-circle" alt="Image placeholder" src="../../../assets/img/team-4.jpg">
                                        </a>
                                        <div class="hidden px-2 py-1 text-white bg-black rounded-lg text-size-sm" id="tooltip" role="tooltip" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(465px, 680px);">
                                            Peterson
                                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(0px);"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="{{ ($list->active == 1) ? 'bg-gradient-lime' : 'bg-gradient-red' }} px-3.6-em text-size-xs-em rounded-1.8 py-2.2-em inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                            {{ ($list->active == 1) ? 'Active' : 'Not Active' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="relative">
                                        <button dropdown-trigger="" class="inline-block py-3 pl-0 pr-2 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 text-slate-400 dark:text-white" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-size-lg" aria-hidden="true"></i>
                                        </button>
                                        <p class="hidden transform-dropdown-show"></p>
                                        <div dropdown-menu="" class="dark:shadow-soft-dark-xl z-100 dark:bg-gray-950 text-size-sm lg:shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 before:text-5.5 transform-dropdown pointer-events-none absolute right-0 left-auto top-0 m-0 -mr-4 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-0 py-2 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8'] sm:-mr-6">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" href="{{ route('clients:update', ['uuid' => $list->uuid]) }}">Update</a>
                                            <a type="button" wire:click="changeStatus('{{ $list->uuid }}')" class="py-1.2 cursor-pointer lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300">Tag {{ ($list->active == True) ? 'Not Active' : 'Active' }}</a>
                                            <a type="button" wire:click="delete('{{ $list->uuid }}')" class="py-1.2 cursor-pointer lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-red-500 hover:bg-gray-200 hover:text-red-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300"">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 leading-normal text-size-sm">{{ $list->address }}</p>
                            <p class="leading-normal text-size-sm">{{ $list->phone }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- add new card --}}
            <div class="w-full max-w-full px-3 mb-6 md:flex-0 shrink-0 md:w-6/12 lg:w-4/12">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex flex-col justify-center flex-auto p-6 text-center">
                        <a href="{{ route('clients:add') }}">
                            <i class="mb-4 fa fa-plus text-slate-400" aria-hidden="true"></i>
                            <h5 class="text-slate-400">New client</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
