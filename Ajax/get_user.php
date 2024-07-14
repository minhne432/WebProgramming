<?php

if (isset($_GET['id'])) {
  $userId = intval($_GET['id']);

  $users = [
    1 => 'User1: John',
    2 => 'User2: Jane',
    3 => 'User3: Tom',
  ];

  if (array_key_exists($userId, $users)) {
    echo $users[$userId];
  } else {
    echo 'User not found!';
  }
} else {
  echo 'No user ID provided';
}
