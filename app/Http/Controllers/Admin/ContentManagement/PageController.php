<?php

namespace App\Http\Controllers\Admin\ContentManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PageService\PageService;

class PageController extends Controller
{
    private $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function list()
    {
        $data['title'] = 'Page List';
        $data['pages'] = $this->pageService->getAllPages();
        return view('admin.content-management.page.list', $data);
    }

    public function add()
    {
        $data['title'] = 'Page Create';
        return view('admin.content-management.page.add', $data);
    }

    public function store(Request $request)
    {
        $page = $this->pageService->createPage($request->all());
        return redirect()->route('admin.content-management.manage-page.list');
    }

    public function edit($id) 
    {
        $data['title'] = 'Page Update';
        $data['editData'] = $this->pageService->getPageById($id);
        return view('admin.content-management.page.add', $data);
    }

    public function update(Request $request, $id) 
    {
        $page = $this->pageService->updatePage($id, $request->all());
        return redirect()->route('admin.content-management.manage-page.list');
    }

    public function destroy(Request $request) 
    {
        $page = $this->pageService->deletePage($request->id);
        
        if(!$page){
            return response()->json(['status'=>'error','message'=>'Page not found']);
        }
        return response()->json(['status'=>'success','message'=>'Successfully Deleted']);
        
    }
}
