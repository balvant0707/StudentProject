{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="">
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">New Add Students</h5>
            </div>
            <div class="card-body p-4">                
                <form method="POST" class="row g-3 needs-validation" novalidate="" id="studentForm"  action="">
                @csrf
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="bsValidation1" name="studentname" placeholder="First Name" value="" required="">
                        <div class="invalid-feedback">
                            Please Insert Student Name.
                        </div>
                    </div>                   
                    <div class="col-md-12">
                        <label for="bsValidation3" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="bsValidation3" name="phone" placeholder="Phone" required="">
                        <div class="invalid-feedback">
                        Please provide a valid phone number.
                            </div>
                    </div>
                    <div class="col-md-12">
                        <label for="bsValidation4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="bsValidation4" name="email" placeholder="Email" required="">
                        <div class="invalid-feedback">
                            Please provide a valid email.
                            </div>
                    </div>                                       
                    <div class="col-md-12">
                        <label for="bsValidation8" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="bsValidation8" name="startdate" placeholder="Date of Birth" required="">
                        <div class="invalid-feedback">
                            Please select date.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="bsValidation8" class="form-label">Last Date</label>
                        <input type="date" class="form-control" id="bsValidation7" name="lastdate" placeholder="Date of Birth" required="">
                        <div class="invalid-feedback">
                            Please select date.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="bsValidation9" class="form-label">Select Subject</label>
                        <select id="bsValidation9" class="form-select" name="subject" required="">
                            <option selected="" disabled="" value="">...</option>
                            <option>Hindi</option>
                            <option>English</option>
                            <option>Gujrati</option>
                            <option>Maths</option>
                            <option>Science</option>
                            <option>Social Sciences</option>
                            <option>Sociology</option>
                            <option>Psychology</option>
                            <option>Geography</option>
                            <option>Economics</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid Subject.
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="button" class="btn btn-success px-4" id="studentsubmit">Submit</button>
                            <button type="reset" class="btn btn-light px-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })();

    $('#studentsubmit').click(function() {  
        var datas = $('#studentForm').serialize();                               
        $.ajax({
            type: 'POST',
            url: '/studentAdd', 
            data: datas ,
            success: function(response) {
                console.log(response);
                location.reload();
            }
        });        
    });    
</script>
<div class="title" style="padding-top: 2rem">
<h4 class="mb-0 text-uppercase" style="text-align: center;">Student Subject Details</h4>
<div>
<div class="card">
    <div class="card-body">
        <div class="" style="margin-bottom:10px;">
            <div class="flex-grow-1 mx-xl-2 my-2 my-xl-0">
                <div class="input-group">
                    <input type="text" class="form-control" id="my-search"
                        placeholder="Search Student...">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">                
                <div class="">
                    <div class="col-sm-12">
                        <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 214px;">Student Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 326px;">Phone</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 156px;">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 76px;">Subject</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 146px;">Start date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120px;">Last Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120px;">Edit</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120px;">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="student_projuct"> 
                                @foreach($studentWithSubjects as $studentWithSubject)                 
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{ $studentWithSubject->student->name }}</td>
                                    <td>{{ $studentWithSubject->student->mobile_number }}</td>
                                    <td>{{ $studentWithSubject->student->email }}</td>
                                    <td> {{ $studentWithSubject->subject->subject_name }}</td>
                                    <td>{{ $studentWithSubject->start_date }}</td>
                                    <td>{{ $studentWithSubject->end_date }}</td>
                                    <td><button data-student-id="{{ $studentWithSubject->student_id }}" data-subject-id="{{ $studentWithSubject->subject_id }}" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-primary px-4 edit-btn">Edit</a></td>
                                    <td><button type="button" class="btn btn-danger px-4 delete-btn" data-student-id="{{ $studentWithSubject->student_id }}" data-subject-id="{{ $studentWithSubject->subject_id }}">Delete</button></td>
                                </tr>
                                @endforeach  
                            </tbody>                
                        </table>
                        <div id="no-results-message" style="display: none;text-align: center;"><i
                            class="fadeIn animated bx bx-search"></i>
                        No data found
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Student With Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form method="POST" id="updateStudentForm">
                   
                    @method('POST')
                    <div class="col-md-12">
                        <input type="hidden" value="" id="mainid" name="mainid">
                        <label for="studentname" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student Name" value="" required>
                        <div class="invalid-feedback">
                            Please provide a valid student name.
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone number.
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required>
                        <div class="invalid-feedback">
                            Please provide a valid email address.
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="startdate" name="startdate" value="" required>
                        <div class="invalid-feedback">
                            Please select a start date.
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <label for="lastdate" class="form-label">Last Date</label>
                        <input type="date" class="form-control" id="lastdate" name="lastdate" value="" required>
                        <div class="invalid-feedback">
                            Please select a last date.
                        </div>
                    </div>
                
                    <div class="col-md-12">
                        <label for="subject" class="form-label">Select Subject</label>
                        <select id="subject" class="form-select" name="subject" required>
                            
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid subject.
                        </div>
                    </div>
                <div class="col-md-12" style="margin-top: 1rem;">
                    <button type="button" class="btn btn-primary" id="updateBtn">Update</button>                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
   $(document).ready(function() {
        $('#example').DataTable();
    });
   $(document).on('click', '.delete-btn', function () {
        var studentId = $(this).data('student-id');
        var subjectId = $(this).data('subject-id');

        $.ajax({
            url: "{{ route('studentwithsubject.delete', ['studentId' => ':studentId', 'subjectId' => ':subjectId']) }}"
                    .replace(':studentId', studentId)
                    .replace(':subjectId', subjectId),
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {                
                console.log(response);   
                location.reload();          
            }
        });
    });

    $(document).on('click', '.edit-btn', function () {
        var studentId = $(this).data('student-id');
        var subjectId = $(this).data('subject-id');

            $.ajax({
                url: '{{ route('edit') }}',
                type: 'get',
                data: {
                    studentId: studentId,
                    subjectId: subjectId
                },
                success: function (response) {
                    $('#studentname').val(response.student.name);
                    $('#phone').val(response.student.mobile_number);
                    $('#email').val(response.student.email);
                    $('#startdate').val(response.studentWithSubject.start_date);
                    $('#lastdate').val(response.studentWithSubject.end_date);
                    $('#mainid').val(response.studentWithSubject.id);
                    $('#subject').empty();
                    $.each(response.subject, function(index, value) {
                        $('#subject').append($('<option>', {
                            value: value.id,
                            text: value.subject_name,
                            selected: (value.id == response.studentWithSubject.subject_id)
                        }));
                    });
                    $('#editModal').modal('show');
                }
            });

        $('#updateBtn').on('click', function() {
        var formData = $('#updateStudentForm').serialize();
            $.ajax({
                url: "{{route('update')}}",
                type: 'POST', 
                data: formData,
                success: function(response) {
                    console.log(response);
                    $('#editModal').modal('hide');
                    location.reload();  
                }
            });
        });
    });
$("#my-search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#student_projuct tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
            var visibleRowCount = $("#student_projuct tr:visible").length;
            if (visibleRowCount > 0) {
                $("#no-results-message").hide();
            } else {
                $("#no-results-message").show();
            }
        });
</script> --}}
