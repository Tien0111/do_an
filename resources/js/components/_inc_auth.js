// import 'toastr'
import * as Toastr from 'toastr';
var Auth = {
    init : function ()
    {
        this.postLogin()
        this.postRegister()
        this.runToken()
        this.showMessagesLogin()
    },
    runToken()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    },

    showMessagesLogin()
    {
        $(".js-login-message").click(function (event){
            event.preventDefault()
            Toastr.warning('Đăng nhập để thực hiện tính năng này')
            return
        })
    },

    postRegister()
    {
        $(".js-register").click(function (event){
            event.preventDefault()
            let $form = $("#formRegister");
            var formData = $form.serialize();
            $.ajax({
                url: $form.attr('action'),
                type:'POST',
                data:formData,
                success:function(data){
                    if(typeof data.email !== "undefined") {
                        location.reload();
                    }
                },
                error: function (response) {
                    if( response.status === 422 ) {
                        $.each(response.responseJSON.errors,function(field_name,error){
                            $(document).find('[name='+field_name+']').parent().after('<span class="text-error">' +error+ '</span>')
                        })
                    }
                }
            });
        })
    },
    postLogin()
    {
        $(".js-login").click(function (event){
            event.preventDefault()
            let $formLogin = $("#formLogin");
            var formData = $formLogin.serialize();
            console.log(1)
            $.ajax({
                url: $formLogin.attr('action'),
                type:'POST',
                data:formData,
                success:function(response){
                    console.log(response)
                    if(response.status === 422)
                    {
                        const {errors} = response
                        console.log(errors)
                        Object.keys(errors).forEach((error) => {
                            $(document).find('[name='+error+']').parent()
                                .after('<span class="text-error">' +errors[error]+ '</span>')
                        })
                        return;
                        
                    }
                    if(response.status === 200) {
                        location.reload();
                    }
                },
                error: function (response) {
                    
                }
            });
        })
    }
}

export default Auth
