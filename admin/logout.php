<?php
    session_start();
    unset($_SESSION["user"]);
    header("location:https://planner.vkatranas.eu/");
?>