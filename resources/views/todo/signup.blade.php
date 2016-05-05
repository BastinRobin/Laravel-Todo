@include('todo.header')

    <div class="col-md-4 col-md-offset-4">

      <form class="form-signin" action="{{ URL::route('post_signup') }}" method="POST">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Register Now</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-success btn-block" type="submit">Create Account</button>
      </form>

    </div> <!-- /container -->

@include('todo.footer')