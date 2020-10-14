<?php namespace myLib;


class Message
{
    private string $id;
    private string $create;
    private string $name;
    private string $email;
    private string $message;
    private string $answer;

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
        $db->execute("INSERT INTO messages SET `name`= $this->name, `email`= $this->email, `message`= $this->message, `answer`= $this->answer");
    }

    public function del()
    {
        return 1;
    }


}