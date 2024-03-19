<?php

namespace App\Services\PageService;

use App\Repositories\PageRepository\PageRepository;

class EloquentPageService implements PageService
{
    private $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getAllPages()
    {
        return $this->pageRepository->getAll();
    }

    public function getPageById($id)
    {
        return $this->pageRepository->getById($id);
    }

    public function createPage($data)
    {
        return $this->pageRepository->create($data);
    }

    public function updatePage($id, $data)
    {
        return $this->pageRepository->update($id, $data);
    }

    public function deletePage($id)
    {
        return $this->pageRepository->delete($id);
    }
}
