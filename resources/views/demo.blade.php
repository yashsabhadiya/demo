<form method="post" action="{{ route('submit') }}">
    @csrf
    <input type="text" name="text" id="dd">
    <input type="submit">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">


    const dd = () => {
        'aaaaaaaa   '
    }

    console.log(dd);

    $(document).on('keyup','#dd',function (){
        console.log('lol')
        $.ajax({
            type:"post",
            url:"{{ route('send-type-event') }}",
            data:{'_token':"{{ csrf_token() }}",'name':'yash'},
            success:function (res){
                console.log(res)
            }
        })

    });

</script>
