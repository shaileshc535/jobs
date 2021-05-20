<?php
include('assets/_dbconnect.php');
$query2 = "SELECT * FROM categories";
$result2 = mysqli_query($con, $query2);
//$output = array();
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