<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
<style>
		/*Overrides for Tailwind CSS */
		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			padding-left: 1rem; 		/*pl-4*/
			padding-right: 1rem; 		/*pl-4*/
			padding-top: .5rem; 		/*pl-2*/
			padding-bottom: .5rem; 		/*pl-2*/
			line-height: 1.25; 			/*leading-tight*/
			border-width: 2px; 			/*border-2*/
			border-radius: .25rem;
			border-color: #edf2f7; 		/*border-gray-200*/
			background-color: #edf2f7; 	/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;	/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button		{
			font-weight: 700;				/*font-bold*/
			border-radius: .25rem;			/*rounded*/
			border: 1px solid transparent;	/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current	{
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06); 	/*shadow*/
			font-weight: 700;					/*font-bold*/
			border-radius: .25rem;				/*rounded*/
			background: #667eea !important;		/*bg-indigo-500*/
			border: 1px solid transparent;		/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover		{
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);	 /*shadow*/
			font-weight: 700;					/*font-bold*/
			border-radius: .25rem;				/*rounded*/
			background: #667eea !important;		/*bg-indigo-500*/
			border: 1px solid transparent;		/*border border-transparent*/
		}

		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;	/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}

		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important; /*bg-indigo-500*/
		}

      </style>
      <!--Container-->
<div class="container w-full mx-auto px-2 my-5">

<!--Title-->
<h1 class="text-center title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">
 Posts Table
</h1>

<!--Card-->
 <div class="p-8 mt-6 rounded shadow bg-white">


  <table id="example" class="stripe hover text-black text-center" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
    <thead>
      <tr>
        <th data-priority="1">id</th>
        <th data-priority="2">Title</th>
        <th data-priority="3" style="display:none !important">Body</th>
        <th data-priority="4">Published</th>
        <th data-priority="5">Category</th>
        <th data-priority="6" style="display:none !important">Cover</th>
        <th data-priority="7" style="display:none !important">Audio</th>
        <th data-priority="9">Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($blogposts as $blog): ?>
      <tr>
        <td>{{$blog->id}}</td>
        <td>{{$blog->title}}</td>
        <td style="display:none !important">{{stripslashes($blog->body)}}</td>
        <td>{{$blog->p_date}}</td>
        <td>{{$blog->category}}</td>
        <td style="display:none !important">{{$blog->audio[0]}}</td>
        <td style="display:none !important">{{$blog->audio[1]}}</td>
        <td class="p-3 px-5 flex justify-end">
          <?php if ($blog->status === 'Inactive'): ?>
            <form action="dashboard/activate/{{$blog->id}}" method="post">
              @csrf
              <button type="submit" class="mr-3 text-sm bg-yellow-500 hover:bg-yellow-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">{{$blog->status}}</button>
            </form>
          <?php else: ?>
            <form action="dashboard/activate/{{$blog->id}}" method="post">
              @csrf
              <button type="submit" class="mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">{{$blog->status}}</button>
            </form>
          <?php endif; ?>
          <button onclick="upd_btn(this)" class="h-1/2 mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Update</button>

          <ul class="block" x-data="{selected:null}">
          <li class="flex align-center flex-col">
                  <button @click="selected !== 0 ? selected = 0 : selected = null" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" @click="showModal = true">Delete</button>
                  <div x-show="selected == 0" class="border">
                    <pre>are you sure?</pre>
                    <div class="grid-cols-2 grid">
                      <form action="dashboard/delete/{{$blog->id}}" method="post">
                        @csrf
                        <button class="w-full bg-yellow-500 hover:bg-yellow-700 text-white rounded focus:outline-none focus:shadow-outline" type="submit">Yes</button>
                      </form>
                      <button @click="selected !== 0 ? selected = 0 : selected = null" class="w-full bg-blue-500 hover:bg-blue-700 text-white rounded focus:outline-none focus:shadow-outline" type="button" name="button">No</button>
                    </div>
                  </div>
          </li>
        </ul>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>

  </table>


</div>
<!--/Card-->


</div>
<!--/container-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {
			var table = $('#example').DataTable();
		});
    function upd_btn(tr){
      const id = tr.closest("tr").children[0].innerHTML;
      const title = tr.closest("tr").children[1].innerHTML;
      const body = tr.closest("tr").children[2].innerHTML;
      const p_date = tr.closest("tr").children[3].innerHTML;
      const category = tr.closest("tr").children[4].innerHTML;
      const cover = tr.closest("tr").children[5].innerHTML;
      const audio = tr.closest("tr").children[6].innerHTML;
      document.getElementById("create_idHere").value = id;
      document.getElementById("b_title").value = title;
      document.getElementById("b_cover").value = cover;
      document.getElementById("b_audio").value = audio;
      document.getElementById("b_pdate").value = p_date;
      document.getElementById("b_select").value = category;
      editor.setContents(body);

      document.getElementById("blogpositingForm").scrollIntoView();
    }
	</script>
