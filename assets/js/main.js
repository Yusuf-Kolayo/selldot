var edit_buttons = Array.from(document.getElementsByClassName('edit-btn'))
edit_buttons.forEach(function(edit_button) {
    edit_button.addEventListener('click', function (e) {
        var button = e.target;
        var itemID = button.getAttribute('ad-item-id')
        console.log(itemID)
        var data2send = {'item_id':itemID}
        $.ajax({
            url:"fetch_ad_edit_form.php",
            dataType:"text",
            method:"GET",
            data:data2send,
            success:function(response){
                $('#edit_modal_body').html(response);    //  $('#sp_year').html(year);   $('#aj_msg').html('');  
            }
        });
    })
});