
<h2 class="my-3 text-center"><?= $title ?> </h2>



<!-- form starts -->
 <?php echo form_open('pages/updatetask') ?> 

 <input type="hidden" class="form-control"  name="id" value="<?php echo $task['id']; ?>"  id="exampleInputEmail1" aria-describedby="emailHelp">


   <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Task</label>
   <input type="text" class="form-control" name="task" value="<?php echo $task['task']; ?>"  id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea id="editor1" style="height:40vh;" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $task['description']; ?></textarea>
  </div>

  <div>

  <select name="status" value="<?php echo $task['status']; ?>" class="form-select mb-3 w-25" aria-label="Default select example" >
    <option value="Completed">Completed</option>
    <option value="Incomplete">Incomplete</option>
    <option value="Pending">Pending</option>
  </select>

  <div class="mb-3 w-25" >
    <label for="">Enter Completeion Date</label>
    <input type="date" name="compdate" value="<?php echo $task['compdate']; ?>" class="form-control">
  </div>



  <button type="submit" name="submit" class="mb-3 btn btn-primary">Submit</button>
  <?php echo validation_errors(); ?>
  <!-- form ends -->
</form>




