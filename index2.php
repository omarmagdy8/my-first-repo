<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4 text-center">Student Dashboard</h2>
    <form method="GET"">
    <div class="input-group mb-3">
        <input type="text" name="search"class="form-control" placeholder="Search by name or degree">
        <button class="btn btn-primary" formmethod="get">Search</button>
    </form>
    <?php
$students = [
    ['name' => 'Omar', 'degree' => 'Arabic language'],
    ['name' => 'Abdullah', 'degree' => 'language and translations'],
    ['name' => 'Ahmed', 'degree' => 'Arabic language'],
    ['name' => 'John doe', 'degree' => 'Computer Science'],
];

$search = $_GET["search"]; 

$students_filter = [];

if ($search) {
    foreach ($students as $student) {
        if ($search === $student['name'] || $search === $student['degree']) {
            $students_filter[] = $student;
        }
    }
} else {
    $students_filter = $students;
}
if (!empty($students_filter)) {
    echo "<table class='table table-bordered'>
            <thead class='table-dark'>
                <tr>
                    <th>Name</th>
                    <th>Degree</th>
                </tr>
            </thead>
            <tbody>"; }
    foreach ($students_filter as $student) {
        echo "<tr>
                <td>{$student['name']}</td>
                <td>{$student['degree']}</td>
              </tr>";
    }
    echo "  </tbody>
          </table>";

 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>