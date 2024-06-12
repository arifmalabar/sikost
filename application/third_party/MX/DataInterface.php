<?php
interface DataInterface{
    public function index();
    public function store();
    public function update($id);
    public function delete($id);
}