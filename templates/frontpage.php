<?php include 'inc/header.php'; ?>


<div class="jumbotron bg-light p-3">
  <h1>Find a job</h1>
  <form method="GET" action="index.php">
    <select name="category" class="form-select">
      <option value="0">Choose category</option>
      <?php foreach ($categories as $category) : ?>
        <option value="<?= $category->id ?>"><?= $category->name ?></option>
      <?php endforeach ?>
    </select>
    <input type="submit" class="btn btn-success mt-3 fs-6" value="Find job">
  </form>
</div>
<h3 class="mt-5 text-center"><?= $title ?></h3>
<?php foreach ($jobs as $job) : ?>
  <div class="row marketing align-items-center border border-2 border-top-0 rounded-bottom">
    <div class="col-md-10">
      <h4><?= $job->job_title ?></h4>
      <p><?= $job->job_description ?></p>
    </div>
    <div class="col-md-2">
      <a class="btn btn-lg btn-light" href="job.php?id=<?= $job->id ?>">View</a>
    </div>
  </div>
<?php endforeach ?>

<?php include 'inc/footer.php';
