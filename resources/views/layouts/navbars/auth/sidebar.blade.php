<!-- sidenav  -->
<aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 block w-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 ml-4 -translate-x-full xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="{{ url('') }}" target="_blank">
            <img src="../assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Support Ticket System</span>
        </a>
    </div>
    <hr class="h-px mt-0 bg-transparent via-black/40 bg-gradient-to-r from-transparent to-transparent " />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
                        {{ (Request::is('dashboard') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}"
                    href="{{ url('dashboard') }}">

                    <div class="{{ (Request::is('dashboard') ? ' bg-gradient-fuchsia text-white' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa fa-home"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                </a>
            </li>

            {{-- seperator --}}
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-size-xs opacity-60"> Modules</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ (Request::is('clients') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}" href="{{ url('clients') }}">
                    <div class="{{ (Request::is('clients') ? ' bg-gradient-fuchsia text-white' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa fa-address-book-o"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Clients</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ (Request::is('projects') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}" href="{{ url('projects') }}">
                    <div class="{{ (Request::is('projects') ? ' bg-gradient-fuchsia text-white' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa fa-folder-open"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Projects</span>
                </a>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ (Request::is('tickets') ? 'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}" href="{{ url('tickets') }}">
                    <div class="{{ (Request::is('tickets') ? ' bg-gradient-fuchsia text-white' : '') }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class="fa fa-ticket"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Tickets</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="mx-4">
        <!-- load phantom colors for card after: -->
        <p class="hidden after:bg-gradient-dark-gray after:bg-gradient-cyan after:bg-gradient-orange after:bg-gradient-lime after:bg-gradient-red after:bg-gradient-slate">
        </p>

        <div class="after:opacity-65 after:bg-gradient-slate relative flex min-w-0 flex-col items-center break-words rounded-2xl border-0 border-solid border-blue-900 bg-white bg-clip-border shadow-none after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl after:content-['']" sidenav-card>
            <div class="mb-7.5 absolute h-full w-full rounded-2xl bg-cover bg-center" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
            <div class="relative z-20 flex-auto w-full p-4 text-left text-white">
                <div class="flex items-center justify-center w-8 h-8 mb-4 text-center bg-white bg-center rounded-lg icon shadow-soft-2xl">
                    <i class="top-0 z-10 text-transparent ni ni-diamond text-size-lg bg-gradient-slate bg-clip-text opacity-80" sidenav-card-icon></i>
                </div>
                <div class="transition-all duration-200 ease-nav-brand">
                    <h6 class="mb-0 text-white">Need help?</h6>
                    <p class="mt-0 mb-4 font-semibold leading-tight text-size-xs"> Don't hesitate to contact us!</p>
                    <a href="mailto:nazirul@csc.net.my" class="inline-block w-full px-8 py-2 mb-0 font-bold text-center text-black uppercase transition-all ease-in bg-white border-0 border-white rounded-lg shadow-soft-md bg-150 leading-pro text-size-xs hover:shadow-soft-2xl hover:scale-102">Contact Now</a>
                </div>
            </div>
        </div>
</aside>
<!-- end sidenav -->