<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
//cách nhúng controller
//use  namespace của controller\tên controller
//cú pháp: route::get(url,action(đường dẫn))
//muốn gọi controller trong đường dẫn thì phải nhúng ở trên bằng từ khóa use
// Route::get('/', function () {
//     return view('welcome');
// });


/*route::get('/student/{name}/{age}', function($name,$age) {
    return ("my name is $name <br> im $age years old");
});
*/


/*cách nhúng 1 đối tượng trong controller vào route
route::get('/student', [tên class::class,'tên đối tượng trong class']);
studentController::class nghĩa là studentController là 1 class và index
là 1 đối tượng trong class đó
*/
Route::get('/student',[studentController::class,'index']);



/*nếu có 2 route giống nhau về mặt cấu trúc sẽ
gặp lỗi ,VD
route::get('/{a}/{b}',function($a,$b) {
    return $a+$b;
});
route::get('/{title}/{id}',function($title,$id) {
    return "<h1>tiêu đề là $title mã là $id</h1>";
});

*/

//thêm lớp
Route::get("/",[GradeController::class,'index']);
Route::get("/grade/create",[GradeController::class,'create']);
Route::post("/grade/store",[GradeController::class, 'store'])->name('store');