<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class HomeController extends Controller
{
    //
    public function generateDocx()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();


        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


        $section->addImage("http://itsolutionstuff.com/frontTheme/images/logo.png");
        $section->addText($description);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.docx'));
    }

    function TemplateProcessing(Request $req)
    {
        // return $req->input();
        // die();

        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('releaseNoteTemplate.docx'));

        $cr_no = $req->cr_no;
        $cr_title = $req->cr_title;
        $cr_desc = $req->cr_desc;
        $system_name = $req->system_name;
        $app_hostname = $req->app_hostname;
        $app_ip_address = $req->app_ip_address;
        $db_hostname = $req->db_hostname;
        $db_ip_address = $req->db_ip_address;
        $moreFields = $req->moreFields;
        $rb_moreFields = $req->rb_moreFields;

        $templateProcessor->setValue('cr_no', $cr_no);
        $templateProcessor->setValue('cr_title', $cr_title);
        $templateProcessor->setValue('cr_desc', $cr_desc);
        $templateProcessor->setValue('system_name', $system_name);
        $templateProcessor->setValue('app_hostname', $app_hostname);
        $templateProcessor->setValue('app_ip_address', $app_ip_address);
        $templateProcessor->setValue('db_hostname', $db_hostname);
        $templateProcessor->setValue('db_ip_address', $db_ip_address);

        // deployment  
        $steps_array = array();

        foreach ($moreFields as $field) {
            $step_each = [
                'item_id' => $field['item_id'], 
                'start_dt' => $field['startdt'], 
                'task_hostname' => $field['task_hostname'], 
                'task_ip_address' => $field['task_ip_address'], 
                'activity' => $field['activity'],
                'action_by' => $field['action_by']
            ];

            array_push( 
                $steps_array,
                $step_each
            );
        }

        $templateProcessor->cloneRowAndSetValues('item_id', $steps_array);

        //rollback
        $rb_steps_array = array();

        foreach ($rb_moreFields as $rb_field) {
            $rb_step_each = [
                'rb_item_id' => $rb_field['rb_item_id'], 
                'rb_start_dt' => $rb_field['rb_startdt'],
                'rb_task_hostname' => $rb_field['rb_task_hostname'], 
                'rb_task_ip_address' => $rb_field['rb_task_ip_address'], 
                'rb_activity' => $rb_field['rb_activity'],
                'rb_action_by' => $rb_field['rb_action_by']
            ];

            array_push( 
                $rb_steps_array,
                $rb_step_each
            );
        }

        $templateProcessor->cloneRowAndSetValues('rb_item_id', $rb_steps_array);
        

        $filename = 'Release_Note_'.$cr_no.'.docx';

        $pathToSave = storage_path($filename);

        try {
            $templateProcessor->saveAs($pathToSave); 
        } catch (Exception $e) {
        }

        return response()->download(storage_path($filename));  
    }
}
