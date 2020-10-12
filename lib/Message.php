<?php namespace myLib;


class Message
{
    private string $id;
    private string $create;
    private string $name;
    private string $email;
    private string $message;
    private string $edit;

    /**
     * Message constructor.
     * @param string $name
     * @param string $email
     * @param string $message
     * @param string $edit
     */
    public function __construct(string $name, string $email, string $message, string $edit)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->edit = $edit;
    }


    public function add()
    {
        return 0;
    }

    public function del()
    {
        return 1;
    }


}