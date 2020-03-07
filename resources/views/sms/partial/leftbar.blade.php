<aside id="leftsidebar" class="sidebar">
<!-- User Info -->
<div class="user-info">
<div class="image">
    <img src="{{ asset('sms') }}/images/user.png" width="48" height="48" alt="User" />
</div>
<div class="info-container">
    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
    <div class="email">john.doe@example.com</div>
    <div class="btn-group user-helper-dropdown">
<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
<ul class="dropdown-menu pull-right">
    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
</ul>
</div>
</div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
<ul class="list">
<li class="header">MAIN NAVIGATION</li>
<li class="active">
    <a href="{{ route('sms.home.index') }}">
        <i class="material-icons">home</i>
        <span>Home</span>
    </a>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">dashboard</i>
        <span>Dashboard</span>
    </a>
    <ul class="ml-menu">
        <li data-theme="red">
            <a class="waves-light" href="{{ route('sms.home.index') }}">Admin</a>
            <a href="{{ route('sms.home.student') }}">Students</a>
            <a href="{{ route('sms.home.parent') }}">Parents</a>
            <a href="{{ route('sms.home.teacher') }}">Teachers</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">toys</i>
        <span>Students</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('AdmissionForm.index') }}">All Students</a>
            <a href="pages/ui/alerts.html">Student Details</a>
            <a href="{{ route('AdmissionForm.create') }}">Admission Form</a>
            <a href="{{ route('StudentPromotionForm.create') }}">Student Promotion</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">gamepad</i>
        <span>Teachers</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('TeacherForm.index') }}">All Teachers</a>
            <a href="pages/ui/alerts.html">Teacher Details</a>
            <a href="{{ route('TeacherForm.create') }}">Add Teacher</a>
            <a href="pages/ui/alerts.html">Payment</a>
        </li>
    </ul>
</li>
 <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">bubble_chart</i>
        <span>Parents</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('ParentForm.index') }}">All Parents</a>
            <a href="pages/ui/alerts.html">Parent Details</a>
            <a href="{{ route('ParentForm.create') }}">Add Parent</a>
        </li>
    </ul>
</li>
   <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">local_library</i>
        <span>Library</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('LibraryForm.index') }}">All Book</a>
            <a href="{{ route('LibraryForm.create') }}">Add New Book</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">account_tree</i>
        <span>Account</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('AddExpenseForm.index') }}">All Fees Collection</a>
            <a href="{{ route('AddExpenseForm.index') }}">Expenses</a>
            <a href="{{ route('AddExpenseForm.create') }}">Add Expenses</a>
        </li>
    </ul>
</li>
 <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">where_to_vote</i>
        <span>class</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('ClassForm.index') }}">All Classes</a>
            <a href="{{ route('ClassForm.create') }}">Add New Class</a>
        </li>
    </ul>
</li>
 <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">subject</i>
        <span>Subject</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('SubjectForm.index') }}">All Subject</a>
            <a href="{{ route('SubjectForm.create') }}">Add New Subject</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">class</i>
        <span>Class Routine</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('ClassRoutineForm.index') }}">All Class Routine</a>
            <a href="{{ route('ClassRoutineForm.create') }}">Add Class Routine</a>
        </li>
    </ul>
</li>
 <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">dialpad</i>
        <span>Attendence</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('AttendenceForm.index') }}">All Attendence</a>
            <a href="{{ route('AttendenceForm.create') }}">Add Attendence</a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">import_contacts</i>
        <span>Exam</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('ExamScheduleForm.index') }}">All Exam Schedule</a>
            <a href="{{ route('ExamScheduleForm.create') }}">Exam Schedule</a>
            <a href="{{ route('ExamForm.index') }}">All Exam Grades</a>
            <a href="{{ route('ExamForm.create') }}">Exam Grades</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">emoji_transportation</i>
        <span>Transport</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('TransportForm.index') }}">All Transport</a>
            <a href="{{ route('TransportForm.create') }}">Add Transport</a>
        </li>
    </ul>
</li>
 <li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">hotel</i>
        <span>Hostel</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('HostelForm.index') }}">All Hostel</a>
            <a href="{{ route('HostelForm.create') }}">Add Hostel</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">notification_important</i>
        <span>Notice</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('NoticeForm.index') }}">All Notice</a>
            <a href="{{ route('NoticeForm.create') }}">Add Notice</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">message</i>
        <span>Message</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('MessageForm.index') }}">All Message</a>
            <a href="{{ route('MessageForm.create') }}">Add Message</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">account_circle</i>
        <span>Account</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{ route('AccountForm.index') }}">All Account</a>
            <a href="{{ route('AccountForm.create') }}">Add Account</a>
        </li>
    </ul>
</li>
</ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2016 - 2017 <a href="javascript:void(0);">School Management System</a>.
    </div>
    <div class="version">
        <b>Version: </b> 1.0.5
    </div>
</div>
<!-- #Footer -->
</aside>