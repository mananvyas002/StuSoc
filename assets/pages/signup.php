<div class="login" style="width: 100%; height: 120vh; overflow: hidden;">
    <div class="col-lg-4 col-md-8 col-sm-12 bg-white border rounded p-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?signup">
            <div class="d-flex justify-content-center">

                <img class="mb-4" src="assets/images/StuSoc.png" alt="" height="45">
            </div>
            <h1 class="h5 mb-3 fw-normal">Create new account</h1>
            <div class="d-flex gap-3 my-3">
                <div class="form-floating mt-1 col-12">
                    <input type="text" name="name" value="<?= showFormData('name') ?>"
                        class="form-control rounded-0" placeholder="username/email">
                    <label for="floatingInput">Name</label>
                </div>
            </div>
            <?= showError('name') ?>

            <div class="d-flex gap-3 my-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1"
                        <?= isset($_SESSION['formdata']) ? '' : 'checked' ?> <?= showFormData('gender') == 1 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="2"
                        <?= showFormData('gender') == 2 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios3">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="0"
                        <?= showFormData('gender') == 0 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios2">
                        Other
                    </label>
                </div>
            </div>
            <div class="form-floating mt-1">
                <input type="email" name="email" value="<?= showFormData('email') ?>" class="form-control rounded-0"
                    placeholder="username/email">
                <label for="floatingInput">Email</label>
            </div>
            <?= showError('email') ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->            
            <div class="form-floating mt-1">
                <input type="tel" name="phone" value="<?= showFormData('phone') ?>" class="form-control rounded-0"
                    placeholder="phone">
                <label for="floatingInput">Mobile Number</label>
            </div>
            <?= showError('phone') ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="form-floating mt-1">
                <input type="text" name="username" value="<?= showFormData('username') ?>"
                    class="form-control rounded-0" placeholder="username/email">
                <label for="floatingInput">Username</label>
            </div>
            <?= showError('username') ?>

            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <?= showError('password') ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="form-floating mt-1">
                <input type="text" name="enrollment_number" value="<?= showFormData('enrollment_number') ?>" class="form-control rounded-0" 
                    placeholder="enrollment_number" pattern="[0-9]{2}[A-Z]{1}/[0-9]{5}">
                <label for="floatingInput">Enrollment Number (12C/56789)</label>
            </div>
            <?= showError('enrollment_number') ?>

            <div class="form-floating mt-1">
                <input type="text" name="registration_number" value="<?= showFormData('registration_number') ?>" class="form-control rounded-0" 
                    placeholder="registration_number" pattern="[A-Z]{1}[0-9]{2}[A-Z]{1}[0-9]{6}">
                <label for="floatingInput">Registration Number (A23D567890)</label>
            </div>
            <?= showError('registration_number') ?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit">Sign Up</button>
                <a href="?login" class="text-decoration-none">Already have an account?</a>


            </div>

        </form>
    </div>
</div>