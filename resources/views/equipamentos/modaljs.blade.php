<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-nusp").click(function(event){
        event.preventDefault();
        var nusp = $("input[name=ime_id]").val();
        $.ajax({
            type:'POST',
            url:'/nusp',
            data:{ime_id:nusp,},
            success:function(data){
                $("#username").val(data.nusp);
                $('#findNUSP').modal('hide');
            },
            error:function(data){
                alert("fracasso: NUSP não encontrado.");
            },
        });
	});
</script>
