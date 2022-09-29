<header>
    <div class="header-container">
        <h1>BoolTrain</h1>
        <nav>
            <ul>
                <li><a class="{{Request::route()->getName() == 'homepage'?'active':''}}" href="{{route('homepage')}}">Homepage</a></li>
                <li><a class="{{Request::route()->getName() == 'trains'?'active':''}}" href="{{route('trains')}}">All Trains</a></li>
                <li><a class="{{Request::route()->getName() == 'info'?'active':''}}" href="{{route('info')}}">Info</a></li>
            </ul>
        </nav>
    </div>
</header>