<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class StopWatch
{
    private $startTime;
    private $endTime;


    function getEndTime()
    {
        return $this->endTime;
    }

    function beginTime()
    {
        return date('Y-M-d h:m:s');
    }

    function start()    {
        return $this->startTime = date('Y-M-d h:m:s');
    }

    function stop()
    {
        return $this->endTime = date('Y-M-d h:m:s');
    }
    function getElapsedTime() {
        return date('s');
    }

}

$stopWatch = new StopWatch();
echo $stopWatch->beginTime()."</br>";
echo $stopWatch->getElapsedTime();
?>
</body>
</html>