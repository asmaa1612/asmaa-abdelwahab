<?php
class User{
    private $passowrd ;
    private const miniLenthOfCharacter = 8;
    public function getPass( )
 {
    return $this->passowrd ;
 }
 public function setPass($passowrd ){
    if (strlen($passowrd) < self::miniLenthOfCharacter) {
        echo 'your passowrd must have astrong character minimun ..' . self::miniLenthOfCharacter ;
    }
    else{
        $this->passowrd = sha1($passowrd) .'<br>' ;
        // $this->passowrd =  password_hash($passowrd ,PASSWORD_BCRYPT) ;
    }
   
 }
 
}
$user =new User;
echo $user-> setPass(123456789);
echo $user->getPass();
