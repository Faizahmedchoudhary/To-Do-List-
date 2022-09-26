<h2 class="my-3 text-center" >Showing All Task</h2>

<?php 
   $count = 1;
?>


<!-- delete all list -->
<?php echo form_open('pages/deleteAllTask') ?>
         <button class="btn btn-success mb-3 " type="submit" name="Delete All" >Delete All</button>


<table class="mb-3" id="mytable">
    <thead>
        
        <tr>
            <th> <input type="checkbox" id="select_all" /> </th>
            <th>ID</th>
            <th>Task</th>
            <th>Description</th>
            <th>Status</th>
            <th>Completion Date</th>
            <th>Action</th>
        </tr>
        
    </thead>
    <?php foreach ($tasks as $task) : ?>
        
    <tbody>

          <tr>
              <td><input type="checkbox" name="checkbox" class="checkbox" value=" <?php echo $task['id'] ?> "/></td>         


              <td> <?php echo $count++ ; ?></td>
              
              <td> <?php echo  $task['task']; ?></td>

              <td style="width:30vw;"> <?php echo  $task['description']; ?></td>

              <td> <?php echo  $task['status']; ?></td>

              <td> <?php echo  $task['compdate']; ?></td>
              <td>
                  <a  class="btn btn-default" href="edit?id=<?php echo  $task['id']; ?>">Edit</a>
                  <?php echo form_open('pages/deletetask/'.$task['id']); ?> 
                  <input type="submit" value="Delete" class="btn btn-danger">
                 </form>
            </td>
          </tr>

    </tbody>
    <?php endforeach; ?>
</table>


</form>
<!-- delete all list end -->
