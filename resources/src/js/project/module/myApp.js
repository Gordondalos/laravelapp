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

        that.q.photos = JSON.stringify(arr_src);
        that.q.data_send = new Date();

        // console.log(JSON.stringify($scope.q));
        // $http.post("ajax.php",  JSON.stringify($scope.q)).success(function (answer) {
        //     console.log(answer);
        //
        // });

        $.post("ajax.php",
            {
                add: that.q,
            },
            onAjaxSuccess
        );

        function onAjaxSuccess(data)
        {
            console.log(data);
        }
    };

    $scope.v = function () {
        var loaction = window.location.href;
        var res = loaction.split("q=")[1];
        if(res){
            return res;
        }
    }();

    $scope.q =  {
        photos: '',
        client: '',
        date: '',
        number: 0,
        partner: 0,
        shop: ''

    };

    $scope.qr = [

                    {
                        photos: [],
                        client: 'Василий Теркин',
                        date: '2016-09-01',
                        number: 200,
                        partner: 13,
                        shop: 'amason.com'

                    },
                    {
                        photos: [],
                        client: 'Василий Пупкин',
                        date: '2016-09-02',
                        number: 201,
                        partner: 14,
                        shop: 'TaoBao.com'
                    },
                    {
                        photos: [],
                        client: 'Иванов Иван Иванович',
                        date: '2016-09-03',
                        number: 202,
                        partner: 15,
                        shop: 'http://sport.com/'
                    },
                    {
                        photos: [],
                        client: 'Петров Петр Петрович',
                        date: '2016-09-04',
                        number: 203,
                        partner: 16,
                        shop: 'watch.com'
                    }
    ];



}]);

