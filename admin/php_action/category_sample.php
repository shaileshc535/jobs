<?php
$con = mysqli_connect('localhost', 'root', '', 'material_library_ecommerce');
$res = mysqli_query($con, "select * from categories");
$arr = [];
while ($row = mysqli_fetch_assoc($res)) {
	$arr[$row['id']]['category'] = $row['category'];
	$arr[$row['id']]['parent_id'] = $row['parent_id'];
}
buildTreeView($arr, 0);
function buildTreeView($arr, $parrent, $level = 0, $prelevel = -1)
{
	foreach ($arr as $id => $data) {
		if ($parrent == $data['parent_id']) {
			if ($level > $prelevel) {
				echo "<ol>";
			}
			if ($level == $prelevel) {
				echo "</li>";
			}
			echo "<li>" . $data['category'];
			if ($level > $prelevel) {
				$prelevel = $level;
			}
			$level++;
			buildTreeView($arr, $id, $level, $prelevel);
			$level--;
		}
	}
	if ($level == $prelevel) {
		echo "</li></ol>";
	}
}