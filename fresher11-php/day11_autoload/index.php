<?php
    require __DIR__ . '/vendor/autoload.php';
    use App\Sport;
    use App\Code;
     $sport = new Sport();
     echo $sport->play('badminton');
     $code = new Code();
     echo $code->runCode('php');