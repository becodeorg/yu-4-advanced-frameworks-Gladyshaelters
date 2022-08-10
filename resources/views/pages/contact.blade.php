@extends('components.layout')
@section('content')
<section>

    <h1>CONTACT</h1>
    <p>Here there will come an contact form and contact information</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae asperiores et, eveniet illum totam repellendus ab unde ipsum blanditiis, sapiente in consectetur. Autem, impedit nulla magnam quae ipsa recusandae ad.</p>
    <!--REMINDER TO ENTER THE ACTION-->
    <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800">
        @csrf

        <label class="" for="name">
            Name
        </label>
        <input class="" name="name" id="name" value="" placeholder="Your Name">
        <br>
        <label class="" for="email">
            E-mail address
        </label>
        <input class="" name="email" id="email" value="" placeholder="E-mail address">
        <br>
        <label class="" for="message">
            Message
        </label>
        <textarea class="" rows="5" name="message" value="" placeholder="Enter message"></textarea>
        <br>

        <button class="" type="submit">
            Send
        </button>
    </form>    
</section>
@endsection