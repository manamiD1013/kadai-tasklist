<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a  class="navbar-brand" href="/">Task List</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <!--<li class="navbar-item">{!! link_to_route('tasks.create', '新規作成', [], ['class' => 'nav-link']) !!}</li>-->
                <li class="navbar-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                <li class="navbar-item"><a href="#" class="nav-link">Logout</a></li>
            </ul>
        </div>
        </div>
        
    </nav>
</header>
