<h4>My admin</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="<?php echo $base_url.'admin/home.php'; ?>">Home</a></li>
        <li><a href="<?php echo $base_url.'admin/home.php?page=question'; ?>">Add questions</a></li>
        <li><a href="./logout.php">Logout</a></li>
        <li><a href="<?php echo $base_url.'admin/home.php?page=list'; ?>">Show list</a></li>
        <li><a href="<?php echo $base_url.'admin/home.php?page=user_list'; ?>">User list</a></li>
        <li><a href="<?php echo $base_url.'admin/home.php?page=view_marks'; ?>">View_marks</a></li>
      
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
