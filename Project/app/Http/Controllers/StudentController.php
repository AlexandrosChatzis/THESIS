<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

use ZipArchive;


class StudentController extends Controller 
{

    public function give_privilege(request $request) {

        return view('give_privilege');
    }

  

    public function pass_privilege(request $request) {
        $aem=Input::get('idkartelas');
        $check= DB::table('users')->where('aem', '=',  $aem)->value('id');
       if($check==null){
        return redirect()->back()->with('alert3', 'Το ΑΕΜ δεν υπάρχει!');

       }else{
        DB::table('users')->where('aem', '=',  $aem)->update(['admin' => 1]);
        return redirect()->back()->with('alert', 'Επιτυχής Εξουσιοδότηση!');
       }
        
        
    }


    public function GDPR(request $request) {
        $student_choice = $request->session()->get('student_choice');
        $aem=\ Auth::user()->aem;
        
        $approval=DB::table('users')->where('aem', '=', $aem)->value('approval');

        return view("GDPR")->with('approval', $approval);
    }
    public function user_info(request $request) {
        $student_choice = $request->session()->get('student_choice');
        $aem=\ Auth::user()->aem;
       

        return view("user_info");
    }  public function user_info_change(request $request) {
        $aem=\ Auth::user()->aem;
        $name=Input::get('name');
        $email=Input::get('email');
        User::where('aem', $aem)
        ->update(['name' => $name ,'email' => $email ]);
        
        return redirect()->action('StudentController@user_info');
    }
    public function change_password(request $request) {
        $aem=\ Auth::user()->aem;
        $password1=$request->input('password');
        $password2=$request->input('password_confirmation');
        if($password1!=$password2){
            return redirect()->back()->with('alert1', 'Ανόμοιοι Κωδικοί');
        }else{
           $password= \ Hash::make($password1);
            DB::table('users')->where('aem', '=',  $aem)->update(['password' => $password]);
            return redirect()->back()->with('alert2', 'Επιτυχής αλλαγή κωδικού πρόσβασης');
        }
    }
    public function choose_application_type(Request $request) {
        $request->session()->forget('student_choice');
        $app_names = DB::table('application_type')->get();
        return view('/choose_application_type',compact('app_names'));

    }
    public function student_choice(Request $request) {
        $student_choice=Input::get('choice');
        $aem=\ Auth::user()->aem;
        $approval=DB::table('users')->where('aem', '=', $aem)->value('approval');
        if (!is_null($student_choice)){
            $request->session()->put('student_choice',$student_choice);
            $student_choice = $request->session()->get('student_choice');
            $document=DB::table('singleupload')->where('app_id', '=',  $student_choice)->value('uploadedfile');
          $paragraphs = DB::table('infofields')->where('app_id', '=', $student_choice)->where('menu', '=', '1')->get();
          $deletes = DB::table('infofields')->where('app_id', '=', $student_choice)->where('menu', '=', '10')->get();
          $menu1 = DB::table('infofields')->where('app_id', '=', $student_choice)->where('menu', '=', '2')->orderBy('display_order')->get();
          $menu2 = DB::table('infofields')->where('app_id', '=', $student_choice)->where('menu', '=', '3')->orderBy('display_order')->get();
          return view('index',compact('paragraphs','deletes','menu1','menu2','document','approval'));

        }else{
            return redirect()->back()->with('alert1', 'Παρακαλώ πολύ επιλέξτε μία Αίτηση για να συνεχίσετε!');
        }
     
    }

  


    public function application_type(Request $request) {
        $request->session()->forget('choice');
      //  $request->session()->flush();
        
        $app_names = DB::table('application_type')->get();
        return view('/application_type',compact('app_names'));

    }

