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

<p class="my-3"><a href="index.php" class="fs-5">Go back</a></p>


<?php include 'inc/footer.php' ?>