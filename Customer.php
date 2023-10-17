<?php
class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    public function __construct(int $id, string $firstName , string $lastName , string $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    // Getter
    public function __set($variable, $value){}
    public function __get($variable)
    {
        if (isset($this->variable)) {
            return $this->variable;
        } else {
            return "Property is not Set!";
        }
    }
    public function __toString()
    {
        return "ID: {$this->id} <br> Name: {$this->firstName} <br> {$this->lastName}<br> Email: {$this->email}";

    }
}
?>