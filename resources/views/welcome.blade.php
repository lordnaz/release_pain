<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RN Generator V1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased" style="background: #f9f9f9;">
        <div class="container" style="padding-top: 70px;">
            <div class="row">
                <center>
                <h1>Release Note Generator</h1>
                </center>
                
            </div>
        </div>
        
        <div class="container" style="padding-top: 30px; margin-bottom: 40px;">


            <form action="/template-processing" method="post" enctype="multipart/form-data" accept-charset='UTF-8' class="form form-horizontal">
                @csrf  
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="cr_no">CR No</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="cr_no" class="form-control" name="cr_no" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
                <br>
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="cr_title">CR Title</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="cr_title" class="form-control" name="cr_title" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
<br>
                
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="cr_desc">CR Description</label>
                    </div>
                    <div class="col-sm-10">
                        <!-- <input type="text" id="cr_desc" class="form-control" name="cr_desc" placeholder="" required/> -->
                        <textarea name="cr_desc" id="cr_desc" class="form-control" rows="10" placeholder="Add CR description... to add line breaking, please include </w:t><w:br/><w:t> in sentences" required></textarea>
                        <!-- <span><i>please add <pre><code>test</code></pre> to add line breaking</i></span> -->
                    </div>
                    </div>
                </div>
                </div>
<br>
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="system_name">System Name</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="system_name" class="form-control" name="system_name" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
<br>
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="app_hostname">Application Hostname</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="app_hostname" class="form-control" name="app_hostname" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
<br>
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="app_ip_address">Application IP</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="app_ip_address" class="form-control" name="app_ip_address" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
<br>
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="db_hostname">Database Hostname</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="db_hostname" class="form-control" name="db_hostname" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
<br>
                <div class="row"> 
                    <div class="col-12">
                    <div class="mb-1 row">
                    <div class="col-sm-2">
                        <label class="col-form-label" for="db_ip_address">Database IP</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="db_ip_address" class="form-control" name="db_ip_address" placeholder="" required/>
                    </div>
                    </div>
                </div>
                </div>
<br>
<hr>
<center>
                <h3>Step to Deploy</h3>
                </center>
                <hr>
<br>
        <table class="table table-bordered" id="dynamicAddRemove">  
        <tr>
        <th>Start Date</th>
        <th>Hostname</th>
        <th>Server IP</th>
        <th>Activity/Steps</th>
        <th>Action</th>
        <th></th>
        </tr>
        <tr>  
        <td>
            <input type="text" id="item_id" name="moreFields[0][item_id]" value="1" hidden>
            <input type="date" id="startdt" name="moreFields[0][startdt]" class="form-control">
        </td>
        <td><input type="text" name="moreFields[0][task_hostname]" class="form-control" /></td> 
        <td><input type="text" name="moreFields[0][task_ip_address]" class="form-control" /></td> 
        <td><input type="text" name="moreFields[0][activity]" placeholder="Enter Activity/Steps" class="form-control" /></td>  
        <td><input type="text" name="moreFields[0][action_by]" placeholder="Action By" class="form-control" /></td>  
        <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>  
        </tr>  
        </table> 

<br>

<hr>
<center>
                <h3>Rollback Procedure</h3>
                </center>
                <hr>
<br>
        <table class="table table-bordered" id="rb_dynamicAddRemove">  
        <tr>
        <th>Start Date</th>
        <th>Hostname</th>
        <th>Server IP</th>
        <th>Activity/Steps</th>
        <th>Action</th>
        <th></th>
        </tr>
        <tr>  
        <td>
            <input type="text" id="rb_item_id" name="rb_moreFields[0][rb_item_id]" value="1" hidden>
            <input type="date" id="rb_startdt" name="rb_moreFields[0][rb_startdt]" class="form-control">
        </td>
        <td><input type="text" name="rb_moreFields[0][rb_task_hostname]" class="form-control" /></td> 
        <td><input type="text" name="rb_moreFields[0][rb_task_ip_address]" class="form-control" /></td> 
        <td><input type="text" name="rb_moreFields[0][rb_activity]" placeholder="Enter Activity/Steps" class="form-control" /></td>  
        <td><input type="text" name="rb_moreFields[0][rb_action_by]" placeholder="Action By" class="form-control" /></td>  
        <td><button type="button" name="add" id="rb_add-btn" class="btn btn-success">Add More</button></td>  
        </tr>  
        </table> 

<br>

                <button type="submit" class="btn btn-success float-right" style="margin-top: 50px; margin-bottom: 50px; float: right; width: 100%;">
                    <i data-feather="plus-circle" class="me-25"></i>
                    <span>Generate</span>
                </button>
                <marquee>Crafted by Lord Naz 😎 💗 😍</marquee>

            </form>

        </div>


        <script type="text/javascript">
        var i = 0;
        var j = 1;

        var k = 0;
        var l = 1;
        $("#add-btn").click(function(){
            ++i;
            ++j;
            $("#dynamicAddRemove").append('<tr><td><input type="text" id="item_id" name="moreFields['+i+'][item_id]" value="'+j+'" hidden><input type="date" id="startdt" name="moreFields['+i+'][startdt]" class="form-control"></td><td><input type="text" name="moreFields['+i+'][task_hostname]" class="form-control" /></td><td><input type="text" name="moreFields['+i+'][task_ip_address]" class="form-control" /></td> <td><input type="text" name="moreFields['+i+'][activity]" placeholder="Enter Activity/Steps" class="form-control" /></td><td><input type="text" name="moreFields['+i+'][action_by]" placeholder="Action By" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
            });
            $(document).on('click', '.remove-tr', function(){  
            $(this).parents('tr').remove();
        });  

        $("#rb_add-btn").click(function(){
            ++k;
            ++l;
            $("#rb_dynamicAddRemove").append('<tr><td><input type="text" id="rb_item_id" name="rb_moreFields['+k+'][rb_item_id]" value="'+l+'" hidden><input type="date" id="rb_startdt" name="rb_moreFields['+k+'][rb_startdt]" class="form-control"></td><td><input type="text" name="rb_moreFields['+k+'][rb_task_hostname]" class="form-control" /></td><td><input type="text" name="rb_moreFields['+k+'][rb_task_ip_address]" class="form-control" /></td> <td><input type="text" name="rb_moreFields['+k+'][rb_activity]" placeholder="Enter Activity/Steps" class="form-control" /></td><td><input type="text" name="rb_moreFields['+k+'][rb_action_by]" placeholder="Action By" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr-rb">Remove</button></td></tr>');
            });
            $(document).on('click', '.remove-tr-rb', function(){  
            $(this).parents('tr').remove();
        });  
        </script>

        
    </body>
</html>
