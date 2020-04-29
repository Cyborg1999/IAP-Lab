<?php

interface Crud{
    /*This is the template interface   */
    public function save();
    public function readAll();
    public function readUnique();
    public function search();
    public function update();
    public function removeOne();
    public function removeAll();
}

?>