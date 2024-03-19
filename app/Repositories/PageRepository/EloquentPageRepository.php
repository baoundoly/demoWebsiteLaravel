<?php

namespace App\Repositories\PageRepository;

use App\Models\Page;

class EloquentPageRepository implements PageRepository
{
    public function getAll()
    {
        return Page::all();
    }

    public function getById($id)
    {
        return Page::findOrFail($id);
    }

    public function create($data)
    {
        return Page::create($data);
    }

    public function update($id, $data)
    {
        $page = Page::findOrFail($id);
        $page->update($data);
    }

    public function delete($id)
    {
        $page = Page::findOrFail($id);
        return $page->delete();
    }
}
