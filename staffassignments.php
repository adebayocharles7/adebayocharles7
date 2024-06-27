<?php
require_once 'view/header.php';

require_once 'Classes/displayAssignments.php';

$displayAssignments = new DisplayAssignments();
$assignments = $displayAssignments->getAssignments();
?>

<!--
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <div class="container center-content">
    <!--<div class="text-center">-->

<h1 class="center-text">
  Staff Assignments
</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Issue ID</th>
      <th>Issue Title</th>
      <th>Assigned Staff</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($assignments as $assignment) : ?>
      <tr>
        <td><?php echo htmlspecialchars($assignment['issue_id']); ?></td>
        <td><?php echo htmlspecialchars($assignment['issue_title']); ?></td>
        <td><?php echo htmlspecialchars($assignment['staff_name'] ?? 'Unassigned'); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>

</body>

</html>