<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fitbitty</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="../css/style.css">
<script>
        function Usasurvey(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#usasurvey').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function Usasurveyimage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#usaimgpopular').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
</script>

<style>

.fa-arrow-up, .fa-arrow-down{
    margin:1rem 1rem;
    font-size: 30px;
}

</style>
</head>
<body>
</body></html>