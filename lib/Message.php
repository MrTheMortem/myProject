<?php namespace myLib;


class Message
{
    private $id;
    private $create;
    private $name;
    private $email;
    private $message;
    private $answer;

    /**
     * Message constructor.
     * @param string $name
     * @param string $email
     * @param string $message
     * @param string $answer
     */
    public function __construct(string $name, string $email, string $message, string $answer ='')
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->answer = $answer;
    }


    public function addMessage()
    {
        $db = new DB(\PDO::FETCH_ASSOC);
        //Добро пожаловать инъекции
        //ТАК ДЕЛАТЬ НЕ НАДО!
        //$db->execute("INSERT INTO messages SET `name`= $this->name, `email`= $this->email, `message`= $this->message, `answer`= $this->answer");


        // Вот так делать надо, таким образом PDO экранирует все данные и инъекции в запрос не сработают
        // БЕЗОПАСНОСТЬ!!!
        $db->execute('INSERT INTO messages SET `name` = :name, `email` = :email, `message` = :message, `answer` = :answer', $stm, [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'answer' => $this->answer
        ]);
    }

    public function del()
    {
        return 1;
    }


}