    public function edit_or_delete_app(Request $request){

        $request->session()->forget('choice');
        $edit= $_POST['edit'];
       
        $key= $_POST['key'];
        $id= $_POST['id'];
        if( $key=="edit" AND ($edit!=null || $edit!="")){
                       
                DB::table('application_type')->where('id', '=',  $id)->update(['name' => $edit]);
         
        }else if ($key=="delete"){

           $student_uploads= DB::table('students')->where('app_id', '=',  $id)->get();
           $public_dir=public_path().'/storage';
           $filetopath = array();
            foreach ($student_uploads as $student_upload ){
                for($i=0; $i<=25; $i++){
                   
                  if ($student_upload->{'document'.$i} != null){
                    array_push($filetopath, $public_dir.'/'.$student_upload->{'document'.$i});
                  }
                }
                

            }
            
           
           foreach ($filetopath as $filetopaths ){
            \ File::delete($filetopaths);

           }
           
           $singleuploads= DB::table('singleupload')->where('app_id', '=',  $id)->get();
           foreach ($singleuploads as $singleupload ){
            \ File::delete($public_dir.'/'.$singleupload->uploadedfile);
           }

            DB::table('students')->where('app_id', '=',  $id)->delete();
            DB::table('infofields')->where('app_id', '=',  $id)->delete();
            DB::table('fields')->where('app_id', '=',  $id)->delete();
            DB::table('submitfields')->where('app_id', '=',  $id)->delete();
            DB::table('singleupload')->where('app_id', '=',  $id)->delete();
            DB::table('application_type')->where('id', '=',  $id)->delete();

        }else if($key=="enable/disable"){
           $value= DB::table('application_type')->where('id', '=',  $id)->value('disabled');

            if ($value=='yes'){
                DB::table('application_type')->where('id', '=',  $id)->update(['disabled' => 'no']);
            }else{
            DB::table('application_type')->where('id', '=',  $id)->update(['disabled' => 'yes']);

            }
        }
    }


    public function test() {
       
            return view("test");
      
    }
    public function testchoice(Request $request) {
        $choice=Input::get('choice');
        if (!is_null($choice)){
            $choice = $request->session()->put('choice',$choice);
          //$data = $request->session()->get('choice'); opou theleis twra xrisimopoihse to
            return view("test")->with('choice',$choice);
        }else{
            return redirect()->back()->with('alert1', 'Παρακαλώ πολύ επιλέξτε μία Αίτηση προς επεξεργασία');
        }
     
    }


    public function application_type_creator() {
        $fieldname=Input::get('fieldname');

        foreach ($fieldname as $fieldnames){
            if (is_null($fieldnames)){
                //do nothing
                return redirect()->back()->with('alert3', 'Παρακαλώ μην αφήνετε κενά πεδία');
            }
            else
            {
 
                 DB::table('application_type')->insert(
                     ['name' =>  $fieldnames]
                 );
 
 
             }
            
            
           
            }
            return redirect()->back()->with('alert', 'Προστέθηκε!');
         
      
      }
    




    public function testing() {
     
       
    }
    public function finish() {
        return view("FinishLine");
    }
    public function Submission() {
        return view("Ypovoli");
    }

    public function Index(request $request) {
        $student_choice = $request->session()->get('student_choice');
      
        $aem=\ Auth::user()->aem;
        
        $approval=DB::table('users')->where('aem', '=', $aem)->value('approval');


        $document=DB::table('singleupload')->where('app_id', '=',  $student_choice)->value('uploadedfile');
        $paragraphs = DB::table('infofields')->where('app_id', '=',  $student_choice)->where('menu', '=', '1')->get();
        $deletes = DB::table('infofields')->where('app_id', '=',  $student_choice)->where('menu', '=', '10')->get();
        $menu1 = DB::table('infofields')->where('app_id', '=',  $student_choice)->where('menu', '=', '2')->orderBy('display_order')->get();
        $menu2 = DB::table('infofields')->where('app_id', '=',  $student_choice)->where('menu', '=', '3')->orderBy('display_order')->get();
        return view('index',compact('paragraphs','deletes','menu1','menu2','document','approval'));
        
    }
    public function FieldPage() {
        return view("FieldPage");
    }

    public function application4(request $request) {
        $student_choice = $request->session()->get('student_choice');
        $aem=\ Auth::user()->aem;
        DB::table('users')->where('aem', '=',  $aem)->update(['approval' => 1]);
        $application = DB::table('fields')->where('app_id', '=',  $student_choice)->where('value', '=', 'Όνομα-Αίτησης')->value('name');
        $textboxes = DB::table('fields')->where('app_id', '=',  $student_choice)->where('menu', '=', '1')->orderBy('id')->get();
        
        $checkboxes = DB::table('fields')->where('app_id', '=',  $student_choice)->where('menu', '=', '2')->get();
        $paragraphs = DB::table('fields')->where('app_id', '=',  $student_choice)->where('menu', '=', '3')->get();
        $menu1 = DB::table('fields')->where('app_id', '=',  $student_choice)->where('menu', '=', '4')->orderBy('display_order')->get();
        $menu2 = DB::table('fields')->where('app_id', '=',  $student_choice)->where('menu', '=', '5')->orderBy('display_order')->get();
        
        return view('application4',compact('textboxes','checkboxes','paragraphs','menu1','menu2','application'));
    }


