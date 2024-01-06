
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">Life-Link</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('home')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('post')}}">Post</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('profile')}}">Profile</a>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('transaction')}}">Transaction</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('review')}}">Review</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">About us</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('signup')}}">Sign Up</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                    </li>
                    
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search Organ">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                </div>
            </div>
        </nav>