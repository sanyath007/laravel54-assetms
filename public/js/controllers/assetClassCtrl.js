app.controller('assetClassCtrl', function($scope, $http, toaster, CONFIG, ModalService) {
/** ################################################################################## */
    $scope.loading = false;
    $scope.assetClasses = [];
    $scope.pager = [];
    
    $scope.assetClass = {
        class_id: '',
        class_no: '',
        class_name: '',
        group_id: ''
    };

    $scope.getData = function(event) {
        console.log(event);
        $scope.assetClasses = [];
        $scope.loading = true;
        
        let searchKey = ($("#searchKey").val() == '') ? 0 : $("#searchKey").val();
        $http.get(CONFIG.baseUrl+ '/asset-class/search/' +searchKey)
        .then(function(res) {
            console.log(res);
            $scope.assetClasses = res.data.classes.data;
            $scope.pager = res.data.classes;

            $scope.loading = false;
        }, function(err) {
            console.log(err);
            $scope.loading = false;
        });
    }

    $scope.getDataWithURL = function(URL) {
        console.log(URL);
        $scope.assetClasses = [];
        $scope.loading = true;

    	$http.get(URL)
    	.then(function(res) {
    		console.log(res);
            $scope.assetClasses = res.data.classes.data;
            $scope.pager = res.data.classes;

            $scope.loading = false;
    	}, function(err) {
    		console.log(err);
            $scope.loading = false;
    	});
    }

    $scope.getAssetClass = function(classId) {
        $http.get(CONFIG.baseUrl + '/asset-class/get-asset-class/' +classId)
        .then(function(res) {
            console.log(res);
            $scope.assetClass = res.data.class;
        }, function(err) {
            console.log(err);
        });
    }

    $scope.getClassNo = function(groupId) {
        $scope.loading = true;

        $http.get(CONFIG.baseUrl+ '/asset-class/get-ajax-no/' +groupId)
        .then(function(res) {
            console.log(res);
            let groupNo = res.data.classNo.substring(0, 2);
            let tmpNo = res.data.classNo.substring(2);

            let newNo = (parseInt(tmpNo)+1).toString().padStart(2, "0");
            console.log(`${groupNo}${newNo}`);
            
            $scope.assetClass.class_no = `${groupNo}${newNo}`;

            $scope.loading = false;
        }, function(err) {
            console.log(err);
            $scope.loading = false;
        });
    };

    $scope.add = function(event, form) {
        event.preventDefault();

        $http.post(CONFIG.baseUrl + '/asset-class/store', $scope.assetClass)
        .then(function(res) {
            console.log(res);
            toaster.pop('success', "", 'บันทึกข้อมูลเรียบร้อยแล้ว !!!');
        }, function(err) {
            console.log(err);
            toaster.pop('error', "", 'พบข้อผิดพลาด !!!');
        });

        document.getElementById(form).reset();
    }

    $scope.edit = function(classId) {
        console.log(classId);

        window.location.href = CONFIG.baseUrl + '/asset-class/edit/' + classId;
    };

    $scope.update = function(event, form) {
        event.preventDefault();

        if(confirm("คุณต้องแก้ไขรายการหนี้เลขที่ " + $scope.assetClass.class_id + " ใช่หรือไม่?")) {
            $http.put(CONFIG.baseUrl + '/asset-class/update', $scope.assetClass)
            .then(function(res) {
                console.log(res);
                toaster.pop('success', "", 'แก้ไขข้อมูลเรียบร้อยแล้ว !!!');
            }, function(err) {
                console.log(err);
                toaster.pop('error', "", 'พบข้อผิดพลาด !!!');
            });
        }
    };

    $scope.delete = function(classId) {
        console.log(classId);

        if(confirm("คุณต้องลบรายการหนี้เลขที่ " + classId + " ใช่หรือไม่?")) {
            $http.delete(CONFIG.baseUrl + '/asset-class/delete/' +classId)
            .then(function(res) {
                console.log(res);
                toaster.pop('success', "", 'ลบข้อมูลเรียบร้อยแล้ว !!!');
                $scope.getData();
            }, function(err) {
                console.log(err);
                toaster.pop('error', "", 'พบข้อผิดพลาด !!!');
            });
        }
    };
});