<?php

namespace Modules\MasterData\App\Repositories;

interface DepartmentInterface
{

    public function index($request);

    public function store($request);
    public function show($department);

    public function update($department , $request);

    public function destroy($department);

}
