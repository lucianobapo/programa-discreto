<script type="text/javascript">
    modControllers.controller('mainController', ['$scope',
        function($scope){
            $scope.select = function(foto){
                $scope.selected_foto = foto;
            }

            $scope.fotos = [
                {"imageUrl": "{{ $data['foto1'] }}","imageUrlThumb": "{{ $data['foto1Thumb'] }}"},
                {"imageUrl": "{{ $data['foto2'] }}","imageUrlThumb": "{{ $data['foto2Thumb'] }}"},
                {"imageUrl": "{{ $data['foto3'] }}","imageUrlThumb": "{{ $data['foto3Thumb'] }}"},
                {"imageUrl": "{{ $data['foto4'] }}","imageUrlThumb": "{{ $data['foto4Thumb'] }}"}
            ];

            $scope.selected_foto = $scope.fotos[{{ $data['foto_capa'] }}];
        }
    ]);
</script>