/**
 * Created by etayschur on 7/18/15.
 */


angular.module('app', ['pascalprecht.translate'])
    .config(function($translateProvider) {
        $translateProvider.translations('heb', {
            userBasicDetails_id: 'ת.ז. - כולל ספרת ביקורת',
            userBasicDetails_bornCountry: ' ארץ לידה',
            userBasicDetails_fullName: 'שם + שם משפחה',
            userBasicDetails_birthYear: 'שנת לידה',
            userBasicDetails_gender: 'מין',
            userAdvDetails_miluimQuestion: 'האם במהלך השנה האחרונה שירתת במילואים?',
            userAdvDetails_abroadQuestion: 'האם במהלך השנה האחרונה שהית בחו"ל?',
            userAdvDetails_numberOfDays: "מס' ימים ?",
            userAdvDetails_miluimQuestion: 'האם במהלך השנה האחרונה שירתת במילואים?',
            general_yes: 'כן',
            general_no: 'לא',
            general_phone: 'טלפון',
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
            jobDetails_salary_amount2: 'האם הנך משלם החזר חובות, לא כולל משכנתא',
            jobDetails_salary_amount2: 'האם הנך משלם החזר חובות, לא כולל משכנתא',
            jobDetails_salary_amount2: 'האם הנך משלם החזר חובות, לא כולל משכנתא',

            INTRO_TEXT: 'And it has i18n support!'
        });
        $translateProvider.preferredLanguage('heb');
})
    .controller('appCtrl', ['$scope', '$timeout' , '$http', function($scope,$timeout,$http) {

    $scope.formData = {};
    $scope.var = "פואד";


    $scope.lang = {
        "userBasicDetails":{
            "id":"אבי נימני",
            "bornCountry":"",
            "fullName":"",
            "birthYear":""
        }
    }

    }]);