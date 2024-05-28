<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\StudentWithSubject;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

// class StudentController extends Controller
// {
//     public function studentCreate ()  { 
//         $studentWithSubjects = StudentWithSubject::with('student', 'subject')
//         ->orderByDesc('created_at')
//         ->get();    
//       return view('welcome', compact('studentWithSubjects'));
//     }

//     public function studentAdd(Request $request)
//     {              
//         $formData = $request->all();   
//         $student = Student::create(['name' => $formData['studentname'],'mobile_number' => $formData['phone'],'email' => $formData['email']]);        
//         $subject = Subject::create(['subject_name' => $formData['subject']]);        
//         StudentWithSubject::create([
//           'student_id' => $student->id,
//           'subject_id' => $subject->id,
//           'subject_Name' => $formData['subject'],
//           'start_date' => $formData['startdate'],
//           'end_date' => $formData['lastdate']
//       ]);
//         return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
//     }

//     public function deleteStudentWithSubject($studentId, $subjectId)
//     {
//         $studentWithSubject = StudentWithSubject::where('student_id', $studentId)
//                                                 ->where('subject_id', $subjectId)
//                                                 ->delete();
                                                
//         $student_delete= Student::where('id', $studentId)->delete();
//         $subject_delete= Subject::where('id', $subjectId)->delete();
//         if ($studentWithSubject) {
//             return response()->json(['success' => true, 'message' => 'Record deleted successfully']);
//         } else {
//             return response()->json(['success' => false, 'message' => 'Failed to delete record']);
//         }
//     }

//     public function editModal(Request $request)
//       {
//           $studentId = $request->studentId;
//           $subjectId = $request->subjectId;

//           $studentWithSubject = StudentWithSubject::where('student_id', $studentId)
//                                                   ->where('subject_id', $subjectId)
//                                                   ->first();

//           $student = Student::where('id', $studentId)->first();
//           $subject = Subject::all();

//           $data = [
//               'studentWithSubject' => $studentWithSubject,
//               'student' => $student,
//               'subject' => $subject
//           ];

//           return response()->json($data);
//       }
      
//       public function update(Request $request)
//       {
//           try {
//               $mainId = $request->input('mainid');
//               $studentName = $request->input('studentname');
//               $phone = $request->input('phone');
//               $email = $request->input('email');
//               $startDate = $request->input('startdate');
//               $lastDate = $request->input('lastdate');
//               $subjectId = $request->input('subject');

//               $studentWithSubject = StudentWithSubject::findOrFail($mainId);

//               $student = Student::findOrFail($studentWithSubject->student_id);
//               $student->update([
//                   'name' => $studentName,
//                   'mobile_number' => $phone,
//                   'email' => $email,
//               ]);
              
//               $studentWithSubject->update([
//                   'subject_id' => $subjectId,
//                   'start_date' => $startDate,
//                   'end_date' => $lastDate,
//               ]);

//               return response()->json(['message' => 'Data updated successfully'], 200);
//           } catch (\Exception $e) {
//               return response()->json(['error' => $e->getMessage()], 500);
//           }
//       }  
// }
