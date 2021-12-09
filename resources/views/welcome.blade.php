<!DOCTYPE html>
<html>
    <head>
        <title>Pusher Test</title>

{{--        @role('admin')--}}
            <h1>Hello Admin</h1>
{{--        @endrole--}}

{{--        @role('super-admin')--}}
            <h1>Hello Super Admin</h1>
{{--        @endrole--}}

{{--        @can('create')--}}
            <h1>Hello Super Admin</h1>
{{--        @endcan--}}

        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script type="text/javascript">

            Pusher.logToConsole = true;

            var pusher = new Pusher('220f66376ae61d274b7f', {
                cluster: 'ap2'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event-100-1', function(data) {
                alert(JSON.stringify(data));
                console.log(JSON.stringify(data))
            });

            var channel2 = pusher.subscribe('type-event');
            channel2.bind('type-events', function(data) {
                // alert(JSON.stringify('User is Typing....'));
                console.log('User is Typing....')
            });

        </script>
    </head>
    <body>
        <h1>Pusher Test</h1>
        <p>
            Try publishing an event to channel <code>my-channel</code>
            with event name <code>my-event</code>.
        </p>
    </body>
</html>
{{--@lang('guj.welcome')--}}


{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--    <head>--}}
{{--        <title>here your title</title>--}}
{{--    </head>--}}
{{--    <body>--}}

{{--        @can('demo',auth()->user())--}}
{{--            <h1>Lol</h1>--}}
{{--        @endcan    --}}

{{--        <h1>My h1 Heading.</h1>--}}
{{--        <h2>My h2 Heading.</h2>--}}
{{--        <h3>My h3 Heading.</h3>--}}
{{--        <h4>My h4 Heading.</h4>--}}
{{--        <h5>My h5 Heading.</h5>--}}
{{--        <h6>My h6 Heading.</h6>--}}

{{--        <p>My first paragraph.</p>--}}

{{--        <a href="link">click me.</a>--}}

{{--        <div>--}}
{{--            This is My First Div.--}}
{{--        </div>--}}

{{--        <form action="data" method="post">--}}
{{--            @csrf--}}
{{--            @captcha--}}
{{--            <input type="text" name="name">--}}
{{--            <input type="submit" name="">--}}
{{--        </form>--}}

{{--        <span>My First Span.</span>--}}
{{--        <a href="second">Click</a>--}}
{{--    </body>--}}
{{--    <script type="text/javascript">--}}
{{--        --}}
{{--    </script>--}}
{{--</html>--}}
