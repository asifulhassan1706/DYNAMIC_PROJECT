@extends('backend.pages.teacher.teacherDashboard')

@section('body-content')
<div class="content-wrapper">
    <div id="users-table">
        <div class="card card-rounded">
            <div class="card-body">
                <h3 class="fw-bold text-capitalize">Create Group</h3>
               
                <form method="POST" action="{{ url('store-new-group') }}" class="py-3">
                    @csrf
                    <div class="form-group">
                        <label for="group-name" class="control-label">Group Name</label><br>
                        <input name="group_name" type="text" class="new-border form-control form-control-lg" required placeholder="Group name">
                    </div>
                    <div class="form-group">
                        <label for="Members" class="control-label">Total Members</label><br>
                        <input class="astro" id="one" type="radio" required name="total_member" value="1"> One
                        <input class="astro" id="Two" type="radio" required name="total_member" value="2"> Two
                        <input class="astro" id="Three" type="radio" required name="total_member" value="3"> Three
                    </div>
                    <!-- Member info -->
                    <div id="mem-container" class="form-group"></div>
                    <!-- all button -->
                    <div class="form-button-container d-flex gap-2 flex-md-row flex-column">
                        <!-- <div class="mt-3">
                            <input class="btn w-auto btn-outline-info border border-info text-dark btn-lg font-weight-medium" type="button" id="addbtn" value="ADD">
                            <input class="btn w-auto btn-outline-info border border-info text-dark btn-lg font-weight-medium d-none" type="button" id="reset" value="RESET">
                        </div> -->
                        <!-- submit button  -->
                        <div id="Create_btn" class="mt-3">
                            <button type="submit" class="btn w-auto btn-info text-white btn-lg font-weight-medium auth-form-btn">Save Group</button>
                        </div>
                    </div>
                    
                </form>
                
               
            </div>
        </div>
    </div>
</div>
@endsection