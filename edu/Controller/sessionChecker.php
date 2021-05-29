<?php
session_start();
if (!isset($_SESSION['id'])) {
    $_SESSION['name'] = "admin";
}
