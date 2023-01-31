<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
    <div class="container">
        <!-- Begin Logo -->
        <x-nav-link class="navbar-brand" :href="route('index')">
            <img src="assets/img/logo.png" alt="logo">
        </x-nav-link>
        <!-- End Logo -->
        <div class="navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Menu -->
            <ul class="navbar-nav ml-auto">
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                    {{ __('Stories') }}
                </x-nav-link>
                @if(auth()->user())
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-nav-link>
                    <form method="POST" class="inline-flex items-center" action="{{ route('logout') }}">
                        @csrf

                        <x-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-nav-link>
                    </form>
                @else
                    <x-nav-link :href="route('login')">
                        {{__('Login')}}
                    </x-nav-link>
                    <x-nav-link :href="route('register')">
                        {{__('Register')}}
                    </x-nav-link>
                @endif
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
            </form>
            <!-- End Search -->
        </div>
    </div>
</nav>