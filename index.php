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
<head>

    <meta charset="utf-8" />
    <script src="static/js/angular.min.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="static/js/ui-bootstrap-tpls-0.13.0.min.js"></script>
    <script src="bower_components/angular-translate/angular-translate.min.js"></script>
    <script src="static/js/app.js"></script>

    <link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div style="direction: rtl" class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <form name="userBasicDetails">
                    <div class="form-group">
                        <label for="userBasicDetails_id">{{'userBasicDetails_id' |  translate}}</label>
                        <input type="text" class="form-control" id="userBasicDetails_id" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="userBasicDetails_bornCountry">{{'userBasicDetails_bornCountry' |  translate}}</label>
                        <input type="text" class="form-control" id="userBasicDetails_bornCountry" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="userBasicDetails_fullName">{{'userBasicDetails_fullName' |  translate}}</label>
                        <input type="text" class="form-control" id="userBasicDetails_fullName" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="userBasicDetails_birthYear">{{'userBasicDetails_birthYear' |  translate}}</label>
                        <input type="text" class="form-control" id="userBasicDetails_birthYear" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="userBasicDetails_gender">{{'userBasicDetails_gender' |  translate}}</label>
                        <input type="text" class="form-control" id="userBasicDetails_gender" placeholder="">
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <form name="advancedDetails">
                    <div class="form-group">
                        <label style="display: block" for="userAdvDetails_miluimQuestion">  {{'userAdvDetails_miluimQuestion' |  translate}}</label>
                        <input type="radio" name="userAdvDetails_miluimQuestion_yes" ng-value="true" ng-model="formData.miluimQuestion">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="userAdvDetails_miluimQuestion_no" ng-value="false" ng-model="formData.miluimQuestion">
                        {{'general_no' |  translate}}
                    </div>
                    <div ng-if="formData.miluimQuestion" class="form-group">
                        <label for="userAdvDetails_numberOfDays">{{'userAdvDetails_numberOfDays' |  translate}}</label>
                        <input type="text" class="form-control" id="userAdvDetails_numberOfDays" placeholder="">
                    </div>
                    <div class="form-group">
                        <label style="display: block" for="userAdvDetails_abroadQuestion">{{'userAdvDetails_abroadQuestion' |  translate}}</label>
                        <input type="radio" name="userAdvDetails_miluimQuestion_yes" ng-value="true" ng-model="formData.abroadQuestion">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="userAdvDetails_miluimQuestion_no" ng-value="false" ng-model="formData.abroadQuestion">
                        {{'general_no' |  translate}}
                    </div>
                    <div ng-if="formData.abroadQuestion" class="form-group">
                        <label for="general_howManyTimes">{{'general_howManyTimes' |  translate}}</label>
                        <input type="text" class="form-control" id="general_howManyTimes" placeholder="">
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <form name="studingDetails">
                    <div class="form-group">
                        <label for="studingDetails_city">{{'studingDetails_city' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_city" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="studingDetails_address">{{'studingDetails_address' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_address" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="studingDetails_zip">{{'studingDetails_zip' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_zip" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="general_phone">{{'general_phone' |  translate}}</label>
                        <input type="text" class="form-control" id="general_phone" placeholder="">
                    </div>
                    <div class="form-group">
                        <label style="display: block" for="general_phone">{{'studingDetails_location_question' |  translate}}</label>
                        <div>
                            <input width="100%" type="radio" name="studingDetails_location_question" ng-value="true" ng-model="studingDetails.studingDetails_location_question">
                            {{'studingDetails_location_answer_1' |  translate}}
                        </div>
                        <div>
                            <input width="100%" type="radio" name="userAdvDetails_miluimQuestion_no" ng-value="false" ng-model="studingDetails.studingDetails_location_question">
                            {{'studingDetails_location_answer_2' |  translate}}
                        </div>
                        <div>
                            <input width="100%" type="radio" name="userAdvDetails_miluimQuestion_no" ng-value="false" ng-model="studingDetails.studingDetails_location_question">
                            {{'studingDetails_location_answer_3' |  translate}}
                        </div>
                        <div>
                            <input width="100%" type="radio" name="userAdvDetails_miluimQuestion_no" ng-value="false" ng-model="studingDetails.studingDetails_location_question">
                            {{'studingDetails_location_answer_4' |  translate}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="display: block" for="studingDetails_carQuestion">{{'studingDetails_carQuestion' |  translate}}</label>
                        <input type="radio" name="studingDetails_carQuestion_yes" ng-value="true" ng-model="formData.carQuestion">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="studingDetails_carQuestion_no" ng-value="false" ng-model="formData.carQuestion">
                        {{'general_no' |  translate}}
                        <p  ng-if="formData.carQuestion"> {{'studingDetails_carQuestion_alert' |  translate}} </p>
                    </div>
                    <div ng-if="formData.carQuestion" class="form-group">
                        <label for="studingDetails_carQuestion_model">{{'studingDetails_carQuestion_model' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_carQuestion_model" placeholder="">
                    </div>
                    <div ng-if="formData.carQuestion" class="form-group">
                        <label for="studingDetails_carQuestion_value">{{'studingDetails_carQuestion_value' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_carQuestion_value" placeholder="">
                    </div>
                    <div class="form-group">
                        <label style="display: block" for="studingDetails_carQuestion_extraCar">{{'studingDetails_carQuestion_extraCar' |  translate}}</label>
                        <input  type="radio" name="carQuestion_extraCar_yes" ng-value="true" ng-model="formData.carQuestion_extraCar">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="carQuestion_extraCar_no" ng-value="false" ng-model="formData.carQuestion_extraCar">
                        {{'general_no' |  translate}}
                    </div>
                    <div ng-if="formData.carQuestion_extraCar" class="form-group">
                        <label for="studingDetails_carQuestion_extraCar">{{'studingDetails_carQuestion_model' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_carQuestion_extraCar" placeholder="">
                    </div>
                    <div ng-if="formData.carQuestion_extraCar" class="form-group">
                        <label for="studingDetails_carQuestion_extraCarYear">{{'studingDetails_carQuestion_extraCarYear' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_carQuestion_extraCarYear" placeholder="">
                    </div>
                    <div ng-if="formData.carQuestion_extraCar" class="form-group">
                        <label for="studingDetails_carQuestion_alert_extraCarNumber">{{'studingDetails_carQuestion_alert_extraCarNumber' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_carQuestion_alert_extraCarNumber" placeholder="">
                    </div>
                    <div ng-if="formData.carQuestion_extraCar" class="form-group">
                        <label for="studingDetails_carQuestion_extraCar">{{'studingDetails_carQuestion_value' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_carQuestion_extraCar" placeholder="">
                    </div>
                    <p> {{'studingDetails_carQuestion_comment1' |  translate}} </p>
                    <p> {{'studingDetails_carQuestion_comment2' |  translate}} </p>
                </form>
            </div>
            <div class="col-md-3">
                <form name="jobDetails">
                    <div  class="form-group">
                        <label style="display: block" for="jobDetails_hasJobQuestion">{{'jobDetails_hasJobQuestion' |  translate}}</label>
                        <input  type="radio" name="carQuestion_extraCar_yes" ng-value="false" ng-model="formData.hasJobQuestion">
                        {{'general_no' |  translate}}
                        <input type="radio" name="carQuestion_extraCar_general" ng-value="'general'" ng-model="formData.hasJobQuestion">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="carQuestion_extraCar_sideJob" ng-value="'sideJob'" ng-model="formData.hasJobQuestion">
                        {{'jobDetails_hasJobAnswer1' |  translate}}
                    </div>
                    <div ng-if="formData.hasJobQuestion == 'general'" class="form-group">
                        <label for="jobDetails_jobLocation">{{'jobDetails_jobLocation' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_jobLocation" placeholder="">
                    </div>
                    <div ng-if="formData.hasJobQuestion == 'general'" class="form-group">
                        <label for="studingDetails_address">{{'studingDetails_address' |  translate}}</label>
                        <input type="text" class="form-control" id="studingDetails_address" placeholder="">
                    </div>
                    <div ng-if="formData.hasJobQuestion == 'general'" class="form-group">
                        <label for="general_phone">{{'general_phone' |  translate}}</label>
                        <input type="text" class="form-control" id="general_phone" placeholder="">
                    </div>
                    <div ng-if="formData.hasJobQuestion == 'general'" class="form-group">
                        <label for="jobDetails_salary">{{'jobDetails_salary' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_salary" placeholder="">
                        <p> {{'jobDetails_salary_comment' |  translate}} </p>
                    </div>
                    <div ng-if="formData.hasJobQuestion == 'sideJob'" class="form-group">
                        <label for="jobDetails_jobLocation">{{'jobDetails_jobLocation' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_jobLocation" placeholder="">
                    </div>
                    <div ng-if="formData.hasJobQuestion == 'sideJob'" class="form-group">
                        <label for="jobDetails_salary_amount">{{'jobDetails_salary_amount' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_salary_amount" placeholder="">
                        <p> {{'jobDetails_salary_comment2' |  translate}} </p>
                    </div>
                    <div  class="form-group">
                        <label style="display: block" for="jobDetails_salary_depths">{{'jobDetails_salary_depths' |  translate}}</label>
                        <p> {{'jobDetails_salary_depths_comment' |  translate}} </p>
                        <input  type="radio" name="jobDetails_salary_depths_yes" ng-value="true" ng-model="formData.jobDetails_salary_depths">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="jobDetails_salary_depths_no" ng-value="false" ng-model="formData.jobDetails_salary_depths">
                        {{'general_no' |  translate}}
                    </div>
                    <div ng-if="formData.jobDetails_salary_depths" class="form-group">
                        <label for="jobDetails_salary_depths_amount">{{'jobDetails_salary_depths_amount' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_salary_depths_amount" placeholder="">
                    </div>
                    <div ng-if="formData.jobDetails_salary_depths" class="form-group">
                        <label for="jobDetails_salary_depths_purpose">{{'jobDetails_salary_depths_purpose' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_salary_depths_purpose" placeholder="">
                    </div>
                    <div ng-if="formData.jobDetails_salary_depths" class="form-group">
                        <label for="jobDetails_salary_depths_time">{{'jobDetails_salary_depths_time' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_salary_depths_time" placeholder="">
                        <p> {{'jobDetails_salary_depths_comment2' | translate}}</p>
                    </div>
                    <div  class="form-group">
                        <label style="display: block" for="jobDetails_salary_fundingQuestion">{{'jobDetails_salary_fundingQuestion' |  translate}}</label>
                        <input  type="radio" name="jobDetails_salary_fundingQuestion_yes" ng-value="true" ng-model="formData.jobDetails_salary_fundingQuestion">
                        {{'general_yes' |  translate}}
                        <input type="radio" name="jobDetails_salary_fundingQuestion_no" ng-value="false" ng-model="formData.jobDetails_salary_fundingQuestion">
                        {{'general_no' |  translate}}
                    </div>
                    <div ng-if="formData.jobDetails_salary_fundingQuestion" class="form-group">
                        <label for="jobDetails_salary_depths_amount">{{'jobDetails_salary_depths_amount' |  translate}}</label>
                        <input type="text" class="form-control" id="jobDetails_salary_depths_amount" placeholder="">
                    </div>
                    <div ng-if="formData.jobDetails_salary_fundingQuestion" class="form-group">
                        <label style="display: block" for="jobDetails_salary_fundingSourceQuestion">{{'jobDetails_salary_fundingSourceQuestion' |  translate}}</label>
                        <input  type="radio" name="jobDetails_salary_fundingQuestion_yes" value="{{'jobDetails_salary_fundingSourceAnswer1' |  translate}}" ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                        {{'jobDetails_salary_fundingSourceAnswer1' |  translate}}
                        <input type="radio" name="jobDetails_salary_fundingQuestion_no" value="{{'jobDetails_salary_fundingSourceAnswer2' |  translate}}" ng-model="formData.jobDetails_salary_fundingSourceQuestion">
                        {{'jobDetails_salary_fundingSourceAnswer2' |  translate}}
                    </div>
                </form>
            </div>



        </div>
    </div>
</body>