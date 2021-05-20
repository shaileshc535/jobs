<?php
include('assets/_dbconnect.php');
$query2 = "SELECT * FROM ecom_categories";
$result2 = mysqli_query($con, $query2);
// $output = array();
while ($row = mysqli_fetch_array($result2)) {
    $sub_data["id"] = $row["id"];
    $sub_data["category"] = $row["category"];
    $sub_data["text"] = $row["category"];
    $sub_data["parent_id"] = $row["parent_id"];
    $data[] = $sub_data;
}
foreach ($data as $key => &$value) {
    $output[$value["id"]] = &$value;
}
foreach ($data as $key => &$value) {
    if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
        $output[$value["parent_id"]]["nodes"][] = &$value;
    }
}
foreach ($data as $key => &$value) {
    if ($value["parent_id"] && isset($output[$value["parent_id"]])) {
        unset($data[$key]);
    }
}
echo json_encode($data);

// $res = mysqli_query($con, "select * from categories");
// $arr = [];
// while ($row = mysqli_fetch_assoc($res)) {
//     $arr[$row['id']]['category'] = $row['category'];
//     $arr[$row['id']]['parent_id'] = $row['parent_id'];
// }
// buildTreeView($arr, 0);
// function buildTreeView($arr, $parrent, $level = 0, $prelevel = -1)
// {
//     foreach ($arr as $id => $data) {
//         if ($parrent == $data['parent_id']) {
//             if ($level > $prelevel) {
//                 echo "<ol>";
//             }
//             if ($level == $prelevel) {
//                 echo "</li>";
//             }
//             echo "<li>" . $data['category'];
//             if ($level > $prelevel) {
//                 $prelevel = $level;
//             }
//             $level++;
//             buildTreeView($arr, $id, $level, $prelevel);
//             $level--;
//         }
//     }
//     if ($level == $prelevel) {
//         echo "</li></ol>";
//     }
// }