<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="post" action="update.php" class="ng-pristine ng-valid">
    <div class="modal-content">
      <div class="modal-header subscribe-bg subscribe-block">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Subscribe our Newsletter

</h4>
      </div>
      <div class="modal-body">        
          <fieldset class="form-group inline-label">
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="John Doe">
            <label for="formGroupExampleInput">Your name</label>
          </fieldset>
          <fieldset class="form-group inline-label">
            <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="mail@gmail.com">
            <label for="formGroupExampleInput2">Your email</label>
          </fieldset>
          
          <fieldset class="form-group inline-label">
            Yes: <input type="radio" name="human" value="yes"> No: <input type="radio" name="human" value="no" checked="checked">
            <label for="formGroupExampleInput2">Are you human?:</label>
          </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" name="addSubscriber" class="btn btn-primary">Subscribe</button>
      </div>
      </form>
    </div>

</head>
</html>