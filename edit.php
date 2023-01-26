<?php

include_once 'config/init.php';

$job = new Job;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;
var_dump($job_id);


if(isset($_POST['submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['job_description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];
    var_dump($job_id);
    if($job->update($job_id, $data)) {
        var_dump($job_id);
        echo 'in if';
        redirect('index.php', 'Your job has been updated', 'success');
    } else {
        echo 'in else';
     redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/job-edit.php');

$template->job = $job->getJob($job_id);

$template->categories = $job->getCategories();


echo $template;
