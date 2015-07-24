/**
 * Created by etayschur on 7/24/15.
 */

angular.module('manageApp', ['pascalprecht.translate' , 'ui.bootstrap' , 'ngAnimate'])
    .controller('manageCtrl', ['$scope', '$timeout' , '$http' , '$translate', '$modal' , '$log', function($scope,$timeout,$http,$translate,$modal,$log) {
        var restCallManager = new RestCallManager();
        restCallManager.post(getFormsCallback , $http, null , "getForms");
        function getFormsCallback(result , status , success) {
            if (success) {
              $scope.forms = result;
            } else {

            }
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