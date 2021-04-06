import 'jquery-modal'
import * as Toastr from 'toastr';
var ApplyJob = {
    init : function ()
    {
        this.showPopupApply()
        this.applyJob()
    },

    showPopupApply()
    {
        $(".js-apply-job").click(function (event){
            event.preventDefault()
            let $this = $(this)
            let hashSlug = $this.attr('data-hash-slug')
            $("#hash_slug").val(hashSlug)
            $("#apply-form").modal({
                escapeClose: true,
                clickClose: true,
                showClose: true
            })
            console.log(hashSlug)
        })
    },

    applyJob()
    {
        $(".js-store-apply").click( function (event){
            event.preventDefault()
            let $form = $("#form-apply");
            var formData = $form.serialize();
            $.ajax({
                url: $form.attr('action'),
                type:'POST',
                data:formData,
                success:function(data){
                    console.log(data)
                    $.modal.close();
                    $("#form-apply")[0].reset()
                    Toastr.success(data.messages)
                },
                error: function (response) {
                    console.log(response)
                }
            });
        })
    }
}

export default ApplyJob
