<?php

class AdocaoController {
    public function index() {
        $pdo = new Query();
        $teste = $pdo->select('SELECT * FROM teste');

        include 'view/adocao/index.php';
    }

    public function create() {

    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }
}
