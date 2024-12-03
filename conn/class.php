<?
	class FristClass{
		public $name ="test";
		public $surname = "xxx"; // all class
		private $age = "20"; // use only class
		private $salary = "10000";
		Protected $id1 ="Protected"; //use with extends
		Protected $salary3 = "";
		
		public function Sayhi(){
			echo "HI".$this->name."".$this->surname."".$this->Saybye()."<br/>".$this->age."<br/> get Function method ->".$this->SetAge();
			//echo "<br/>Class1".$this->SalaryShow();
		}
		public function ShowPrivateExtends(){
		 
			echo "<br/>Class1 echo privte property".$this->SalaryShow();
		}
		public function Saybye(){
			return "<br/>GoodBye"; // send back paramiter
		}
		private function SetAge(){
			return $this->age="30"; //set paramiter
		}
		protected function Showid1(){
			return "<br/> Show fucntion Protected";
		}
		private function Showid2(){
			return "fucntion Protected 2";
		}
		public Function SalaryShow(){
			return $this->salary;
		}
	}
	
	
	
	//extends =  Inheritance
	Class TwoClass extends FristClass{
		private  $salary = "500";
		public function Show(){
			echo $this->salary3="3500";
			echo $this->id1;
			echo "<br/>Get extends and protected methond class 1".$this->Showid1();
		   //  echo "<br/>".$this->name;
			// echo "<br/>get Private by func >".$this->ShowPrivateExtends();
			echo "<br/>c2 : ".$this->salary;
			//echo $this->Showid2(); 
			echo "protected 3 ".$this->salary3;
			
		}
		
	}
	
	$Obj = New FristClass;
	$Obj->name="new name";
	//$Obj->Sayhi();
	//$Obj->Saybye();
	$Obj2 =New TwoClass;
	$Obj2->Show();	//
	
	Class Parameter{
		private $nn1;
		private $nn2;
		private $ag;
		public function Setmethod($n1,$n2,$age)
		{
			 $this->nn1=$n1;
			 $this->nn2=$n2;
			 $this->ag = $age;
		}
		public function Getvalue()
		{
			return $this->nn1."".$this->nn2;
		 
		}
	}
	echo "<hr/>";
	$Set = new Parameter;
	$Set->Setmethod("set1","Set2","");
	echo $Set->Getvalue(); // show 
	
	// type constructor 
	
	class MyDestructableClass {
	   function __construct() {
		   print "<br/>In constructor\n";
		   $this->name = "MyDestructableClass";
	   }

	   function __destruct() {
		   print "<hr/><br/>Destroying " . $this->name . "\n";
	   }
	}
	// type constructor 
	Class Mycon{ // constructor
		public function Mycon($ns1,$ns2){
			$this->ns1=$ns1;
			$this->ns2=$ns2;
		}
		public function getCon(){
			return  $this->ns1." / ".$this->ns2;
		}
		public function __destruct() { // auto not set db connect auto close
		   print "Des " . $this->ns1. "\n";
	   }
	}
	echo"<hr/>";
	$obj3 = new MyDestructableClass();
	 
	$Myc =new Mycon("Scon1","Scon2");
	echo $Myc->getCon();
	
	 
	//static
	Class ShowStatic{
		public static $var1="Static1";
		public static $var2="Static2";
		protected static $a;
		public static function init($value) { self::$a = $value; }
		public static function getA() { return self::$a; }
	}
	class B extends ShowStatic {
    protected static $a; // redefine $a for own use
   
    // inherit the init() method
    public static function getA() { return self::$a; }
	
	}
	echo"<hr/>";
	echo "<br/>".ShowStatic::$var1."<br/>";
	echo ShowStatic::getA().'  '.B::getA();
	 B::init('lala');
	// self and parent
	class Mom{
		Protected static $name;
		Protected static $surname = "Momjj";
		function __construct() {
		  // print "<br/>In constructor\n";
		   $this->name = "Mom";
	   }
	}
	class Childe extends Mom{
		private static $nameold = "sonname";
		/*function __construct(){
			//echo "CHILDE";
			parent::__construct();
		}
		function __construct(){
			//echo "CHILDE";
			self::__construct();
		}*/
		public function mymom(){
			self::$name = "KKKK";
			 
			echo self::$nameold;
				echo parent::$surname;
		}
	}
	echo "<hr/>";
	$son = new Childe();
	$son->mymom();
	
	/// abtrart class คลาสที่ใช้ extends  ต้องมี abtract ด้วย
	
	abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}
class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}
class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";

interface Mom2
{
    public function setVariable($name, $var);
    public function getHtml($template);
	public function age();
}
interface Dad
{
	public function walk();
	public function Say();
	public function see();
}
class Human{
		public function bb(){
			return "Eye";
		}
}
class Son2 extends Human implements Mom2,Dad
{
    private $vars = array();
	
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
	 public function age()
    {
         
       
    }
	public function walk(){}
	public function Say(){
		return "Say";
	}
	public function see(){
		 return $this->bb();
	 }
}

echo "<hr/>";
	$inf = new Son2();
	echo $inf->Say();
	echo $inf->see();

	
	
	/**
* An example of duck typing in PHP
*/

interface CanFly {
  public function fly();
}

interface CanSwim {
  public function swim();
}

class Bird {
  public function info() {
    echo "I am a {$this->name}\n";
    echo "I am an bird\n";
  }
}

/**
* some implementations of birds
*/
class Dove extends Bird implements CanFly {
  var $name = "Dove";
  public function fly() {
    echo "I fly\n";
  }
}

class Penguin extends Bird implements CanSwim {
  var $name = "Penguin";
  public function swim() {
    echo "I swim\n";
  }
}

class Duck extends Bird implements CanFly, CanSwim {
  var $name = "Duck";
  public function fly() {
    echo "I fly\n";
  }
  public function swim() {
    echo "I swim\n";
  }
}

/**
* a simple function to describe a bird
*/
function describe($bird) {
  if ($bird instanceof Bird) {
    $bird->info();
    if ($bird instanceof CanFly) {
      $bird->fly();
    }
    if ($bird instanceof CanSwim) {
      $bird->swim();
    }
  } else {
    die("This is not a bird. I cannot describe it.");
  }
}
echo "<hr/>";
// describe these birds please
describe(new Penguin);
echo "---\n";

describe(new Dove);
echo "---\n";

describe(new Duck);
?>