@include('todo.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{ URL::route('post_account') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Enter List</label>
						<input type="text" class="form-control" name="title">
					</div>				
						<button type="submit" class="btn btn-success">Add Item</button>

				</form>
				<br>
				<div class="">
					<ul class="list-group">
					  @foreach($items as $item)
					  <li class="list-group-item">{{ $item->title }} <a href="{{ URL::route('get_account', ['delete_id' => $item->id]) }}" class="btn btn-danger pull-right btn-sm">x</a></li>
					  @endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@include('todo.footer')