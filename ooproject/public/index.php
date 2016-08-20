
<?php


$stus = DB::table("students")->where('name')->get();
$students = DB::table("students")->get();
$classes = DB::table("classes")->get();
$student1 = [
    'name'  => 'Mya Mya'
];
DB::table("students")->insert($student1);
$student2 = [
    'name'  => 'Hla Hla'
];

DB::table("students")->delete(1);
$id = DB::table('students')->insertWithId($student);


class DB extends PDO {

    // Coding OO
    // Inhertance

    // Dev OO
    // Singleton
    // Static Method Chain

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    private static $_instance;

    private $table_name;

    private $select = "SELECT ";

    private $where;

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }
        self::$_instance->table_name = $table_name;
        self::$_instance->where = false;
        return self::$_instance;
    }

    public function insert() {
        $sql = "INSERT INTO " . $table_name . "(";
        $keys = array_keys($fields);
        $values = array_values($fields);
        $i_keys = implode(",", $keys);
        $i_values = implode('","', $values);
        $sql .= $i_keys . ') VALUES ("' . $i_values . '")';


    }

    public function get() {
        if($this->where == true) {
            $prep = $this->prepare($this->select . " FROM " . $this->table_name);    
        } else {
            $prep = $this->prepare("SELECT * FROM " .$this->table_name);
            
        }
        
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_ASSOC);
    }

    // Scalar type declarations
    public function where(string ...$values) {
        $this->where = true;
        $selected_value = implode(", ", $values);
        $this->select .= $selected_value;
    
        return $this;
    }

    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'wpa24_ci';
        $this->user = 'root';
        $this->pass = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );

        echo "Construct! <br />";
    }

    public function __destruct()
    {
        echo "Destructor <br />";
    }


}