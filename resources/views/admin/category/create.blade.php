@extends('admin')



@section('content')

 <!-- Content Header Page header -->



 <div class="content-header">

      <div class="container-fluid">

        <div class="row">

          <div class="col">

            <!-- use this space for notify user -->

            @if (session('status'))

              <div class="alert alert-info">

                  {{ session('status') }}

              </div>

            @endif

            @if ($errors->any())

              <div class="alert alert-danger">

                  <ul>

                      @foreach ($errors->all() as $error)

                          <li>{{ $error }}</li>

                      @endforeach

                  </ul>

              </div>

            @endif

           

          </div>

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

</div>

    <!-- /.content-header -->



    <!-- Main content -->

<div class="content">

      <div class="container-fluid">

        <div class="row">         

          <div class="col-lg-12">

            <div class="card card-secondary card-outline">

              <div class="card-header">

                <h5 class="m-0">New {{ $subtitle  }}</h5>

              </div>

              <div class="card-body">                

              <form class="form-horizontal" action="{{ url('categories') }}" method="POST" >

                @csrf

                <div class="card-body">

                  

                <div class="form-group row">

                    <label for="iteminput" class="col-sm-2 col-form-label">Category Name</label>

                    <div class="col-sm-10">

                      <input type="text" name="name" class="form-control is-warning" id="iteminput"  value="{{ old('name') }}">

                    </div>
                  </div>

                  <?php if(!$config->autobarcode): ?>

                  <div class="form-group row">
                    <label for="br" class="col-sm-2 col-form-label">Bar code</label>
                    <div class="col-sm-10">
                      <input type="number" step=".1" class="form-control is-warning" id="br" name="br_code"  value="{{ old('br_code') }}" placeholder="10-99" required>
                    </div>
                  </div>

                 <?php endif; ?>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-lg">SAVE</button>                 

                </div>

                <!-- /.card-footer -->

              </form>

              </div>

            </div>

          </div>

          <!-- /.col-md-6 -->

        </div>

        <!-- /.row -->

      </div><!-- /.container-fluid -->

</div>





@endsection