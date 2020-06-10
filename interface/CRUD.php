<?php

interface Crud{
    /*This is the template interface   */
    public function save();#$f,$l,$c
    public function readAll();
    public function readUnique();
    public function search();
    public function update();
    public function removeOne();
    public function removeAll();

    #We add these Methods to assist in Js Vallidation 
    public function validateform();
    public function createFormErrorSession();
}

?>