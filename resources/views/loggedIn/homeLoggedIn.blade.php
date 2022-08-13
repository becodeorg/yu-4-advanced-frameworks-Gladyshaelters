@extends('components.loggedInLayout')
@section('content')
<section>

    <h1>Hello world!LOGGED IN</h1>

        <h1>Hello {{ $user }} ! you are logged in</h1>

    <p> The navbar here should change and have all the extra options,
        or maybe an extra dshboard? not sure yet.</p>
       <p>Extra content to be reached will logged in.</p>
    <ul>
        <li>homepage with summary of latest newsfeed, album updates,...</li>
        <li>profile</li>
        <li>newsfeed wich can be updated</li>
        <li>albums</li>
        <li>stats page</li>
        <li></li>
    </ul>

    <h2>Last status/post update</h2>


    <h3><a href="/posts">See all status updates</a></h3>
   
@endsection