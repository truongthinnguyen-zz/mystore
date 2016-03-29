@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h2 class="text-uppercase">Login</h2>

                <p class="lead">Already our customer?</p>
                <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>

                <hr>

                <form action="customer-orders.html" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection