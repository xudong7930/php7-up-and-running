<?php
interface Logger {
    public function log($message);
}

class TerminalLogger implements Logger {
    public function log($message)
    {
        var_dump($message);
    }
}


class Application {
    private $logger;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
        return $this;
    }

    public function action()
    {
        $this->logger->log('dong things.');
    }
}

$app = new Application;
// $app->setLogger(new TerminalLogger);

// 匿名类
$app->setLogger(new class implements Logger {
    public function log($message)
    {
        echo $message;
    }
});

$app->action();