    public function Submission2(request $request) {
        $student_choice = $request->session()->get('student_choice');
       

        $menu1 = DB::table('submitfields')->where('app_id', '=',  $student_choice)->where('menu', '=', '2')->orderBy('display_order')->get();
        $menu2 = DB::table('submitfields')->where('app_id', '=',  $student_choice)->where('menu', '=', '3')->orderBy('display_order')->get();
        $menu3 = DB::table('submitfields')->where('app_id', '=',  $student_choice)->where('menu', '=', '4')->orderBy('display_order')->get();
        return view('Ypovoli2',compact('tableheaders','deletes','menu1','menu2','menu3'));
       
    }

    public function storeStudent2(request $request) {
        $student_choice = $request->session()->get('student_choice');
        $aem=\ Auth::user()->aem;
       

        
         

        $table=array();
        $myfiles=Input::file('myFile');
       // dd ($myfiles);
        $myfilesnames=$request->input('myFileName');
      // return sizeof($myfilesnames);
       // dd($myfilesnames);
        $str="*";
        for($i=0; $i<sizeof($myfilesnames); $i++)
        {   
            if (strpos( $myfilesnames[$i],$str) !== false) {
               array_push($table, $i);
            }

        }
        

     
         //dd($table);
         for ($i=0; $i<sizeof($table); $i++){
        $this->validate($request,[
            'myFile.*'   => "mimes:pdf|max:10000",
            'myFile.'.$table[$i]  => "required",
        ],[
            'myFile.*.required' => "ΠΑΡΑΚΑΛΩ ΠΟΛΥ ΑΝΕΒΑΣΤΕ ΤΑ ΠΕΔΙΑ ΜΕ ΤΟΝ ΑΣΤΕΡΙΣΚΟ(*)",
            'myFile.*.mimes'=>'Δεχόμαστε μόνο αρχεία pdf',
            'myFile.*.max'=> 'Το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ]);

         }

         
         if(Student::where('student_aem', $aem)->where('app_id', '=',  $student_choice)->get()!=null){
          
           $student_uploads= DB::table('students')->where('student_aem', '=',  $aem)->where('app_id', '=',  $student_choice)->get();
          
           $public_dir=public_path().'/storage';
           $filetopath = array();
            foreach ($student_uploads as $student_upload ){
                for($i=0; $i<=25; $i++){
                   
                  if ($student_upload->{'document'.$i} != null){
                    array_push($filetopath, $public_dir.'/'.$student_upload->{'document'.$i});
                  }
                }
                

            }
            
           
           foreach ($filetopath as $filetopaths ){
            \ File::delete($filetopaths);

           }
           Student::where('student_aem', $aem)->where('app_id', '=',  $student_choice)->delete(); 
         }
     
  
            $path = array();
            $student = new student;

            for($i=0; $i<26; $i++){
                $temp=Input::file('myFile.'.$i);
                if(!empty($temp)){
               $temp=$request->file('myFile.'.$i)->store('public/studentuploads');
               $path=array_fill($i,1,$temp);
               $patha=substr($path[$i], 7);
               $student['document'.$i] = $patha;
           
                }
                $student['app_id']=$student_choice;
                $student['student_aem']=$aem;
            }

           
             $student-> save();
            
           
            
            
             $request->session()->forget('student_choice');
             $app_names = DB::table('application_type')->get();
             return view('/choose_application_type',compact('app_names'))->with('alert', 'Επιτυχής Υποβολή!');
             
       

      
    }



    

    public function pagination2(request $request) {
        $data = $request->session()->get('choice');

        //  $student = Student::paginate(1);
        $menu1 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '2')->orderBy('display_order')->get();
        $countmenu1 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '2')->count();
 
        $menu2 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '3')->orderBy('display_order')->get();
        $countmenu2 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '3')->count();
        $menu3 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '4')->orderBy('display_order')->get();
        $countmenu3 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '4')->count();
        $countall = DB::table('submitfields')->where('app_id', '=',  $data)->count();
          $student= Student::where('app_id', '=',  $data)->where('finalization', '=', 0)->paginate(1);
          return view('/Pagination2',compact('tableheaders','deletes','menu1','menu2','menu3','student','countmenu1','countmenu2','countmenu3','countall'));
  
      }
      public function Kartela2(request $request) {
        $data = $request->session()->get('choice');
        $student_aem=Input::get('idkartelas');

       
        $check= Student::where('app_id', '=',  $data)->where('student_aem',$student_aem)->value('id');

       if($check==null){

        return redirect()->back()->with('alert3', 'Το ΑΕΜ δεν υπάρχει!');

    }else{
     
   
      //  $image = DB::table('students')->select('document1')->where('id','=',$id)->value('document1');
      $menu1 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '2')->orderBy('display_order')->get();
      $countmenu1 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '2')->count();

      $menu2 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '3')->orderBy('display_order')->get();
      $countmenu2 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '3')->count();
      $menu3 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '4')->orderBy('display_order')->get();
      $countmenu3 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '4')->count();
      $countall = DB::table('submitfields')->where('app_id', '=',  $data)->count();
        $student= Student::where('app_id', '=',  $data)->where('student_aem',$student_aem)->get();
        return view("/Kartela2",compact('tableheaders','deletes','menu1','menu2','menu3','student','countmenu1','countmenu2','countmenu3','countall'));
    }
    }    


      public function CreateZip2(request $request) {

        $public_dir=public_path().'/zips';
        $storagepath=public_path().'/storage';
        $aem=$request->input('student_aem');
        $myfilename=$request->input('myFileName');
       
        $zipFileName = $aem.'.zip';
        $zip = new ZipArchive;



        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );
        $filetopath=$public_dir.'/'.$zipFileName;
        if(file_exists($filetopath)){
            \ File::delete($filetopath);
        }


        if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) { 
            
            
      
       for($i=0; $i<count($myfilename); $i++){
           if (!empty($currentdoc=$request->input('doc'.$i))){
            
            $zip->addFile($storagepath.'/'.$currentdoc,$aem.'-'.$myfilename[$i].'.pdf');   
               
            
           }
          
        }
        $zip->close();
    }
   
    $headers = array(
        'Content-Type' => 'application/octet-stream',
    );

    $filetopath=$public_dir.'/'.$zipFileName;
    
        
        if(file_exists($filetopath)){
            return response()->download($filetopath,$zipFileName,$headers);
        }
        return ['status'=>'file does not exist'];
    

    }


















    public function editsubmit(request $request) {
        $data = $request->session()->get('choice');

        $tableheaders = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '1')->get();
        $deletes = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '10')->get();
        $menu1 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '2')->orderBy('display_order')->get();
        $menu2 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '3')->orderBy('display_order')->get();
        $menu3 = DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', '4')->orderBy('display_order')->get();
        return view('edit-submit',compact('tableheaders','deletes','menu1','menu2','menu3'));
    }



    public function  edit_or_delete_submit_fields(request $request) { 
        $data = $request->session()->get('choice');

        $edit= $_POST['edit'];
       
        $key= $_POST['key'];
        $id= $_POST['id'];
        if( $key=="edit" AND ($edit!=null || $edit!="")){
                       
                DB::table('submitfields')->where('app_id', '=',  $data)->where('id', '=',  $id)->update(['name' => $edit]);
         
        }else if ($key=="delete"){

          
            DB::table('submitfields')->where('app_id', '=',  $data)->where('id', '=',  $id)->delete();
         
                }
          
            
      

        
    }


    public function SubmitFieldPage(request $request) {
        $data = $request->session()->get('choice');

        $tableheaders = DB::table('submitfields')->where('app_id', '=',  $data)->get();
        

        return view("SubmitFieldPage",compact('tableheaders'));
    }




    public function SubmitFieldAdder(request $request) {
        $data = $request->session()->get('choice');



        $fieldname=Input::get('fieldname');
         
        
        //return $sum;
        
        
         foreach ($fieldname as $fieldnames){
            if (is_null($fieldnames)){
                //do nothing
               // return redirect()->back()->with('alert3', 'Παρακαλώ μην αφήνετε κενά πεδία');
              // DB::table('submitfields')->insert(
              //  ['name' =>  "",'menu' => 1]
           // );
           return redirect()->back()->with('alert3', 'Παρακαλώ μην αφήνετε κενά πεδία');
            }
            else
            {
                $sum = DB::table('submitfields')->where('app_id', '=',  $data)->count();
                if ($sum<25) {
                    DB::table('submitfields')->insert(
                        ['app_id'=> $data,'name' =>  $fieldnames,'menu' => 1]
                    );
                 }else{
                    return redirect()->back()->with('alert3', 'Υπερβήκατε το όριο των 25 πεδίων!');
                 }
        
                
 
 
             }
            
            
           
            }
            return redirect()->back()->with('alert', 'Προστέθηκε!');

    }




    public function submitajaxresponse(request $request) {
        $data = $request->session()->get('choice');

       
        $menus= $_POST['menus'];
        $positions= $_POST['positions'];
        foreach ($positions as $position){
            $id= $position[0];
            $newposition= $position[1];
            
            DB::table('submitfields')->where('app_id', '=',  $data)
            ->where('id', $id)
            ->update(['display_order' => $newposition, 'menu' => $menus]);


        }
    }





    public function submitDelete_all(request $request) {
        $data = $request->session()->get('choice');


        DB::table('submitfields')->where('app_id', '=',  $data)->where('menu', '=', 10)->delete();


    }











    public function  UploadDocument(request $request) { 

        $data = $request->session()->get('choice');
        
       $UploadFile=Input::file('UploadFile');

        $this->validate($request,[
            'UploadFile'   => "required|mimes:pdf|max:10000"
           
        ],[
            'UploadFile.required' => "ΠΑΡΑΚΑΛΩ ΠΟΛΥ ΑΝΕΒΑΣΤΕ ΕΓΓΡΑΦΟ ΔΙΚΑΙΟΛΟΓΗΤΙΚΩΝ",
            'UploadFile.mimes'=>'Δεχόμαστε μόνο αρχεία pdf',
            'UploadFile.max'=> 'Το μέγεθος του αρχείου είναι πολύ μεγάλο'
        ]);




        $document=DB::table('singleupload')->where('app_id', '=',  $data)->value('uploadedfile');

        \ File::delete("storage/".$document);
       DB::table('singleupload')->where('app_id', '=',  $data)->delete();

if(!empty($UploadFile)){
    $temp=$request->file('UploadFile')->store('public/studentuploads');
    $path=substr($temp, 7);
    DB::table('singleupload')->insert(
        ['app_id'=> $data,'uploadedfile' =>  $path]
    );
    return redirect()->back()->with('alert', 'Προστέθηκε!');
    }
    }







    public function  edit_or_delete_info_fields(request $request) { 
        $data = $request->session()->get('choice');

        $edit= $_POST['edit'];
       
        $key= $_POST['key'];
        $id= $_POST['id'];
        if( $key=="edit" AND ($edit!=null || $edit!="")){
                       
                DB::table('infofields')->where('app_id', '=',  $data)->where('id', '=',  $id)->update(['name' => $edit]);
         
        }else if ($key=="delete"){

          
            DB::table('infofields')->where('app_id', '=',  $data)->where('id', '=',  $id)->delete();
         
                }
                
            

        
    }




    public function editinfo(request $request) {
        $data = $request->session()->get('choice');

        $document=DB::table('singleupload')->where('app_id', '=',  $data)->value('uploadedfile');
        $paragraphs = DB::table('infofields')->where('app_id', '=',  $data)->where('menu', '=', '1')->get();
        $deletes = DB::table('infofields')->where('app_id', '=',  $data)->where('menu', '=', '10')->get();
        $menu1 = DB::table('infofields')->where('app_id', '=',  $data)->where('menu', '=', '2')->orderBy('display_order')->get();
        $menu2 = DB::table('infofields')->where('app_id', '=',  $data)->where('menu', '=', '3')->orderBy('display_order')->get();
        return view('edit-info',compact('paragraphs','deletes','menu1','menu2','document'));
    }

    public function InfoFieldPage(request $request) {
        $data = $request->session()->get('choice');

        $paragraphs = DB::table('infofields')->where('app_id', '=',  $data)->get();
        return view('/InfoFieldPage',compact('paragraphs'));
      
        
      
    }



    public function InfoFieldAdder(request $request) {
        $data = $request->session()->get('choice');



         $fieldname=Input::get('fieldname');
         
       
         
       
        
         foreach ($fieldname as $fieldnames){
            if (is_null($fieldnames)){
                //do nothing
                return redirect()->back()->with('alert3', 'Παρακαλώ μην αφήνετε κενά πεδία');
            }
            else
            {
 
                 DB::table('infofields')->insert(
                     ['app_id'=> $data,'name' =>  $fieldnames,'menu' => 1]
                 );
 
 
             }
            
            
           
            }
            return redirect()->back()->with('alert', 'Προστέθηκε!');
     }


     public function infoajaxresponse(request $request) {
        $data = $request->session()->get('choice');

        $menus= $_POST['menus'];
        $positions= $_POST['positions'];
        foreach ($positions as $position){
            $id= $position[0];
            $newposition= $position[1];
            
            DB::table('infofields')->where('app_id', '=',  $data)
            ->where('id', $id)
            ->update(['display_order' => $newposition, 'menu' => $menus]);


        }
    }
    public function infoDelete_all(request $request) {
        $data = $request->session()->get('choice');

        DB::table('infofields')->where('app_id', '=',  $data)->where('menu', '=', 10)->delete();

        }




        public function  edit_or_delete_application_fields(request $request) { 
            $data = $request->session()->get('choice');

        $edit= $_POST['edit'];
       
        $key= $_POST['key'];
        $id= $_POST['id'];
        if( $key=="edit" AND ($edit!=null || $edit!="")){
                       
                DB::table('fields')->where('app_id', '=',  $data)->where('id', '=',  $id)->update(['name' => $edit]);
         
        }else if ($key=="delete"){

          
            DB::table('fields')->where('app_id', '=',  $data)->where('id', '=',  $id)->delete();
         
                }
          
            
        }
    





    public function editapplication(request $request) {
        $data = $request->session()->get('choice');


      /*  $textboxes = DB::table('fields')->where('value', '=', 'Πεδίο-Συμπλήρωσης')->get();
        
        $checkboxes = DB::table('fields')->where('value', '=', 'Πεδίο-Επιλογής')->get();
        $paragraphs = DB::table('fields')->where('value', '=', 'Παράγραφος')->get();
       */
      $application = DB::table('fields')->where('app_id', '=',  $data)->where('value', '=', 'Όνομα-Αίτησης')->value('name');
      $textboxes = DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', '1')->get();
        
        $checkboxes = DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', '2')->get();
        $paragraphs = DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', '3')->get();
        $deletes = DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', '10')->get();

        $menu1 = DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', '4')->orderBy('display_order')->get();
        $menu2 = DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', '5')->orderBy('display_order')->get();
        
        return view('edit-application',compact('textboxes','checkboxes','paragraphs','menu1','menu2','application','deletes'));
       
    }
    public function ajaxresponse(request $request) {
        $data = $request->session()->get('choice');

        $menus= $_POST['menus'];
        $positions= $_POST['positions'];
        foreach ($positions as $position){
            $id= $position[0];
            $newposition= $position[1];
            
            DB::table('fields')->where('app_id', '=',  $data)
            ->where('id', $id)
            ->update(['display_order' => $newposition, 'menu' => $menus]);


        }
    }
   

    public function FieldPage1(request $request) {
        $data = $request->session()->get('choice');

/*
        $textboxes = DB::table('fields')->select('textbox')->where('textbox', '<>', NULL)->get();
        $checkboxes = DB::table('fields')->select('checkbox')->where('checkbox', '<>', NULL)->get();
        $paragraphs = DB::table('fields')->select('paragraph')->where('paragraph', '<>', NULL)->get();
        $textboxes->toArray();
        $checkboxes->toArray();
        $paragraphs->toArray();
        $length1=DB::table('fields')->select('textbox')->where('textbox', '<>', NULL)->count();
        $length2= DB::table('fields')->select('checkbox')->where('checkbox', '<>', NULL)->count();
        $length3=DB::table('fields')->select('paragraph')->where('paragraph', '<>', NULL)->count();*/
      /*  $textboxes = DB::table('fields')->where('value', '=', 'Πεδίο-Συμπλήρωσης')->get();
        
        $checkboxes = DB::table('fields')->where('value', '=', 'Πεδίο-Επιλογής')->get();
        $paragraphs = DB::table('fields')->where('value', '=', 'Παράγραφος')->get();
*/



$application = DB::table('fields')->where('app_id', '=',  $data)->where('value', '=', 'Όνομα-Αίτησης')->get();
$textboxes = DB::table('fields')->where('app_id', '=',  $data)->where('value', '=', 'Πεδίο-Συμπλήρωσης')->get();
        
$checkboxes = DB::table('fields')->where('app_id', '=',  $data)->where('value', '=', 'Πεδίο-Επιλογής')->get();
$paragraphs = DB::table('fields')->where('app_id', '=',  $data)->where('value', '=', 'Παράγραφος')->get();
        return view('/FieldPage1',compact('textboxes','checkboxes','paragraphs','application'));
      
    }


  
    
    









    public function FieldAdder1(request $request) {
        $data = $request->session()->get('choice');

       /* $fieldname1=Input::get('fieldname1');
        $fieldname2=Input::get('fieldname2');
        $fieldname3=Input::get('fieldname3');
        
        if(!empty($fieldname1)){
            DB::table('fields')->insert(
                ['textbox' =>  $fieldname1]
            );
        }
        if(!empty($fieldname2)){
            DB::table('fields')->insert(
                ['checkbox' =>  $fieldname2]
            );
        }
        if(!empty($fieldname3)){
            DB::table('fields')->insert(
                ['paragraph' =>  $fieldname3]
            );
        }
        return redirect()->back()->with('alert', 'Προστέθηκε!');*/


        $fieldname=Input::get('fieldname');
        
      
        $value=Input::get('value');
      
        
            
            foreach ($fieldname as $fieldnames){
                if (is_null($fieldnames)){
                    //do nothing
                    //continue;
                    return redirect()->back()->with('alert3', 'Παρακαλώ μην αφήνετε κενά πεδία');
                }
                else
                {

            if($value=='Πεδίο-Συμπλήρωσης'){
            DB::table('fields')->insert(
                ['app_id'=> $data,'name' =>  $fieldnames,'value' =>  $value,'menu' => 1 ]
            );
        }else if($value=='Πεδίο-Επιλογής'){
            DB::table('fields')->insert(
                ['app_id'=> $data,'name' =>  $fieldnames,'value' =>  $value,'menu' => 2 ]
            );
        }else if($value=='Παράγραφος'){
            DB::table('fields')->insert(
                ['app_id'=> $data,'name' =>  $fieldnames,'value' =>  $value,'menu' => 3 ]
            );
        }
        else if($value=='Όνομα-Αίτησης'){
            $application = DB::table('fields')->where('app_id', '=',  $data)->where('value', '=', 'Όνομα-Αίτησης')->value('name');
            if(!empty($application))
            {
                DB::table('fields')->where('app_id', '=',  $data)
                ->where('value', $value)
                ->update(['name' =>  $fieldnames]
                );

            }else{
                DB::table('fields')->insert(
                    ['app_id'=> $data,'name' =>  $fieldnames,'value' =>  $value]
                );


            }
           
            
          
            }
         }
        }
        return redirect()->back()->with('alert', 'Προστέθηκε!');
    }
    public function Delete_all(request $request) {
        $data = $request->session()->get('choice');

        DB::table('fields')->where('app_id', '=',  $data)->where('menu', '=', 10)->delete();

        }

    public function FieldRemover1(request $request) {
       
         $fielddelete=Input::get('fielddelete');
         $ids = DB::table('fields')->get();
         
         $this->validate($request,[
            'fielddelete'   => "numeric"
            
        ]);






         
         if(!empty($fielddelete)){
           
            foreach($ids as $id){
                
                if($id->id == $fielddelete){
                DB::table('fields')->where('id', '=', $fielddelete)->delete();
                return redirect()->back()->with('alert2', 'Διαγράφηκε!');
                }
                    

                }
                return redirect()->back()->with('alert3', 'Δεν υπάρχει το πεδίο που θέλετε να διαγράψετε!');
            
           
            
         }
       
         
     }
 




    public function FieldAdder() {

        
        
           //  DB::select(DB::raw('ALTER TABLE "application" ADD COLUMN ? VARCHAR(50) NULL'),[$fieldname] ); 
          // DB::statement('ALTER TABLE application ADD COLUMN ? VARCHAR(50) NULL ',[$fieldname] );
          $fieldname=Input::get('fieldname');
          if(!empty($fieldname)){
          
         
          if (\Schema::hasColumn('application',$fieldname)) {
            return redirect()->back()->with('alert2', 'Υπάρχει ήδη!');
        }
    
      else{  \ Schema::table('application', function ($table) {
        $fieldname=Input::get('fieldname');
        
        $table->string($fieldname, 50)->nullable();     /*->after('');*/
        
        });}}
           
           return redirect()->back()->with('alert', 'Προστέθηκε!');
    }

    public function FieldRemover() {

        
        
        //  DB::select(DB::raw('ALTER TABLE "application" ADD COLUMN ? VARCHAR(50) NULL'),[$fieldname] ); 
       // DB::statement('ALTER TABLE application ADD COLUMN ? VARCHAR(50) NULL ',[$fieldname] );
       $fieldname2=Input::get('fieldname2');
       if(!empty($fieldname2)){
       
      
       if (!\Schema::hasColumn('application',$fieldname2)) {
         return redirect()->back()->with('alert4', 'Δεν υπάρχει το πεδίο που θέλετε να διαγράψετε!');
     }


        else{ \    Schema::table('application', function ($table) {
     $fieldname2=Input::get('fieldname2');
     if(!empty($fieldname2)){
     $table->dropColumn($fieldname2);
     }
     });}
        
        return redirect()->back()->with('alert3', 'Διαγράφηκε!');
 }
    }


    public function storeStudent(request $request) {
        $this->validate($request,[
            'myFile1'   => "required|mimes:pdf|max:10000",
            'myFile2'   => "required|mimes:pdf|max:10000",
            'myFile4'   => "required|mimes:pdf|max:10000",
            'myFile6'   => "required|mimes:pdf|max:10000",
            'myFile3'   => "|mimes:pdf|max:10000",
            'myFile5'   => "|mimes:pdf|max:10000",
            'myFile9'   => "|mimes:pdf|max:10000",
            'myFile7'   => "|mimes:pdf|max:10000",
            'myFile8'   => "|mimes:pdf|max:10000",
            'myFile9'   => "|mimes:pdf|max:10000",
            'myFile10'   => "|mimes:pdf|max:10000",
            'myFile11'   => "|mimes:pdf|max:10000"
        ]);

        
        
        if($request->hasFile('myFile1')){
            $path = array();
            $student = new student;

            for($i=1; $i<12; $i++){
                $temp=Input::file('myFile'.$i);
                if(!empty($temp)){
               $temp=$request->file('myFile'.$i)->store('public/studentuploads');
               $path=array_fill($i,1,$temp);
               $patha=substr($path[$i], 7);
               $student['document'.$i] = $patha;
               
                }


            }

           
             $student-> save();
            

            return view('index');
        }

    }

        public function StudentInputsCreator() {
            
            $student = new student;
            //$student= DB::select(DB::raw('SELECT column_name FROM information_schema.columns WHERE  table_name = "application" AND table_schema = "project-sitisi"'));
           // $student= \DB::getSchemaBuilder()->getColumnListing('application');
            $pedia=DB::select(DB::raw('select count(*) from information_schema.columns where table_schema = "project-sitisi" and table_name = "application"'));
            $pedia=serialize($pedia);
            $pedia=substr($pedia,44,-3);
            
            $student =\ Schema::getColumnListing('application');
            
           
            return view('/application3')->with('student', $student)->with('pedia',$pedia);

        }


        public function StudentPersonalInfo(request $request) {
                $student = new student;
                $student =\ Schema::getColumnListing('application');
                
              //  return $request->all(); //θελω submit
                $temp=$request->file('file')->store('public/studentuploads');
                $patha=substr($temp, 7);
                $student['Φωτογραφία'] = $patha;
                
        }






        

    public function Kartela() {
        $id=Input::get('idkartelas');
      //  $image = DB::table('students')->select('document1')->where('id','=',$id)->value('document1');
        $student= Student::where('id',$id)->get();
        return view("/Kartela",compact('student'));
      
    }    

    public function idFinalization(request $request) {
        $id=$request->input('students');
        DB::table('students')
            ->where('students_id','=', $id)
            ->update(['finalization' => 1]);
            return view("test");
    }


    public function CreateZip(request $request) {

        $public_dir=public_path().'/zips';
        $storagepath=public_path().'/storage';
        $id=$request->input('students');
        $zipFileName = $id.'.zip';
        $zip = new ZipArchive;



        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );
        $filetopath=$public_dir.'/'.$zipFileName;
        if(file_exists($filetopath)){
            \ File::delete($filetopath);
        }


        if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) { 
            
            
      
       for($i=1; $i<12; $i++){
           if (!empty($currentdoc=$request->input('doc'.$i))){
            $filenames=$request->input('file'.$i);
            $zip->addFile($storagepath.'/'.$currentdoc,$id.'-'.$filenames.'.pdf');   
               
            
           }
          
        }
        $zip->close();
    }
   
    $headers = array(
        'Content-Type' => 'application/octet-stream',
    );

    $filetopath=$public_dir.'/'.$zipFileName;
    
        
        if(file_exists($filetopath)){
            return response()->download($filetopath,$zipFileName,$headers);
        }
        return ['status'=>'file does not exist'];
    

    }

    public function Finalization(request $request){
        $data = $request->session()->get('choice');
        $student_aem =Input::get('student_aem');
       // $id=$_POST['id'];
       $id=$request->input('students');
        DB::table('students')->where('app_id', '=',  $data)
        ->where('student_aem','=', $student_aem)
        ->update(['finalization' => 1]);
    return back();
    }











    public function pagination(){
      //  $student = Student::paginate(1);
        $student= Student::where('finalization', '=', 0)->paginate(1);
        return view('/pagination',compact('student'));

    }
    public function mailto(request $request){
        $data = $request->session()->get('choice');
       
        
     
        
    $messagebox = Input::get('messagebox');
    $data = [
            'messagebox' => $request->messagebox,
       
    ];

    Mail::send('mail',$data, function ($message) use ($data) {
        $student_aem =Input::get('student_aem');
        $get_email=DB::table('users')->where('aem', '=', $student_aem)->value('email');
        $message->from('alexchatzis95@gmail.com','Καλησπέρα σας');

        $message->to($get_email)->subject($data['messagebox']);
        

    });
  
return back();
}

}
