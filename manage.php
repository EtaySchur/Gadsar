<?php
/**
 * Created by IntelliJ IDEA.
 * User: etayschur
 * Date: 7/24/15
 * Time: 10:20 PM
 */



?>
<!doctype html>
<html ng-app="manageApp" ng-controller="manageCtrl">
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
<body>
<div  style="direction: rtl" class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a ng-click="selectMe(form)" ng-class="{'active': selectedForm.id == form.id}" ng-repeat="form in forms" href="#" class="list-group-item">
                     <span> {{form.userFullName}}</span>
                     <span style="float: left;"> {{form.unit}}</span>
                     <p style="margin-top: 10px"> {{form.creationDate}}</p>
                </a>
            </div>
        </div>
        <div ng-if="forms.length > 0" class="col-md-8">
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
                </accordion-group>
                <accordion-group heading="Dynamic Body Content">
                    <p>The body of the accordion group grows to fit the contents</p>
                    <button class="btn btn-default btn-sm" ng-click="addItem()">Add Item</button>
                    <div ng-repeat="item in items">{{item}}</div>
                </accordion-group>
                <accordion-group is-open="status.open">
                    <accordion-heading>
                        I can have markup, too! <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.open, 'glyphicon-chevron-right': !status.open}"></i>
                    </accordion-heading>
                    This is just some content to illustrate fancy headings.
                </accordion-group>
            </accordion>
        </div>
    </div>
</div>
</body>