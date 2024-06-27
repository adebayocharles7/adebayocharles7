<?php
require_once 'Classes/fetchStaff.php';

$fetchStaff = new FetchStaff();
$staffList = $fetchStaff->getAllStaff();
$issueList = $fetchStaff->getAllIssues();
$base_url = "http://localhost/Issue_Log2";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Assign Staff to Issues</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h2 class="mt-3">Assign Staff to Issues</h2>
    <form action="<?php echo $base_url;
                  ?>/includes/assign.inc.php" method="post">
      <?php foreach ($issueList as $issue) : ?>
        <div class="form-group">
          <label for="issue_<?php echo $issue['issue_id']; ?>">Issue: <?php echo $issue['issue_title']; ?></label>
          <select class="form-control" id="issue_<?php echo $issue['issue_id']; ?>" name="staff_assignment[<?php echo $issue['issue_id']; ?>]">
            <option value="">Select Staff</option>
            <?php foreach ($staffList as $staff) : ?>
              <option value="<?php echo $staff['staff_id']; ?>"><?php echo $staff['staff_name']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      <?php endforeach; ?>
      <input type="submit" class="btn btn-primary">Assign Staff</input>
    </form>
  </div>
</body>

</html>