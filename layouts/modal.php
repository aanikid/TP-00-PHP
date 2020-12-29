<!--Modals Component-->

<!-- Login Modal -->
<form method="POST" action="security/login.php" class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="loginModalLabel">Login</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="login" class="sr-only">Login</label>
                    <input class="form-control" type="text" name="login" id="login" placeholder="Login">
                </div>
                
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input class="form-control" type="password" name="password" id="login_password" placeholder="Password">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</form>