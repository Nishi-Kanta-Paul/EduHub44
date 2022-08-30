function getComments($db,$post_id){
    $query = "SELECT * FROM contact WHERE post_id = $post_id ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    $data = array();

    while($d = mysqli_fetch_assoc($run)){
        $data[] = $d;
    }
    return $data;  
}


function getBook_info($db,$post_id){
    $query = "SELECT * FROM contact WHERE post_id = $post_id ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    $data = array();

    while($d = mysqli_fetch_assoc($run)){
        $data[] = $d;
    }
    return $data;  
}
