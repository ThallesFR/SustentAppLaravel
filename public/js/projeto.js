function deleteRegistroPaginacao (rotaUrl, idDoRegistro){

    if(confirm("Deseja confirmar a exclusão do item?")){
        $.ajax({
            url:rotaUrl,
            method: 'DELETE',
            headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                id: idDoRegistro,
            },
            beforeSend: function(){
                $.blockUI({
                    message: 'Excluindo...',
                    timeout:2000,
                });
            },
        }).done(function(data){

            $.unblockUI();
            if(data.success == true){
                window.location.reload();
            }else{
                alert("Não foi possível excluir")
            }

        }).fail(function (data){
            $.unblockUI();
            alert('Não foi possível buscar os dados');
        });
    }
}

