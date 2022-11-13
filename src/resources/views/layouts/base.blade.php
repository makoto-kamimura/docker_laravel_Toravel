<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')

    <body>
        <div class="container-fluid">

            <div class="row">
                <div class="col-12" style="margin: 1rem;">

                    {{-- header --}}
                    @include('layouts.header')

                </div>
            </div>

            {{-- @include('layouts.page_header') --}}

            <div class="row">
                <div class="col-2">

                    {{-- sidemenu --}}
                    @include('layouts.sidemenu')

                </div>
                
                <div class="col-10">

                    {{-- itinerary_list --}}
                    @yield('content')

                </div>
            </div>

            {{-- @include('layouts.sidebar',['SideList'=>$MiddleList['SideList']]) --}}

            <div class="row">
                <div class="col-12" style="margin: 1rem;">

                    @include('layouts.footer')

                </div>
            </div>

        </div>     
    </body>
</html>