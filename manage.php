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
                <a ng-repeat="form in forms" href="#" class="list-group-item">
                     <span> {{form.userFullName}}</span>
                     <span style="float: left"> {{form.unit}}</span>
                     <p style="margin-top: 10px"> {{form.creationDate}}</p>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <accordion close-others="oneAtATime">
                <accordion-group heading="Static Header, initially expanded" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
                    This content is straight in the template.
                </accordion-group>
                <accordion-group heading="{{group.title}}" ng-repeat="group in groups">
                    {{group.content}}
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