<?php
namespace Project\Database;

abstract class AbstractDatabase
{
    protected $db;

    public function __construct(\WebServCo\Framework\Interfaces\DatabaseInterface $db)
    {
        $this->db = $db;
    }
}
