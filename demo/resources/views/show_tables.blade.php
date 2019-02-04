@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"> Tables </div>

        <div class="card-body">

          <form action="show-table-data" method="GET" onsubmit="return checkMat('table')">

            <div class="form-group" >
              <label> Tables </label>
              <!-- <input type="text" id="search" name="search" class="form-control" onkeyup="filter()"> -->
              <select name="table" class="form-control" id="table" >
                <option  value="none"> None </option>
                @foreach($tables as $table)
                <option>
                  {{ $table }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">

              <input type="submit" name="show_tables" value="Show Data" class="btn btn-success">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">

  function checkMat(selectID) {
    var m = document.getElementById(selectID);

    if(m.value == "none") {
      alert("Please select Table!");
      return false;
    } else {
      return true;
    }
  }

  function filter() {
    var keyword = document.getElementById("search").value;
    var select = document.getElementById("select");
    for (var i = 0; i < select.length; i++) {
      var txt = select.options[i].text;
      if (txt.substring(0, keyword.length).toLowerCase() !== keyword.toLowerCase() && keyword.trim() !== "") {
        $(select.options[i]).attr('disabled', 'disabled').hide();
      } else {
        $(select.options[i]).removeAttr('disabled').show();
      }
    }
  }

</script>
@endsection
