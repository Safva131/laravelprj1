<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Exceptions\InvalidOrderException;
use App\Models\Customer;
use App\Models\EmployeeCategory;
use App\Models\Employee;
use App\Mail\SendMail;


use DB;

class TestController extends Controller
{
    function TestFunction(Request $request){
       $firstNum = $request->num1;
       $secondNum = $request->num2;
       $sum = $firstNum+$secondNum;
       return view('sum',['result'=>$sum]);

    } 

    function StudentList(Request $request){
        $student	=	array(
            array("RollNo"=>1,"StudentName"=>"jdsf","StudentPlace"=>"kdsbf"),
            array("RollNo"=>2,"StudentName"=>"snmdfskda","StudentPlace"=>"jdfhds"),
           
    );

        return view('test',['students' => $student]);
    }


    function fnStudentRegister(Request $request){
        // try{
            $name = $request->stud_name;
            $contact = $request->stud_contact;
            $address = $request->stud_address;
            $students = DB::table('student')->insert([
                'Name'=>$name,
                'Contact'=>$contact,
                'Address'=>$address
        ]);
        // print_r($students);
        if($students){
            return view('student_registration',['error' => "Student registered"]);
        }
        else{
            return view('student_registration',['error' => "Data not registered"]);
        }
        
        // catch(Throwable $ex){
            //echo "not registrerd".$ex;
            //echo $ex->getMessage();
            //report($ex);
            // echo "not registered";
            // return false;
        // }
        
    }

    function fnGetStudents(){
        $studentList = DB::table('student')->get();
        // print_r($students);
        return view('student_data',['students'=> $studentList]);

    }

    function fnGetAStudent(){
        $student = DB::table('student')->pluck('Name');
        print_r($student);
        //echo $student->Name;

    }

    function fnDelStudent($id){
        echo $id;
        DB::table('student')->where ('id', $id)->delete();
        return redirect('Students');
    }

    function fnRetrieveStudentData($id){
        $student = DB::table('student')->where ('id', $id)->first();
        return view('student_update',['student'=> $student]);
    }

    function fnUpdateStudent(Request $request, $id){
        $name = $request->stud_name;
        $contact = $request->stud_contact;
        $address = $request->stud_address;
        DB::table('student')-> where('id',$id)->update([
            'Name'=> $name,
            'Contact'=>$contact,
            'Address'=>$address
        ]);
        return redirect('Students');
    }

    function fnStudentLogin(Request $request){
        $this->validate($request,[
            'user_name'=>'required',
            'password'=>'required'
        ],
    [
        'user_name.required'=>'please enter your username',
        'user_name.min'=>'minimum length should be 10'
    ]);
        $username = $request->user_name;
        $password = $request->password;
        $loginid=DB::table('student')->where('Name',$username)->first();
        if(is_null($loginid)){
            return view('studentlogin',['error'=>'Incorrect username or password']);
            //echo "";
        }
        elseif(($username == $loginid->Name)&&($password == $loginid->Contact)){
            
            //echo "Login success";
            $request->session()->put('user_id',$loginid->id);
            return redirect('HomePage');

        }
        else{
            return view('studentlogin',['error'=>'Incorrect username or password']);
            //echo "incorrect password";
        }
    }

    function fnRetrieveHome(Request $request){
        if(session()->has('user_id')){
            $sessId = $request->session()->get('user_id');
            //$student_data = DB::table('student')->where('id',$sessId)->first();
            //echo $student_data;
            return view('dashboard');
        }
        else{
            echo "please login your account";
        }
        // echo session()->get('user_id');
        // return view('dashboard');
    }

    function fnLogout(){
        session()->forget('user_id');
        session()->flush();
        return view('studentlogin');
    }

    function fnSaveStudentProfile(Request $request){
        $name = $request->stud_name;
        $contact=$request->stud_contact;
        $img ="eshopping".time().".".$request->stud_img->getClientOriginalExtension();
        echo $img;
        $request->stud_img->storeAs('public/profile',$img);
        $students = DB::table('table_student_profile')->insert([
            'name'=>$name,
            'contact'=>$contact,
            'file_name'=>$img
    ]);

    if($students){
        return view('student_profile',['error' => "Student registered"]);
    }
    else{
        return view('student_profile',['error' => "Data not registered"]);
    }
    

        
        //print_r($img);
    }

    function fnGetStudentsProfile(){
        $studentList = DB::table('table_student_profile')->get();
         //$records = DB::table('table_student_profile')->count();
         //print_r($records);
         //$stud = DB::table('table_student_profile')->select('file_name as profile_pic')->get();
        //print_r($stud);
        //$student1 = DB::table('student')->groupBy('id','Name')->having('Name','=','safvaaa')->get();
        //print_r($student1);
        return view('view_student_profile',['students'=> $studentList]);
    }

