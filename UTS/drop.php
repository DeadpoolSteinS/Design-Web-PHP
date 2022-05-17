<?php

$conn = mysqli_connect("localhost", "root", "", "design_web");

// delete some data with nim is parameter
function drop($id)
{
    global $conn;

    // delete this data
    $query = "DELETE FROM fifa_player WHERE id=$id";
    mysqli_query($conn, $query);
}

if(isset($_GET["id"]))
{
    drop($_GET["id"]);
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
}
else
{
    echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
}
?>