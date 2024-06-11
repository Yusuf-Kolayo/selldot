window.addEventListener('load', function (){
    
    var edit_ad_buttons = Array.from(document.getElementsByClassName('edit-ad-btn'))
    edit_ad_buttons.forEach(function(edit_button) {
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




    


    var delete_ad_buttons = Array.from(document.getElementsByClassName('delete-ad-btn'))
    delete_ad_buttons.forEach(function(delete_button) {
        delete_button.addEventListener('click', function (e) {
            var button = e.target;
            var itemID = button.getAttribute('ad-item-id')
            console.log(itemID)
            var data2send = {'item_id':itemID}
            $.ajax({
                url:"fetch_ad_delete_form.php",
                dataType:"text",
                method:"GET",
                data:data2send,
                success:function(response){
                    $('#delete_ad_modal_body').html(response);    //  $('#sp_year').html(year);   $('#aj_msg').html('');  
                }
            });
        })
    });






    var edit_pic_buttons = Array.from(document.getElementsByClassName('edit-pic-btn'))
    edit_pic_buttons.forEach(function(edit_pic_button) {
        edit_pic_button.addEventListener('click', function (e) {
            var button = e.target;
            var itemID = button.getAttribute('ad-item-id')
            console.log(itemID)
            var data2send = {'item_id':itemID}
            $.ajax({
                url:"fetch_ad_edit_pic_form.php",
                dataType:"text",
                method:"GET",
                data:data2send,
                success:function(response){
                    $('#edit_pic_modal_body').html(response);    //  $('#sp_year').html(year);   $('#aj_msg').html('');
                    
                    function readURL(input) {
                        if (input.files && input.files[0]) { 
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('#preview_img').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $('#img_name').change(function() { readURL(this); });
                }
            });
        })
    });








    var edit_category_buttons = Array.from(document.getElementsByClassName('edit-category-btn'))
    edit_category_buttons.forEach(function(edit_button) {
        edit_button.addEventListener('click', function (e) {
            var button = e.target;
            var categtoryID = button.getAttribute('category-id')
            console.log(categtoryID)
            var data2send = {'category_id':categtoryID}

            $('#edit_modal_body').html('<div class="text-center p-5"><img src="../assets/images/preloader1.gif" width="150" alt=""></div>')

            $.ajax({
                url:"fetch_category_edit_form.php",
                dataType:"text",
                method:"GET",
                data:data2send,
                success:function(response){
                     $('#edit_modal_body').html(response);
                }
            });
        })
    });







    
    var btn_update_user_dp = document.getElementById('btn_update_user_dp')
    if (btn_update_user_dp) {
        btn_update_user_dp.addEventListener('click', function (e) {
            var button = e.target;
            var userID = button.getAttribute('user-id')
            console.log(userID)
            var data2send = {'user_id':userID}
            $.ajax({
                url:"fetch_user_dp_form.php",
                dataType:"text",
                method:"GET",
                data:data2send,
                success:function(response){
                    $('#update_user_dp_modal_body').html(response);    //  $('#sp_year').html(year);   $('#aj_msg').html('');
                    
                    function readURL(input) {
                        if (input.files && input.files[0]) { 
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('#preview_img').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $('#img_name').change(function() { readURL(this); });
                }
            });
        })
    }






    var switchButtons = Array.from(document.getElementsByClassName('switch-ad-status'))
    switchButtons.forEach(switchButton => {
        switchButton.addEventListener('click', function () {
            var itemID = switchButton.getAttribute('ad-item-id')
            console.log(itemID)
            var data2send = {'item_id':itemID}
            $.ajax({
                url:"toggleAdStatus.php",
                dataType:"json",
                method:"GET",
                data:data2send,
                success:function(response){
                    console.log(response)
                },
                error:function() {
                    alert('something went wrong, pls try again ...')
                }
            });
        })
    });



})