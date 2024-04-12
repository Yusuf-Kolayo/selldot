<?php

function dump_var($var) {
    echo '<pre>';
        var_dump($var);
    echo '</pre>';
}



function getUserImgName ($connection, $user_id) {
       
    $sql = "SELECT img_name FROM users WHERE user_id=?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, 's', $user_id);
    mysqli_stmt_execute($stmt);  
    $rs = mysqli_stmt_get_result($stmt);
    $n_row = mysqli_num_rows($rs);  

    if ($n_row>0) {
        $row = mysqli_fetch_assoc($rs);
        
        $img_name  = $row['img_name'];
        if (($img_name!=null)&&is_writable('users_dp/'.$img_name)) {
            $imgUrl  = 'users_dp/'.$img_name;
        } else {
            $imgUrl = '../assets/images/user-dummy.webp';
        }

        return $imgUrl;
    } else {
        return '../assets/images/user-dummy.webp';
    }

}

