/**
 * Created by etayschur on 7/24/15.
 */

angular.module('manageApp', ['pascalprecht.translate' , 'ui.bootstrap' , 'ngAnimate'])
    .config(function($translateProvider) {
        $translateProvider.translations('heb', {
             userLogin:'שם משתמש (כתובת אי מייל)',
             logOutButtonText:'יציאה מהמערכת',
             userPassword:'',
             appTitle:'מערכת ניהול טפסים - גדס"ר גולני',
             deleteButtonText:'מחיקת טופס',
             deleteModalText:'האם למחוק את הטופס ?',
             basicDetailsAccordionTitle:"פרטים בסיסים",
             studyingDetailsAccordionTitle:"פרטים על תקופת הלימודים",
             familyStatusDetailsAccordion:'סטטוס משפחתי',
             homyStudentDetailsAccordionTitle:'פרטי סטודנט עד גיל 27 המתגורר בבית הוריו',
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
             general_status:'סטטוס',
             general_no: 'לא',
             studentLivingHome_parents_status_monthly_incoming: ' שכר חודשי:',
             general_reason:'סיבה לחוסר עבודה',
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
             jobDetails_salary_fundingSourceQuestion: 'ציין את מקור המימון',
             jobDetails_salary_fundingSourceAnswer7: 'אחר',
             family_status_answer_divorced: 'גרוש/ה.',
             family_status_answer_divorced_payed_title: 'דמי מזונות',
             family_status_answer_children: 'נשוי/אה עם ילדים. ',
             family_status_answer_children_comment_name1: 'שם של בן/ת הזוג',
             family_status_answer_children_comment_name: ' שם',
             family_status_answer_children_comment_age: 'גיל',
             family_status_partner_for_life_id: 'ת.ז. של בן/ת הזוג  (כולל ספרת ביקורת):',
             family_status_partner_for_life_job: 'סוג העבודה של הבן\\ת זוג:',
             family_status_partner_for_life_job_pay: 'שכר חודשי של בן/ת הזוג:',
             family_status_partner_for_life_answer1: 'שכיר',
             family_status_partner_for_life_answer2: 'עצמאי',
             family_status_partner_for_life_job_not_working: 'אינו עובד',
             studentLivingHome_parents_details: 'פרטים על ההורים:',
             studentLivingHome_parents_details_father: 'אב',
             studentLivingHome_parents_details_mother: 'אם',
             studentLivingHome_parents_details_mother_working: 'שכירה',
             studentLivingHome_parents_details_mother_independent: 'עצמאית',
             studentLivingHome_parents_job_diss: 'נפטר',
             studentLivingHome_parents_job_diss_mother: 'נפטרה',
             studentLivingHome_parents_job_diss_date: 'תאריך פטירה:',
             studentLivingHome_parents_status_divorced_father: 'גרוש',
             studentLivingHome_parents_status_divorced_mother: 'גרושה',
             studentLivingHome_parents_status_divorced_date: 'תאריך גירושין:',
             studentLivingHome_parents_number_of_people_title: 'מספר נפשות נתמכות בבית עד גיל 21:',
             general_close:'ביטול',
             general_birthDate: 'תאריך לידה',
             studentLivingHome_parents_number_of_people_current_studing_place: 'מקום לימודים נוכחי',
             armyServiceReleasingDate:'תאריך שחרור'
        });
        $translateProvider.preferredLanguage('heb');
    })
    .controller('manageCtrl', ['$scope', '$timeout' , '$http' , '$translate', '$modal' , '$log' , '$window', function($scope,$timeout,$http,$translate,$modal,$log,$window) {

        $translate([
            'studentLivingHome_parents_details_mother_working',
            'studentLivingHome_parents_details_mother_independent',
            'studentLivingHome_parents_status_divorced_mother',
            'studentLivingHome_parents_status_divorced_father',
            'studentLivingHome_parents_job_diss_date',
            'studentLivingHome_parents_job_diss_mother',
            'studentLivingHome_parents_job_diss',
            'family_status_partner_for_life_job_not_working',
            'family_status_partner_for_life_answer1',
            'family_status_partner_for_life_answer2',
            'family_status_answer_children',
            'family_status_answer_divorced',
            'jobDetails_salary_fundingSourceAnswer7',
            'jobDetails_hasJobAnswer1',
            'general_yes',
            'general_no']).then(function (translations) {
            $scope.studentLivingHome_parents_details_mother_working = translations.studentLivingHome_parents_details_mother_working;
            $scope.studentLivingHome_parents_details_mother_independent = translations.studentLivingHome_parents_details_mother_independent;
            $scope.studentLivingHome_parents_status_divorced_mother = translations.studentLivingHome_parents_status_divorced_mother;
            $scope.studentLivingHome_parents_status_divorced_father = translations.studentLivingHome_parents_status_divorced_father;
            $scope.studentLivingHome_parents_job_diss_date = translations.studentLivingHome_parents_job_diss_date;
            $scope.studentLivingHome_parents_job_diss_mother = translations.studentLivingHome_parents_job_diss_mother;
            $scope.studentLivingHome_parents_job_diss = translations.studentLivingHome_parents_job_diss;
            $scope.family_status_partner_for_life_job_not_working = translations.family_status_partner_for_life_job_not_working;
            $scope.family_status_partner_for_life_answer1 = translations.family_status_partner_for_life_answer1;
            $scope.family_status_partner_for_life_answer2 = translations.family_status_partner_for_life_answer2;
            $scope.family_status_answer_children = translations.family_status_answer_children;
            $scope.family_status_answer_divorced = translations.family_status_answer_divorced;
            $scope.otherKeyWord = translations.jobDetails_salary_fundingSourceAnswer7;
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

        $scope.logOut = function(){
            restCallManager.post(logOutCallback , $http, null , "logOut");
            function logOutCallback(result , status , success) {
                $window.location.reload();
            }
        }

        $scope.formatDate = function (date){

            var myDate = new Date(date);

            var year = myDate.getFullYear();
            var month = myDate.getMonth()+1;
            var day = myDate.getDate();

            return day+"/"+month+"/"+year;
        }

        $scope.openDeleteDialog = function(){
            console.log("opening?");
            var modalInstance = $modal.open({
                animation: false,
                templateUrl: 'static/views/modals/deleteForm.html',
                controller: 'ModalCtrl',
                size: 'md'

            });

            modalInstance.result.then(function () {
                restCallManager.post(deleteFormCallback , $http, { id : $scope.selectedForm.id } , "deleteForm");
                function deleteFormCallback(result , status , success) {
                    if (success) {
                        var index = $scope.forms.indexOf($scope.selectedForm);
                        $scope.forms.splice( index , 1);

                        if($scope.forms.length > 0){
                            $scope.selectedForm = $scope.forms[0];
                        }
                    } else {

                    }
                }
            }, function () {

            });
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


        $scope.status = {
            isFirstOpen: true,
            isFirstDisabled: false
        };
    }]).controller('loginCtrl', function ($scope , $http , $window) {
        $scope.login = function (formData){
            var restCallManager = new RestCallManager();
            restCallManager.post(loginCallback , $http, formData , "login");
            function loginCallback(result , status , success) {
                if (success) {
                    console.log("Result ", result);
                   if(result.length > 0){
                       $window.location.reload();
                       $scope.loginError = false;
                   }
                } else {
                    $scope.loginError = true;
                }
            }
        }
    })
    .controller('ModalCtrl', function ($scope, $modalInstance) {
        $scope.ok = function (result) {
            $modalInstance.close(result);
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };
    });