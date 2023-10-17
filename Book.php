
<?php
class Book{
    private int $isbn;
    private string $title ;
    private string $author ;
    private int $available ;

    public function __construct(int $isbn, string $title, string $author, int $available){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    
    }

    public function __toString(){
        $result = "<i>{$this->title} </i> - {$this->author}";
        if(!$this->available){
            $result .= "<b> Not available</b>";
        }
        return $result;
    }

    public function __set($variable, $value){}
    public function __get($variable){
        if(isset($this->variable)) {
            return $this->variable;
        }
        else {
            return "Property is not set";
        }
    }
 

    public function getCoppy() : bool{
        if($this->available>0){
            $this->available--;
            return true;
        }else{
            return false ;
        }
    }

    public function addCoppy(int $number): bool{
        if($number > 0){
            $this->available += $number ;
            return true ;
        }
        else{
            return false ;
        }
    }
}
?>