    function fnSaveCustomer(Request $request){
        $name = $request->customer_name;
        $contact = $request->customer_contact;
        $country = $request->customer_country;
        $status = $request->customer_status;
        // $obj = new Customer();
        // $obj->customer_name = $name;
        // $obj->customer_contact = $contact;
        // $obj->customer_country = $country;
        // $obj->customer_status = $status;
        // $obj->save();


        
        $obj = new Customer([
            'customer_name' => $name,
            'customer_contact' => $contact,
            'customer_country' => $country,
            'customer_status' => $status
        ]);
        $obj->save();
        return view('customer_register',['message' => "Customer registered"]);
    }

    function fnGetCustomers(){
        // foreach (Customer::all() as $customer) {
        //     echo $customer->customer_name;
        // }
        $customerList = Customer::get();

        return view('view_customers',['userDetails'=>$customerList]);
    }

    function fnDelCustomer($customerId){
        $customer = Customer::find($customerId);
        $customer->delete();
        //echo $customerId;
        return redirect('ViewCustomer');
    }
    function fnCheckuser(Request $request){
        //echo "hai";
        $user = $request->username;
        
        $name=DB::table('student')->where('Name',$user)->first();
        if(is_null($name)){
            return Response::json(array('success'=>true,'result'=>'username is available'));
        }
        else{
            return Response::json(array('success'=>true,'result'=>'username already taken'));
        }
        return Response::json(array('success'=>true,'result'=>$user));
    }

    function fnAddEmployeeCategory(Request $request){
        
        $empCategory = $request->category;
        $empDesc = $request->desc;
        $empCategoryobj = new EmployeeCategory([
            'category_name' => $empCategory,
            'category_description' => $empDesc
        ]);
         $empSave = $empCategoryobj->save();
        if($empSave){
            return Response::json(array('success'=>true,'result'=>'data inserted successfully'));
        }
        else{
            return Response::json(array('success'=>true,'result'=>'error'));
        }
    }
    function fnGetEmployeeCategories(){
        $empcategories = EmployeeCategory::all();
        return Response::json(array('success'=>true,'data'=>$empcategories ));
        //return response()->json(['emp_category_data'=>$empcategories]);
    }
    function fnDeleteEmpcategory(Request $request){
        $category_id = $request->del_id;
        $category = EmployeeCategory::find($category_id);
        $category->delete();
        return Response::json(array('success'=>true,'result'=>'Data deleted !'));
    }

    function fnAddcategories(){
        $categories = EmployeeCategory::all();
        //print_r($categories);
        return Response::json(array('success'=>true,'categories'=>$categories));
    }
    function fnAddEmployee(Request $request){
        $name = $request->emp_name;
        $category = $request->emp_categories;
        $dob = $request->emp_dob;
        $place = $request->emp_place;
        $empObj = new Employee([
            'emp_name'=>$name,
            'emp_categories'=>$category,
            'emp_dob'=>$dob,
            'place'=>$place
        ]);
        $empSave = $empObj->save();
        if($empSave){
            return view('employee_register',['message'=>'employee registered successfully']);
        }
        else{
            return view('employee_register',['message'=>'error in registration']);
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////api's
    function fnDisplayCategory(){
        //$jsonData = '{"key1":"value1","key2":"value2","key3":"value3"}';
        $empcategories = EmployeeCategory::all();
        return Response::json(array('success'=>true,'data'=>$empcategories ));
        //return Response::json(array('success'=>true,'result'=>$jsonData));
    }
    function fnAddCategory(Request $request){
        $empCategory = $request->category;
        $empDesc = $request->desc;
        $empCategoryobj = new EmployeeCategory([
            'category_name' => $empCategory,
            'category_description' => $empDesc
        ]);
         $empSave = $empCategoryobj->save();
        if($empSave){
            return response(['result'=>'data inserted successfully']);
        }
        else{
            return response(['result'=>'error']);
        }
    }

    function fnAPIGetCustomers(){
       
        $customerList = Customer::get();
        //return Response::json(array('success'=>true,'result'=>$customerList));

        return response(['userDetails'=>$customerList]);
    }

    function fnUpdateCategories(Request $request){
        $categoryObj = EmployeeCategory::find($request->id);
        $categoryObj->category_name = $request->category;
        $categoryObj->category_description = $request->desc;
        $result = $categoryObj->save();
        if($result){
            return response(['message'=>'data updated successfully']);
        } 
        else{
            return response(['message'=>"error"]);
        } 

    }

    function fnSendMail(Request $request){
        $name = $request->name;
        $mail = $request->email;
        $message = $request->message;
        $details = [
            'title'=>'exampletitle',
            'name'=>$name,
            'body'=>'body'.$message
        ];
        \Mail::to($mail)->send(new SendMail($details));
        return view('thanks');

    }


    function fngetData(){
        return ['name'=>'Safva','email'=>'safva@baabte.com'];
    }

    function fnGetList(){
        return EmployeeCategory::all(); 
    }
}
