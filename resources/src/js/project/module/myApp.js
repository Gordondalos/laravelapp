var myApp = angular.module('myApp', []);


myApp.directive('backImg', function(){
    return function(scope, element, attrs){
        var url = attrs.backImg;
        element.css({
            'background-image': 'url(' + url +')',
            'background-size' : 'cover'
        });
    };
});


myApp.controller("PhotoController", ["$scope",'$http', function ($scope, $http) {

    $scope.send =  function () {
        var that = this;
        var arr_img = $('img').parent();
        var arr_src = [];
        arr_img.each(function(index,item){
            arr_src.push($(item).attr('href'));
        });

        that.querys.photos = JSON.stringify(arr_src);
        that.querys.data_send = new Date();

        // console.log(JSON.stringify($scope.q));
        // $http.post("ajax.php",  JSON.stringify($scope.q)).success(function (answer) {
        //     console.log(answer);
        //
        // });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        that.querys._token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "POST",
            url: '/photo/create',
            data: { add: that.querys },
            success: function (data) {
                console.log(data);
            }
        });

        // $.post("/photo/create",
        //     {
        //         add: that.querys,
        //     },
        //     onAjaxSuccess
        // );
        //
        // function onAjaxSuccess(data)
        // {
        //     console.log(data);
        // }
    };



    $scope.respons =  function () {
        if($('#response').hasClass('response')){
            var qr = JSON.parse($('#response').val());
            return qr;
        }

    }();

    $scope.querys = function () {
        if($('#resp').hasClass('resp')){
            var qr = JSON.parse($('#resp').val());
            return qr;
        }

    }();

}]);

