/**
 * Created by Asus on 4/27/2017.
 */

function add_new_fields()
{
    //needs to be done, but not now!.
}
function form_submit()
{
    var form = $('#invoice_form').serialize();

    $.ajax(
    {
    url: 'html_form.php',
        data: form,
        type: 'post',
    success: function(result){
        console.log(result)
    }

    })
}