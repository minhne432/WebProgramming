Certainly! Here’s a simple practice exercise to help you get started with AJAX in PHP. In this exercise, you'll create a simple web page where you can fetch and display data from the server without reloading the page.

### Exercise: Fetch and Display User Information

**Objective:** Create a web page that allows you to input a user's ID and fetch the user's information from the server using AJAX.

#### Step 1: Set Up Your Project

Create a new directory for your project, and within this directory, create the following files:

- `index.html`
- `style.css`
- `script.js`
- `get_user.php`

#### Step 2: Create the HTML File (`index.html`)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AJAX with PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Fetch User Information</h1>
      <input type="text" id="userId" placeholder="Enter User ID" />
      <button id="fetchButton">Fetch User Info</button>
      <div id="userInfo"></div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
```

#### Step 3: Style the Page (`style.css`)

```css
body {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
}

.container {
  background: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

input {
  padding: 10px;
  margin: 10px 0;
  width: 80%;
}

button {
  padding: 10px 20px;
  background: #007bff;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background: #0056b3;
}

#userInfo {
  margin-top: 20px;
}
```

#### Step 4: Write the JavaScript (`script.js`)

```js
document.getElementById("fetchButton").addEventListener("click", function () {
  var userId = document.getElementById("userId").value;
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "get_user.php?id=" + userId, true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("userInfo").innerHTML = xhr.responseText;
    }
  };
  xhr.send();
});
```

#### Step 5: Create the PHP File (`get_user.php`)

```php
<?php
if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);
    // For demonstration purposes, we will create a fake database of users.
    $users = [
        1 => 'User 1: John Doe, Email: john@example.com',
        2 => 'User 2: Jane Smith, Email: jane@example.com',
        3 => 'User 3: Sam Johnson, Email: sam@example.com'
    ];

    if (array_key_exists($userId, $users)) {
        echo $users[$userId];
    } else {
        echo 'User not found';
    }
} else {
    echo 'No user ID provided';
}
?>
```

#### Step 6: Test Your Application

1. Open `index.html` in your web browser.
2. Enter a user ID (1, 2, or 3) in the input field.
3. Click the "Fetch User Info" button to fetch and display the user information.

### Explanation

- **HTML**: Contains the structure of the page with an input field for the user ID and a button to trigger the AJAX request.
- **CSS**: Provides basic styling to make the page look nice.
- **JavaScript**: Handles the AJAX request using the `XMLHttpRequest` object. When the button is clicked, it sends a request to `get_user.php` with the user ID as a query parameter.
- **PHP**: Checks if a user ID is provided, looks up the user in a fake database (an associative array), and returns the user information.

This exercise helps you understand how to make an AJAX request using JavaScript and handle the request on the server side with PHP. Feel free to expand this example by adding more fields, improving error handling, or connecting to a real database.
