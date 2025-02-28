<?php include "_partial/_template/loginhead.php"?>  
<head>
    <link rel="stylesheet" href="login.css">
</head>
<div class="container row mt-5" style="display: flex; align-items: center; align-content: center;">
        <form class="form">
          <p class="form-title">Login</p>
          <div class="input-container">
           <input type="email" placeholder="Enter email">
           <span>
          </span>
        </div>
       <div class="input-container">
           <input type="password" placeholder="Enter password">
          </div>
          <button type="submit" class="submit">
            Sign in
          </button>
          <p class="signup-link">
            No account?
            <a href="">Sign up</a>
          </p>
        </form>
      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>