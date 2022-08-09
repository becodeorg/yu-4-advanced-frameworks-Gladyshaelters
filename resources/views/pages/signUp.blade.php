@extends('components.layout')
@section('content')
<section>

    <h1>Create an account</h1>
    <p>Here you will sign up with a form to create an account on the platform to get acces</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores et, eveniet illum totam repellendus ab unde ipsum blanditiis, sapiente in consectetur. Autem, impedit nulla magnam quae ipsa recusandae ad.</p>
    <!--Don't forget to put the directing location in action-->
    <form action="" method="POST" class="">
        @csrf

        <label class="" for="name">
            Name
        </label>
        <input class="" name="name" id="name" type="name" value="" placeholder="Your Name">

        <label class="" for="email">
            E-mail address
        </label>
        <input class="" name="email" id="email" type="email" value="" placeholder="E-mail address">

        <label class="" for="password">
            Password
        </label>
        <input class="" name="password" id="password" type="password" placeholder="Password">

        <button class="" type="submit">
            Sign Up
        </button>


</section>
@endsection