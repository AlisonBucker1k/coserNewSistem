$(document).ready(function(){
    $('#addPeriodo').on('submit', function(e){
        e.preventDefault();
        let id_curso = $("input[name=id_curso]").val();
        let titulo = $("input[name=titulo_2]").val();
        let sequencia = $("input[name=sequencia_2]").val();

        $.ajax({
            method:'POST',
            url:base_url+'geral/inserir',
            data:{
                id_curso,
                titulo,
                sequencia
            },
            success:function(){
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title: 'O Período Foi Adicionado!'
                  })
            },
            error:function(){
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'error',
                    title: 'Nenhuma Turma Encontrada'
                  })
            }
        });
        
    });

    $('#inputCursos').on('change', function(e){
        let id_curso = this.value;
        let select_2 = $('#inputTurmas');

        let html = '<option disabled="disabled" selected="selected">Selecione uma opção</option>';

        $.ajax({
            type:'POST',
            data:{id_curso},
            url:base_url+'geral/pesquisar',
            success:function(r){
                r = JSON.parse(r);
                
                for(q=0;q<r.length;q++){
                    html += '<option value="'+r[q]['id']+'">'+r[q]['titulo']+'</option>';
                }

                select_2.html(html);

                if(r.length > 0){
                    $('#divInpTurmas').slideDown();
                }else{
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Nenhuma Turma Encontrada'
                      })
                    $('#divInpTurmas').slideUp();
                }
            }
        });
        
    });

});