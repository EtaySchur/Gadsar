<?php
/**
 * Created by IntelliJ IDEA.
 * User: etayschur
 * Date: 7/18/15
 * Time: 12:27 PM
 */




?>

<!doctype html>
<html ng-app="app" ng-controller="appCtrl">
<shortcut></shortcut>
<head>

    <meta charset="utf-8"/>
    <script src="static/js/helpers.js"></script>
    <script src="static/js/angular.min.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/js/ui-bootstrap-tpls-0.13.0.min.js"></script>
    <script src="bower_components/angular-translate/angular-translate.min.js"></script>
    <script src="static/js/app.js"></script>

    <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="static/css/style.css"/>
</head>
<body style="padding: 100px">
<div style="text-align: center" class="row">
    <h1 class="col-md-12">{{'pageTitle' | translate}} </h1>
</div>
<div style="text-align: right">
    <h3 class="col-md-12">{{'pageComments' | translate}} </h3>
    <h4 class="col-md-12">{{'pageCommentPage1' | translate}} </h4>

    <p class="col-md-12">{{'pageCommentPage2' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage3' | translate}} </p>

    <h3 class="col-md-12">{{'pageCommentPage4' | translate}} </h3>
    <h4 class="col-md-12">{{'pageCommentPage5' | translate}} </h4>

    <p class="col-md-12">{{'pageCommentPage6' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage7' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage8' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage9' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage10' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage11' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage12' | translate}} </p>

    <p class="col-md-12">{{'pageCommentPage13' | translate}} </p>
</div>

<div ng-enter="submitMe(formData)" style="direction: rtl" class="container-fluid">
<div class="row">
<div class="col-sm-12">
    <form name="userBasicDetails">
        <div class="form-group col-md-3 col-sm-12">
            <label for="userBasicDetails_id">{{'userBasicDetails_id' | translate}}</label>
            <input ng-class="{'error': submitted && userBasicDetails.userId.$invalid}" name="userId" type="text" ng-model="formData.userId"class="form-control" id="userBasicDetails_id" placeholder="" required>
            <p class="errorText" ng-show="submitted && userBasicDetails.userId.$invalid"> {{'general_requieredFieldAlertText' | translate}} </p>
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="userBasicDetails_bornCountry">{{'userBasicDetails_bornCountry' | translate}}</label>
            <input type="text" ng-model="formData.userBornCountry" class="form-control" id="userBasicDetails_bornCountry" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="userBasicDetails_fullName">{{'userBasicDetails_fullName' | translate}}</label>
            <input ng-class="{'error': submitted && userBasicDetails.userFullName.$invalid}" type="text" name="userFullName" ng-model="formData.userFullName" class="form-control" id="userBasicDetails_fullName" placeholder="" required>
            <p class="errorText" ng-show="submitted && userBasicDetails.userFullName.$invalid"> {{'general_requieredFieldAlertText' | translate}} </p>
        </div>
        <div class="form-group col-md-2 col-sm-12">
            <label for="userBasicDetails_birthYear">{{'userBasicDetails_birthYear' | translate}}</label>
            <input ng-class="{'error': submitted && userBasicDetails.userBornYear.$invalid}" type="text" name="userBornYear" ng-model="formData.userBornYear" class="form-control" id="userBasicDetails_birthYear" placeholder="" required>
            <p class="errorText" ng-show="submitted && userBasicDetails.userBornYear.$invalid"> {{'general_requieredFieldAlertText' | translate}} </p>
        </div>
        <div class="form-group col-md-1 col-sm-12">
            <label style="display: block" for="userBasicDetails_gender">{{'userBasicDetails_gender' | translate}}</label>
            <input  type="radio"  name="gender" value="{{'general_male' |  translate}}" ng-model="formData.gender" required>
            {{'general_male' | translate}}
            <input type="radio" name="gender" value="{{'general_female' |  translate}}" ng-model="formData.gender" required>
            {{'general_female' | translate}}
            <p class="errorText" ng-show="submitted && userBasicDetails.gender.$invalid"> {{'general_requieredFieldAlertText' | translate}} </p>
        </div>
        <h4 class='col-md-12 col-sm-12'>{{'armyServiceTitle' | translate}}</h4>

        <div class="form-group col-md-3 col-sm-12">
            <label for="armyServiceJoiningDate">{{'armyServiceJoiningDate' | translate}}</label>
            <p class="col-md-12">
                            <span>
                                <button type="button" class="btn btn-default" ng-click="openCalendar($event , 'joiningCalendar')"><i class="glyphicon glyphicon-calendar"></i></button>
                            </span>
                <input style="width: 80%;display: inline-block" width="80%" type="text" class="form-control" datepicker-popup="{{format}}" ng-model="formData.userJoiningArmyDate"
                       show-button-bar="false" is-open="joiningCalendar" min-date="minDate"   date-disabled="disabled(date, mode)"
                        close-text="Close"/>
            </p>
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="armyServiceReleasingDate">{{'armyServiceReleasingDate' | translate}}</label>
            <p class="col-md-12">
                            <span>
  <button type="button" class="btn btn-default" ng-click="openCalendar($event , 'releasingCalendar')"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>

                <input ng-model="formData.userReleasingArmyDate" style="width: 80%;display: inline-block" width="80%" type="text" class="form-control" datepicker-popup="{{format}}" ng-model="dt"
                       show-button-bar="false" is-open="releasingCalendar" min-date="minDate"   date-disabled="disabled(date, mode)"
                       close-text="Close"/>
            </p>
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="armyServicePersenalNumber">{{'armyServicePersenalNumber' | translate}}</label>
            <input ng-model="formData.userPersonalNumber" type="text" class="form-control" id="armyServicePersenalNumber" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="armyServicePtor">{{'armyServicePtor' | translate}}</label>
            <input ng-model="formData.userPtorReason" type="text" class="form-control" id="armyServicePtor" placeholder="">
        </div>
        <div class="form-group col-md-12 col-sm-12">
            <label style="display: block" for="userAdvDetails_miluimQuestion"> {{'userAdvDetails_miluimQuestion' | translate}}</label>
            <input type="radio" name="userAdvDetails_miluimQuestion_yes" value="{{'general_yes' | translate}}" ng-model="formData.miluimQuestion">
            {{'general_yes' | translate}}
            <input type="radio" name="userAdvDetails_miluimQuestion_no" value="{{'general_no' | translate}}" ng-model="formData.miluimQuestion">
            {{'general_no' | translate}}
        </div>
        <div ng-if="formData.miluimQuestion" class="form-group col-md-3 col-sm-12">
            <label for="userAdvDetails_numberOfDays">{{'userAdvDetails_numberOfDays' | translate}}</label>
            <input ng-model="formData.numberOfMiluimDays" type="text" class="form-control" id="userAdvDetails_numberOfDays" placeholder="">
        </div>

        <div class="form-group col-md-12 col-sm-12">
            <label style="display: block" for="userAdvDetails_abroadQuestion">{{'userAdvDetails_abroadQuestion' | translate}}</label>
            <input type="radio" name="userAdvDetails_abroadQuestion_yes" value="{{'general_yes' | translate}}" ng-model="formData.abroadQuestion">
            {{'general_yes' | translate}}
            <input type="radio" name="userAdvDetails_abroadQuestion_no" value="{{'general_no' | translate}}" ng-model="formData.abroadQuestion">
            {{'general_no' | translate}}
        </div>
        <div ng-if="formData.abroadQuestion" class="form-group col-md-3 col-sm-12">
            <label for="general_howManyTimes">{{'general_howManyTimes' | translate}}</label>
            <input ng-model="formData.numberOfTimesAbroad" type="text" class="form-control" id="general_howManyTimes" placeholder="">
        </div>
    </form>
</div>
<div class="col-md-12">
    <form name="studingDetails">
        <h2 class="col-md-12 col-sm-12"> {{'StudingPageTitle' | translate}}</h2>

        <div class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_city">{{'studingDetails_city' | translate}}</label>
            <input ng-model="formData.userLocationOnStudies" type="text" class="form-control" id="studingDetails_city" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_address">{{'studingDetails_address' | translate}}</label>
            <input ng-model="formData.userLocationAddressOnStudies" type="text" class="form-control" id="studingDetails_address" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_zip">{{'studingDetails_zip' | translate}}</label>
            <input ng-model="formData.userLocationZipOnStudies" type="text" class="form-control" id="studingDetails_zip" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="general_phone">{{'general_phone' | translate}}</label>
            <input ng-model="formData.userLocationPhoneOnStudies" type="text" class="form-control" id="general_phone" placeholder="">
        </div>
        <div class="form-group col-md-12 col-sm-12">
            <label style="display: block" for="general_phone">{{'studingDetails_location_question' | translate}}</label>

            <div>
                <input width="100%" type="radio" name="studingDetails_location_question" value="{{'studingDetails_location_answer_1' | translate}}"
                       ng-model="formData.studingDetails_location_question">
                {{'studingDetails_location_answer_1' | translate}}
            </div>
            <div>
                <input width="100%" type="radio" name="userAdvDetails_miluimQuestion_no" value="{{'studingDetails_location_answer_2' | translate}}"
                       ng-model="formData.studingDetails_location_question">
                {{'studingDetails_location_answer_2' | translate}}
            </div>
            <div>
                <input width="100%" type="radio" name="userAdvDetails_miluimQuestion_no" value="{{'studingDetails_location_answer_3' | translate}}"
                       ng-model="formData.studingDetails_location_question">
                {{'studingDetails_location_answer_3' | translate}}
            </div>
            <div>
                <input width="100%" type="radio" name="userAdvDetails_miluimQuestion_no" value=" {{'studingDetails_location_answer_4' | translate}}"
                       ng-model="formData.studingDetails_location_question">
                {{'studingDetails_location_answer_4' | translate}}
            </div>
        </div>
        <div class="carSection col-md-12 col-sm-12">
            <div class="form-group">
                <label style="display: block" for="studingDetails_carQuestion">{{'studingDetails_carQuestion' | translate}}</label>
                <input type="radio" name="studingDetails_carQuestion_yes" value="{{'general_yes' | translate}}" ng-model="formData.carQuestion">
                {{'general_yes' | translate}}
                <input type="radio" name="studingDetails_carQuestion_no" value="{{'general_no' | translate}}" ng-model="formData.carQuestion">
                {{'general_no' | translate}}
                <p ng-if="formData.carQuestion == general_yes"> {{'studingDetails_carQuestion_alert' | translate}} </p>
            </div>
            <div ng-if="formData.carQuestion == general_yes" class="form-group col-md-6 col-sm-12">
                <label for="studingDetails_carQuestion_model == general_yes">{{'studingDetails_carQuestion_model' | translate}}</label>
                <input ng-model="formData.carQuestionModel" type="text" class="form-control" id="studingDetails_carQuestion_model" placeholder="">
            </div>
            <div ng-if="formData.carQuestion == general_yes" class="form-group col-md-6 col-sm-12">
                <label for="studingDetails_carQuestion_value">{{'studingDetails_carQuestion_value' | translate}}</label>
                <input ng-model="formData.carQuestionValue" type="text" class="form-control" id="studingDetails_carQuestion_value" placeholder="">
            </div>
            <div class="form-group">
                <label style="display: block" for="studingDetails_carQuestion_extraCar">{{'studingDetails_carQuestion_extraCar' | translate}}</label>
                <input type="radio" name="carQuestion_extraCar_yes" value="{{'general_yes' | translate}}" ng-model="formData.carQuestion_extraCar">
                {{'general_yes' | translate}}
                <input type="radio" name="carQuestion_extraCar_no" value="{{'general_no' | translate}}" ng-model="formData.carQuestion_extraCar">
                {{'general_no' | translate}}
            </div>
            <div ng-if="formData.carQuestion_extraCar == general_yes" class="form-group col-md-3 col-sm-12">
                <label for="studingDetails_carQuestion_extraCar">{{'studingDetails_carQuestion_model' | translate}}</label>
                <input ng-model="formData.extraCarModel" type="text" class="form-control" id="studingDetails_carQuestion_extraCar" placeholder="">
            </div>
            <div ng-if="formData.carQuestion_extraCar == general_yes" class="form-group col-md-3 col-sm-12">
                <label for="studingDetails_carQuestion_extraCarYear">{{'studingDetails_carQuestion_extraCarYear' | translate}}</label>
                <input ng-model="formData.extraCarModelYear" type="text" class="form-control" id="studingDetails_carQuestion_extraCarYear" placeholder="">
            </div>
            <div ng-if="formData.carQuestion_extraCar == general_yes" class="form-group col-md-3 col-sm-12">
                <label for="studingDetails_carQuestion_alert_extraCarNumber">{{'studingDetails_carQuestion_alert_extraCarNumber' | translate}}</label>
                <input ng-model="formData.extraCarModelNumber" type="text" class="form-control" id="studingDetails_carQuestion_alert_extraCarNumber" placeholder="">
            </div>
            <div ng-if="formData.carQuestion_extraCar == general_yes" class="form-group col-md-3 col-sm-12">
                <label for="studingDetails_carQuestion_extraCar">{{'studingDetails_carQuestion_value' | translate}}</label>
                <input ng-model="formData.extraCarValue" type="text" class="form-control" id="studingDetails_carQuestion_extraCar" placeholder="">
            </div>
            <p> {{'studingDetails_carQuestion_comment1' | translate}} </p>

            <p> {{'studingDetails_carQuestion_comment2' | translate}} </p>
        </div>

    </form>
</div>
<div class="col-md-12 col-sm-12">
    <form name="jobDetails">
        <div class="form-group col-md-12 col-sm-12">
            <label style="display: block" for="jobDetails_hasJobQuestion">{{'jobDetails_hasJobQuestion' | translate}}</label>
            <input  type="radio" name="carQuestion_extraCar_yes" value="{{'general_no' | translate}}" ng-model="formData.hasJobQuestion">
            {{'general_no' | translate}}
            <input type="radio" name="carQuestion_extraCar_general" ng-value="'general'" ng-model="formData.hasJobQuestion">
            {{'general_yes' | translate}}
            <input type="radio" name="carQuestion_extraCar_sideJob" ng-value="'sideJob'" ng-model="formData.hasJobQuestion">
            {{'jobDetails_hasJobAnswer1' | translate}}
        </div>
        <div ng-if="formData.hasJobQuestion == 'general'" class="form-group col-md-3 col-sm-12">
            <label for="jobDetails_jobLocation">{{'jobDetails_jobLocation' | translate}}</label>
            <input ng-model="formData.jobLocation" type="text" class="form-control" id="jobDetails_jobLocation" placeholder="">
        </div>
        <div ng-if="formData.hasJobQuestion == 'general'" class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_address">{{'studingDetails_address' | translate}}</label>
            <input ng-model="formData.jobAddress" type="text" class="form-control" id="studingDetails_address" placeholder="">
        </div>
        <div ng-if="formData.hasJobQuestion == 'general'" class="form-group col-md-3 col-sm-12">
            <label for="general_phone">{{'general_phone' | translate}}</label>
            <input ng-model="formData.jobPhone" type="text" class="form-control" id="general_phone" placeholder="">
        </div>
        <div ng-if="formData.hasJobQuestion == 'general'" class="form-group col-md-3 col-sm-12">
            <label for="jobDetails_salary">{{'jobDetails_salary' | translate}}</label>
            <input ng-model="formData.jobSalary" type="text" class="form-control" id="jobDetails_salary" placeholder="">

            <p> {{'jobDetails_salary_comment' | translate}} </p>
        </div>
        <div ng-if="formData.hasJobQuestion == 'sideJob'" class="form-group col-md-3 col-sm-12">
            <label for="jobDetails_jobLocation">{{'jobDetails_jobLocation' | translate}}</label>
            <input ng-model="formData.sideJobLocation" type="text" class="form-control" id="jobDetails_jobLocation" placeholder="">
        </div>
        <div ng-if="formData.hasJobQuestion == 'sideJob'" class="form-group col-md-3 col-sm-12">
            <label for="jobDetails_salary_amount">{{'jobDetails_salary_amount' | translate}}</label>
            <input ng-model="formData.sideJobSalary" type="text" class="form-control" id="jobDetails_salary_amount" placeholder="">
            <p> {{'jobDetails_salary_comment2' | translate}} </p>
        </div>
        <div class="form-group col-md-12 col-sm-12">
            <label style="display: block" for="jobDetails_salary_depths">{{'jobDetails_salary_depths' | translate}}</label>
            <p> {{'jobDetails_salary_depths_comment' | translate}} </p>
            <input type="radio" name="jobDetails_salary_depths_yes" value="{{'general_yes' | translate}}" ng-model="formData.jobDetails_salary_depths">
            {{'general_yes' | translate}}
            <input type="radio" name="jobDetails_salary_depths_no" value=" {{'general_no' | translate}}" ng-model="formData.jobDetails_salary_depths">
            {{'general_no' | translate}}
        </div>
        <div ng-if="formData.jobDetails_salary_depths == general_yes" class="form-group  col-md-4 col-sm-12">
            <label for="jobDetails_salary_depths_amount">{{'jobDetails_salary_depths_amount' | translate}}</label>
            <input ng-model="formData.depthsAmount" type="text" class="form-control" id="jobDetails_salary_depths_amount" placeholder="">
        </div>
        <div ng-if="formData.jobDetails_salary_depths == general_yes" class="form-group col-md-4 col-sm-12">
            <label for="jobDetails_salary_depths_purpose">{{'jobDetails_salary_depths_purpose' | translate}}</label>
            <input ng-model="formData.depthsPurpose" type="text" class="form-control" id="jobDetails_salary_depths_purpose" placeholder="">
        </div>
        <div ng-if="formData.jobDetails_salary_depths == general_yes" class="form-group col-md-4 col-sm-12">
            <label for="jobDetails_salary_depths_time">{{'jobDetails_salary_depths_time' | translate}}</label>
            <input ng-model="formData.depthsDuration" type="text" class="form-control" id="jobDetails_salary_depths_time" placeholder="">

            <p> {{'jobDetails_salary_depths_comment2' | translate}}</p>
        </div>
        <div class="form-group col-md-12">
            <label style="display: block" for="jobDetails_salary_fundingQuestion">{{'jobDetails_salary_fundingQuestion' | translate}}</label>
            <input type="radio" name="jobDetails_salary_fundingQuestion_yes" value="{{'general_yes' | translate}}" ng-model="formData.jobDetails_salary_fundingQuestion">
            {{'general_yes' | translate}}
            <input type="radio" name="jobDetails_salary_fundingQuestion_no" value="{{'general_no' | translate}}" ng-model="formData.jobDetails_salary_fundingQuestion">
            {{'general_no' | translate}}
        </div>
        <div ng-if="formData.jobDetails_salary_fundingQuestion == general_yes" class="form-group col-md-3 col-sm-12">
            <label for="jobDetails_salary_depths_amount">{{'jobDetails_salary_depths_amount' | translate}}</label>
            <input type="text" class="form-control" id="jobDetails_salary_depths_amount" placeholder="">
        </div>
        <div ng-if="formData.jobDetails_salary_fundingQuestion == general_yes" class="form-group col-md-12 col-sm-12">
            <label style="display: block" for="jobDetails_salary_fundingSourceQuestion">{{'jobDetails_salary_fundingSourceQuestion' | translate}}</label>

            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer1" value="{{'jobDetails_salary_fundingSourceAnswer1' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer1' | translate}}
            </div>
            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer2" value="{{'jobDetails_salary_fundingSourceAnswer2' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer2' | translate}}
            </div>
            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer3" value="{{'jobDetails_salary_fundingSourceAnswer3' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer3' | translate}}
            </div>
            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer4" value="{{'jobDetails_salary_fundingSourceAnswer4' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer4' | translate}}
            </div>
            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer5" value="{{'jobDetails_salary_fundingSourceAnswer5' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer5' | translate}}
            </div>
            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer6" value="{{'jobDetails_salary_fundingSourceAnswer6' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer6' | translate}}
            </div>
            <div>
                <input type="radio" name="jobDetails_salary_fundingSourceAnswer7" value="{{'jobDetails_salary_fundingSourceAnswer7' |  translate}}"
                       ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                {{'jobDetails_salary_fundingSourceAnswer7' | translate}}
            </div>
            <input ng-if="formData.jobDetails_salary_fundingSourceQuestion == keyWordOther" type="text" class="form-control"
                   id="jobDetails_salary_fundingSourceAnswer7" placeholder="">

            <p ng-if="formData.jobDetails_salary_fundingSourceQuestion == keyWordOther"> {{'jobDetails_salary_fundingSourceAnswerComment' | translate}}</p>
        </div>
    </form>
</div>
<div class="col-md-12 col-sm-12">
    <form name="familyStatus">
        <div class="form-group col-md-12">
            <h2 for="family_status_title">{{'family_status_title' | translate}}</h2>

            <div>
                <input type="radio" name="family_status_answer_single" value="{{'family_status_answer_single' |  translate}}" ng-model="formData.marriedStatus">
                {{'family_status_answer_single' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_answer_married" value="{{'family_status_answer_married' |  translate}}"
                       ng-model="formData.marriedStatus">
                {{'family_status_answer_married' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_answer_divorced" value="{{'family_status_answer_divorced' |  translate}}"
                       ng-model="formData.marriedStatus">
                {{'family_status_answer_divorced' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_answer_widow" value="{{'family_status_answer_widow' |  translate}}" ng-model="formData.marriedStatus">
                {{'family_status_answer_widow' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_answer_children" value="{{'family_status_answer_children' |  translate}}"
                       ng-model="formData.marriedStatus">
                {{'family_status_answer_children' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_answer_divorced_children" value="{{'family_status_answer_divorced_children' |  translate}}"
                       ng-model="formData.marriedStatus">
                {{'family_status_answer_divorced_children' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_answer_single_parent" value="{{'family_status_answer_single_parent' |  translate}}"
                       ng-model="formData.marriedStatus">
                {{'family_status_answer_single_parent' | translate}}
            </div>
            <div>
                <input type="radio" name="familiyStatus_other" value="{{'jobDetails_salary_fundingSourceAnswer7' |  translate}}"
                       ng-model="formData.marriedStatus">
                {{'jobDetails_salary_fundingSourceAnswer7' | translate}}
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_divorced" class="form-group col-md-12 col-sm-12">
                <label for="family_status_answer_divorced_payed_title">{{'family_status_answer_divorced_payed_title' | translate}}</label>

                <div>
                    <input type="radio" name="family_status_answer_divorced_comment_pay" value="{{'family_status_answer_divorced_comment_pay' |  translate}}"
                           ng-model="formData.paying">
                    {{'family_status_answer_divorced_comment_pay' | translate}}
                </div>
                <div>
                    <input type="radio" name="family_status_answer_divorced_comment_payed"
                           value="{{'family_status_answer_divorced_comment_payed' |  translate}}" ng-model="formData.paying">
                    {{'family_status_answer_divorced_comment_payed' | translate}}
                </div>

            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_divorced" class="form-group col-md-12">
                <label for="family_status_answer_divorced_comment_amount">{{'family_status_answer_divorced_comment_amount' | translate}}</label>
                <input ng-model="formData.mezunutAmount" type="text" class="form-control" id="jobDetails_salary_depths_time" placeholder="">

                <p> {{'family_status_answer_divorced_comment_lawer' | translate}}</p>
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group">
                <label for="family_status_answer_children_comment">{{'family_status_answer_children_comment' | translate}}</label>
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_age">{{'family_status_answer_children_comment_age' | translate}}</label>
                <input ng-model="formData.marriedChildAge1" type="text" class="form-control" id="family_status_answer_children_comment_age" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
                <input ng-model="formData.marriedChildName1" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_age">{{'family_status_answer_children_comment_age' | translate}}</label>
                <input ng-model="formData.marriedChildAge2" type="text" class="form-control" id="family_status_answer_children_comment_age" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
                <input ng-model="formData.marriedChildName2" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_age">{{'family_status_answer_children_comment_age' | translate}}</label>
                <input ng-model="formData.marriedChildAge3" type="text" class="form-control" id="family_status_answer_children_comment_age" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
                <input ng-model="formData.marriedChildName3" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_age">{{'family_status_answer_children_comment_age' | translate}}</label>
                <input ng-model="formData.marriedChildAge4" type="text" class="form-control" id="family_status_answer_children_comment_age" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus == family_status_answer_children" class="form-group col-md-6">
                <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
                <input ng-model="formData.marriedChildName4" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
            </div>
            <div ng-if="formData.marriedStatus ==  family_status_answer_divorced_children" class="form-group">
                <p>{{'family_status_answer_divorced_children_comment' | translate}} </p>
            </div>
            <div ng-if="formData.marriedStatus ==  keyWordOther" class="form-group">
                <label for="fundingSourceAnswer7">{{'jobDetails_salary_fundingSourceAnswer7' | translate}}</label>
                <input ng-model="formData.marridStatusOtherDetails" type="text" class="form-control" id="fundingSourceAnswer7" placeholder="">
            </div>
            <h4> {{'family_status_partner_for_life' | translate}} </h4>

            <div class="form-group col-md-3 col-sm-12">
                <label for="family_status_partner_for_life_id">{{'family_status_partner_for_life_id' | translate}}</label>
                <input ng-model="formData.partnerForLifeId" type="text" class="form-control" id="family_status_partner_for_life_id" placeholder="">
            </div>
            <div class="form-group col-md-3 col-sm-12">
                <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
                <input ng-model="formData.partnerForLifeName" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
            </div>
            <div class="form-group col-md-12 col-sm-12">
                <label for="family_status_partner_for_life_job">{{'family_status_partner_for_life_job' | translate}}</label>

                <div>
                    <input type="radio" name="family_status_partner_for_life_answer1" value="{{'family_status_partner_for_life_answer1' |  translate}}"
                           ng-model="formData.partnerForLifeJob">
                    {{'family_status_partner_for_life_answer1' | translate}}
                </div>
                <div>
                    <input type="radio" name="family_status_partner_for_life_answer2" value="{{'family_status_partner_for_life_answer2' |  translate}}"
                           ng-model="formData.partnerForLifeJob">
                    {{'family_status_partner_for_life_answer2' | translate}}
                </div>
                <div>
                    <input type="radio" name="family_status_partner_for_life_side_job" value="{{'family_status_partner_for_life_side_job' |  translate}}"
                           ng-model="formData.partnerForLifeJob">
                    {{'family_status_partner_for_life_side_job' | translate}}
                </div>
                <div>
                    <input type="radio" name="family_status_partner_for_life_job_student" value="{{'family_status_partner_for_life_job_student' |  translate}}"
                           ng-model="formData.partnerForLifeJob">
                    {{'family_status_partner_for_life_job_student' | translate}}
                </div>
                <div>
                    <input type="radio" name="family_status_partner_for_life_job_not_working"
                           value="{{'family_status_partner_for_life_job_not_working' |  translate}}" ng-model="formData.partnerForLifeJob">
                    {{'family_status_partner_for_life_job_not_working' | translate}}
                </div>
            </div>
            <div ng-if="formData.partnerForLifeJob != family_status_partner_for_life_job_not_working" class="form-group col-md-3 col-sm-12">
                <label for="family_status_partner_for_life_job_location">{{'family_status_partner_for_life_job_location' | translate}}</label>
                <input  ng-model="formData.partnerForLifeJobLocation" type="text" class="form-control" id="family_status_partner_for_life_job_location" placeholder="">
            </div>
            <div
                ng-if="formData.partnerForLifeJob == family_status_partner_for_life_answer2 || formData.partnerForLifeJob == family_status_partner_for_life_answer1"
                class="form-group col-md-3 col-sm-12">
                <label for="family_status_partner_for_life_job_pay">{{'family_status_partner_for_life_job_pay' | translate}}</label>
                <input ng-model="formData.partnerForLifeJobSalary" type="text" class="form-control" id="family_status_partner_for_life_job_pay" placeholder="">

                <p> {{'family_status_partner_for_life_job_pay_comment' | translate}}</p>
            </div>
            <div ng-if="formData.partnerForLifeJob == family_status_partner_for_life_side_job" class="form-group form-group col-md-3 col-sm-12">
                <label for="family_status_partner_for_life_side_job_mount">{{'family_status_partner_for_life_side_job_mount' | translate}}</label>
                <input ng-model="formData.partnerForLifeSideJobSalaryAmount" type="text" class="form-control" id="family_status_partner_for_life_side_job_mount" placeholder="">
            </div>

            <div ng-if="formData.partnerForLifeJob == family_status_partner_for_life_job_not_working" class="form-group form-group col-md-3 col-sm-12">
                <label for="family_status_partner_for_life_job_not_working_explain">{{'family_status_partner_for_life_job_not_working_explain' |
                    translate}}</label>
                <input ng-model="formData.partnerForLifeNotWorkingDetails" type="text" class="form-control" id="family_status_partner_for_life_job_not_working_explain" placeholder="">
            </div>

        </div>
    </form>
</div>
<div class="col-md-12 col-sm-12">
    <form name="studentLivingHome">
        <h3 class="col-md-12 col-sm-12"> {{'studentLivingHome_title' | translate}} </h3>
        <h4 class="col-md-12 col-sm-12"> {{'studentLivingHome_address' | translate}} </h4>

        <div class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_city">{{'studingDetails_city' | translate}}</label>
            <input ng-model="formData.studingDetailsCity" type="text" class="form-control" id="studingDetails_city" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_address">{{'studingDetails_address' | translate}}</label>
            <input ng-model="formData.studingDetailsAddress" type="text" class="form-control" id="studingDetails_address" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="studingDetails_zip">{{'studingDetails_zip' | translate}}</label>
            <input ng-model="formData.studingDetailsZip" type="text" class="form-control" id="studingDetails_zip" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-12">
            <label for="general_phone">{{'general_phone' | translate}}</label>
            <input ng-model="formData.studingDetailsPhone" type="text" class="form-control" id="general_phone" placeholder="">
        </div>
        <h4 class='col-md-12'> {{'studentLivingHome_parents_details' | translate}} </h4>

        <div class="col-md-6">
            <h4 for="studentLivingHome_parents_details_father">{{'studentLivingHome_parents_details_father' | translate}}</h4>

            <div>
                <input type="radio" name="family_status_father_for_life_answer1" value="{{'family_status_partner_for_life_answer1' |  translate}}"
                       ng-model="formData.fatherJob">
                {{'family_status_partner_for_life_answer1' | translate}}
            </div>
            <div>
                <input type="radio" name="family_status_father_for_life_answer2" value="{{'family_status_partner_for_life_answer2' |  translate}}"
                       ng-model="formData.fatherJob">
                {{'family_status_partner_for_life_answer2' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_job_pension" value="{{'studentLivingHome_parents_job_pension' |  translate}}"
                       ng-model="formData.fatherJob">
                {{'studentLivingHome_parents_job_pension' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_job_movtal" value="{{'studentLivingHome_parents_job_movtal' |  translate}}"
                       ng-model="formData.fatherJob">
                {{'studentLivingHome_parents_job_movtal' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_job_diss" value="{{'studentLivingHome_parents_job_diss' |  translate}}"
                       ng-model="formData.fatherJob">
                {{'studentLivingHome_parents_job_diss' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_status_divorced_father"
                       value="{{'studentLivingHome_parents_status_divorced_father' |  translate}}" ng-model="formData.fatherJob">
                {{'studentLivingHome_parents_status_divorced_father' | translate}}
            </div>
            <div ng-if="formData.fatherJob == family_status_partner_for_life_answer1 || formData.fatherJob == family_status_partner_for_life_answer2"
                 class="form-group col-md-6">
                <label for="family_status_partner_for_life_job_location">{{'family_status_partner_for_life_job_location' | translate}}</label>
                <input ng-model="formData.fatherJobLocation" type="text" class="form-control" id="family_status_partner_for_life_job_location" placeholder="">
            </div>
            <div ng-if="formData.fatherJob == family_status_partner_for_life_answer1 || formData.fatherJob == family_status_partner_for_life_answer2"
                 class="form-group col-md-6">
                <label for="studentLivingHome_parents_status_monthly_incoming">{{'studentLivingHome_parents_status_monthly_incoming' | translate}}</label>
                <input ng-model="formData.fatherJobSalary" type="text" class="form-control" id="studentLivingHome_parents_status_monthly_incoming" placeholder="">
            </div>
            <div ng-if="formData.fatherJob == studentLivingHome_parents_job_diss" class="form-group col-md-6">
                <label for="studentLivingHome_parents_job_diss_date">{{'studentLivingHome_parents_job_diss_date' | translate}}</label>
                <input ng-model="formData.fatherDissDate" type="text" class="form-control" id="studentLivingHome_parents_job_diss_date" placeholder="">
            </div>
            <div ng-if="formData.fatherJob == studentLivingHome_parents_status_divorced_father" class='form-group col-md-6'>
                <label for="studentLivingHome_parents_status_divorced_date">{{'studentLivingHome_parents_status_divorced_date' | translate}}</label>
                <input ng-model="formData.fatherDivorcedDate" type="text" class="form-control" id="studentLivingHome_parents_status_divorced_date" placeholder="">
            </div>

        </div>
        <div class="col-md-6">
            <h4 for="studentLivingHome_parents_details_mother">{{'studentLivingHome_parents_details_mother' | translate}}</h4>

            <div>
                <input type="radio" name="studentLivingHome_parents_details_mother_working"
                       value="{{'studentLivingHome_parents_details_mother_working' |  translate}}" ng-model="formData.motherJob">
                {{'studentLivingHome_parents_details_mother_working' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_details_mother_independent"
                       value="{{'studentLivingHome_parents_details_mother_independent' |  translate}}" ng-model="formData.motherJob">
                {{'studentLivingHome_parents_details_mother_independent' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_details_mother_pension"
                       value="{{'studentLivingHome_parents_details_mother_pension' |  translate}}" ng-model="formData.motherJob">
                {{'studentLivingHome_parents_details_mother_pension' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_job_movtal" value="{{'studentLivingHome_parents_job_movtal' |  translate}}"
                       ng-model="formData.motherJob">
                {{'studentLivingHome_parents_job_movtal' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_job_diss_mother" value="{{'studentLivingHome_parents_job_diss_mother' |  translate}}"
                       ng-model="formData.motherJob">
                {{'studentLivingHome_parents_job_diss_mother' | translate}}
            </div>
            <div>
                <input type="radio" name="studentLivingHome_parents_status_divorced_mother"
                       value="{{'studentLivingHome_parents_status_divorced_mother' |  translate}}" ng-model="formData.motherJob">
                {{'studentLivingHome_parents_status_divorced_mother' | translate}}
            </div>
            <div
                ng-if="formData.motherJob == studentLivingHome_parents_details_mother_working || formData.motherJob == studentLivingHome_parents_details_mother_independent"
                class="form-group col-md-6">
                <label for="family_status_partner_for_life_job_location">{{'family_status_partner_for_life_job_location' | translate}}</label>
                <input ng-model="formData.motherJobLocation" type="text" class="form-control" id="family_status_partner_for_life_job_location" placeholder="">
            </div>
            <div
                ng-if="formData.motherJob == studentLivingHome_parents_details_mother_working || formData.motherJob == studentLivingHome_parents_details_mother_independent"
                class="form-group col-md-6">
                <label for="studentLivingHome_parents_status_monthly_incoming">{{'studentLivingHome_parents_status_monthly_incoming' | translate}}</label>
                <input ng-model="formData.motherJobSalary" type="text" class="form-control" id="studentLivingHome_parents_status_monthly_incoming" placeholder="">
            </div>
            <div ng-if="formData.motherJob == studentLivingHome_parents_job_diss_mother" class="form-group col-md-6">
                <label for="studentLivingHome_parents_job_diss_date">{{'studentLivingHome_parents_job_diss_date' | translate}}</label>
                <input ng-model="formData.motherDissDate" type="text" class="form-control" id="studentLivingHome_parents_job_diss_date" placeholder="">
            </div>
            <div ng-if="formData.motherJob == studentLivingHome_parents_status_divorced_mother" class="form-group col-md-6">
                <label for="studentLivingHome_parents_status_divorced_date">{{'studentLivingHome_parents_status_divorced_date' | translate}}</label>
                <input ng-model="formData.motherDivorcedDate" type="text" class="form-control" id="studentLivingHome_parents_status_divorced_date" placeholder="">
            </div>


        </div>

        <p class='col-md-12' style="margin-top: 15px"> {{'studentLivingHome_parents_job_comment' | translate}}</p>

        <h4 class='col-md-12'> {{'studentLivingHome_parents_number_of_people_title' | translate}}</h4>

        <div class="col-md-6">
            <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
            <input ng-model="formData.supportedFamilyName1" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
        </div>


        <div class="col-md-3">
            <label for="general_birthDate">{{'general_birthDate' | translate}}</label>
            <input ng-model="formData.supportedFamilyBirthDate1" type="text" class="form-control" id="general_birthDate" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="studentLivingHome_parents_number_of_people_current_studing_place">{{'studentLivingHome_parents_number_of_people_current_studing_place' |
                translate}}</label>
            <input ng-model="formData.supportedFamilyStudyLocation1" type="text" class="form-control" id="studentLivingHome_parents_number_of_people_current_studing_place" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
            <input ng-model="formData.supportedFamilyName2" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
        </div>


        <div class="col-md-3">
            <label for="general_birthDate">{{'general_birthDate' | translate}}</label>
            <input ng-model="formData.supportedFamilyBirthDate2" type="text" class="form-control" id="general_birthDate" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="studentLivingHome_parents_number_of_people_current_studing_place">{{'studentLivingHome_parents_number_of_people_current_studing_place' |
                translate}}</label>
            <input ng-model="formData.supportedFamilyStudyLocation2" type="text" class="form-control" id="studentLivingHome_parents_number_of_people_current_studing_place" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
            <input ng-model="formData.supportedFamilyName3" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
        </div>


        <div class="col-md-3">
            <label for="general_birthDate">{{'general_birthDate' | translate}}</label>
            <input ng-model="formData.supportedFamilyBirthDate3" type="text" class="form-control" id="general_birthDate" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="studentLivingHome_parents_number_of_people_current_studing_place">{{'studentLivingHome_parents_number_of_people_current_studing_place' |
                translate}}</label>
            <input ng-model="formData.supportedFamilyStudyLocation3" type="text" class="form-control" id="studentLivingHome_parents_number_of_people_current_studing_place" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
            <input ng-model="formData.supportedFamilyName4" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
        </div>


        <div class="col-md-3">
            <label for="general_birthDate">{{'general_birthDate' | translate}}</label>
            <input ng-model="formData.supportedFamilyBirthDate4" type="text" class="form-control" id="general_birthDate" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="studentLivingHome_parents_number_of_people_current_studing_place">{{'studentLivingHome_parents_number_of_people_current_studing_place' |
                translate}}</label>
            <input ng-model="formData.supportedFamilyStudyLocation4" type="text" class="form-control" id="studentLivingHome_parents_number_of_people_current_studing_place" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="family_status_answer_children_comment_name">{{'family_status_answer_children_comment_name' | translate}}</label>
            <input ng-model="formData.supportedFamilyName5" type="text" class="form-control" id="family_status_answer_children_comment_name" placeholder="">
        </div>


        <div class="col-md-3">
            <label for="general_birthDate">{{'general_birthDate' | translate}}</label>
            <input ng-model="formData.supportedFamilyBirthDate5" type="text" class="form-control" id="general_birthDate" placeholder="">
        </div>
        <div class="col-md-3">
            <label for="studentLivingHome_parents_number_of_people_current_studing_place">{{'studentLivingHome_parents_number_of_people_current_studing_place' |
                translate}}</label>
            <input ng-model="formData.supportedFamilyStudyLocation5" type="text" class="form-control" id="studentLivingHome_parents_number_of_people_current_studing_place" placeholder="">
        </div>
    </form>
</div>
<div style="text-align: center;margin-top:30px" class='col-md-12'>
    <button  ng-click="submitMe(formData)" class="btn btn-primary" type="submit">{{'submitButtonText' | translate}}</button>
</div>


</div>
</div>
</body>