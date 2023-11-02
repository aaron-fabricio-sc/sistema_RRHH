<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Attendance\AttendanceController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Departament;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/////////NEWS////////////

Route::get("/news/viewConfirmDelete/{id}", [NewsController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("news.viewConfirmDelete");

Route::get("/news/inactive", [NewsController::class, 'inactive'])->middleware(['auth', 'verified'])->name('news.inactive');

Route::get("/news/inactivate/{department}", [NewsController::class, 'inactivate'])->middleware(['auth', 'verified'])->name('news.inactivate');

Route::get("/news/activate/{department}", [NewsController::class, 'activate'])->middleware(['auth', 'verified'])->name('news.activate');

Route::resource("/news", NewsController::class)->middleware(['auth', 'verified'])->names('news');





//////////USUARIOS//////////
Route::get("/admin/users/pdf/list", [UserController::class, "pdfList"])->name("admin.users.pdf.list");
Route::put("admin/users/rol/{id}", [UserController::class, "assignRole"])->name("admin.users.rol.update");

Route::get("/admin/users/rol/{id}", [UserController::class, "rol"])->name("admin.users.rol");


Route::get("/admin/users/viewConfirmDelete/{id}", [UserController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("admin.users.viewConfirmDelete");

Route::resource("/admin/users", UserController::class)->names("admin.users");



////////////DEPARTAMENTOS///////////////

Route::get("/admin/departments/viewConfirmDelete/{id}", [DepartamentController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("admin.departments.viewConfirmDelete");

Route::get("/admin/departments/inactive", [DepartamentController::class, 'inactive'])->middleware(['auth', 'verified'])->name('admin.departments.inactive');

Route::get("/admin/departments/inactivate/{department}", [DepartamentController::class, 'inactivate'])->middleware(['auth', 'verified'])->name('admin.departments.inactivate');

Route::get("/admin/departments/activate/{department}", [DepartamentController::class, 'activate'])->middleware(['auth', 'verified'])->name('admin.departments.activate');

Route::get("/admin/departments/pdf/list", [DepartamentController::class, "pdfList"])->middleware(['auth', 'verified'])->name("admin.departments.pdf.list");

Route::resource("admin/departments", DepartamentController::class)->middleware(['auth', 'verified'])->names('admin.departments');


////////RUTAS DE TRABAJOS//////

Route::get("/admin/jobs/viewConfirmDelete/{id}", [JobController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("admin.jobs.viewConfirmDelete");

Route::get("/admin/jobs/inactive", [JobController::class, 'inactive'])->middleware(['auth', 'verified'])->name('admin.jobs.inactive');

Route::get("/admin/jobs/inactivate/{job}", [JobController::class, 'inactivate'])->middleware(['auth', 'verified'])->name('admin.jobs.inactivate');

Route::get("/admin/jobs/activate/{job}", [JobController::class, 'activate'])->middleware(['auth', 'verified'])->name('admin.jobs.activate');



Route::get("/admin/jobs/pdf/list", [JobController::class, 'pdfList'])->middleware(['auth', 'verified'])->name('admin.jobs.pdf.list');
Route::resource("admin/jobs", JobController::class)->middleware(['auth', 'verified'])->names('admin.jobs');






////////////CONTRATOS//////////

Route::get("/admin/contracts/viewConfirmDelete/{id}", [ContractController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("admin.contracts.viewConfirmDelete");
Route::get("/admin/contracts/inactive", [ContractController::class, 'inactive'])->middleware(['auth', 'verified'])->name('admin.contracts.inactive');

Route::get("/admin/contracts/inactivate/{contract}", [ContractController::class, 'inactivate'])->middleware(['auth', 'verified'])->name('admin.contracts.inactivate');

Route::get("/admin/contracts/activate/{contract}", [ContractController::class, 'activate'])->middleware(['auth', 'verified'])->name('admin.contracts.activate');

Route::get("/admin/contracts/pdf/list", [ContractController::class, 'pdfList'])->middleware(['auth', 'verified'])->name('admin.contracts.pdf.list');

Route::resource("admin/contracts", ContractController::class)->middleware(['auth', 'verified'])->names('admin.contracts');






//rutas de Empleado


Route::get("/admin/employees/viewConfirmDelete/{id}", [EmployeeController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("admin.employees.viewConfirmDelete");
Route::get("/admin/employees/inactive", [EmployeeController::class, 'inactive'])->middleware(['auth', 'verified'])->name('admin.employees.inactive');

Route::get("/admin/employees/inactivate/{employee}", [EmployeeController::class, 'inactivate'])->middleware(['auth', 'verified'])->name('admin.employees.inactivate');

Route::get("/admin/employees/activate/{employee}", [EmployeeController::class, 'activate'])->middleware(['auth', 'verified'])->name('admin.employees.activate');

Route::get("/admin/employees/viewAssignUser/{employee}", [EmployeeController::class, 'viewAssignUser'])->middleware(['auth', 'verified'])->name('admin.employees.viewAssignUser');
Route::put("/admin/employees/assignUser/{employee}", [EmployeeController::class, 'assignUser'])->middleware(['auth', 'verified'])->name('admin.employees.assignUser');

Route::resource("admin/employees", EmployeeController::class)->middleware(['auth', 'verified'])->names('admin.employees');





//rutas de licensias
Route::get("/admin/licenses/viewConfirmDelete/{id}", [LicenseController::class, "viewConfirmDelete"])->middleware(['auth', 'verified'])->name("admin.licenses.viewConfirmDelete");



Route::get("/admin/licenses/inactive", [LicenseController::class, 'inactive'])->middleware(['auth', 'verified'])->name('admin.licenses.inactive');

Route::get("/admin/licenses/inactivate/{license}", [LicenseController::class, 'inactivate'])->middleware(['auth', 'verified'])->name('admin.licenses.inactivate');

Route::get("/admin/licenses/activate/{license}", [LicenseController::class, 'activate'])->middleware(['auth', 'verified'])->name('admin.licenses.activate');

Route::get("/admin/licenses/requetsView/", [LicenseController::class, 'requetsView'])->middleware(['auth', 'verified'])->name('admin.licenses.requetsView');


Route::get("/admin/licenses/activityLicenses/", [LicenseController::class, 'activityLicenses'])->middleware(['auth', 'verified'])->name('admin.licenses.activityLicenses');


Route::post("/admin/licenses/requets/", [LicenseController::class, 'requets'])->middleware(['auth', 'verified'])->name('admin.licenses.requets');



Route::get("/admin/licenses/confirmLicense/{data}", [LicenseController::class, 'confirmLicense'])->middleware(['auth', 'verified'])->name('admin.licenses.confirmLicense');


Route::get("/admin/licenses/refuseLicense/{data}", [LicenseController::class, 'refuseLicense'])->middleware(['auth', 'verified'])->name('admin.licenses.refuseLicense');


Route::resource('admin/licenses', LicenseController::class)->middleware(['auth', 'verified'])->names('admin.licenses');













//Asistencia

Route::controller(AttendanceController::class)->group(function () {
    Route::get("attendances", "index")->middleware(['auth', 'verified'])->name('attendances.index');


    Route::get("attendances/reports",  "viewReports")->middleware(['auth', 'verified'])->name('attendances.reports');
    Route::post("attendances/reports",  "dataReport")->middleware(['auth', 'verified'])->name('attendances.dataReport');
    Route::get("attendances/create",  "create")->name("attendances.create");
    Route::post("attendances/create",  "store")->name("attendances.store");
    Route::get("attendances/{attendance}/show",  "show")->name("attendances.show");
    Route::post("attendances/salida",  "salida")->name("attendances.salida");
});

















/* Route::get('/', function () {
    return view("auth/login");
})->middleware(['auth', 'verified'])->name('dashboard');
 */















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
