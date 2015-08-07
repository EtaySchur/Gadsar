/**
 * Created by etayschur on 7/18/15.
 */


angular.module('app', ['pascalprecht.translate' , 'ui.bootstrap'])
    .directive('shortcut', function() {
    return {
        restrict: 'E',
        replace: true,
        scope: true,
        link:    function postLink(scope, iElement, iAttrs){
            jQuery(document).on('keypress', function(e){
                scope.$apply(scope.keyPressed(e));
            });
        }
    };
})
    .config(function($translateProvider) {
        $translateProvider.translations('heb', {
            pageTitle:'שאלון בקשת מלגה עמותת גדס"ר גולני',
            StudingPageTitle:'כתובת מגורים בזמן הלימודים (חובה לצרף צילום של תעודת זהות)',
            armyServiceTitle:'שירות צבאי: (יש לצרף צילום של תעודת מילואים / שחרור)',
            armyServiceJoiningDate:'תאריך גיוס',
            armyServiceReleasingDate:'תאריך שחרור',
            armyServicePtor:'פטור (פרט)',
            armyServicePersenalNumber:"מס' אישי",
            pageComments:'.אנא הקפד/י למלא ולצרף את הפרטים כמבוקש',
            pageCommentPage1:':המלגות יינתנו לפי',
            pageCommentPage2:' מצב סוציו-אקונומי. *',
            pageCommentPage3:'הענקת מלגה נתונה להחלטה בלעדית של ועדת המלגות של עמותת הגדסר בלבד *',
            pageCommentPage4:':הוראות למילוי השאלון',
            pageCommentPage5:'קרא/י בעיון את ההנחיות.',
            pageCommentPage6:'.יש למלא את השאלון בכתב יד קריא וברור *',
            pageCommentPage7:'.יש להקיף בעיגול את התשובה הנכונה, או לכתוב את התשובה במילים במקום המיועד לכך *',
            pageCommentPage8:'.לצרף את המסמכים המתבקשים בהתאם לסעיפים. ניתן לצרף מכתב עם תוספת פרטים אשר אינם כלולים בשאלון והנך מוצא/ת לנכון לפרטם *',
            pageCommentPage9:'.ידוע לי כי במידה ויתגלה כי הפרטים שמסרתי אינם נכונים או חלקיים ובגינם קיבלתי מלגה, שאינה עומדת בקריטריונים, הנני מתחייב/ת בזאת להחזיר את מלוא סכום המלגה *',
            pageCommentPage10:'.הועדה לא תדון במועמד/ת ששכר הלימוד שלו ממומן במלואו על ידי גורם אחר *',
            pageCommentPage11:'.לא ניתן לערער על החלטת הועדה לגבי זכאות למלגה *',
            pageCommentPage12:'.שאלון שלא ימולא כראוי ובהתאם להנחיות ולא יצורפו אליו כל האישורים  הנדרשים- יבוטל ולא תתקבל זכות ערעור *',
            pageCommentPage13:'.סטודנט שבעת חלוקת המלגות חייב כסף, סכום המלגה יקוזז מן החוב *',
            userBasicDetails_id: 'ת.ז. - כולל ספרת ביקורת *',
            userBasicDetails_bornCountry: ' ארץ לידה',
            userBasicDetails_fullName: 'שם + שם משפחה *',
            userBasicDetails_birthYear: 'שנת לידה *',
            userBasicDetails_gender: 'מין *',
            userAdvDetails_miluimQuestion: 'האם במהלך השנה האחרונה שירתת במילואים?',
            userAdvDetails_abroadQuestion: 'האם במהלך השנה האחרונה שהית בחו"ל?',
            userAdvDetails_numberOfDays: "מס' ימים ?",
            userAdvDetails_miluimQuestion: 'האם במהלך השנה האחרונה שירתת במילואים?',
            general_requieredFieldAlertText:'שדה חובה',
            general_yes: 'כן',
            general_no: 'לא',
            general_comments:'הערות',
            general_close:'סגירה',
            general_male:'זכר',
            general_female:'נקבה',
            general_phone: 'טלפון',
            general_birthDate: 'תאריך לידה',
            general_howManyTimes: 'כמה פעמים ?',
            general_whatPurpose: 'לאיזו מטרה ?',
            studingDetails_city: 'היישוב',
            studingDetails_address: 'כתובת',
            studingDetails_zip: 'מיקוד',
            studingDetails_location_question: 'בשנת הלימודים הנוכחית הנך גר ב',
            studingDetails_location_answer_1: 'שכר דירה - יש לצרף חוזה',
            studingDetails_location_answer_2: 'מעונות - יש לצרף חוזה',
            studingDetails_location_answer_3: 'דירה בבעלותך',
            studingDetails_location_answer_4: 'בית הורים או קרובי משפחה אחרים',
            studingDetails_carQuestion: 'האם בבעלותך או ברשותך* או בבעלות או ברשות בן/ת זוגך** רכב?',
            studingDetails_carQuestion_alert: 'יש לצרף צילום של רישיון הרכב',
            studingDetails_carQuestion_model: 'סוג הרכב',
            studingDetails_carQuestion_value: 'ערך הרכב',
            studingDetails_carQuestion_extraCar: 'האם קיים במשפחה רכב נוסף - מתייחס לבן\\בת הזוג של הסטודנט\\ית',
            studingDetails_carQuestion_extraCarYear: 'שנת ייצור',
            studingDetails_carQuestion_alert_extraCarNumber: "מס' רישוי",
            studingDetails_carQuestion_comment1: '* ברשות בן/בת זוג לרבות אדם החי עמך חיי משפחה במשק בית משותף.',
            studingDetails_carQuestion_comment2: '** לרבות רכב השייך למוסד או לאדם אחר או גוף אחר, העומד לרשותך דרך קבע.',
            jobDetails_hasJobQuestion: 'האם בשנת הלימודים הנוכחית הנך עובד/ת?',
            jobDetails_hasJobAnswer1: 'כן , עבודה מזדמנת',
            jobDetails_hasJobAnswer2: 'האם בשנת הלימודים הנוכחית הנך עובד/ת?',
            jobDetails_jobLocation: 'מקום העבודה',
            jobDetails_salary: 'מהו השכר החודשי',
            jobDetails_salary_comment: 'יש לצרף שלושה תלושים אחרונים או אישור ממס ההכנסה',
            jobDetails_salary_comment2: 'יש לצרף תצהיר על גובה ההכנסה',
            jobDetails_salary_amount: 'הערכת שכר',
            jobDetails_salary_depths: 'האם הנך משלם החזר חובות, לא כולל משכנתא ?',
            jobDetails_salary_depths_comment: 'יש לצרף אישור מהבנק',
            jobDetails_salary_depths_amount: 'על סך',
            jobDetails_salary_depths_purpose: 'לאיזו  מטרה ?',
            jobDetails_salary_depths_time: 'הזמן שנותר לסיום',
            jobDetails_salary_depths_comment2: 'אם הנך משתתף בתשלום המשכנתא של ההורים עליך לצרף אישור מהבנק.',
            jobDetails_salary_fundingQuestion: 'האם הנך מקבל מימון כלשהו ?',
            jobDetails_salary_fundingSourceQuestion: 'ציין את מקור המימון',
            jobDetails_salary_fundingSourceAnswer1: 'פנסיה',
            jobDetails_salary_fundingSourceAnswer2: 'ביטוח לאומי',
            jobDetails_salary_fundingSourceAnswer3: 'מזונות',
            jobDetails_salary_fundingSourceAnswer4: 'משרד הבטחון/משרד הקליטה',
            jobDetails_salary_fundingSourceAnswer5: 'תרומה',
            jobDetails_salary_fundingSourceAnswer6: 'מקום עבודה',
            jobDetails_salary_fundingSourceAnswer7: 'אחר',
            jobDetails_salary_fundingSourceAnswerComment: 'יש לצרף אישורים',
            family_status_title: 'סטטוס משפחתי',
            family_status_answer_single: 'רווק/ה.',
            family_status_answer_married: 'נשוי/אה.',
            family_status_answer_divorced: 'גרוש/ה.',
            family_status_answer_divorced_comment: 'האם הנך משלם החזר חובות, לא כולל משכנתא',
            family_status_answer_divorced_comment_pay: 'משלם דמי מזונות',
            family_status_answer_divorced_comment_payed: 'מקבל דמי מזונות',
            family_status_answer_divorced_payed_title: 'דמי מזונות',
            family_status_answer_divorced_comment_lawer: 'אישור מעו"ד',
            family_status_answer_divorced_comment_amount: 'סכום',
            family_status_answer_widow: 'אלמן/ה.',
            family_status_answer_children: 'נשוי/אה עם ילדים. ',
            family_status_answer_children_comment: 'פרטים על ילדים עד גיל 21',
            family_status_answer_children_comment_name: 'שם',
            family_status_answer_children_comment_age: 'גיל',
            family_status_answer_divorced_children: 'גרוש/ה עם ילדים.',
            family_status_answer_divorced_children_comment: ' * יש לסמן רק סטודנט שבחזקתו ילד הנמצא עמו ואינו נשוי ואין אדם הידוע/ה בציבור כבן זוגו',
            family_status_answer_single_parent: 'חד הורי.',
            family_status_partner_for_life: 'השאלות הבאות מתייחסות לסטודנט/ית  שיש לו/ה בן/ת זוג  (לרבות בן/ת זוג הידוע/ה בציבור).',
            family_status_partner_for_life_id: 'ת.ז. של בן/ת הזוג  (כולל ספרת ביקורת):',
            family_status_partner_for_life_job: 'סוג העבודה של הבן\\ת זוג:',
            family_status_partner_for_life_answer1: 'שכיר',
            family_status_partner_for_life_answer2: 'עצמאי',
            family_status_partner_for_life_job_location: 'מקום עבודה:',
            family_status_partner_for_life_job_pay: 'שכר חודשי של בן/ת הזוג:',
            family_status_partner_for_life_job_pay_comment: 'יש לצרף שלושה תלושים אחרונים או אישור ממס הכנסה',
            family_status_partner_for_life_side_job: 'עבודה מזדמנת',
            family_status_partner_for_life_side_job_mount: 'הערכת שכר:',
            family_status_partner_for_life_job_student: 'סטודנט',
            family_status_partner_for_life_job_not_working: 'אינו עובד',
            family_status_partner_for_life_job_not_working_explain: 'פרט',
            studentLivingHome_title: 'השאלות הבאות מתייחסות לסטודנט/ית שאין לו/ה בן/ת זוג, עד גיל 27 ומתגורר בבית הוריו',
            studentLivingHome_address: 'כתובת מגורים של ההורים:',
            studentLivingHome_parents_details: 'פרטים על ההורים:',
            studentLivingHome_parents_details_father: 'אב',
            studentLivingHome_parents_details_mother: 'אם',
            studentLivingHome_parents_details_mother_working: 'שכירה',
            studentLivingHome_parents_details_mother_independent: 'עצמאית',
            studentLivingHome_parents_details_mother_pension: 'פנסיונרית',
            studentLivingHome_parents_job_not_working: 'אישור מעו"ד',
            studentLivingHome_parents_job_pension: 'פנסיונר',
            studentLivingHome_parents_job_movtal: 'נכה (מעל 45% בלבד) / מובטל  (יש לצרף אישורים)	',
            studentLivingHome_parents_job_movtal_comment: 'יש לצרף אישורים',
            studentLivingHome_parents_job_diss: 'נפטר',
            studentLivingHome_parents_job_diss_mother: 'נפטרה',
            studentLivingHome_parents_job_diss_date: 'תאריך פטירה:',
            studentLivingHome_parents_status_divorced_father: 'גרוש',
            studentLivingHome_parents_status_divorced_mother: 'גרושה',
            studentLivingHome_parents_status_divorced_date: 'תאריך גירושין:',
            studentLivingHome_parents_status_monthly_incoming: ' שכר חודשי:',
            studentLivingHome_parents_status_not_working_father: 'לא עובד',
            studentLivingHome_parents_status_not_working_mother: 'לא עובדת ',
            studentLivingHome_parents_job_comment: '*  יש לצרף 3 תלושים אחרונים, אישור ממס הכנסה, ואישורים מביטוח לאומי על תשלומי קצבאות וקביעת אחוזי נכות.',
            studentLivingHome_parents_number_of_people_title: 'מספר נפשות נתמכות בבית עד גיל 21, לא כולל את הסטודנט/ית (יש לצרף צילום ת.ז. של אחד ההורים כולל הספח):',
            studentLivingHome_parents_number_of_people_current_studing_place: 'לא עובדת ',
            studentLivingHome_parents_number_of_people_current_studing_place: 'מקום לימודים נוכחי',
            studentLivingHome_parents_status_not_working_mother: 'לא עובדת ',
            submitButtonText: 'שליחת הטופס',
            modalSuccessTitle: 'שליחת הטופס',
            modalSuccessText: '.שליחת הטופס התבצעה בהצלחה',
            modalFailText: 'שליחת הטופס נכשלה , אנא נסה\\י במועד מאוחר יותר ...',
            nextInterviewText: " . ראיונות ראשונים יהיו בתאריך 2.8.2015 בשעה 19:00 במשרד עורך דין חגי אברהמי - שד' שאול המלך 39 , בית הדר דפנה - בניין בי קומה 7 - תל אביב *",
            whichUnitQuestion: 'באיזה יחידת משנה שירתת ?',
            whichUnitAnswerPalsar: 'סיירת',
            whichUnitAnswerOrev: 'עורב',
            whichUnitAnswerHan: 'פלח"ן',
            whichUnitAnswerMifkadaFighter: 'מפקדה - לוחם',
            userBasicDetails_email:'כתובת אי מייל',
            whichUnitAnswerMifkadaFighterSupport: 'מפקדה - תומך לחימה'
        });
        $translateProvider.preferredLanguage('heb');
})
    .controller('appCtrl', ['$scope', '$timeout' , '$http' , '$translate', '$modal' , '$log', function($scope,$timeout,$http,$translate,$modal,$log) {

    $scope.formData = {};
    var restCallManager = new RestCallManager();

        $translate(['family_status_answer_children',
            'family_status_answer_divorced',
            'family_status_answer_divorced_children',
            'family_status_partner_for_life_answer1',
            'family_status_partner_for_life_answer2',
            'family_status_partner_for_life_side_job',
            'family_status_partner_for_life_job_not_working',
            'jobDetails_salary_fundingSourceAnswer7',
            'studentLivingHome_parents_job_diss',
            'studentLivingHome_parents_status_divorced_father',
            'studentLivingHome_parents_status_divorced_mother',
            'studentLivingHome_parents_details_mother_independent',
        'studentLivingHome_parents_details_mother_working',
        'studentLivingHome_parents_job_diss_mother',
        'general_yes',
        'general_no']).then(function (translations) {

            $scope.keyWordOther = translations.jobDetails_salary_fundingSourceAnswer7;
            $scope.family_status_answer_divorced = translations.family_status_answer_divorced;
            $scope.family_status_answer_divorced_children = translations.family_status_answer_divorced_children;
            $scope.family_status_answer_children = translations.family_status_answer_children;
            $scope.family_status_partner_for_life_answer1 = translations.family_status_partner_for_life_answer1;
            $scope.family_status_partner_for_life_answer2 = translations.family_status_partner_for_life_answer2;
            $scope.family_status_partner_for_life_side_job = translations.family_status_partner_for_life_side_job;
            $scope.family_status_partner_for_life_job_not_working = translations.family_status_partner_for_life_job_not_working;
            $scope.studentLivingHome_parents_job_diss = translations.studentLivingHome_parents_job_diss;
            $scope.studentLivingHome_parents_status_divorced_father = translations.studentLivingHome_parents_status_divorced_father;
            $scope.studentLivingHome_parents_status_divorced_mother = translations.studentLivingHome_parents_status_divorced_mother;
            $scope.studentLivingHome_parents_details_mother_independent = translations.studentLivingHome_parents_details_mother_independent;
            $scope.studentLivingHome_parents_details_mother_working = translations.studentLivingHome_parents_details_mother_working;
            $scope.studentLivingHome_parents_job_diss_mother = translations.studentLivingHome_parents_job_diss_mother;
            $scope.general_yes = translations.general_yes;
            $scope.general_no = translations.general_no;
        });

        $scope.openCalendar = function($event , calendar) {
            $event.preventDefault();
            $event.stopPropagation();
            $scope[calendar] = true;
        };

        $scope.keyPressed = function(e) {
            $scope.keyCode = e.which;
           if($scope.keyCode == 13){
               $scope.submitMe($scope.formData);
           }
        };


        $scope.submitMe = function(formData){
            if($scope.userBasicDetails.$invalid){
                $scope.submitted = true;
            }else{
                restCallManager.post(submitFormCallback , $http, $scope.formData , "submitForm");
                function submitFormCallback(result , status , success) {
                    if (success) {
                        $scope.openSuccessModal();
                        //$scope.formData = {};
                    } else {
                        $scope.openFailModal();
                    }
                }
            }
        }


        $scope.openSuccessModal = function(){
            var modalInstance = $modal.open({
                animation: true,
                templateUrl: 'static/views/modals/submitSuccess.html',
                controller: 'ModalInstanceCtrl',
                size: 'md'

            });

            modalInstance.result.then(function () {

            }, function () {

            });
        }

        $scope.openFailModal = function(){
            var modalInstance = $modal.open({
                animation: true,
                templateUrl: 'static/views/modals/submitSuccess.html',
                controller: 'ModalInstanceCtrl',
                size: 'md'

            });

            modalInstance.result.then(function () {

            }, function () {

            });
        }




        $scope.dateOptions = {
            formatYear: 'yy',
            startingDay: 1
        };

        $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
        $scope.format = $scope.formats[1];



    }]).controller('ModalInstanceCtrl', function ($scope, $modalInstance) {
        $scope.ok = function () {
            $modalInstance.close();
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };
    });