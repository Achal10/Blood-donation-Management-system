<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blood Bank & Donation</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
  }

  .header {
    overflow: hidden;
    background: linear-gradient(to right, #FF5757, #FF904F);
    padding: 20px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: right;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 30px;
  }

  .logo {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: white;
    transition: color 0.3s ease;
  }

  .logo:hover {
    color: #f0f0f0;
  }

  .header-right {
    display: flex;
    align-items: center;
  }

  .header-right a {
    text-decoration: none;
    color: white;
    margin-left: 20px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    border-radius: 5px;
    padding: 8px 15px;
    background-color: rgba(255, 255, 255, 0.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .header-right a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
  }

  @media screen and (max-width: 768px) {
    .header {
      flex-direction: column;
      padding: 15px;
    }

    .header-right {
      margin-top: 10px;
      text-align: center;
    }

    .header-right a {
      display: block;
      margin: 10px auto;
    }
  }

  /* Style the active/current link */
  .active-link {
    background-color: #FF0404;
  }
</style>
</head>
<body>
  <div class="header">
    <a href="home.php" class="logo">Blood Bank & Donation</a>
    <div class="header-right">
      <a href="about_us.php" class="<?php echo $active == 'about' ? 'active-link' : ''; ?>">About Us</a>
      <a href="why_donate_blood.php" class="<?php echo $active == 'why' ? 'active-link' : ''; ?>">Why Donate Blood</a>
      <a href="donate_blood.php" class="<?php echo $active == 'donate' ? 'active-link' : ''; ?>">Become A Donor</a>
      <a href="need_blood.php" class="<?php echo $active == 'need' ? 'active-link' : ''; ?>">Need Blood</a>
      <a href="contact_us.php" class="<?php echo $active == 'contact' ? 'active-link' : ''; ?>">Contact Us</a>
    </div>
  </div>
</body>
</html>
