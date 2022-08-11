@extends('components.layout')
@section('content')
<section>

    <h1>Log in</h1>
    <p>Log in to your profile</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores et, eveniet illum totam repellendus ab unde ipsum blanditiis, sapiente in consectetur. Autem, impedit nulla magnam quae ipsa recusandae ad.</p>
    <!--Don't forget to put the directing location in action-->
    <form action="" method="POST" class="">
        @csrf

        <label class="" for="email">
            E-mail address
        </label>
        <input class="" name="email" id="email" type="email" value="" placeholder="E-mail address">

        <label class="" for="password">
            Password
        </label>
        <input class="" name="password" id="password" type="password" placeholder="Password">

        <button class="" type="submit">
            Log In
        </button>


</section>
@endsection