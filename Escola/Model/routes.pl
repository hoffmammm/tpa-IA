use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\DisciplinaController;

Route::resource('professores', ProfessorController::class);
Route::resource('disciplinas', DisciplinaController::class);
