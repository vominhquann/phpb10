<?php
//1
echo "1<br>";
interface Resizable {
    public function resize($percentage);
}

class Rectangle implements Resizable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= (1 + $percentage / 100);
        $this->height *= (1 + $percentage / 100);
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

$rectangle = new Rectangle(20, 10);
echo "Width: " . $rectangle->getWidth() . ", Height: " . $rectangle->getHeight() . "<br>";

$rectangle->resize(50);
echo "After resizing by 50%:<br>";
echo "Width: " . $rectangle->getWidth() . ", Height: " . $rectangle->getHeight() . "<br>";

//2 
echo "<br>2<br>";
interface Logger {
  public function logInfo();
  public function logWarning();
  public function logError();
}
class FileLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
class DatabaseLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
$FileLogger = new FileLogger("bug...1");
$DatabaseLogger = new DatabaseLogger("bug...2");
echo $FileLogger->getLog(). "<br>";
echo $DatabaseLogger->getLog(). "<br>";


//3
echo "<br>3<br>";
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        echo "Drawing a circle with radius: " . $this->radius . "<br>";
    }
}

class Square implements Drawable {
    protected $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function draw() {
        echo "Drawing a square with side length: " . $this->side . "<br>";
    }
}


$circle = new Circle(5);
$circle->draw();

$square = new Square(10);
$square->draw();

//4
echo "<br>4<br>";
interface Sortable {
    public function getSort();
}
class ArraySorter implements Sortable {
    protected $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function getSort() {
        sort($this->arr);
        return $this->arr;
    }
}
class LinkedListSorter implements Sortable {
    protected $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function getSort() {
        sort($this->arr);
        return $this->arr;
    }
}
$arr1 = [5,6,4,1];
$arr2 = ["Volvo", "BMW", "Toyota"];
$less9_1 = new ArraySorter($arr1);
$less9_2 = new LinkedListSorter($arr2);
$result1 = $less9_1->getSort();
$result2 = $less9_2->getSort();
echo implode(", ", $result1). "<br>";
echo implode(", ", $result2). "<br>";

//5
echo "<br>5<br>";

interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    private $key;
    
    public function __construct($key) {
        $this->key = $key;
    }
    
    public function encrypt($data) {
        $encryptedData = openssl_encrypt($data, 'AES-128-CBC', $this->key, 0, '1234567890123456');
        return $encryptedData;
    }
    
    public function decrypt($encryptedData) {
        $decryptedData = openssl_decrypt($encryptedData, 'AES-128-CBC', $this->key, 0, '1234567890123456');
        return $decryptedData;
    }
}

class DES implements Encryptable {
    private $key;
    
    public function __construct($key) {
        $this->key = $key;
    }
    
    public function encrypt($data) {
        $encryptedData = openssl_encrypt($data, 'DES-CBC', $this->key, 0, '12345678');
        return $encryptedData;
    }
    
    public function decrypt($encryptedData) {
        $decryptedData = openssl_decrypt($encryptedData, 'DES-CBC', $this->key, 0, '12345678');
        return $decryptedData;
    }
}


$aes = new AES('my_aes_key');
$des = new DES('my_des_key');

$data = 'Hello, World!';
$encryptedAES = $aes->encrypt($data);
$decryptedAES = $aes->decrypt($encryptedAES);

$encryptedDES = $des->encrypt($data);
$decryptedDES = $des->decrypt($encryptedDES);

echo 'Data: ' . $data . "\n";
echo 'AES Encrypted: ' . $encryptedAES . "<br>";
echo 'AES Decrypted: ' . $decryptedAES . "<br>";
echo 'DES Encrypted: ' . $encryptedDES . "<br>";
echo 'DES Decrypted: ' . $decryptedDES . "<br>";

?>