<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_screening', function (Blueprint $table) {
            $table->id();
            $table->string('screening_id', 150)->nullable();
            $table->string('uhid', 45)->nullable();
            $table->string('aadhar', 36)->nullable();
            $table->string('apid', 10)->nullable();
            $table->string('node_id', 10)->nullable();
            $table->string('ap_name', 300)->nullable();
            $table->string('ap_propriter', 300)->nullable();
            $table->string('source', 15)->nullable();
            $table->string('name', 300)->nullable();
            $table->string('countryCode', 3)->nullable();
            $table->string('mobile', 30)->nullable();
            $table->string('age', 9)->nullable();
            $table->string('gender', 24)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('bmc_ward', 300)->nullable();
            $table->string('bmc_slum', 300)->nullable();
            $table->string('weight', 15)->nullable();
            $table->string('height', 300)->nullable();
            $table->string('ap_state', 150)->nullable();            
            $table->string('ap_district', 15)->nullable();
            $table->string('ap_block', 24)->nullable();
            $table->char('ph_diabetic', 3)->nullable();  //bool
            $table->char('ph_hypertension', 5)->nullable();
            $table->char('ph_hypercholesterolemia', 5)->nullable();
            $table->char('ph_heart_problem', 15)->nullable();
            $table->char('ph_gastroenteritis', 5)->nullable();
            $table->char('ph_kidney_disease', 5)->nullable();
            $table->char('ph_arthritis', 9)->nullable();
            $table->char('ph_asthma', 24)->nullable();
            $table->char('ph_allergy', 5)->nullable();  //bool
            $table->char('ph_pregnant', 5)->nullable();
            $table->char('screening_status', 5);
            $table->date('screening_date')->nullable();  //date
            $table->dateTime('screening_start_time')->nullable();
            $table->dateTime('screening_end_time')->nullable();
            $table->longText('test_done')->nullable();  //text
            $table->char('abnormal_screening', 24)->nullable();
            $table->text('diabetic_score_age', 150)->nullable();  
            $table->text('diabetic_score_bmi', 300)->nullable();
            $table->text('diabetic_score_waist_circumference', 300)->nullable();
            $table->string('diabetic_score_physical_activity', 15)->nullable();
            $table->text('diabetic_score_eat_vegetables', 300)->nullable();
            $table->text('diabetic_score_high_blood_glucose', 150)->nullable();
            $table->text('diabetic_score_medication_high_bp', 300)->nullable();
            $table->string('diabetic_score_diagnosed_with_diabetes', 15)->nullable();
            $table->text('total_diabetic_score', 300)->nullable();
            $table->string('diabetic_risk', 150)->nullable();
             $table->string('diabetic_risk_text', 300)->nullable();
            $table->string('cvr_smoking', 15)->nullable();
            $table->text('cvr_risk_score', 300)->nullable();
            $table->string('cvr_risk_score_type', 150)->nullable();
            $table->longText('cvr_risk_score_text')->nullable();
            $table->text('rft_method', 300)->nullable();
            $table->text('rft_score', 150)->nullable();
            $table->text('rft_inference', 300)->nullable();
            $table->string('rft_raw_score', 15)->nullable();
            $table->text('rft_gfr', 300)->nullable();
            $table->string('concent_signature', 150)->nullable();
             $table->string('latitude', 300)->nullable();
            $table->string('longitude', 15)->nullable();
            $table->char('push_api', 5)->nullable();
            $table->dateTime('push_api_time')->nullable();
            $table->longText('push_api_res')->nullable();
            $table->text('client_token', 300)->nullable();
            $table->longText('webhook_url')->nullable();
            $table->text('srf_number', 300)->nullable();
            $table->string('refered_by', 15)->nullable();
            $table->string('additional_field_1', 150)->nullable();
            $table->text('additional_field_2', 300)->nullable();
            $table->string('additional_field_3', 15)->nullable();
            $table->char('bolangir_abnormal_screening', 5)->nullable();
            $table->char('bolangir_is_pragenent', 5)->nullable();
            $table->text('bp', 300)->nullable();
            $table->string('systolic', 10)->nullable();
            $table->string('diastolic', 10)->nullable();
            $table->string('pulse_Ox', 300)->nullable();
            $table->char('bp_is_abnormal', 5)->nullable();
            $table->string('bp_abnormal_category', 15)->nullable();
            $table->text('bp_test_type', 300)->nullable();
            $table->char('pulse_is_abnormal', 5)->nullable();
             $table->string('pulse_abnormal_category', 300)->nullable();
            $table->string('syncGlucose', 300)->nullable();
            $table->string('syncCategory', 300)->nullable();
            $table->char('glucose_is_abnormal', 15)->nullable();
            $table->string('glucose_abnormal_category', 300)->nullable();
            $table->string('glucose_test_type', 15)->nullable();
            $table->text('spo2', 300)->nullable();
            $table->string('spo2_pulse', 15)->nullable();
            $table->text('spo2_pi', 300)->nullable();
            $table->char('spo2_is_abnormal', 15)->nullable();
            $table->string('spo2_abnormal_category', 300)->nullable();
            $table->string('spo2_test_type', 15)->nullable();
            $table->text('spi_fvc', 300)->nullable();
            $table->string('spi_fev1', 15)->nullable();
            $table->string('spi_fev6', 300)->nullable();
            $table->string('spi_fev1_fvc', 15)->nullable();
            $table->text('spi_fef_25_75', 300)->nullable();
            $table->text('spi_pef', 300)->nullable();
            $table->char('spi_is_repeat', 15)->nullable();
            $table->longText('spi_repeat_result')->nullable();
            $table->string('thermometer', 15)->nullable();
            $table->char('thermometer_unit', 5)->nullable();
            $table->string('ba_weight', 15)->nullable();
            $table->string('ba_bmi', 300)->nullable();
            $table->char('ba_bmi_is_abnormal', 5)->nullable();
            $table->string('ba_bmi_is_abnormal_category', 15)->nullable();
            $table->string('ba_bmi_test_type', 300)->nullable();
            $table->string('ba_body_fat', 15)->nullable();
            $table->string('ba_fat_free_body_weight', 300)->nullable();
            $table->string('ba_subcutaneous_fat', 15)->nullable();
            $table->text('ba_visceral_fat', 300)->nullable();
            $table->string('ba_body_water', 15)->nullable();
            $table->text('ba_skeletal_muscle', 300)->nullable();
            $table->text('ba_muscle_mass', 15)->nullable();
            $table->text('ba_bone_mass', 300)->nullable();
            $table->string('ba_protein', 15)->nullable();
            $table->text('ba_bmr', 300)->nullable();
            $table->string('ba_metabolic_age', 15)->nullable();
            $table->text('ba_bsa', 300)->nullable();
            $table->string('deviceId', 15)->nullable();
            $table->text('hemoglobin', 300)->nullable();
            $table->char('hemoglobin_is_abnormal', 15)->nullable();
            $table->string('hemoglobin_abnormal_category', 150)->nullable();
            $table->string('hemoglobin_test_type', 10)->nullable();
            $table->string('hba1c', 10)->nullable();
            $table->string('hba1c_is_abnormal', 300)->nullable();
            $table->string('hba1c_abnormal_category', 300)->nullable();
            $table->string('rapid_urine_protein', 15)->nullable();
            $table->string('rapid_urine_glucose', 300)->nullable();
            $table->string('rapid_malaria', 150)->nullable();
            $table->string('rapid_pregnancy', 150)->nullable();
            $table->string('rapid_covid', 150)->nullable();
            $table->string('rapid_hiv', 10)->nullable();
            $table->string('rapid_hbsag', 10)->nullable();
            $table->text('rapid_hcv', 300)->nullable();
            $table->text('rapid_typhoid', 300)->nullable();
            $table->char('stethoscope_type', 5)->nullable();
            $table->longText('stethoscope')->nullable();
            $table->text('otoscope_type', 300)->nullable();
            $table->text('otoscope_description', 300)->nullable();
            $table->longText('otoscope')->nullable();
            $table->string('fhr_trimester', 10)->nullable();
            $table->string('fhr_bpm', 12)->nullable();
            $table->string('fhr_duration', 30)->nullable();
            $table->string('fhr_test_type', 10)->nullable();
            $table->string('ecg', 765)->nullable();
            $table->string('vibrasense_left_image', 765)->nullable();
            $table->string('vibrasense_right_image', 765)->nullable();
            $table->text('left_avg', 100)->nullable();
            $table->text('right_avg', 100)->nullable();
            $table->text('left_risk', 100)->nullable();
            $table->text('right_risk', 100)->nullable();
            $table->text('rft_uric_acid', 100)->nullable();
            $table->text('rft_creatinine', 100)->nullable();
            $table->text('rft_urea', 100)->nullable();
            $table->text('fundoscopy_path', 100)->nullable();
            $table->text('ezecare_device_id', 100)->nullable();
            $table->text('non_invasive_hemoglobin', 100)->nullable();
            $table->text('non_invasive_bilirubin', 100)->nullable();
            $table->text('non_invasive_spo2', 100)->nullable();
            $table->text('non_invasive_creatinine', 100)->nullable();
            $table->text('non_invasive_sugar', 100)->nullable();
            $table->text('total_cholesterol', 100)->nullable();
            $table->text('total_cholesterol_inference', 100)->nullable();
            $table->string('triglycerides', 18)->nullable();
            $table->string('triglycerides_inference', 60)->nullable();
            $table->string('hdl_cholesterol', 18)->nullable();
            $table->string('hdl_cholesterol_inference', 75)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_screeningg');
    }
};
