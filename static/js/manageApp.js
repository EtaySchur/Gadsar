/**
 * Created by etayschur on 7/24/15.
 */

angular.module('manageApp', ['pascalprecht.translate' , 'ui.bootstrap' , 'ngAnimate'])
    .config(function($translateProvider) {
        $translateProvider.translations('heb', {
             basicDetailsAccordionTitle:"פרטים בסיסים",
             studyingDetailsAccordionTitle:"פרטים על תקופת הלימודים",
             userBasicDetails_id: 'ת.ז.',
             userBasicDetails_bornCountry: ' ארץ לידה',
             userBasicDetails_fullName: 'שם + שם משפחה',
             userBasicDetails_birthYear: 'שנת לידה',
             userBasicDetails_gender: 'מין',
             userBasicDetails_unit: 'יחידת משנה',
             armyServiceJoiningDate:'תאריך גיוס',
             userAdvDetails_miluimQuestion: 'האם במהלך השנה האחרונה שירתת במילואים?',
             userAdvDetails_abroadQuestion: 'האם במהלך השנה האחרונה שהית בחו"ל?',
             userAdvDetails_numberOfDays: "מס' ימים ?",
             general_phone: 'טלפון',
             general_yes: 'כן',
             general_no: 'לא',
             general_howManyTimes: 'כמה פעמים ?',
             studingDetails_city: 'היישוב',
             studingDetails_address: 'כתובת',
             studingDetails_zip: 'מיקוד',
             armyServicePtor:'סיבת הפטור',
             studingDetails_carQuestion_model: 'סוג הרכב',
             studingDetails_carQuestion_value: 'ערך הרכב',
             armyServicePersenalNumber:"מס' אישי",
             studingDetails_location_question: 'בשנת הלימודים הנוכחית הנך גר ב',
             studingDetails_carQuestion: 'האם בבעלותך או ברשותך או בבעלות או ברשות בן/ת זוגך רכב?',
             studingDetails_carQuestion_extraCar: 'האם קיים במשפחה רכב נוסף - מתייחס לבן\\בת הזוג של הסטודנט\\ית',
             studingDetails_carQuestion_extraCarYear: 'שנת ייצור',
             studingDetails_carQuestion_alert_extraCarNumber: "מס' רישוי",
             jobDetails_hasJobQuestion: 'האם בשנת הלימודים הנוכחית הנך עובד/ת?',
             family_status_partner_for_life_side_job: 'עבודה מזדמנת',
             jobDetails_hasJobAnswer1: 'כן , עבודה מזדמנת',
             jobDetails_jobLocation: 'מקום העבודה',
             jobDetails_salary: 'מהו השכר החודשי',
             jobDetails_salary_amount: 'הערכת שכר',
             jobDetails_salary: 'מהו השכר החודשי',
             jobDetails_salary_depths: 'האם הנך משלם החזר חובות, לא כולל משכנתא ?',
             jobDetails_salary_depths_comment: 'יש לצרף אישור מהבנק',
             jobDetails_salary_depths_amount: 'על סך',
             jobDetails_salary_depths_purpose: 'לאיזו  מטרה ?',
             jobDetails_salary_depths_time: 'הזמן שנותר לסיום',
             jobDetails_salary_fundingQuestion: 'האם הנך מקבל מימון כלשהו ?',
             jobDetails_salary_depths_amount: 'על סך',
             armyServiceReleasingDate:'תאריך שחרור'
        });
        $translateProvider.preferredLanguage('heb');
    })
    .controller('manageCtrl', ['$scope', '$timeout' , '$http' , '$translate', '$modal' , '$log', function($scope,$timeout,$http,$translate,$modal,$log) {

        $translate([
            'jobDetails_hasJobAnswer1',
            'general_yes',
            'general_no']).then(function (translations) {
            $scope.jobDetails_hasJobAnswer1 = translations.jobDetails_hasJobAnswer1;
            $scope.general_yes = translations.general_yes;
            $scope.general_no = translations.general_no;
        });



        var restCallManager = new RestCallManager();
        restCallManager.post(getFormsCallback , $http, null , "getForms");
        function getFormsCallback(result , status , success) {
            if (success) {
              $scope.forms = result;
              console.log($scope.forms);
              if($scope.forms.length > 0){
                  $scope.selectedForm = $scope.forms[0];
              }
            } else {

            }
        }

        $scope.formatDate = function (date){

            var myDate = new Date(date);

            var year = myDate.getFullYear();
            var month = myDate.getMonth()+1;
            var day = myDate.getDate();

            return day+"/"+month+"/"+year;
        }

        $scope.translateMe = function(text){
            console.log(text);
            switch (text) {
                case $scope.general_no : return text;
                       break;
                case 'general' : return $scope.general_yes;
                       break;
                case 'sideJob' : return $scope.jobDetails_hasJobAnswer1;
                       break;
            }
        }

        $scope.selectMe = function(form){
            $scope.selectedForm = form;
        }

        $scope.oneAtATime = true;

        $scope.groups = [
            {
                title: 'Dynamic Group Header - 1',
                content: 'Dynamic Group Body - 1'
            },
            {
                title: 'Dynamic Group Header - 2',
                content: 'Dynamic Group Body - 2'
            }
        ];

        $scope.items = ['Item 1', 'Item 2', 'Item 3'];

        $scope.addItem = function() {
            var newItemNo = $scope.items.length + 1;
            $scope.items.push('Item ' + newItemNo);
        };

        $scope.status = {
            isFirstOpen: true,
            isFirstDisabled: false
        };
    }]);