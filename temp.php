<?php
interface iSave
{
    public function save();
}

interface iDelete
{
    public function delete();
}

class DB implements iSave
{
    private string $id;
    private string $name;
    private string $email;

    public function save()
    {
        echo 'saved to database';
    }
}

class FS implements iSave
{
    public function save()
    {
        echo 'saved to file';
    }
}

class Session implements iSave
{

    public function save()
    {
        // TODO: Implement save() method.
    }
}

