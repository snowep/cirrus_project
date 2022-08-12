<?php
    $fullName = explode(" ", $_SESSION['fullName']);
    $firstName = $fullName[0];
?>

<div class="col-7 align-self-center">
    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $greet." ".$firstName ?>!</h3>
    <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                </li>
            </ol>
        </nav>
    </div>
</div>