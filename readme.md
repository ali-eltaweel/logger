# Logger

- [Logger](#logger)
  - [Installation](#installation)
  - [Usage](#usage)

***

## Installation

Install *logger* via Composer:

```bash
composer require ali-eltaweel/logger
```

***

## Usage

```php
$driver = new class implements Logger\Driver {
    
  public function log(Logger\LogRecord $record): void {

    echo json_encode($record->toArray()) . "\n";
  }
};

$logger = new Logger\Logger($driver);
```

```php
class LogSubject {

  public function __construct(private Logger\Logger $logger) {}

  public function doSomething(): void {
      
    $this->logger->info('Doing something important', ['time' => time()], static::class, spl_object_id($this));
    
    // $this->logger->log([
    //     'level'    => Logger\LogLevel::INFO,
    //     'message'  => 'Doing something important',
    //     'context'  => ['time' => time()],
    //     'unit'     => static::class,
    //     'instance' => spl_object_id($this),
    // ]);
  }
}

$subject = new LogSubject($logger);

$subject->doSomething();
```
