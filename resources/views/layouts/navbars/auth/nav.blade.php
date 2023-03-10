<!-- Navbar -->
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 bg-transparent rounded-lg">
                <li class="leading-normal text-size-sm">
                    <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                </li>
                <li class="text-size-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
                <div class="ml-2 relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span
                    class="text-size-sm ease-soft leading-5.6 absolute z-50 {{ (Request::is('rtl') ? '-mr-px border-l-0 rounded-tl-none rounded-bl-none' : '-ml-px border-r-0 rounded-tr-none rounded-br-none') }} flex h-full items-center whitespace-nowrap rounded-lg border border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                    <i class="fas fa-search"></i>
                    </span>
                    <input type="text"
                    class="{{ (Request::is('rtl') ? 'pr-8.75 -mr-px pl-0' : 'pl-8.75 -ml-px pr-3') }} text-size-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                    placeholder="Type here..." />
                </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                    <a href="javascript:;" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-size-sm text-slate-500">
                        <livewire:auth.logout />
                    </a>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-size-sm text-slate-500"
                    sidenav-trigger>
                    <div class="w-4.5 overflow-hidden">
                        <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    </div>
                    </a>
                </li>

                <!-- notifications -->
                <li class="relative flex items-center pr-2 px-4">
                    <p class="hidden transform-dropdown-show"></p>
                    <a href="javascript:;" class="block p-0 transition-all text-size-sm ease-nav-brand text-slate-500"
                    dropdown-trigger aria-expanded="false">
                    <i class="cursor-pointer fa fa-bell"></i>
                    </a>

                    <ul dropdown-menu class="text-size-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                        <!-- add show class on dropdown open js -->
                        <li class="relative mb-2">
                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                                <div class="flex py-1">
                                    <div class="my-auto">
                                        <img src="../assets/img/team-2.jpg"
                                        class="inline-flex items-center justify-center {{ (Request::is('rtl') ? 'ml-4' : 'mr-4') }} text-white text-size-sm h-9 w-9 max-w-none rounded-xl" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 font-normal leading-normal text-size-sm"><span class="font-semibold">New
                                            message</span> from Laur</h6>
                                        <p class="mb-0 leading-tight text-size-xs text-slate-400">
                                        <i class="mr-1 fa fa-clock"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- end Navbar -->