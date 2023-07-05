<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?= esc($title) ?></title>
  </head>
  <body>
  <div class="container-fluid">


<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<?php
$months = [
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'May',
    6 => 'Jun',
    7 => 'Juy',
    8 => 'Aug',
    9 => 'Sep',
    10 => 'Oct',
    11 => 'Nov',
    12 => 'Dec'
];
$year_start = 2023;
$year_finish = 2063;
?>

<form action="<?php echo base_url('credit-card/create'); ?>" method="post">
    <?= csrf_field() ?>

  <div class="form-group">
    <label for="card_number">Card Number:</label>
    <input type="input" class="form-control" placeholder="0000-0000-0000-0000" name="card_number" value="<?= set_value('card_number') ?>">
    <small id="emailHelp" class="form-text text-muted">Right now, random input is possible</small>
  </div>

  <div class="form-group">
    <label for="month">Month:</label>
    <select class="form-control" id="month" name="month">
    <?php
    // Generate options for the dropdown
    foreach ($months as $value => $label) {
        echo '<option value="' . $value . '">' . $label . '</option>';
    }
    ?>
    </select>
  </div>

  <div class="form-group">
    <label for="year">Year:</label>
    <select class="form-control" id="year" name="year">
    <?php
    // Generate options for the dropdown
    for ($i=$year_start; $i<=$year_finish; $i++) {
        echo '<option value="' . $i . '">' . $i . '</option>';
    }
    ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>