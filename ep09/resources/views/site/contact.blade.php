@extends('site.master.layout')

@section('content')

  <div class="jumbotron">
      <div class="container text-center">
        <h1 class="display-4">Contato</h1>
            <hr class="my-4">
            <p class="lead">Nossa equipe está sempre a disposição para lhe ajudar. Entre em contato e retornarmos o mais breve possível.</p>
      </div>
  </div>

    <div class="container py-5">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
