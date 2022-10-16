<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SimpleNote' }}</title>

    <script src="https://cdn.tiny.cloud/1/afsqg6fz0ofcnd92w4d5xn5twcca2f7td1u3okjnm0nfr8f7/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <div class="h-screen text-slate-700 bg-gradient-to-r from-sky-100 to-indigo-100">
        {{ $slot }}        
    </div>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });

        function deletePage() {
            if (confirm('このPageを本当に削除しますか?')) {
                return true;
            } else {
                return false;
            }
        }
        function deleteNote() {
            if (confirm('このNoteを本当に削除しますか？')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>
