<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand navbar-brand-centered" href="/dashboard">Form Builder</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href= "<?= site_url('signout') ?>" >Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
</nav>

<style>
  .navbar-custom {
    background-color: #0A6EBD; /* Replace with your desired brighter color */
    border-color: #ffcc00; /* Replace with your desired border color */
  }

  .navbar-brand-centered {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px; /* Replace with your desired font size */
    color: #fff; /* Replace with your desired text color */
  }

  .navbar-custom .navbar-nav li a {
    color: #fff; /* Replace with your desired link color */
  }

  .navbar-custom .navbar-nav li a:hover {
    color: #000; /* Replace with your desired hover color */
  }
</style>