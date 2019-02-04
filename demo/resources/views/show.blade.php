<div class="table-responsive" id="tabledata"> 
<table id="example" class="table table-hover table-striped table-bordered">

	<thead>
		<tr>

			@for ($i = 0; $i < count($table_col); $i++)
			<th>
				{{$table_col[$i]}}
			</th>
			@endfor

		</tr>

	</thead>

	<tbody>

		@foreach($table_data as $mod )
		<tr>
			@for ($i = 0; $i < count($table_col); $i++)
			<td>
				{{ $mod[$table_col[$i]] }}
			</td>
			@endfor
		</tr>

		@endforeach

	</tbody>

	<tfoot>
		<tr>

			@for ($i = 0; $i < count($table_col); $i++)
			<th>
				{{$table_col[$i]}}
			</th>
			@endfor

		</tr>

	</tfoot>





</table>

{{ $table_data->links() }}

</div>