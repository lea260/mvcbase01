<?php

class Model
{

    public function __construct()
    {
        //echo "<p>Modelo principal</p>";
        $this->db = new Database();
    }
}
