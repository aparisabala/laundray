<?php

namespace App\Http\Controllers\Admin\Customer\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer\Crud\ValidateStoreCustomer;
use App\Repositories\Admin\Customer\Crud\ICustomerCrudRepository;
use App\Traits\BaseTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class CustomerCrudController  extends Controller {

    use BaseTrait;
    public function __construct(private ICustomerCrudRepository $iCustomerCrudRepo) {
        $this->middleware(['auth:admin','HasAdminUserPassword','HasAdminUserAuth']);
        $this->lang= 'admin.customer.crud';
        $this->middleware(function ($request, $next) {
            $request->merge(['lang' => $this->lang]);
            return $next($request);
        });

    }

    /**
     * Index page for customer crud
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) : View
    {
        $data = $this->iCustomerCrudRepo->index($request);
        $data['lang'] = $this->lang;
        return view('admin.pages.customer.crud.index',compact('data'));
    }

    /**
     * List items for yajra datatable for customer crud
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request) : JsonResponse
    {
        return  $this->iCustomerCrudRepo->list($request);
    }

    /**
     * Store procedure for comapany crud
     *
     * @param ValidateStoreCustomer $request
     * @return JsonResponse
     */
    public function store(ValidateStoreCustomer $request): JsonResponse
    {
        return $this->iCustomerCrudRepo->store($request);
    }

    /**
     * Index page for view
     *
     * @param integer|string $id
     * @param Request $request
     * @return view
     */
    public function edit($id,Request $request) : view
    {
        $data = $this->iCustomerCrudRepo->index($request,$id);
        $data['lang'] = $this->lang;
        return view('admin.pages.customer.crud.index', compact('data'));
    }

    /**
     * Update procedure for customer
     *
     * @param Request $request
     * @param integer|string $id
     * @return JsonResponse
     */
    public function update(Request $request, $id) : JsonResponse
    {
        return $this->iCustomerCrudRepo->update($request,$id);
    }

    /**
     * Bulk delete list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function deleteList(Request $request) : JsonResponse
    {
       return $this->iCustomerCrudRepo->deleteList($request);
    }


    /**
     * Bulk update list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function updateList(Request $request) : JsonResponse
    {
       return $this->iCustomerCrudRepo->updateList($request);
    }

}