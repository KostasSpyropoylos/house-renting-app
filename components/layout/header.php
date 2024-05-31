<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/components/pages/house-details-component/house-details.css">
  <title>Spitoulis</title>
  <style>
    body {
      margin: 0px 3em 0px 3em;
      padding: 1.5em 1em;
    }

    ul {
      padding: 0em 5em;
      display: flex;
      list-style: none;
    }

    li {
      text-decoration: none;
    }

    a {
      text-decoration: none;
      color: black;
    }

    .logo {
      font-size: 35px;
      font-weight: 800;
    }

    .flex-right {
      margin-left: auto;
      display: flex;
      align-items: center;
    }

    .flex {
      display: flex;
      margin-right: 1em;
    }

    .toggleOptions {
      border: 1px solid gray;
      border-radius: 20px;
      padding: 0.5em;
    }
  </style>
</head>
<?php
// Check if email and password are set in the session
if (isset($_SESSION['uname']) && isset($_SESSION['password'])) {
    $uname = $_SESSION['uname'];
    $password = $_SESSION['password'];
    $link = '/listing-details';
} else {
    // If the session variables are not set, redirect back to the form
    header("Location: /login");
    exit();
}
?>


<body>
  <nav>
    <ul>
      <li><a class="logo" href="/">Spitoulis</a></li>
      <div class="flex-right">
        <li>
          <div class="flex">
            <input type="text" placeholder="Search a listing" style="width: 250px" />

            <a style="
                  background-color: #1082e6;
                  text-align: center;
                  color: white;
                  padding: 0.5em;
                  border-radius: 0px 10px 10px 0px;
                ">
              <svg width="15px" height="15px" viewBox="0 0 24 24" fill="#1082e6" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </li>
        <li style="margin-right: 1em">
          <form action="/logout" method="post" style="margin-right: 1em;">
            <button type="submit">Logout</button>
          </form>
        </li>
        <li style="align-self: center" class="toggleOptions">
          <a href="<?php echo $link; ?>" style="background-color: white; border: none">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            
          </a>
          <a href="<?php echo $link; ?>" style="background-color: white; border: none">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.12 12.78C12.05 12.77 11.96 12.77 11.88 12.78C10.12 12.72 8.71997 11.28 8.71997 9.50998C8.71997 7.69998 10.18 6.22998 12 6.22998C13.81 6.22998 15.28 7.69998 15.28 9.50998C15.27 11.28 13.88 12.72 12.12 12.78Z" stroke="#1082e6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M18.74 19.3801C16.96 21.0101 14.6 22.0001 12 22.0001C9.40001 22.0001 7.04001 21.0101 5.26001 19.3801C5.36001 18.4401 5.96001 17.5201 7.03001 16.8001C9.77001 14.9801 14.25 14.9801 16.97 16.8001C18.04 17.5201 18.64 18.4401 18.74 19.3801Z" stroke="#1082e6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#1082e6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
          <span><?php echo $uname; ?></span>
        </li>
      </div>
    </ul>
  </nav>