@extends('layout.layout')
@section('content')
<section class="content-header">
    <h1>
        List Network
    </h1>
</section>

<section class="content">

    <div class="panel panel-primary">
        <div class="panel-body">
            <div class="box-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-3" style="float:left">
                            </div>
                            <div class="col-md-1" style="float:right; margin-right:30px;">
                                <a href="./network/add/" class="btn btn-xs btn-warning" title="Add"><i class="fa fa-plus-circle"></i>&nbsp;Add Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="tb_list" cellspacing="0" width="100%" role="grid" class="table table-responsive table-striped table-bordered table-hover dataTable display">
                            <thead>
                                <tr>
                                    <th class="th_table" style="text-align: center;">No</th>
                                    <th class="th_table" style="text-align: center;">Methode</th>
                                    <th class="th_table" style="text-align: center;">Jan</th>
                                    <th class="th_table" style="text-align: center;">Feb</th>
                                    <th class="th_table" style="text-align: center;">Mar</th>
                                    <th class="th_table" style="text-align: center;">Apr</th>
                                    <th class="th_table" style="text-align: center;">May</th>
                                    <th class="th_table" style="text-align: center;">Jun</th>
                                    {{-- <th class="th_table" style="text-align: center;">Condition</th>
                                    <th class="th_table" style="text-align: center;">Date</th>
                                    <th class="th_table" style="text-align: center;">Action</th> --}}
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <section class="col-lg-5 connectedSortable"> </section>
        </section>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {

          var table =  $('#tb_list').DataTable({
              responsive: true,
                processing: true,
                serverSide: true,
                ajax: 'network/json',
                // columns: [{
                //         data: 'id',
                //         name: 'id'
                //     },
                //     {
                //         data: 'area',
                //         name: 'area'
                //     },
                //     {
                //         data: 'location',
                //         name: 'location'
                //     },
                //     {
                //         data: 'condition',
                //         name: 'condition'
                //     },
                //     {
                //         data: 'created_at',
                //         name: 'created_at'
                //     },
                //     {
                //         data: 'action',
                //         name: 'action',
                //         orderable: false,
                //         searchable: false
                //     }
                // ]
            });

    });
</script>
@endpush
