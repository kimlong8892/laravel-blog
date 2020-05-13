<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Custom fonts for this template-->
<link href="{{ url('theme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="{{ url('theme/css/sb-admin-2.min.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ url('images/icon.ico') }}" type="image/x-icon">
<script src="{{ url('js/jquery.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $(".link-sort").each(function(index, element){
            let id_api = "08c4ee37104b34a5e5f7b6c5c33e48943391e85";
            let page_sort = "https://megaurl.in/";
            let url = page_sort + "api?api=" + id_api + "c&url=" + element.href;
            $.ajax({
                url: url,
                method:"GET",
                success:function(data){
                    console.log(index);
                    console.log(data.shortenedUrl);
                    $(".link-sort:eq("+index+")").attr({'href': data.shortenedUrl});
                },
            });
        });
    });
</script>

