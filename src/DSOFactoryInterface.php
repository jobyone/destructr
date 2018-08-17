<?php
/*  Digraph CMS: Destructr
    https://github.com/digraphcms/destructr
    MIT License
    Copyright (c) 2018 Joby Elliott <joby@byjoby.com> */
namespace Digraph\Destructr;

interface DSOFactoryInterface
{
    public function __construct(Drivers\DSODriverInterface &$driver, string $table);

    public function class(array $data) : ?string;

    public function createTable() : bool;
    public function create(array $data = array()) : DSOInterface;
    public function read(string $value, string $field = 'dso.id', $deleted = false) : ?DSOInterface;
    public function insert(DSOInterface &$dso) : bool;
    public function update(DSOInterface &$dso) : bool;
    public function delete(DSOInterface &$dso, bool $permanent = false) : bool;

    public function search() : Search;
    public function executeSearch(Search $search, array $params = array(), $deleted = false) : array;
}