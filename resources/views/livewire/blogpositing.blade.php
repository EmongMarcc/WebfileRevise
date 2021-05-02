<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">

<div class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white">
    <div class="text-center container-fluid text-center max-w-full py-10 grid 2xl:grid-cols-6 grid-cols-4 bg-white text-gray-900 dark:bg-gray-900 dark:text-white px-5">
      <!-- <h1 class="text-center title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">Post Blog</h1> -->
      <div class="2xl:col-span-2 xl:col-span-1 md:col-span-1 sm:col-span-4 col-span-4">

      </div>
      <form id="blogpositingForm" action="/dashboard" method="post" class="rounded bg-blue-100 dark:bg-gray-800 2xl:col-span-4 2xl:min-h-0 col-span-4 lg:min-h-0 m-5 md:col-span-3 md:min-h-0 sm:col-span-4 xl:col-span-3 xl:min-h-0 p-3">
        @csrf
        <input type="hidden" name="create_idHere" id="create_idHere">
        <div class="">
          <div class="mt-1">
            <input type="text" id="b_title" name="title" placeholder="Blog Title" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
          </div>
          <div class="mt-1 flex mx-auto">
            <input type="text" id="b_cover" name="audio[]" placeholder="Audio cover photo URL" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
            <input type="text" id="b_audio" name="audio[]" placeholder="Mp3 File URL" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
          </div>
        </div>
        <div class="pt-5">
          <style media="screen">
          .se-wrapper-inner.se-wrapper-wysiwyg.sun-editor-editable {
            text-align: left;
          }
          </style>
          <textarea name="body" id="bodyContent" style="display:none;"></textarea>
          <textarea id="editor_classic" style="display:none;"></textarea>
          <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/lib/codemirror.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/htmlmixed/htmlmixed.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/codemirror@5.49.0/mode/css/css.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js"></script>
          <script>
          var editor =  SUNEDITOR.create('editor_classic', {
            display: 'block',
            width: '100%',
            height: 'auto',
            imageFileInput: false,
            popupDisplay: 'full',
            charCounter: true,
            charCounterLabel: 'Characters :',
            buttonList: [
              // default
              ['undo', 'redo'],
              ['font', 'fontSize', 'formatBlock'],
              ['paragraphStyle', 'blockquote'],
              ['bold', 'underline', 'italic', 'strike'],
              ['fontColor', 'hiliteColor', 'textStyle'],
              ['removeFormat'],
              ['outdent', 'indent'],
              ['align', 'horizontalRule', 'list', 'lineHeight'],
              ['table','math'],
              ['fullScreen', 'showBlocks', 'codeView'],
              ['preview', 'print','image'],
              // (min-width: 1546)
              ['%1546', [
                ['undo', 'redo'],
                ['font', 'fontSize', 'formatBlock'],
                ['paragraphStyle', 'blockquote'],
                ['bold', 'underline', 'italic', 'strike'],
                ['fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                ['align', 'horizontalRule', 'list', 'lineHeight'],
                ['table','math'],
                ['fullScreen', 'showBlocks', 'codeView'],
                ['-right', ':i-More Misc-default.more_vertical', 'preview', 'print','image']
                ]],
                // (min-width: 1455)
                ['%1455', [
                ['undo', 'redo'],
                ['font', 'fontSize', 'formatBlock'],
                ['paragraphStyle', 'blockquote'],
                ['bold', 'underline', 'italic', 'strike'],
                ['fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                ['align', 'horizontalRule', 'list', 'lineHeight'],
                ['table', 'math'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
                ]],
                // (min-width: 1326)
                ['%1326', [
                ['undo', 'redo'],
                ['font', 'fontSize', 'formatBlock'],
                ['paragraphStyle', 'blockquote'],
                ['bold', 'underline', 'italic', 'strike'],
                ['fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                ['align', 'horizontalRule', 'list', 'lineHeight'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image'],
                ['-right', ':r-More Rich-default.more_plus', 'table', 'math']
                ]],
                // (min-width: 1123)
                ['%1123', [
                ['undo', 'redo'],
                [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                ['bold', 'underline', 'italic', 'strike'],
                ['fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                ['align', 'horizontalRule', 'list', 'lineHeight'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image'],
                ['-right', ':r-More Rich-default.more_plus', 'table', 'math']
                ]],
                // (min-width: 817)
                ['%817', [
                ['undo', 'redo'],
                [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                ['bold', 'underline', 'italic', 'strike'],
                [':t-More Text-default.more_text', 'fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                ['align', 'horizontalRule', 'list', 'lineHeight'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image'],
                ['-right', ':r-More Rich-default.more_plus', 'table', 'math']
                ]],
                // (min-width: 673)
                ['%673', [
                ['undo', 'redo'],
                [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                ['align', 'horizontalRule', 'list', 'lineHeight'],
                [':r-More Rich-default.more_plus', 'table', 'math'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
                ]],
                // (min-width: 525)
                ['%525', [
                ['undo', 'redo'],
                [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'fontColor', 'hiliteColor', 'textStyle'],
                ['removeFormat'],
                ['outdent', 'indent'],
                [':e-More Line-default.more_horizontal', 'align', 'horizontalRule', 'list', 'lineHeight'],
                [':r-More Rich-default.more_plus', 'table', 'math'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
                ]],
                // (min-width: 420)
                ['%420', [
                ['undo', 'redo'],
                [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'],
                [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'fontColor', 'hiliteColor', 'textStyle', 'removeFormat'],
                [':e-More Line-default.more_horizontal', 'outdent', 'indent', 'align', 'horizontalRule', 'list', 'lineHeight'],
                [':r-More Rich-default.more_plus', 'table', 'math'],
                ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print','image']
                ]]
                ],
                placeholder: 'Start typing something...',
                value: '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>',
                codeMirror: CodeMirror,
                katex: katex
              });
            </script>
            <script type="text/javascript">
              function sunEditorMyFunction(){
                document.getElementById('bodyContent').innerHTML = editor.getContents();
                document.getElementById('asdasasd').style.display = 'block';
                event.preventDefault();
              }
              setInterval(function(){
                if (editor.getContents() != document.getElementById('bodyContent').value) {
                  document.getElementById('asdasasd').style.display = 'none';
                } }, 3000);
              </script>
            </div>
            <div class="mt-1 flex">
              <select id="b_select" name="category" type="text" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Personal blogs">Personal blogs</option>
                <option value="Life practice blogs">Life practice blogs</option>
                <option value="Psych blogs">Psych blogs</option>
              </select>
              <div>
                <input id="b_pdate" name="p_date" type="date" class="dark:text-gray-200 text-gray-900 bg-gray-200 dark:bg-gray-900 block w-full transition duration-150 ease-in-out appearance-none border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
              </div>
            </div>
            <button  type="button" class="active:bg-yellow-700 bg-yellow-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-yellow-700 focus:outline-none focus:shadow-outline-yellow font-medium hover:bg-yellow-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full" onclick="sunEditorMyFunction()">Update Content</button>
            <input id="asdasasd" style="display:none;" type="submit" value="POST" class="active:bg-indigo-700 bg-indigo-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-indigo-700 focus:outline-none focus:shadow-outline-indigo font-medium hover:bg-indigo-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">
          </form>

        </div>
  </div>
  </div>
