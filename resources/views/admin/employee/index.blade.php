@extends('admin.master')

@section('content')
<div class="mx-body__content" data-simplebar>

<main class="main-content t-mt-15 t-mb-15">
    <div class="container-fluid px-3">
        <div class="row g-3">

            <div class="col-lg-12 col-xxl-12">
                <div class="cards t-bg-white t-shadow h-100">
                    <div
                        class="cards__header t-pt-30 t-pb-30 px-3 px-md-4 border-bottom">
                        <h6 class="mt-0 mb-0 text-capitalize">
                            Employees
                        </h6>
                    </div>
                    <div class="cards__body t-pt-30 px-3 px-md-4 t-pb-30">
                        <p class="sm-text">
                            All the employees will be shown here
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Employee ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">User Role</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>EM-1</td>
                                        <td>Shakhawat Hossain Utsab</td>
                                        <td>shakhawatutsab@gmail.com</td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">Admin</option>
                                                <option value="">Employe</option>
                                                <option value="">Manager</option>
                                            </select>
                                        </td>
                                        <td>Active</td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle ="dropdown" area-haspopup="true" area-expanded="false" >
                                                    <i class="bx bx-dots-vertical"></i>
                                                </a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">
                                                    <i class="bx bx-show"></i>view</a></li>
                                                <li><a class="dropdown-item" href="#">
                                                    <i class="bx bx-edit-alt"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#">
                                                    <i class="bx bx-trash-alt"></i>Delete</a></li>
                                            </ul>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="t-mb-30">
    <div class="container-fluid px-3">
        <div class="row g-3">
            <div class="col-12">
                <div
                    class="t-pt-15 t-pb-15 cards t-bg-white t-shadow text-center sm-text">
                    <span class="t-text-dark">&copy;</span> <a href="#"
                        class="t-link t-link--alpha text-capitalize">Adminage</a>
                    <span class="t-text-dark text-capitalize">all right reserved
                        2020</span>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
@endsection
