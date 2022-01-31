@extends('shared.layout')

@section('title', 'Contact')

@section('content')
    <h1>Kontakt</h1>

    <form name="add-contact-form" id="add-contact-form" method="post" action="{{route('contact.store')}}">
        @csrf
        <div class="mb-3">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <span class="input-group-text">Message</span>
            <textarea name="message" class="form-control" aria-label="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
