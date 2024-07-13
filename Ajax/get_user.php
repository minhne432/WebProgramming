<?php

if (isset($_GET['id'])) {
  $userId = intval($_GET['id']);

  $users = [
    1 => 'User 1: John Doe, Email: john@example.com',
    2 => 'User 2: Jane Smith, Email: jane@example.com',
    3 => 'User 3: Sam Johnson, Email: sam@example.com'
  ];

  if (array_key_exists($userId, $users)) {
    echo $users[$userId];
  } else {
    echo 'user not found';
  }
} else {
  echo 'No user ID provided';
}
