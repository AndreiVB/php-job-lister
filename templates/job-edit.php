<?php include 'inc/header.php' ?>
<?= var_dump($job) ?>
<?= var_dump($job->id) ?>
<h2 class="page-header">Edit job listing</h2>
<form method="POST" action="edit.php?id=<?= $job->id ?>" class="fs-5">
    <div class="form-group my-2">
        <label>Company</label>
        <input type="text" class="form-control" name="company" value="<?= $job->company ?>">
    </div>
    <div class="form-group my-2">
        <label>Category</label>
        <select type="text" class="form-select" name="category">

            <option value="0">Choose category</option>
            <?php foreach ($categories as $category) : ?>
                <?php if ($job->category_id == $category->id) : ?>
                    <option value="<?= $category->id ?>" selected><?= $category->name ?></option>
                <?php else : ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endif  ?>

            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group my-2">
        <label>Job Title</label>
        <input type="text" class="form-control" name="job_title" value="<?= $job->job_title ?>">
    </div>
    <div class="form-group my-2">
        <label>Description</label>
        <textarea type="text" class="form-control" name="description"><?= $job->job_description ?></textarea> 
    </div>
    <div class="form-group my-2">
        <label>Location</label>
        <input type="text" class="form-control" name="location" value="<?= $job->location ?>">
    </div>
    <div class="form-group my-2">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary" value="<?= $job->salary ?>">
    </div>
    <div class="form-group my-2">
        <label>Contact user</label>
        <input type="text" class="form-control" name="contact_user" value="<?= $job->contact_user ?>">
    </div>
    <div class="form-group my-2">
        <label>Contact email</label>
        <input type="text" class="form-control" name="contact_email" value="<?= $job->contact_email ?>">
    </div>
    <input type="submit" class="btn btn-secondary" value="Submit" name="submit">
</form>

<?php include 'inc/footer.php' ?>