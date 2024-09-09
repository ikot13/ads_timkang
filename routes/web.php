<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/student/create', function () {
    $student = new $student();
    $student->first_name = 'jericho';
    $student->last_name = 'timakang';
    $student->email = 'jericho@example.com';
    $student->save();
    return 'Student Created!';
}):

Route::get('/students', function () {
    $student = $student::all();
    return $students;
});

Route
?>
