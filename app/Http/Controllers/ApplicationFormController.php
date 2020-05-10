<?php
/**
 * Created by PhpStorm.
 * User: jojimdogo
 * Date: 8/24/2019
 * Time: 9:36 AM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;
use Illuminate\Support\Facades\Redirect;


class ApplicationFormController
{
    public function index()
    {
        return view('applicationForm');
    }

    public function new()
    {
        return view('applicationNew');
    }

    public function send(Request $request)
    {
        // $this->validate($request, [
        //     'position_desired' =>  'required'
        // ]);

        $data = array(
            //section 1
            'position_desired' => $request->position_desired,
            'date_available' => $request->date_available,
            'employment_type' => $request->employment_type,
            //section_2 - Personal info
            'first_name' => $request->first_name,
            'MI' => $request->MI,
            'last_name' => $request->last_name,
            'street_address' => $request->street_address,
            'city'=>$request->city,
            'state' => $request->state,
            'home_phone'=>$request->home_phone,
            'alt_phone'=>$request->alt_phone,
            'your_email'=>$request->your_email,
            'drivers_license'=>$request->DL,
            'class'=>$request->class,
            'military'=>$request->military,
            'employment_right'=>$request->employment_right,
            'performance'=>$request->performance,
            'performance_explanation'=>$request->performance_explanation,
            // section 3 
            'special_accommodation'=>$request->special_accommodation,
            'accommodation_explanation'=>$request->accommodation_explanation,
            'previous_worker'=>$request->previous_worker,
            'position_held'=>$request->position_held,
            'employment_date'=>$request->employment_date,
            'relative_working'=>$request->relative_working,
            'relative_name'=>$request->relative_name,
            'certifications'=>$request->certifications,
            'criminal_offense'=>$request->criminal_offense,
            //section 4 - References
            'reference_name'=>$request->reference_name,
            'reference_phone_number'=>$request->reference_phone_number,
            'reference_mail_address'=>$request->reference_mail_address,
            'reference_name_2'=>$request->reference_name_2,
            'reference_phone_number_2'=>$request->reference_phone_number_2,
            'reference_mail_address_2'=>$request->reference_mail_address_2,
            'reference_name_3'=>$request->reference_name_3,
            'reference_phone_number_3'=>$request->reference_phone_number_3,
            'reference_mail_address_3'=>$request->reference_mail_address_3,
            //section5 - Education & Skills
            'education_level'=>$request->education_level,
            'degree_major'=>$request->degree_major,
            'skills'=>$request->skills,
            //section 6 Experience 1
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
            'start_salary'=>$request->start_salary,
            'employer_name'=>$request->employer_name,
            'contact_permission'=>$request->contact_permission,
            'street_address_employer'=>$request->street_address_employer,
            'city_employer'=>$request->city_employer,
            'state_employer'=>$request->state_employer,
            'home_phone_employer'=>$request->home_phone_employer,
            'title_performed'=>$request->title_performed,
            'reason_leaving'=>$request->reason_leaving,

        //section 7 Experience 2
            'from_date_experience2'=>$request->from_date_experience2,
            'to_date_experience2'=>$request->to_date_experience2,
            'start_salary_experience2'=>$request->start_salary_experience2,
            'employer_name_experience2'=>$request->employer_name_experience2,
            'contact_permission_experience2'=>$request->contact_permission_experience2,
            'street_address_employer_experience2'=>$request->street_address_employer_experience2,
            'city_employer_experience2'=>$request->city_employer_experience2,
            'state_employer_experience2'=>$request->state_employer_experience2,
            'home_phone_employer_experience2'=>$request->home_phone_employer_experience2,
            'title_performed_experience2'=>$request->title_performed_experience2,
            'reason_leaving_experience2'=>$request->reason_leaving_experience2
        );

        Mail::to('info@sevenhillsmed.com')->send(new ApplicationMail($data));

        // $message="Thanks for contacting us! We will get back soon.";
        // return Redirect::to('index',compact('message'));

        return redirect('/');
        // return back()->with('Success', 'Thanks for contacting us!');
    }
}