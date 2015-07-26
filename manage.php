<?php
/**
 * Created by IntelliJ IDEA.
 * User: etayschur
 * Date: 7/24/15
 * Time: 10:20 PM
 */

?>
<!doctype html>
<html ng-app="manageApp">
<shortcut></shortcut>
<head>

    <meta charset="utf-8"/>
    <script src="static/js/helpers.js"></script>

    <script src="static/js/angular.min.js"></script>
    <script src="bower_components/angular-animate/angular-animate.min.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/js/ui-bootstrap-tpls-0.13.0.min.js"></script>
    <script src="bower_components/angular-translate/angular-translate.min.js"></script>
    <script src="static/js/manageApp.js"></script>

    <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="static/css/style.css"/>
</head>
<body style="padding-right: 100px;padding-left: 100px;padding-top: 50px">

<?php
 if(isset($_COOKIE['gadsarUserCookie'])){

?>
<div ng-controller="manageCtrl">
<div style="margin-top: 20px;margin-bottom: 20px" class="container-fluid">
    <div style="text-align: center" class="row">
        <h2> {{'appTitle' | translate}} </h2>
    </div>
    <div class="row">

    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="input-group searchBox">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-search"></span></span>
                <input  ng-model="query.userFullName" type="text" class="form-control" placeholder="חיפוש ...">

            </div>
        </div>
        <div style="text-align: right" class="col-xs-8">
            <button ng-click="openDeleteDialog()" class="btn btn-danger">{{'deleteButtonText' | translate}} </button>
            <button style="float: left" ng-click="logOut()" class="btn btn-info">{{'logOutButtonText' | translate}} </button>
        </div>
    </div>

</div>
<div  style="direction: rtl" class="container-fluid">
<div style="height: 70vh" class="row">
<div style="height: 100%" class="col-md-4 col-xs-4">
    <div style="height: 100%;overflow: auto;overflow-x:hidden;" class="list-group">
        <a ng-click="selectMe(form)" ng-class="{'active': selectedForm.id == form.id}" ng-repeat="form in forms | filter:query" href="#" class="list-group-item">
            <span> {{form.userFullName}}</span>
            <span style="float: left;"> {{form.unit}}</span>
            <p style="margin-top: 10px"> {{formatDate(form.creationDate)}}</p>
        </a>
    </div>
</div>
<div ng-if="forms.length > 0" class="col-md-8  col-xs-8">
<accordion close-others="oneAtATime">
<accordion-group heading="{{'basicDetailsAccordionTitle' | translate}}" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
    <div>
        <span style="margin-left: 5px"> {{'userBasicDetails_fullName' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userFullName}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'userBasicDetails_id' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userId || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'userBasicDetails_bornCountry' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userBornCountry || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'userBasicDetails_birthYear' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userBornYear || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'userBasicDetails_gender' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.gender || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'userBasicDetails_unit' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.unit || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'armyServiceJoiningDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{formatDate(selectedForm.userJoiningArmyDate) || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'armyServiceReleasingDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{formatDate(selectedForm.userReleasingArmyDate) || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'armyServicePersenalNumber' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userPersonalNumber || "-"}} </span>
    </div>
    <div ng-if="selectedForm.userPtorReason != null">
        <span style="margin-left: 5px"> {{'armyServicePtor' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userPtorReason || "-"}} </span>
    </div>
    <div ng-if="selectedForm.miluimQuestion != null">
        <span style="margin-left: 5px"> {{'userAdvDetails_miluimQuestion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.miluimQuestion || "-"}} </span>
    </div>
    <div ng-if="selectedForm.miluimQuestion != null && selectedForm.numberOfMiluimDays != null">
        <span style="margin-left: 5px"> {{'userAdvDetails_numberOfDays' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.numberOfMiluimDays || "-"}} </span>
    </div>
    <div ng-if="selectedForm.abroadQuestion != null">
        <span style="margin-left: 5px"> {{'userAdvDetails_abroadQuestion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.abroadQuestion || "-"}} </span>
    </div>
    <div ng-if="selectedForm.abroadQuestion != null && selectedForm.numberOfTimesAbroad">
        <span style="margin-left: 5px"> {{'general_howManyTimes' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.numberOfTimesAbroad || "-"}} </span>
    </div>

</accordion-group>
<accordion-group heading="{{'studyingDetailsAccordionTitle' | translate}}">
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_city' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userLocationOnStudies || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_address' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userLocationAddressOnStudies || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_zip' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userLocationZipOnStudies || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'general_phone' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.userLocationPhoneOnStudies || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_location_question' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.studingDetails_location_question || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.carQuestion || "-"}} </span>
    </div>
    <div ng-if="selectedForm.carQuestion == general_yes">
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_model' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.carQuestionModel || "-"}} </span>
    </div>
    <div ng-if="selectedForm.carQuestion == general_yes">
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_value' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.carQuestionValue || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_extraCar' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.carQuestion_extraCar || "-"}} </span>
    </div>
    <div ng-if="selectedForm.carQuestion_extraCar == general_yes">
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_model' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.extraCarModel || "-"}} </span>
    </div>
    <div ng-if="selectedForm.carQuestion_extraCar == general_yes">
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_extraCarYear' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.extraCarModelYear || "-"}} </span>
    </div>
    <div ng-if="selectedForm.carQuestion_extraCar == general_yes">
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_alert_extraCarNumber' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.extraCarModelNumber || "-"}} </span>
    </div>
    <div ng-if="selectedForm.carQuestion_extraCar == general_yes">
        <span style="margin-left: 5px"> {{'studingDetails_carQuestion_value' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.extraCarValue || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'jobDetails_hasJobQuestion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{translateMe(selectedForm.hasJobQuestion) || "-"}} </span>
    </div>
    <div ng-if="selectedForm.hasJobQuestion == 'sideJob'">
        <span style="margin-left: 5px"> {{'jobDetails_jobLocation' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.sideJobLocation || "-"}} </span>
    </div>

    <div ng-if="selectedForm.hasJobQuestion == 'sideJob'">
        <span style="margin-left: 5px"> {{'jobDetails_salary_amount' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.sideJobSalary || "-"}} </span>
    </div>
    <div ng-if="selectedForm.hasJobQuestion == 'general'">
        <span style="margin-left: 5px"> {{'jobDetails_jobLocation' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobLocation || "-"}} </span>
    </div>
    <div ng-if="selectedForm.hasJobQuestion == 'general'">
        <span style="margin-left: 5px"> {{'studingDetails_address' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobAddress || "-"}} </span>
    </div>
    <div ng-if="selectedForm.hasJobQuestion == 'general'">
        <span style="margin-left: 5px"> {{'general_phone' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobPhone || "-"}} </span>
    </div>
    <div ng-if="selectedForm.hasJobQuestion == 'general'">
        <span style="margin-left: 5px"> {{'jobDetails_salary' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobSalary || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'jobDetails_salary_depths' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobDetails_salary_depths  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.jobDetails_salary_depths == general_yes">
        <span style="margin-left: 5px"> {{'jobDetails_salary_depths_amount' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.depthsAmount  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.jobDetails_salary_depths == general_yes">
        <span style="margin-left: 5px"> {{'jobDetails_salary_depths_purpose' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.depthsPurpose  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.jobDetails_salary_depths == general_yes">
        <span style="margin-left: 5px"> {{'jobDetails_salary_depths_time' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.depthsDuration  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'jobDetails_salary_fundingQuestion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobDetails_salary_fundingQuestion  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.jobDetails_salary_fundingQuestion == general_yes">
        <span style="margin-left: 5px"> {{'jobDetails_salary_depths_amount' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobDetails_salary_fundingAmount  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.jobDetails_salary_fundingQuestion == general_yes">
        <span style="margin-left: 5px"> {{'jobDetails_salary_fundingSourceQuestion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobDetails_salary_fundingSourceQuestion  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.jobDetails_salary_fundingQuestion == general_yes && selectedForm.jobDetails_salary_SourceQuestion_otherAnswerDetails == otherKeyWord">
        <span style="margin-left: 5px"> {{'jobDetails_salary_fundingSourceAnswer7' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.jobDetails_salary_SourceQuestion_otherAnswerDetails  || "-"}} </span>
    </div>
</accordion-group>
<accordion-group heading="{{'familyStatusDetailsAccordion' | translate}}">
    <div>
        <span style="margin-left: 5px"> {{'familyStatusDetailsAccordion' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.marriedStatus  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == family_status_answer_divorced">
        <span style="margin-left: 5px"> {{'family_status_answer_divorced_payed_title' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.paying  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == family_status_answer_divorced">
        <span style="margin-left: 5px"> {{'jobDetails_salary_depths_amount' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.mezunutAmount  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == otherKeyWord">
        <span style="margin-left: 5px"> {{'jobDetails_salary_fundingSourceAnswer7' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.marridStatusOtherDetails  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == family_status_answer_children && selectedForm.marriedChildName1 != null">
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 5px"> {{selectedForm.marriedChildAge1  || "-"}} </span>
        <span style="margin-left: 5px"> , </span>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_age' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.marriedChildName1  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == family_status_answer_children && selectedForm.marriedChildName2 != null">
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 5px"> {{selectedForm.marriedChildAge2  || "-"}} </span>
        <span style="margin-left: 5px"> , </span>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_age' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.marriedChildName2  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == family_status_answer_children && selectedForm.marriedChildName3 != null">
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 5px"> {{selectedForm.marriedChildAge3  || "-"}} </span>
        <span style="margin-left: 5px"> , </span>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_age' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.marriedChildName3  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.marriedStatus == family_status_answer_children && selectedForm.marriedChildName4 != null">
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 5px"> {{selectedForm.marriedChildAge4  || "-"}} </span>
        <span style="margin-left: 5px"> , </span>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_age' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.marriedChildName4  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.partnerForLifeId != null">
        <span style="margin-left: 5px"> {{'family_status_partner_for_life_id' | translate}} </span>
        <span> {{selectedForm.partnerForLifeId  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.partnerForLifeId != null">
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name1' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.partnerForLifeName  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'family_status_partner_for_life_job' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.partnerForLifeJob  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.partnerForLifeJob != family_status_partner_for_life_job_not_working">
        <span style="margin-left: 5px"> {{'jobDetails_jobLocation' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.partnerForLifeJobLocation  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.partnerForLifeJob != family_status_partner_for_life_job_not_working">
        <span style="margin-left: 5px"> {{'family_status_partner_for_life_job_pay' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.partnerForLifeJobSalary  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.partnerForLifeJob == family_status_partner_for_life_job_not_working">
        <span style="margin-left: 5px"> {{'general_reason' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.partnerForLifeNotWorkingDetails  || "-"}} </span>
    </div>
</accordion-group>
<accordion-group is-open="status.open">
    <accordion-heading>
        {{'homyStudentDetailsAccordionTitle' | translate}}
    </accordion-heading>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_city' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.studingDetailsCity  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_address' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.studingDetailsAddress  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'studingDetails_zip' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.studingDetailsZip  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'general_phone' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.studingDetailsPhone  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'general_phone' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.studingDetailsPhone  || "-"}} </span>
    </div>
    <h3> {{'studentLivingHome_parents_details' | translate}} </h3>
    <h4>  {{'studentLivingHome_parents_details_father' | translate}} </h4>
    <div>
        <span style="margin-left: 5px"> {{'general_status' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.fatherJob  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.fatherJob ==  family_status_partner_for_life_answer1 || selectedForm.fatherJob ==  family_status_partner_for_life_answer2">
        <span style="margin-left: 5px"> {{'jobDetails_jobLocation' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.fatherJobLocation  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.fatherJob ==  family_status_partner_for_life_answer1 || selectedForm.fatherJob ==  family_status_partner_for_life_answer2">
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_status_monthly_incoming' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.fatherJobSalary  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.fatherJob ==  studentLivingHome_parents_status_divorced_father">
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_status_divorced_date' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.fatherDivorcedDate  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.fatherJob ==  studentLivingHome_parents_job_diss">
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_job_diss_date' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.fatherDissDate  || "-"}} </span>
    </div>

    <h4>  {{'studentLivingHome_parents_details_mother' | translate}} </h4>

    <div>
        <span style="margin-left: 5px"> {{'general_status' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.motherJob  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.motherJob ==  studentLivingHome_parents_details_mother_working || selectedForm.motherJob ==  studentLivingHome_parents_details_mother_independent">
        <span style="margin-left: 5px"> {{'jobDetails_jobLocation' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.motherJobLocation  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.motherJob ==  studentLivingHome_parents_details_mother_working || selectedForm.motherJob ==  studentLivingHome_parents_details_mother_independent">
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_status_monthly_incoming' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.motherJobSalary  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.motherJob ==  studentLivingHome_parents_status_divorced_mother">
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_status_divorced_date' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.motherDivorcedDate  || "-"}} </span>
    </div>
    <div ng-if="selectedForm.motherJob ==  studentLivingHome_parents_job_diss_mother">
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_job_diss_date' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.motherDissDate  || "-"}} </span>
    </div>
    <h3> {{'studentLivingHome_parents_number_of_people_title' | translate }}</h3>
    <div>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyName1  || "-"}} </span>
        <span style="margin-left: 5px"> {{'general_birthDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyBirthDate1  || "-"}} </span>
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_number_of_people_current_studing_place' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.supportedFamilyStudyLocation1  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyName2  || "-"}} </span>
        <span style="margin-left: 5px"> {{'general_birthDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyBirthDate2  || "-"}} </span>
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_number_of_people_current_studing_place' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.supportedFamilyStudyLocation2  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyName3  || "-"}} </span>
        <span style="margin-left: 5px"> {{'general_birthDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyBirthDate3  || "-"}} </span>
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_number_of_people_current_studing_place' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.supportedFamilyStudyLocation3  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyName4  || "-"}} </span>
        <span style="margin-left: 5px"> {{'general_birthDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyBirthDate4  || "-"}} </span>
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_number_of_people_current_studing_place' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.supportedFamilyStudyLocation4  || "-"}} </span>
    </div>
    <div>
        <span style="margin-left: 5px"> {{'family_status_answer_children_comment_name' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyName5  || "-"}} </span>
        <span style="margin-left: 5px"> {{'general_birthDate' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span style="margin-left: 15px"> {{selectedForm.supportedFamilyBirthDate5  || "-"}} </span>
        <span style="margin-left: 5px"> {{'studentLivingHome_parents_number_of_people_current_studing_place' | translate}} </span>
        <span style="margin-left: 5px">:</span>
        <span> {{selectedForm.supportedFamilyStudyLocation5  || "-"}} </span>
    </div>
</accordion-group>
</accordion>
</div>
</div>
</div>
</div>


<?php } else { ?>
    <div ng-controller="loginCtrl">
        <div class="container-fluid">
            <div  class="row">
                <div style="text-align:right" class="col-md-4 col-md-offset-8">
                    <img ng-src="static/images/gadsar1.png">
                </div>
            </div>
            <div style="text-align: right" class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form style="direction: rtl" name="loginForm">
                        <div class="form-group">
                            <label for="exampleInputEmail1">שם משתמש (כתובת אי מייל)</label>
                            <input ng-model="formData.userLogin" type="email" class="form-control" id="exampleInputEmail1" placeholder=" הכנס שם משתמש (כתובת אי מייל)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">סיסמא</label>
                            <input ng-model="formData.userPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="הכנס סיסמא">
                        </div>
                        <p class="error" ng-show="loginError == true"> שם המשתמש או הסיסמא לא נכונים , נסה שוב</p>
                        <button ng-click="login(formData)" type="submit" class="btn btn-default">כניסה</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




<?php } ?>
</body>