<?php include 'inc/header.php' ?>

<h2 class="page-header"><?= $job->job_title ?> (<?= $job->location ?>)</h2>
<small>Posted by<?= $job->contact_user ?> on <?= $job->post_date ?></small>
<hr>
<p class="lead"><?= $job->job_description ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Company:</strong> <?= $job->company ?></li>
    <li class="list-group-item"><strong>Salary:</strong> <?= $job->salary ?></li>
    <li class="list-group-item"><strong>Company:</strong> <?= $job->contact_email ?></li>
</ul>

<p class="mt-3 mb-4"><a href="index.php" class="btn btn-secondary  mx-2">Go back</a></p>

<div class="mb-3">
    <a href="edit.php?id=<?= $job->id ?>" class="btn btn-warning mx-2">Edit job</a>
    <form style="display:inline" method="POST" action="job.php">
        <input type="hidden" name="del_id" value="<?= $job->id ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>


<?php include 'inc/footer.php' ?>