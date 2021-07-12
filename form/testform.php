<?php require 'lib/functions.php';
?>
<h1>CURRICULUM DEVELOPMENT</h1>
<form action="/testform.php" method="POST">
<div class="form-group">
    <label for="Learning objectives are clearly defined and measurable" class="control-label">Learning objectives are clearly defined and measurable</label>
    
    <select name="Learning objectives are clearly defined and measurable" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>

</div>
<div class="form-group">
    <label for="Learning objectives are in line with student need" class="control-label">Learning objectives are in line with student needs</label>
    <select name="Learning objectives are in line with student need" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="Learning objectives are in line with industry need" class="control-label">Learning objectives are in line with industry needs</label>
    <select name="Learning objectives are in line with industry need" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="Content development is in line with the learning objectives" class="control-label">Content development in line with the learning objectives</label>
    <select name="Content development is in line with the learning objectives" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="Content revision and updating is done regularly" class="control-label">Content revision and updating is done regularly</label>
    <select name="Content revision and updating is done regularly" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="Curriculum is flexible enough to incorporate changes" class="control-label">Curriculum is flexible enough to incorporate changes</label>
    <select name="Curriculum is flexible enough to incorporate changes" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="Choice Based Credit System is followed in true sense" class="control-label">Choice Based Credit System is followed in true sense</label>
    <select name="Choice Based Credit System is followed in true sense" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="Programs are in line with mission and vision of Department & University" class="control-label">Programs are in line with mission and vision of Department & University</label>
    <select name="Programs are in line with mission and vision of Department & University" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>
<div class="form-group">
<label for="New Program Started in Last One Year" class="control-label">New Program Started in Last One Year</label>
    <select name="New Program Started in Last One Year" required>
    <option value=> </option>
    <option value="yes">yes</option>
    <option value="no">no</option> 
    <option value="not known">not known</option> </select>
</div>

<button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-heart"></span> Submit
</button>
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){ 
    $conn = get_connection(); $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $one = $_POST['Learning_objectives_are_clearly_defined_and_measurable']; 
    $two = $_POST['Learning_objectives_are_in_line_with_student_need'];
    $three = $_POST['Learning_objectives_are_in_line_with_industry_need'];
    $four = $_POST['Content_development_is_in_line_with_the_learning_objectives'];
    $five = $_POST['Content_revision_and_updating_is_done_regularly'];
    $six = $_POST['Curriculum_is_flexible_enough_to_incorporate_changes'];
    $seven = $_POST['Choice_Based_Credit_System_is_followed_in_true_sense'];
    $eight = $_POST['Programs_are_in_line_with_mission_and_vision_of_Department_&_University'];
    $nine = $_POST['New_Program_Started_in_Last_One_Year']; 
    $sql = "INSERT INTO test1 (learning_objectives_are_clearly_defined_and_measurable,learning_objectives_are_inline_with_student_need,learning_are_inline_with_industry_need,content_development_is_inline_with_the_learning_objectives,content_revision_and_updating_is_done_regularly,curriculum_is_flexible_enough_to_incorporate_changes,choice_based_credit_system_is_followed_in_true_sense,programs_are_inline,new_program_started_in_last_one_year)
     VALUES ('$one', '$two', '$three', '$four', '$five', '$six', '$seven', '$eight', '$nine')";
    $conn->exec($sql);
    
}
?>
