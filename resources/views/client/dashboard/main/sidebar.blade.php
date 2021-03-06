<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            Altech Poultry Breeders
        </div>

        <ul class="nav">
            <li class="active">
                <a href="#">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li>
                <a href="{{ route('count.data.today') }}">
                    {{--<i class="ti-view-list-alt"></i>--}}
                    <p>Today Count Data</p>
                </a>
            </li>

            <li>
                <a href="{{ route('chart.today') }}">
                    {{--<i class="ti-user"></i>--}}
                    <p>Today Chart</p>
                </a>
            </li>

            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="ti-text"></i>--}}
                    {{--<p>Reports</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="ti-pencil-alt2"></i>--}}
                    {{--<p>Icons</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="ti-map"></i>--}}
                    {{--<p>Something</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<i class="ti-bell"></i>--}}
                    {{--<p>Notifications</p>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>