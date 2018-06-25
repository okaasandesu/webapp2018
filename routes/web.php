<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*練習
Route::get("tasklist", function () {
    return "hello world";
});

Route::get("/tasklist2",function(){
    return "this is tasklist page!";
});

Route::get("/",function(){
    return view("tasklist");
});



Route::get("/tasklist",function(){
    return view("tasklist", [
        "message" => "hello world",
        "tasks" => [
            "本を買いに行く",
            "部屋の掃除をする",
            "ゲームをする"
        ],
    ]);
});

Route::post("/task",function(){
    return "hello world";
});

Route::post("/task",function(){
    $taskName = request()->get("task_name");
    return "入力された文字は {$taskName} です。";
});

Route::post("/task",function(){
    $taskName = request()->get("task_name");
    // ここでDBなりに保存する。
    return redirect("/tasklist");
});

Route::get("/params_test",function(){
    $title = request()->get("title");
    return $title;
});
*/

/*tasklistの機能*/

Route::get("/tasklist",function(){
    $tasks = DB::select("select * from tasks order by date asc");
    $tasks2 = DB::select("select * from tasks2");
    $tasks3 = DB::select("select * from tasks3");
    $searchKey = request()->get("searchkey");
    if($searchKey){
        $tasks4 = DB::select("select * from tasks4 where name like ?",["%$searchKey%"]);
    }else{
        $tasks4 = DB::select("select * from tasks4");
    }
    return view("tasklist", [
        "message" => "hello world",
        "tasks" => $tasks,
        "tasks2" => $tasks2,
        "tasks3" => $tasks3,
        "tasks4" => $tasks4
    ]);
});

Route::get("/tasksort",function(){
    $tasks = DB::select("select * from tasks order by size desc");
    $tasks2 = DB::select("select * from tasks2");
    $tasks3 = DB::select("select * from tasks3");
    $tasks4 = DB::select("select * from tasks4");
    return view("tasklist", [
        "tasks" => $tasks,
        "tasks2" => $tasks2,
        "tasks3" => $tasks3,
        "tasks4" => $tasks4

    ]);
});

Route::get("/tasksort2",function(){
    $tasks = DB::select("select * from tasks ");
    $tasks2 = DB::select("select * from tasks2 order by size desc");
    $tasks3 = DB::select("select * from tasks3");
    $tasks4 = DB::select("select * from tasks4");
    return view("tasklist", [
        "tasks" => $tasks,
        "tasks2" => $tasks2,
        "tasks3" => $tasks3,
        "tasks4" => $tasks4

    ]);
});

Route::get("/tasksort3",function(){
    $tasks = DB::select("select * from tasks ");
    $tasks2 = DB::select("select * from tasks2 ");
    $tasks3 = DB::select("select * from tasks3 order by size desc");
    $tasks4 = DB::select("select * from tasks4");
    return view("tasklist", [
        "tasks" => $tasks,
        "tasks2" => $tasks2,
        "tasks3" => $tasks3,
        "tasks4" => $tasks4

    ]);
});

Route::post("/task",function(){
    $taskdate = request()->get("fish_date1");
    $taskplace = request()->get("fish_place1");
    $tasksize = request()->get("fish_size1");
    DB::insert("insert into tasks (date,place,size) values (?,?,?)",[$taskdate,$taskplace,$tasksize]);
    return redirect("/tasklist");
});

Route::post("/task2",function(){
    $taskdate2 = request()->get("fish_date2");
    $taskplace2 = request()->get("fish_place2");
    $tasksize2 = request()->get("fish_size2");
    DB::insert("insert into tasks2 (date,place,size) values (?,?,?)",[$taskdate2,$taskplace2,$tasksize2]);

    return redirect("/tasklist");
});

Route::post("/task3",function(){
    $taskdate3 = request()->get("fish_date3");
    $taskplace3 = request()->get("fish_place3");
    $tasksize3 = request()->get("fish_size3");
    DB::insert("insert into tasks3 (date,place,size) values (?,?,?)",[$taskdate3,$taskplace3,$tasksize3]);

    return redirect("/tasklist");
});

Route::post("/task4",function(){
    $taskname4 = request()->get("fish_name4");
    $taskplace4 = request()->get("fish_place4");
    $tasksize4 = request()->get("fish_size4");
    DB::insert("insert into tasks4 (name,place,size) values (?,?,?)",[$taskname4,$taskplace4,$tasksize4]);

    return redirect("/tasklist");
});

Route::post("/task/delete",function(){
    $taskId = request()->get("id");
    DB::delete("delete from tasks where id = ?", [$taskId]);
    return redirect("/tasklist");
});

Route::post("/task2/delete",function(){
    $taskId = request()->get("id");
    DB::delete("delete from tasks2 where id = ?", [$taskId]);
    return redirect("/tasklist");
});

Route::post("/task3/delete",function(){
    $taskId = request()->get("id");
    DB::delete("delete from tasks3 where id = ?", [$taskId]);
    return redirect("/tasklist");
});

Route::post("/task4/delete",function(){
    $taskId = request()->get("id");
    DB::delete("delete from tasks4 where id = ?", [$taskId]);
    return redirect("/tasklist");
});




