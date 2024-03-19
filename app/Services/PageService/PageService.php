<?php

namespace App\Services\PageService;

interface PageService
{
    public function getAllPages();
    public function getPageById($id);
    public function createPage($data);
    public function updatePage($id, $data);
    public function deletePage($id);
}