<?php include 'inc/header.php' ?>
<h2 class="page-header">Create job listing</h2>
<form method="POST" action="create.php" class="fs-5">
    <div class="form-group my-2">
        <label>Company</label>
        <input type="text" class="form-control" name="company">
    </div>
    <div class="form-group my-2">
        <label>Category</label>
        <select type="text" class="form-select" name="category">
            <option value="0">Choose category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group my-2">
        <label>Job Title</label>
        <input type="text" class="form-control" name="job_title">
    </div>
    <div class="form-group my-2">
        <label>Description</label>
        <textarea type="text" class="form-control" name="description"></textarea>
    </div>
    <div class="form-group my-2">
        <label>Location</label>
        <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group my-2">
        <label>Salary</label>
        <input type="text" class="form-control" name="salary">
    </div>
    <div class="form-group my-2">
        <label>Contact user</label>
        <input type="text" class="form-control" name="contact_user">
    </div>
    <div class="form-group my-2">
        <label>Contact email</label>
        <input type="text" class="form-control" name="contact_email">
    </div>
    <input type="submit" class="btn btn-secondary" value="Submit" name="submit">
</form>

<?php include 'inc/footer.php' ?>