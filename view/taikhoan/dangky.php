<div class="container_fullwidth">
  <div class="container">
    <div class="row">

      <div class="col-md-9">

        <div class="checkout-page">
          <ol class="checkout-steps">
            <li class="steps active">
              <a href="#" class="step-title">
                Register
              </a>
              <div class="step-description">
                <div class="row">

                  <div class="col-md-6 col-sm-6">
                    <div class="run-customer">
                      <h5>

                      </h5>
                      <form action="index.php?act=dangky" method="post">
                        <div class="form-row">
                          <label class="lebel-abs">
                            User
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="text" class="input namefild" name="user" required>
                        </div>
                        <div class="form-row">
                          <label class="lebel-abs">
                            Email
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="Email" class="input namefild" name="email" required>
                        </div>
                        <div class="form-row">
                          <label class="lebel-abs">
                            Password
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="password" class="input namefild" name="pass" required>
                        </div>
                        <div class="form-row">
                          <label class="lebel-abs">
                            confirm_password
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="password" id="confirm_password" class="input namefild" name="confirm_password" required>
                        </div>
                        <p class="forgoten">
                          <a href="#">
                            Forgoten your password?
                          </a>
                        <h5 style="color:red;">
                          <?php if (!empty($_SESSION['error'])) : ?>
                            <div>
                              <ul>
                                <?php foreach ($_SESSION['error'] as $item) : ?>
                                  <li><?= $item ?></li>
                                <?php endforeach; ?>
                              </ul>
                            </div>
                          <?php endif; ?>
                        </h5>
</p>

                        <button type="submit" name="dangky">
                          Login
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </li>

          </ol>
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>

  </div>
</div>